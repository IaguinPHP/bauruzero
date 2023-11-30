<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <!-- CABEÇALHO DO SITE -->
    <nav class="navbar bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="..\Recursos/logo.png" alt="" width="150px"></a>
            <a class="btn btn-danger" href="logout.php">Sair</a>
        </div>
    </nav>

    <div class="container text-center mt-4">
    <h2> PORTAL DE NOTÍCIAS! </h2>
    <p> 
        <b>Bem vindo ao nosso portal de notícias Bauru Zer0!</b>
    </p>
    <p>
        <b>Temos o foco em notícias que expõem a opressão de classe dentro da nossa sociedade. Nossas notícias são analisadas por sociólogos antes de qualquer postagem e sempre buscando a maior transparência com o nosso público. </b>
    </p>
    <p> 
        <b>"Você vê o mesmo mundo que eu?" -@ruaseafins</b> 
    </p>
    <p>
        <b>Siga nosso instagram: @bauru.zer0</b>
    </p>



    <div class="row">
        <div class="col-md-6">
            <img src="..\Recursos/noticia1.png" class="img-thumbnail" alt="img1" width="700px">
        </div>
        <div class="col-md-6">
        <h2> Pichador é confundido com ladrão e espancado até a morte em supermercado de SP. </h2>
            <p>
               Familiares e amigos de Rafael Lucas da Silva, de 34 anos, se reuniram neste domingo (29/10) e protestaram cobrando justiça pelo jovem conhecido no mundo da pichação por "Rau Os Doideira".
               Rafael estava indo fazer sua tag quando foi perseguido por um grupo de homens que saíram de um condomínio da região de Interlagos, na zona sul de São Paulo. O mesmo tentou correr até um mercado próximo mas foi cercado no banheiro do supermercado e espancado até a morte.
               O grupo quando avistou Rafael o chamaram de ladrão de baterias. Porém não há nenhuma denuncia de roubo ou algo do tipo. 
        
            </p>
            <p>
            Amigos de Rafael, grupos de pichadores, juntam latas de spray com isqueiro e fazem manifestações. Um ato muito conhecido após perda de um amigo do grupo de pichação.
            </p>
        </div>
        
        <div class="col-md-6 mt-4">
            <img src="..\Recursos/noticia2.png" class="img-thumbnail" alt="img1" width="700px">
        </div>
        <div class="col-md-6">

        <h2 class="mt-4"> Jovem negro acusado de roubo é agredido por homem portando arma em frente à estação do Carandirú. </h2>

        <p>
        Jovem negro é xingado, agredido, coagido e ameaçado por policial cívil armado fora de turno acusando-o de roubo em frente à estação Carandiru do metro, zona norte na cidade de São Paulo.
        O jovem após agressões e ameaças busca ajuda da PM que estava fardada no local e a mesma não oferece ajuda e afasta o jovem com um chute. Após ser questionada pelo jornalista, PM diz estar de folga e que o procedimento é ligar 190.
        De acordo com especialista "Na minha visão, é um motivo para demiti-la da PM porque ela se omitiu diante uma situação muito grave, expondo a instituição". Diz José Vicente da Silva Filho, coronel reformado da PM paulista e memnro do conselho da escpça de Segurança Multidimensional da USP. 
        O agressor foi idenficado e recebeu ordem para entragar arma e já tem histórico de violência, inclusive contra a irmã, que tem medida protetiva contra ele.
        A policial que recusou ajudar também foi identificada e afastada de seu cargo.
        </p>
        <p>
        <b>Fonte: @pontejornalismo / ponte.org</b>
        </p>

    </div>
    
    </div>



    <div class="container text-center">
        <h2>Alteração de Usuários</h2>
        <a class="btn btn-lg btn-success" href="listar.php">Listar Usuários</a>
        </div>
    </div>
    <br>                
    <!-- RODAPÉ DO SITE -->
    <footer class="footer text-center bg-dark py-3">
        <div class="container">
            <p class="text-light">Todos os direitos reservados. 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>