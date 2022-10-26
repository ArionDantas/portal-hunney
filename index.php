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
              trabalhos dos alunos, etc...</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contato</h4>
            <ul class="list-unstyled">
              <li><a href="https://www.facebook.com/escolahunney" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg> Curta nosso Facebook</a></li>
              <li><a href="https://wa.me/5527996627479"  class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> Whatsapp</a></li>
              <li> <a href="mailto:ariondantas027@gmail.com" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg> Nosso e-mail</a></li>
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
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/ac_fBOTkeME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <div class="album">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col col-lg col-md col-sm"  id="modalEleicoes">
            <div class="card shadow-sm" style="width:100%; height:100%;">
              <img src="images/eleicoes/foto-cadidatos.jpg" class="img-fluid" alt="Hunney" style="height: 100%;">
              <div class="card-body">
              <p class="card-text"><a href="#eleicoes" id="eleicoes">Eleicões para presidência.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col col-lg col-md col-sm" id="modalInterclasse">
            <div class="card shadow-sm" style="width:100%; height:100%;">
              <img src="images/esporte/interclasse.jpg" alt="Hunney" style="height:100%;">
              <div class="card-body">
                <p class="card-text"><a href="#esporte-interclasse"> Esporte / Interclasse no Hunney.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col col-lg col-md col-sm" id="modalFeira">
            <div class="card shadow-sm" style="width:100%; height:100%;">
              <img src="images/feira/feira-de-negocios.jpg" alt="hunney">
              <div class="card-body">
                <p class="card-text"><a href="#feira-de-negocios">1° Feira de negócios do Hunney.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col col-lg col-md col-sm" id="modalPalestra"> 
            <div class="card shadow-sm" style="width:100%; height:100%;">
                <img src="images/palestra/Sem título.png" alt="hunney"style="height:100%;">
              <div class="card-body">
                <p class="card-text"><a href="#palestra-prf">Palestra da PRF, no Hunney.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg col-md col-sm" id="modalSemanaEstudante">
            <div class="card shadow-sm" style="width:100%; height:100%;">
              <img src="images/semana-estudante/semana-do-estudante.png" alt="hunney">
              <div class="card-body">
                <p class="card-text"><a href="#semana-do-estudante">Semana do Estudante.</a></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-lg col-md col-sm">
            <div class="card shadow-sm"style="width:100%; height:100%;">
            <img src="images/logo-poli/hunney-everest-piovesan.png" alt="hunney" style="height:100%;">
              <div class="card-body">
                <p class="card-text"><a href="#noticias-em-breve">Notícias em breve.</a></p>
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