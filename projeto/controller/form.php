<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Formulário | AN Store</title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/estilo.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="shortcut icon" href="img/favicon.ico" />

    </head>

    <body style="background-color: #F3CBA8;">
        <section>
            <header>
                <div class="logo">
                    <img src="img/logo.jpg" alt="Logo" height=300px; width=300px; >
                </div>
            
                
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="O que você procura?" aria-label="Pesquisar" style="width:400px; height: 40px;">

                    <button class="btn btn-link" type="submit">
                        <img src="img/lupa.png" height=25px; width=25px;>
                    </button>

                    <button class="btn btn-link" type="submit">
                        <img src="img/carrinho.png" height=25px; width=25px;>
                    </button>

                    <button class="btn btn-link" type="submit" id="btnHeader">
                        <img src="img/pessoa.png" height=25px; width=25px;>
                    </button>
                </form>
                
            </header>

            <nav style="justify-content: center;">
                <br>
                <br>
                <div class="menu" style="justify-content: center;">
                    <a href="#">Home</a>
                    <a href="#">Quem somos</a>
                    <a href="novidades.html">Novidades</a>
                    <a href="contato.html">Contato</a>    
                </div>
                <br>
            </nav>

            <main>
            
            <section class="container">
		    <div class="form">
		
			<form action="endereço da página e/ou arquivo que processa os dados" method="post">
				<legend>Informações para contato</legend>
	
				<label for="nome"style="padding-top:3%;">Nome completo</label>
				<input type="text" id="nome" name="nome" class="form-control" required placeholder="Digite o seu nome">
				
				<label for="telefone" style="padding-top:3%;">Telefone</label>
				<input type="number" id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone" required>

                <label for="email" style="padding-top:3%;">E-mail</label>
				<input type="text" id="telefone" name="email" class="form-control" placeholder="Digite seu e-mail" required>
				
                <label for="text" style="padding-top: 3%;">Qual o motivo do seu contato?</label>
                <br>
				<textarea class="mensagem" rows="5" cols="40" maxlength="500"placeholder="Escreva aqui"></textarea>

               <br><br>
				
               <button type="submit" class="send">
                    <a href="#" id="button" style="color:black; font-size: 20px;">Enviar</a>
               </button>
			
			</form>

            <?php

                include "../util/util.class.php";
                include "../model/form.class.php";

                $u1 = new Util();
           
                $nome = $_POST['txtnome'];
                $email = $_POST['txtemail'];
                $telefone = $_POST['txttelefone'];
            
                if(empty($nome) || empty($email) || empty($telefone)){
                    echo 'Campos em branco!';
                }else if(!$u1->validaEmail($email)){
                    echo 'E-mail incorreto';
                }else if(!$u1->testarExpressaoRegular('/^[A-Za-zÀ-Úà-ú ]{2,30}$/',$nome)){
                    echo 'Nome incorreto';
                }else if(!$u1->testarExpressaoRegular('/^[0-9]{5}-[0-9]{4}$/',$telefone)){
                    echo 'Telefone incorreto';
                }else{
                    $c1 = new Form($nome,$email,$telefone);
                    echo $c1;
                }

            ?>

            </main>
    
                
                <footer >
                    <div class="texto1">
                        <h5>INFORMAÇÕES</h5>
                        <a href="sobre.html">Sobre a loja</a>
                        <br>
                        <br>
                        <h5>ATENDIMENTO AO CLIENTE</h5>
                        <a href="contato.html">Entre em contato</a>
                    </div>
            
                    <div class="texto2">
                        <h5>AJUDA E SUPORTE</h5>
                        <a href="#">Calcular frete</a>
                        <br>
                        <a href="devolucao.html">Devoluções</a>
                        <br>
                        <a href="#">Rastrear produtos</a>
                        <br>
                        <a href="tamanhos.html">Guia de tamanhos</a>
                        <br>
                        <a href="pagamento.html">Métodos de pagamento</a>
                    </div>
            
                    <div class="texto3">
                        <h5>ENCONTRE-NOS EM</h5>
                        <a href="https://web.facebook.com/AN-store-100902951711290" type="button">
                        <img src="img/facebook.png" alt="Facebook" width=30px; height=30px;>
                        </a>
                        <a href="https://www.instagram.com/anstore._/" type="button">
                        <img src="img/instagram.png" alt="Instagram" width=30px; height=30px;>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=5554999844103" type="button">
                        <img src="img/whatsapp.png" alt="Whatsapp" width=30px; height=30px;>
                        </a>
                        <br>
                        <br>
            
                        </div>
                </footer>
            </header>
        </section>

    </body>


</html>