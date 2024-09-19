<?php
// Database Connection
$conexao_path = "../database/Database.php"; // Use a clearer variable name
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
  <link href="../assets/img/logo_seduc.png" rel="icon">
  <link href="../assets/img/logo_seduc.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="./../index.php" class="logo d-flex align-items-center me-auto">
        <img src="../assets/img/sapo-lg.png" alt="">
        <h1 class="sitename">ItaReq</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../index.php#about">Sobre</a></li>
          <li><a href="../index.php#contact">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="list-requests.php">Meus Requerimentos</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Área de Requisição</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Área de Requisição</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Formulário de Requisição</h4>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Seu Nome" required="">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Seu Email" required="">
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço" required="">
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="form-control" name="local-trabalho" placeholder="Local de Trabalho" required="">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="cpf" class="form-control" placeholder="CPF" required="">
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="telefone" placeholder="Telefone" required="">
                  </div>

                  <div class="col-md-5">
                    <select class="form-select form-control" aria-label="Default select example">
                      <option selected value="ABONO DE FALTA">Abono de Falta</option>
                      <option value="ABONO FAMILIAR">Abono Familiar</option>
                      <option value="ANOTAÇÃO EM MINHA FICHA FUNCIONAL">Anotação: Ficha Funcional</option>
                      <option value="DECLARAÇÃO">Declaração</option>
                      <option value="DIVERSOS">Diversos</option>
                      <option value="EXONERAÇÃO">Exoneração</option>
                      <option value="FÉRIAS NO PERÍODO DE">Férias</option>
                      <option value="LICENÇA MATERNIDADE">Licença Maternidade</option>
                      <option value="LICENÇA PATERNIDADE">Licença Paternidade</option>
                      <option value="OUTRO TIPO DE LICENÇA">Outro Tipo de Licença</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <input type="text" class="form-control" name="matricula" placeholder="Sua Matrícula" required>
                  </div>

                  <div class="col-md-4">
                    <select class="form-select form-control" aria-label="Default select example">
                      <option selected value="CASADO">Casado</option>
                      <option value="SOLTEIRO">Solteiro</option>
                      <option value="VIÚVO">Viúvo</option>
                      <option value="DIVORCIADO">Divociado</option>
                    </select>
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Seu requeirimento acabou de ser enviado. Obrigado!</div>

                    <button class="col-md-12 send-request" type="submit">Solicitar</button>
                  </div>

                </div>
              </form>

            </div><!-- End Services List -->

          </div>

          <div class="col-lg-4 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
              <img src="../assets/img/services.jpg" alt="" class="img-fluid services-img">
              <h3>Facilidade e Agilidade na Gestão e Solicitação de Requerimentos</h3>
              <ul>
                  <li><i class="bi bi-check-circle"></i> <span>Gerencie tudo em um único lugar.</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Acompanhamento em tempo real.</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Seja notificado automaticamente.</span></li>
              </ul>
              <p>
                  No sistema SAAP, você tem controle total sobre seus processos. Monitore cada etapa com precisão, garantindo que suas solicitações sejam tratadas com a máxima eficiência e transparência.
              </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="../index.php" class="logo d-flex align-items-center">
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
          <form action="../forms/newsletter.php" method="post" class="php-email-form">
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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- External libs to PDF generate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.2/html2pdf.bundle.min.js" integrity="sha512-MpDFIChbcXl2QgipQrt1VcPHMldRILetapBl5MPCA9Y8r7qvlwx1/Mc9hNTzY+kS5kX6PdoDq41ws1HiVNLdZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>
