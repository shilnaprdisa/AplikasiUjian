<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>
<!-- Content Header (Page header) -->
 <?= form_open_multipart('guru/guru_aksi'); ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?= $this->session->flashdata('message'); ?>
      <!-- Default box -->
      <div class="box box-success" style="overflow-x: scroll;">
        <div class="box-header">
          <center><h3 class="box-title">DATA GURU SDN 1 BLATER</h3></center><p>
          <h3 class="box-title"></h3>
          <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default"> <span class="fa fa-plus"></span> Tambah</button>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <table id="data" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th>NIK</th>
                <th>Nama Guru</th>
                <th>Username</th>
                <th colspan="3">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($guru as $m) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $m->id_guru; ?></td>
                  <td><?php echo $m->nama_guru; ?></td>
                  <td><?php echo $m->username; ?></td>
                  <td width="20px"><?= anchor('guru/detail/'.$m->id_guru, '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
                  <td width="20px"><?= anchor('guru/edit/'.$m->id_guru, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                  <td width="20px"><?= anchor('guru/hapus/'.$m->id_guru, '<div onclick="return confirm(\'Yakin akan menghapus?\')"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->

<!-- /. modal  -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><h4 class="modal-title">Tambah Data Guru</h4></center>
      </div>
      <!-- /.form dengan modal -->
      <form method="post" action="<?php echo base_url() . 'guru/guru_aksi'; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label class="font-weight-bold">Nama Guru</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Guru" required="">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">NIP (Nomor Induk Pegawai)</label>
            <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK Guru" required="">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Username" required="">
          </div>
           <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control">
            <option value="">--Pilih jenis kelamin--</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
          <div class="form-group">
            <label class="font-weight-bold">Nomor Handphone</label>
            <input type="number" class="form-control" name="telp" placeholder="Masukkan Nomor Handphone" required="">
          </div>
          <div class="form-group">
          <label class="font-weight-bold">Upload Foto</label>
          <input type="file"  class="form-control" name="photo" required="">
          </div>
      
        
          <div class="form-group">
            <label class="font-weight-bold">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required="">
          </div>
        

          <div class="form-group">
            <label class="font-weight-bold">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="">
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-flat">Simpan</button>
        </div>
      <?php echo form_close();?>
      <!-- /.tutup form dengan modal  -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
$this->load->view('admin/js');
?>
<!--tambahkan custom js disini-->

<script type="text/javascript">
  $(document).ready(function() {
    $('#data').dataTable();
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>