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

    <div class="callout callout-danger">
        <h4>Selamat Datang, <?php echo $this->session->userdata('nama');?> </h4>
        
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>
                <dt></dt>
                <dd>
                    <ul>
                        <li>Admin dapat menambahkan, mengedit, dan memasukan data guru pada menu<b> Data Guru</b></li>
                        <li>Admin dapat menambahkan, mengedit, dan memasukan data siswa dan data kelas pada menu<b> Data siswa</b></li>
                        <li>Silahkan buat soal dan tambah mata pelajaran yang tersedia pada menu <b>Kelola Soal Ujian</b></li>
                        <li>Tambahkan atau edit peserta ujian pada menu <b>Kelola Peserta Ujian</b></li>
                        <li>Nilai siswa dapat dilihat pada halaman <b>Hasil Ujian</b></li>
                        <li>Admin dapat mengubah password guru dan siswa</li>
                    </ul>
                </dd>
            </dl>
            
    </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data-tables').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

