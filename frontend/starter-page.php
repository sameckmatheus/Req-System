<?php
// Database Connection
$conexao_path = "database/Database.php"; // Use a clearer variable name
require_once $conexao_path;  // Include the database connection file

// Session Management
session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ItaReq - Serviços</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_seduc.png" rel="icon">
  <link href="assets/img/logo_seduc.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/sapo-lg.png" alt="">
        <h1 class="sitename">ItaReq</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#">Home</a></li>
          <li><a href="index.php#about">Sobre</a></li>
          <li><a href="index.php#">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="./views/list-requests.php">Meus Requerimentos</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Serviços Disponíveis</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Serviços Disponíveis</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Features Section 1 -->
    <section id="features" class="features section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center">
            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-binoculars"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Abono Familiar</h4>
                    <p>
                      Oferecemos suporte financeiro para famílias, garantindo que todos os membros tenham acesso aos
                      recursos necessários para uma vida digna e segura.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-box-seam"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Abono de falta</h4>
                    <p>
                      Precisa justificar uma ausência no trabalho? O serviço de Abono de Falta permite que você compense
                      ausências justificadas de forma prática e eficiente.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Licença Paternidade</h4>
                    <p>
                      Acompanhe de perto os primeiros momentos da vida do seu filho com a Licença Paternidade.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Licença Maternidade</h4>
                    <p>
                      Aproveite a Licença Maternidade para cuidar do seu recém-nascido.
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <a href="./views/create-requests.php">
                  <img src="assets/img/services-1.png" alt="Abono Familiar" class="img-fluid">
                </a>
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <a href="pages/servicos/abono-falta.php">
                  <img src="assets/img/services-3.png" alt="Abono de falta" class="img-fluid">
                </a>
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <a href="pages/not-found-page/not-found.php">
                  <img src="assets/img/services-4.png" alt="" class="img-fluid">
                </a>
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-4">
                <a href="pages/not-found-page/not-found.php">
                  <img src="assets/img/services-5.png" alt="" class="img-fluid">
                </a>
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Features Section 1 -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Férias</h3>
              <p>
                Pronto para um descanso merecido? Nossa seção de Férias permite que você solicite períodos de descanso
                remunerado conforme as políticas da sua empresa. Selecione o período desejado e envie sua solicitação
                para que possamos processar seu pedido rapidamente.
              </p>
              <ul>
                <li><i class="bi bi-calendar-check flex-shrink-0"></i> Solicitação de Período de Férias</li>
                <li><i class="bi bi-clock-history flex-shrink-0"></i> Histórico de Férias</li>
                <li><i class="bi bi-journal-check flex-shrink-0"></i> Confirmação e Aprovação</li>
              </ul>
              <p></p>
              <a href="#" class="btn more-btn">Saiba mais</a>
            </div>
          </div>

        </div><!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <div class="content">
              <h3>Outros serviços</h3>
              <p>
                Não encontrou o serviço que precisa? Oferecemos a opção de solicitar Outro Tipo de Serviço. Nossa equipe
                está pronta para atender a demandas específicas e personalizadas, garantindo que você tenha o suporte
                necessário para qualquer situação.
              </p>
              <ul>
                <li><i class="bi bi-pencil-square flex-shrink-0"></i> Anotação: Ficha Funcional</li>
                <li><i class="bi bi-file-earmark-text flex-shrink-0"></i> Declarações</li>
                <li><i class="bi bi-door-open flex-shrink-0"></i> Exoneração</li>

              </ul>
              <p></p>
              <a href="#" class="btn more-btn">Saiba mais</a>
            </div>

          </div>

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>

        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Details Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">ItaReq</span>
          </a>
          <div class="footer-contact pt-3">
            <p>R. Flavio Marques, 125</p>
            <p>Espinheiro, Itapissuma - PE, 53700-000</p>
            <p class="mt-3"><strong>Telefone:</strong> <span>(81) 99691-4520</span></p>
            <p><strong>Email:</strong> <span>seceditap@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links Úteis</h4>
          <ul>
            <li><a href="#">Início</a></li>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Termos de serviço</a></li>
            <li><a href="#">Política de privacidade</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nossos Serviços</h4>
          <ul>
            <li><a href="#">Bolsa do BEEM</a></li>
            <li><a href="#">Central de Atendimento</a></li>
            <li><a href="#">Abono de Faltas</a></li>
            <li><a href="#">Solicitação de Férias</a></li>
            <li><a href="#">Declarações</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Nosso Boletim</h4>
          <p>Assine nosso boletim informativo e receba as últimas notícias sobre nossos produtos e serviços!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email">
              <input type="submit" value="Inscrever-se">
            </div>
            <div class="loading">Carregando</div>
            <div class="error-message"></div>
            <div class="sent-message">Sua solicitação de inscrição foi enviada. Obrigado!</div>
          </form>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">ItaReq</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a target="_blank" href="https://www.instagram.com/seducitappe?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Seduc, Itapissuma - PE</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
