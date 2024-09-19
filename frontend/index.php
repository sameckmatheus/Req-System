<?php
  $conexao_path = "database/Database.php"; 
  require_once $conexao_path;

  session_start(); 
/*
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      header('Location: index.php');
      exit();
  }*/
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ItaReq</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_seduc.png" rel="icon">
  <link href="assets/img/logo_seduc.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/sapo-lg.png" alt="">
        <h1 class="sitename">ItaReq</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">Sobre</a></li>
          <li><a href="index.php#services">Serviços</a></li>
          <li><a href="index.php#contact">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="./views/./list-requests.php">Meus requerimentos</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Bem Vindos ao <span>ItaReq</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Sistema de acompanhamenro e solicitação de requerimentos<br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Vamos começar!</a>
          </div>
          <img src="assets/img/sup_001.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">
      <div class="container">
        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0" style="border-radius: 12px;"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="starter-page.php" class="stretched-link">Novo requerimento</a></h4>
                <p class="description">Inicie um novo requerimento de maneira rápida e fácil, preenchendo todas as informações necessárias para a sua solicitação.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0" style="border-radius: 12px;"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Meus requerimentos</a></h4>
                <p class="description">Acompanhe o status e o histórico de todos os seus requerimentos em um só lugar, garantindo total controle e transparência.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0" style="border-radius: 12px;"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Seduc Itapissuma</a></h4>
                <p class="description">Conheça mais sobre a Secretaria de Educação de Itapissuma e fique por dentro das últimas notícias e atualizações.</p>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Quem Somos</p>
            <h3>Desbloqueando Potencial com Estratégia Criativa</h3>
            <p class="fst-italic">
              Nos dedicamos a fornecer uma plataforma eficiente e amigável para a gestão de requisitos, facilitando o trabalho dos servidores da Secretaria de Educação de Itapissuma.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Facilidade no envio e acompanhamento de requisições.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Transparência e eficiência na gestão de processos administrativos.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Suporte dedicado para ajudar os servidores em todas as etapas.</span></li>
            </ul>
            <a href="starter-page.php" class="read-more"><span>Leia Mais</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="Sobre a Empresa 1">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="Sobre a Empresa 2">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="Sobre a Empresa 3">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Serviços</h2>
        <p>Abaixo, você encontrará uma visão geral completa dos serviços oferecidos pelo ItaReq. Estamos comprometidos em fornecer soluções de alta qualidade para atender às suas necessidades. Explore as diversas opções disponíveis e descubra como podemos ajudá-lo a alcançar seus objetivos com excelência e eficiência.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-people icon"></i> <!-- Icon for Family Allowance -->
              <div>
                <h3>Abono Familiar</h3>
                <p>Oferecemos suporte financeiro para famílias, garantindo que todos os membros tenham acesso aos recursos necessários para uma vida digna e segura.</p>
                <a href="./views/./create-requests.php" class="read-more stretched-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-person-dash icon"></i> <!-- Icon for Absence Allowance -->
              <div>
                <h3>Abono de Falta</h3>
                <p>Permite aos funcionários justificar suas ausências por motivos específicos, assegurando a manutenção dos direitos e benefícios trabalhistas.</p>
                <a href="./views/./create-requests.php" class="read-more stretched-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-file-earmark-text icon"></i> <!-- Icon for Declarations -->
              <div>
                <h3>Declarações</h3>
                <p>Emitimos declarações oficiais para diversas finalidades, atendendo a exigências legais e administrativas de nossos clientes.</p>
                <a href="./views/./create-requests.php" class="read-more stretched-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-suitcase icon"></i> <!-- Icon for Vacation -->
              <div>
                <h3>Férias</h3>
                <p>Gerenciamos o período de férias dos funcionários, garantindo que todos aproveitem seu descanso conforme as normas vigentes.</p>
                <a href="./views/./create-requests.php" class="read-more stretched-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-x-circle icon"></i> <!-- Icon for Exoneration -->
              <div>
                <h3>Exoneração</h3>
                <p>Cuidamos de todo o processo de exoneração, garantindo que todos os procedimentos sejam realizados de forma justa e transparente.</p>
                <a href="./views/./create-requests.php" class="read-more stretched-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-folder icon"></i> <!-- Icon for Various Services -->
              <div>
                <h3>Diversos</h3>
                <p>Oferecemos uma variedade de serviços adicionais, adaptados para atender a diferentes necessidades e requisitos específicos de nossos clientes.</p>
                <a href="./views/./create-requests.php" class="read-more stretched-link">Saiba Mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contato</h2>
        <p>Estamos aqui para ajudar. Entre em contato conosco para obter mais informações, esclarecer dúvidas ou solicitar suporte. Nossa equipe está pronta para atendê-lo.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Endereço</h3>
              <p>R. Flavio Marques, 125 - Espinheiro, Itapissuma - PE, 53700-000</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Fale Conosco</h3>
              <p>(81) 99691-4520</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>seceditap@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1602720287697!2d-34.89508782499523!3d-7.772823792246629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab698efceb7433%3A0x92d908b7bc47ed6d!2sSecretaria%20de%20Educa%C3%A7%C3%A3o%20de%20Itapissuma!5e0!3m2!1spt-BR!2sbr!4v1721991984932!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; border-radius: 12px; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Seu Nome" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Seu Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem acabou de ser enviada. Obrigado!</div>

                  <button type="submit">Enviar mensagem</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
