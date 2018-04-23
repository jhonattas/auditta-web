<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clientes - Auditta</title>
    <link rel="apple-touch-icon"      sizes="57x57"         href="<?php echo base_url('assets/favicon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon"      sizes="60x60"         href="<?php echo base_url('assets/favicon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon"      sizes="72x72"         href="<?php echo base_url('assets/favicon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon"      sizes="76x76"         href="<?php echo base_url('assets/favicon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon"      sizes="114x114"       href="<?php echo base_url('assets/favicon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon"      sizes="120x120"       href="<?php echo base_url('assets/favicon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon"      sizes="144x144"       href="<?php echo base_url('assets/favicon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon"      sizes="152x152"       href="<?php echo base_url('assets/favicon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon"      sizes="180x180"       href="<?php echo base_url('assets/favicon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192"       href="<?php echo base_url('assets/favicon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32"         href="<?php echo base_url('assets/favicon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96"         href="<?php echo base_url('assets/favicon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16"         href="<?php echo base_url('assets/favicon/favicon-16x16.png');?>">
    <link rel="manifest"                                    href="<?php echo base_url('assets/favicon/manifest.json');?>">
    
    <meta name="msapplication-TileColor"      content="#ffffff">
    <meta name="msapplication-TileImage"      content="<?php echo base_url('assets/favicon/ms-icon-144x144.png')?>">
    <meta name="theme-color"                  content="#ffffff">
    <meta name="viewport"                     content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
    
    <link rel="stylesheet" type="text/css"    href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/normalize.css');?>">
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/webflow.css')?>">
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/auditta.webflow.css')?>">
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/main-navigation-top.css')?>">
    <link rel="stylesheet" type="text/css"    href="<?php echo base_url('assets/css/services.css')?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113426332-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113426332-1');
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP3RPQW"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div class="clientsPage">
        <?php require_once('sections/section-topo.php'); ?>
        <!-- Page Content -->
        <div class="container clients">

        <h1 class="my-4 text-center text-lg-left" style="color: #000000 !important; margin-top: 0 !important; padding-top: 5px !important; text-shadow: none !important;">Clientes</h1>

        <div class="row text-center text-lg-left">

            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/ageplan.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/agricer.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/ainformatica.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/antonio_andrade.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/cim.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/clivapec.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/expert_consultoria.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/interquatri.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/oticas_ipanema.jpg');?>" alt="">
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="<?php echo base_url('assets/img/clients/storage_one.jpg');?>" alt="">
            </a>
            </div>
        </div>

        </div>
        <!-- /.container -->
        <?php require_once('sections/section-rodape.php'); ?>
    </div>
        <script type="text/javascript">
        function scriptsLoadCallback(){
            $(document).ready(function (){
            $("body").on("change", "input[name='checkbox']", function (){
                if ($(this).is(":checked")){
                $('input[name="optin"]').val("1");
                }else{
                $('input[name="optin"]').val("0");
                }
            });
            });
        };

        $(function(){
            $("body").on("change", 'input[name="possui_cnpj"]', function(){
            if($('input[name="possui_cnpj"]:checked').val() == 'Sim'){
                $('.showbusiness').show();
                $('input[name="sucesso"]').val('http://auditta.com.br/step2.php?z=1')
            }else{
                $('.showbusiness').hide();
                $('input[name="sucesso"]').val('http://auditta.com.br/sucesso.php?z=1')
            }
            });

        });

        </script>
  </body>
</html>
