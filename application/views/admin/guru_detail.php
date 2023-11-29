<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>
<br>
<br>
<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fa fa-eye"></i> Detail Guru
  </div>

  <table class="table table-bordered table-hover table-striped">

    <?php foreach($detail as $dt): ?>
      <tr>
        <td>
        <img src="<?php echo base_url();?>image/uploads/<?php echo $dt->photo;?>" width="30%">
        </td>
        <td></td>
    </tr>
      <tr>
        <th>NIP</th>
        <td><?= $dt->id_guru; ?></td>
      </tr>
      <tr>
        <th>NAMA GURU</th>
        <td><?= $dt->nama_guru; ?></td>
      </tr>
      <tr>
        <th>ALAMAT</th>
        <td><?= $dt->alamat; ?></td>
      </tr>
      <tr>
        <th>JENIS KELAMIN</th>
        <td><?= $dt->jenis_kelamin; ?></td>
      </tr>
      <tr>
        <th>NO TELEPON</th>
        <td><?= $dt->telp; ?></td>
      </tr>
      <tr>
        <th>USERNAME</th>
        <td><?= $dt->username; ?></td>
      </tr>
      <tr>
        <th>PASSWORD</th>
        <td><?= $dt->password; ?></td>
      </tr>
    <?php endforeach; ?>

  </table>
<?= anchor('guru', '<div class="btn btn-primary btn-sm mb-5">Kembali</div>') ?>
<br><br>
</div>

 
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
