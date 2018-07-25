<!DOCTYPE html>
<html>
  <head>
    <title>{webJudul} - {webBagian} {inisialisasiKodeAkun}</title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>/externalcss/theme.css" type="text/css"> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  </head>
<body>

  <!--
    Muat file sesuai dengan objek class yang ditargetkan.
    Nilai webMuatHalaman adalah nama file yang akan dimuat sesuai dengan class yang aktif pada saat itu.
  -->
    <?php $this->load->view($webMuatHalaman); ?>
