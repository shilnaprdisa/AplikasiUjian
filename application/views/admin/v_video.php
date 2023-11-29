<?php 
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
      <?= $this->session->flashdata('message'); ?>
        <!-- Default box -->
        <div class="box box-success" style="overflow-x: scroll;">
            <div class="box-header">
                <center><h3 class="box-title">Data Video Pembelajaran</h3></center><p>
                  <a href="<?=base_url('video')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Kembali</a>
                <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default"><span class="fa fa-plus"></span> Tambah</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="data" class="table table-bordered table-striped">                    
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th width="30%">Judul</th>
                            <th width="20%">Link Youtube</th>
                              <th width="30%">Gambar</th>  
                              <th width="12%"></th>                        
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach($video as $v) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $v->judul; ?></td>
                                <td><?php echo $v->youtube; ?></td>
                                <td><?php echo $v->image; ?></td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-flat btn-xs">Action</button>
                                    <button type="button" class="btn btn-warning btn-xs btn-flat dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="<?= base_url().'video/edit/'.$v->id; ?>">Edit Data</a></li>
                                      <li><a href="<?= base_url().'video/hapus/'.$v->id; ?>" onclick="return confirm('Apakah yakin data peserta ini di hapus?')">Hapus Data</a></li>
                                    </ul>
                                  </div>
                                </td>
                            </tr>
                        <?php } ?>                  
                    </tbody>                
                </table>
            </div>
        </div>
    </div>
</div>
</section><!-- /.content -->

<!--tambah data-->
 <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><h4 class="modal-title">Tambah Materi Video Pembelajaran</h4></center>
      </div>
      <!-- /.form dengan modal -->
      <form method="post" action="<?php echo base_url('video/video_aksi'); ?>">
        <div class="modal-body">
          <div class="form-group">
            <label class="font-weight-bold">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul dan Mata Pelajaran" required="">
            <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Link Youtube</label>
            <input type="text" class="form-control" name="youtube" placeholder="Masukkan Link Youtube" required="">
            <?= form_error('youtube', '<small class="text-danger">', '</small>'); ?>
          </div>
           <div class="form-group">
            <label class="font-weight-bold">Gambar</label>
            <input type="text" class="form-control" name="image" placeholder="Masukkan Gambar" required="">
            <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
          </div>


        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
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

  $(function(){
    $('#data').dataTable();
        $('.select2').select2();
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');

<!--tambahkan custom js disini-->

<?php
$this->load->view('admin/foot');
?>

