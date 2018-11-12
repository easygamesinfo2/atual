<html lang="pt-BR">

	<head>

		<title>Easy Games</title>

		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="../visualizacao/templates/semantic/semantic.css">

		<script type="text/javascript" src="../visualizacao/templates/semantic/semantic.min.js"></script>

		<script type="text/javascript" src="../visualizacao/templates/ckeditor/ckeditor.js"></script>

	</head>

	<body style="background-color: #2B2B2B; min-height: 20% " >

		<div class="ui top attached tabular inverted menu" style= "height:10% ;background-color: #191919; ">

			<div class="ui medium image" style="margin-left: 3% ">
				<a href="noticias.php"><img  src="../view/imagenseg/Easy Gaming.png"></a>
			</div>

			<div class="center menu" style="margin-left: 10%">
				<a class="item" href="controlador.php?acao=exibir_noticia">
					Noticias
				</a>
                <a class="item" href="controlador.php?acao=inserir_noticia" >
                    Criar notícia
                </a>

				<a class="item" href="controlador.php?acao=exibir_avaliacao">
					Avaliações
				</a>

				<a class="item" href="controlador.php?acao=inserir_avaliacao">
					Criar avaliação
				</a>
				



			</div>


			<div class="right menu">

            </div>

            <div class="item">

                <?php

                if (!isset($_SESSION['cod_usuario'])) {

                    ?>
                    <a  href="controlador.php?acao=login"><i class="sign in icon"></i>Login</a>

                    <?php

                }

                ?>


            </div>
            <div class="item">

                <?php

                if (!isset($_SESSION['cod_usuario'])) {

                    ?>
                    <a  href="controlador.php?acao=cadastrar"><i class="edit outline icon"></i>Cadastrar</a>

                    <?php

                }

                ?>


            </div>
            <div class="item">

                <?php 

                if (isset($_SESSION['cod_usuario'])) {
			   ?>

                    <a  href="controlador.php?acao=perfil"><i class="user outline icon"></i>Perfil</a>

                <?php

                }

                ?>




            </div>
            <div class="item">

            	<?php 

                if (isset($_SESSION['cod_usuario'])) {
			   ?>


                    <a  href="controlador.php?acao=logout"><i class="logout icon"></i>Logout</a>

                <?php

                }

                ?>

            </div>

			<div class="item">

				<div class="ui transparent icon input">

					<input type="text" placeholder="Pesquisar...">

					<i class="search link icon"></i>


				</div>

			</div>

		</div>

		<br>
		<br>
