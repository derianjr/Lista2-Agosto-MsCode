<?php
  if(isset($_POST['submit'])){
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];
    $data = $_POST['data_publicacao'];

    $resut = mysqli_query($conexao, "INSERT INTO comentarios(nome,comentario,data_publicacao)
    VALUES ('$nome','$comentario','$data_publicacao')");
  }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premium Albion</title>
    <link rel="shortcut icon" href="assests/logo--albion.png" type="logo-albion">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  <style>
    .carousel-inner img {
      width: 100%;
      height: 100%;
     }
    .image-body{
      background-image: url(assests/albionfoto.jpg);
      background-size: 100%; 
      width: 100%;
    }

    .image-body2{
      background-image: url(assests/imagemdefundo.jpeg);
      background-size: 100%;
      width: 100%;

    }

    .backimage{
      background-image: url(assests/image-albion.jpeg);
      background-size: 100%;
      height: 700px; 
      width: 100%;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }
    @media screen and (min-width: 600px) and (max-width: 900px) {
      .video{
        width: 670px;
        height: 360px;
      }
    }
    @media screen and (min-width: 200px) and (max-width: 670px){
	    .video {
		    width: 450px;
        height: 320px;
	      }
      }
  </style>
 
  <body class="bg-dark max-auto">
      <header class="bg-dark mx-auto">
          <nav class="navbar navbar-expand-md navbar-danger p-1 fixed-top bg-danger bg-inverse mx-auto">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="assests/logopreta.png" alt="logo-albion" width="90" height="50" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class=" fs-4 navbar-nav me-auto mb-1 mb-md-0 ">
                        <li class="nav-item">
                             <a class="nav-link active text-bg-dark bg-danger" aria-current="page" href="#" target="_self">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-bg-dark bg-danger" href="https://albiononline.com/news" target="_blank">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-bg-dark bg-danger" href="https://albiononline.com/update" target="_blank">Atualizações</a>
                        </li>
                      </ul>
                      <form class="d-flex" role="search">
                        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-black mx-auto bg-light" type="submit">Search</button>
                      </form>
                    </div>
            </div>
          </nav>
      </header>

      <main class="bg-black max-auto">
        <div class="header-content__inner show-for-large-up large-up-header-div backimage">
          <div>
            <iframe class="video" height="460" width="818" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="https://www.youtube-nocookie.com/embed/J8mu1IiTKJw?loop=0&amp;autoplay=0&amp;rel=0&amp;modestbranding=0&amp;cc_load_policy=1"></iframe>
          </div>
        </div>

        <div class="row bg-black mx-auto text-bg-dark text-center border border-success p-4 border-opacity-10" style="width: 100%;">
          <div class="col-lg-4">
            <img src="assests/mmorpg_logo_light1.png" alt="logo-albion">
            <p>"Albion Online está arrebentando quando o assunto é funcionalidade, cada uma perfeitamente integrada, garantindo um verdadeiro mundo aberto."</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="assests/pcgamer1.png" alt="logo-pcgamer">
            <p>"Vale a pena conferir Albion Online porque ele foca em desconstruir o supersaturado formato incansavelmente copiado no qual muitos MMOs foram baseados."</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="assests/logopreta.png" alt="logo" width="100" height="40">
            <p>Se você está procurando por um novo jogo para te desafiar e trazer de volta o sentimento nostálgico dos mundos abertos, então você precisa dar uma olhada em Albion Online.</p>

          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class=" image-body row featurette bg-dark text-bg-dark mx-auto align-items-center text-center border border-success p-4 border-opacity-10">
          <div class="col-md-7">
            <h2 class="featurette-heading font-weight-bold lh-3 ">ALBION ONLINE: TIPO DE JOGO</h2>
            <p class="fs-4 lead mx-auto aling-intems-center text-center ">Albion Online é um MMORPG Sandbox em que vale tudo, quase. Sem limites de classe, o jogador pode jogar qualquer tipo de personagem, direcionando sua atividade como achar melhor. Fãs de PvP, GvG em Full Loot ou PvE ou qualquer outra atividade mais silenciosa, como comércio, fabricação de itens ou mesmo criação, encontrarão seu lugar. Porque todos são úteis para o desenvolvimento deste mundo mágico.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assests/imagem1.jpeg" alt="imagem1-albion" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="assests/imagem2.jpeg" alt="imagem2-albion" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="assests/imagem3.jpeg" alt="imagem3-albion" width="1100" height="500">
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>

        <div class="image-body2 row featurette bg-dark text-bg-dark mx-auto text-center align-items-center border border-success p-4 border-opacity-10">
          <div class="col-md-7 order-md-2"> 
            <h2 class="featurette-heading font-weight-bolder lh-3">O UNIVERSO DE ALBION ONLINE</h2>
            <p class="lead fs-4">O mundo de Albion se inspira na fantasia medieval, povoada por criaturas e demônios, em uma atmosfera de magia.Os jogadores poderão se equipar com armas e armaduras encantadas, montar cavalos, búfalos ou lobos por sua vez, coletar recursos preciosos e lutar contra criaturas ferozes e demoníacas, tanto em pequenos grupos como em grandes guildas. Você pode escolher jogar como um grande guerreiro conquistador ou um mágico com vários feitiços, tanto quanto um simples comerciante ou criador.
              
               </p>
          </div>
          <div class="col-md-5 order-md-1">
            <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assests/imagem4.jpeg" alt="imagem4-albion" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="assests/imagem5.jpeg" alt="imagem5-albion" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="assests/imagem6.jpeg" alt="imagem6-albion" width="1100" height="500">
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
        <div class="bg-black pricing-header p-5 pb-md-2 mx-autoborder border-success p-5 border-opacity-10 text-center text-bg-dark aling-intems-center">
          <img src="assests/coroapremium.png" alt="-logo-premium"><h1 class="text-warning bg-black p-1 pb-md-1 mx-auto text-center aling-intems-center">SEJA PREMIUM</h1>
          <p class="lead bg-black fs-3 text-bg-dark max-auto text-center aling-intems-center" style="padding: 50px;">O Status Premium pode ser obtido por meio de uma Assinatura, um pagamento único ou um código e oferece muitos benefícios adicionais ao futuro jogador. A premium pode ser acessado clicando em um dos botões no canto superior direito da tela dentro do jogo.O site foi criado para facilitar a compra de tal serviço,abaixo segue os principais planos disponíveis para compra no Albion Online.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mx-auto bg-black" style="width:70%">
          <div class="col ">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3 text-bg-primary border-primary bg-warning">
                <h4 class="my-0 fw-normal ">7 DIAS</h4>
              </div>
              <div class="card-body ">
                <h1 class="card-title pricing-card-title">$4,95<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-2 mb-4">
                  <li>30 Pontos de Aprendizagem por dia</li>
                  <li>+50% de bônus de Fama</li>
                  <li>+50% de retorno de Coleta</li>
                  <li>+50% de Prata e saques de monstros</li>
                  <li>10.000 de Pontos de Foco por dia</li>
                  <li>50% de redução de taxa de mercado</li>
                  <li>+100% de retorno de Plantação</li>
                  <li>+100% de taxa de crescimento de Animais</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary bg-black">COMPRE</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm ">
              <div class="card-header py-3 text-bg-primary border-primary bg-warning">
                <h4 class="my-0 fw-normal">30 DIAS</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$14,95<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>30 Pontos de Aprendizagem por dia</li>
                  <li>+50% de bônus de Fama</li>
                  <li>+50% de retorno de Coleta</li>
                  <li>+50% de Prata e saques de monstros</li>
                  <li>10.000 de Pontos de Foco por dia</li>
                  <li>50% de redução de taxa de mercado</li>
                  <li>+100% de retorno de Plantação</li>
                  <li>+100% de taxa de crescimento de Animais</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary bg-black">COMPRE</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-bg-primary border-primary bg-warning">
                <h4 class="my-0 fw-normal">90 DIAS</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$41,85<small class="text-body-secondary fw-light">/mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>30 Pontos de Aprendizagem por dia</li>
                  <li>+50% de bônus de Fama</li>
                  <li>+50% de retorno de Coleta</li>
                  <li>+50% de Prata e saques de monstros</li>
                  <li>10.000 de Pontos de Foco por dia</li>
                  <li>50% de redução de taxa de mercado</li>
                  <li>+100% de retorno de Plantação</li>
                  <li>+100% de taxa de crescimento de Animais</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary bg-black">COMPRE</button>
              </div>
            </div>
          </div>
        </div>

        <div class=" text-bg-dark bg-black p-1 pb-md-5 mx-auto border border-success p-5 border-opacity-10 text-center aling-intems-center">
          <h2>DEIXA O SEU COMENTÁRIO</h2>
        </div>
        <form method="POST" action="comentario.php" class="mx-auto rounded bg-dark text-bg-dark border border-success p-4 border-opacity-10 " style="width: 50%;">
          <div class="col">
            <label for="exampleInputName" class="form-label">Nome</label>
            <input type="text" class="form-control" aria-label="First name">
          </div>
            <label for="exampleInputComent1" class="form-label">Comentários</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="ComentHelp">
          </div>
          <button type="submit" class="btn btn-primary"style="margin:10px;">Submit</button>
        </form>

        <div class="container max-auto p-5 pb-md-1 " style="width: 100%;">
          <footer class="bg-black flex flex-wrap text-center align-items-center py-1 my-5 border-top">
            <p class="bg-black col-md-4 mb-0 text-bg-dark">&copy; 2023 Company, Inc</p>
        
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            </a>
        
            <ul class="nav bg-black col-md-4 justify-content-end">
              <li class="nav-item"><a href="#" class="nav-link px-2 text-bg-dark">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-bg-dark">Features</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-bg-dark">Pricing</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-bg-dark">FAQs</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-bg-dark">About</a></li>
            </ul>
          </footer>
        </div>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>