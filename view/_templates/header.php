<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dryka Araujo Fotografia</title>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <?php $pagina = isset($_GET['p']) ? $_GET['p'] : 'inicio' ?>

        <div id="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="<?php echo $pagina == 'inicio' ? 'selected' : ' '; ?>" href="?p=inicio">INÍCIO</a>
            <a class="<?php echo $pagina == 'portifolio' ? 'selected' : ' '; ?>" href="?p=portifolio">PORTIFÓLIO</a>
            <a class="<?php echo $pagina == 'afotografa' ? 'selected' : ' '; ?>" href="?p=afotografa">A FOTOGRAFA</a>
            <a id="contato" href="https://l.instagram.com/?u=https%3A%2F%2Fbit.ly%2F2TGlZlk&e=ATMMo1y0un0mhGrGZ_NqTiuZCtCY3GbAi-pXHYbJAqIaZYM5D-xsyaEeDKLC39muKiBbtT0WT3-QVp6jiKAFRQ&s=1" target="_blank">CONTATO</a>
        </div>

        <nav>
            <a href="?p=inicio">
                <img src="img/logo.png" alt="Dryka Araujo Fotografia">
            </a>
            
            <button onclick="openNav()"><i class="material-icons">menu</i></button>

            <div class="menu">
                <a class="<?php echo $pagina == 'inicio' ? 'selected' : ' '; ?>" href="?p=inicio">INÍCIO</a>
                <a class="<?php echo $pagina == 'portifolio' ? 'selected' : ' '; ?>" href="?p=portifolio">PORTIFÓLIO</a>
                <a class="<?php echo $pagina == 'afotografa' ? 'selected' : ' '; ?>" href="?p=afotografa">A FOTOGRAFA</a>
                <a id="contato" href="https://l.instagram.com/?u=https%3A%2F%2Fbit.ly%2F2TGlZlk&e=ATMMo1y0un0mhGrGZ_NqTiuZCtCY3GbAi-pXHYbJAqIaZYM5D-xsyaEeDKLC39muKiBbtT0WT3-QVp6jiKAFRQ&s=1" target="_blank">CONTATO</a>
            </div>
        </nav>