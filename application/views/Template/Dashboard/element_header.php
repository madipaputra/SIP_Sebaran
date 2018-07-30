<!DOCTYPE html>
<html>
  <head>
    <title>{webJudul} - {webBagian} {inisialisasiKodeAkun}</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>/external/theme.css" type="text/css"> 
  <link rel="stylesheet" href="<?php echo base_url();?>external/font-awesome/css/all.css" type="text/css"> 

  <link rel="stylesheet" href="<?php echo base_url();?>/external/select2/css/select2.min.css" type="text/css"> 
  <link rel="stylesheet" href="<?php echo base_url();?>/external/select2-bootstrap4/dist/select2-bootstrap4.min.css" type="text/css"> 

  </head>
<body>



  <!--
    Muat file sesuai dengan objek class yang ditargetkan.
    Nilai webMuatHalaman adalah nama file yang akan dimuat sesuai dengan class yang aktif pada saat itu.
  -->
    <?php $this->load->view($webMuatHalaman); ?>
