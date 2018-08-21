<!DOCTYPE html>
<html>
  <head>
    <title>{webJudul} - {webBagian} {inisialisasiKodeAkun}</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>/external/theme.css" type="text/css"> 
  <link rel="stylesheet" href="<?php echo base_url();?>external/font-awesome/css/all.css" type="text/css"> 
  <link rel="stylesheet" href="<?php echo base_url();?>external/selectize-bootstrap-4/css/selectize.bootstrap4.css" type="text/css"> 


  </head>
<body>


  <script src="<?php echo base_url()?>external/jquery/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url()?>external/selectize-bootstrap-4/js/selectize/standalone/selectize.min.js"></script>



  <!--
    Muat file sesuai dengan objek class yang ditargetkan.
    Nilai webMuatHalaman adalah nama file yang akan dimuat sesuai dengan class yang aktif pada saat itu.
  -->
    <?php $this->load->view($webMuatHalaman); ?>
