<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Portal Hunney</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

  <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- CSS BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <link rel="stylesheet" href="css/style.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


</head>

<body>

  <header>

    <div class="navbar">
      <div class="container">
        <!-- <a href="#" class="navbar-brand d-flex align-items-center"> -->
        <!-- <img class="school" src="/images/school_white_24dp.svg" alt="Hunney"> -->
        <strong class="portal">Portal Hunney</strong>
        <!-- </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" onclick="clickMenu()"></span>
        </button>
      </div>
    </div>
    <div id="itens" class="collapse" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Sobre</h4>
            <p class="text-black">Este é um portal de notícias online da escola estadual Hunney Everest Piovesan. Este
              portal tem como finalidade noticiar os principais acontecimentos da escola como: eventos, histórias,
              trabalhos desenvolvidos pelos alunos, etc...</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contato</h4>
            <ul class="list-unstyled">
              <li><a href="https://www.facebook.com/escolahunney" class="text-white">Curta nosso Facebook</a></li>
              <li class="text-white">Whatsapp</li>
              <li class="text-white">(27)9 9999-9999</li>
              <li class="text-white">Nosso e-mail</li>
              <li class="text-white">emailescola@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Documentário sobre os 50 anos do Hunney Everest Piovesan</h1>
          <br>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ac_fBOTkeME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <div class="album">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col col-lg col-md col-sm" id="modalEleicoes">
            <div class="card shadow-sm">
              <img src="images/eleicoes/foto-cadidatos.jpg" class="img-fluid" alt="Hunney" style="width:100%; heigh: 255px;">
              <div class="card-body">
              <p class="card-text"><a href="#" id="eleicoes"6 >Eleicões para presidencia.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col col-lg col-md col-sm" id="modalInterclasse">
            <div class="card shadow-sm">
              <img src="images/esporte/interclasse.jpg" alt="Hunney" style="width:100% heigh: 255px;">
              <div class="card-body">
                <p class="card-text"><a href="#">Esporte / Interclasse no Hunney.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col col-lg col-md col-sm" id="modalFeira">
            <div class="card shadow-sm">
              <img src="images/feira/feira-de-negocios.jpg" alt="hunney">
              <div class="card-body">
                <p class="card-text"><a href="#">1° Feira de negócios do Hunney.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col col-lg col-md col-sm" id="modalPalestra"> 
            <div class="card shadow-sm">
                <img src="images/palestra/Sem título.png" alt="hunney">
              <div class="card-body">
                <p class="card-text"> <a href="#">Palestra da PRF, no Hunney.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg col-md col-sm" id="modalSemanaEstudante">
            <div class="card shadow-sm">
              <img src="images/semana-estudante/semana-do-estudante.png" alt="hunney">
              <div class="card-body">
                <p class="card-text">Semana do Estudante</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg col-md col-sm">
            <div class="card shadow-sm">
            <img src="images/logo-poli/hunney-everest-piovesan.png" alt="hunney">
              <div class="card-body">
                <p class="card-text">Noticias em breve</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col col-lg col-md col-sm">
            <div class="card shadow-sm">
            <img src="images/logo-poli/hunney-everest-piovesan.png" alt="hunney">
              <div class="card-body">
                <p class="card-text">Aqui adicionamos um título para matéria.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg col-md col-sm">
            <div class="card shadow-sm">
            <img src="images/logo-poli/hunney-everest-piovesan.png" alt="hunney">
              <div class="card-body">
                <p class="card-text">Aqui adicionamos um título para matéria.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg col-md col-sm">
            <div class="card shadow-sm">
            <img src="images/logo-poli/hunney-everest-piovesan.png" alt="hunney">
              <div class="card-body">
                <p class="card-text">Aqui adicionamos um título para matéria.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  </main>

  <!-- AREAAAA MODALLL  -->

  <!-- Modal -->
  <div class="modal fade " style="border-color: #5d99c6;" id="estrutura-modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="modalTam">
      <div class="modal-content">
        
        <div class="modal-body">
          <div class="container-fluid font-modal" id="main-container"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>




  <footer class="py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a class="text-white" href="#">Back to top</a>
      </p>
      <p class="mb-1">Site desenvolvido para o trabalho de português.</p>
      <p class="mb-0">Alunos: Arion Dantas 3v1, Michel Batista 3v2 e Marcos Guilherme 3v3</p>
    </div>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>