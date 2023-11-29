<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'auth?alert=belum_login');
		}
		
	}
	
	public function index()
	{
		$data['video'] = $this->m_data->get_data('video')->result();
		$this->load->view('admin/v_video', $data);
	}

	public function video_aksi()
	{
		$judul		= $this->input->post('judul');
		$youtube		= $this->input->post('youtube');
		$image	= $this->input->post('image');

		$data = array(
			'judul'=>$judul,
			'youtube'=>$youtube,
			'image'=>$image
		);
		$this->m_data->insert_data($data, 'video');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat !<br></b> Anda telah berhasil menambahkan data materi </div>');
		redirect(base_url('video'));
	}
	public function hapus($id) 
	{
		$where = array(
					'id'=>$id
				);

		$this->m_data->delete_data($where,'video');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil menghapus data</div>');
		redirect(base_url('video'));
	}

	public function edit($id) 
	{
		$where	= array('id'=>$id);
		$data['video']=$this->m_data->edit_data($where,'video')->result();
		$this->load->view('admin/v_video',$data);
	}
	
	public function update()
	{
		$judul		= $this->input->post('judul');
		$youtube		= $this->input->post('youtube');
		$image		= $this->input->post('image');	
		

		$where = array('id'=>$id);		
		$data = array(
						'judul'=>$judul,
						'youtube'=>$youtube,
						'image'=>$image
						
					);
		$this->m_data->update_data($where,$data,'video');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Selamat ! <br></b> Anda telah berhasil mengupdate data</div>');
		redirect(base_url('video'));
	}

}
