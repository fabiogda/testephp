<!DOCTYPE html>
<html lang="pt">
	<head>
	
	<!-- META TAGS-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- TITULO -->
	<title>Teste PHP</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/bootstrap.min.css">
	<!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/all.css">
    
    <!-- Inserção de CSS pelo CONTROLLER -->
    <?php 
        if (isset ($styles)) {
            foreach ($styles as $style_name){
                $href = base_url() . "public/css/" . $style_name; ?>
                <link rel="stylesheet" type="text/css" href="<?= $style_name ?>">
    <?php   }
        }
    ?>

	</head>
<body>

	<!-- MENU SUPERIOR DE NAVEGAÇÃO -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url('Home'); ?>"> 
            Teste PHP
        </a>

        <!-- BOTAO APARECE QUANDO JANELA FOR REDUZIDA-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links do MENU de navegação -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- style="margin-left:75%;" -->
        <!-- Lista -->
            <ul class="navbar-nav">
                <!-- LINK 1 -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Home'); ?>"> <i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- LINK 2 -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('Cadastro'); ?>"> <i class="far fa-address-card"></i> Cadastrar</a>
                </li>
            </ul>
        </div>

	</nav>