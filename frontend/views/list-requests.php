<?php
  // Database Connection
  $conexao_path = "../database/Database.php"; // Use a clearer variable name
  require_once $conexao_path;  // Include the database connection file

  // Session Management
  session_start(); 
  $_SESSION['usuario_id'] = $usuario_id;

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

      <a class="btn-getstarted" href="create-requests.php">Quero Solicitar</a>

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
    <section id="service-details" class="service-details section dashboard list-request">
      <div class="container">
        <div class="row gy-5">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <!-- Recent Requests -->
            <div class="col-12">
              <div class="card recent-requests overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#" onclick="filterRequests('today')">Today</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterRequests('month')">This Month</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterRequests('year')">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Monitoramente de Requisições <span>| Esse Mês</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Status</th>
                        <th>Criação</th>
                        <th>Expira em</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        // Example PHP code to fetch and display requests
                        // Replace this with actual data fetching from your database
                        $requests = [
                            ['id' => '1', 'type' => 'Tipo A', 'status' => 'Aprovada', 'creation_date' => '2024-08-01', 'expiration_date' => '2024-09-01'],
                            ['id' => '2', 'type' => 'Tipo B', 'status' => 'Pendente', 'creation_date' => '2024-08-05', 'expiration_date' => '2024-09-05'],
                            ['id' => '1', 'type' => 'Tipo A', 'status' => 'Aprovada', 'creation_date' => '2024-08-01', 'expiration_date' => '2024-09-01'],
                            ['id' => '2', 'type' => 'Tipo B', 'status' => 'Pendente', 'creation_date' => '2024-08-05', 'expiration_date' => '2024-09-05'],
                            ['id' => '1', 'type' => 'Tipo A', 'status' => 'Aprovada', 'creation_date' => '2024-08-01', 'expiration_date' => '2024-09-01'],
                            ['id' => '2', 'type' => 'Tipo B', 'status' => 'Pendente', 'creation_date' => '2024-08-05', 'expiration_date' => '2024-09-05'],
                        ];

                        foreach ($requests as $request) {
                            $statusClass = '';
                            switch ($request['status']) {
                                case 'Aprovada':
                                    $statusClass = 'bg-success';
                                    break;
                                case 'Pendente':
                                    $statusClass = 'bg-warning';
                                    break;
                                case 'Rejeitada':
                                    $statusClass = 'bg-danger';
                                    break;
                            }
                            echo "<tr>
                                    <td>{$request['id']}</td>
                                    <td>{$request['type']}</td>
                                    <td><span class='badge {$statusClass}'>{$request['status']}</span></td>
                                    <td>{$request['creation_date']}</td>
                                    <td>{$request['expiration_date']}</td>
                                    <td>
                                        <a href='update_request.php?id={$request['id']}' class='btn btn-warning btn-sm'>Editar</a>
                                        <a href='delete_request.php?id={$request['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this request?\")'>Cancelar</a>
                                    </td>
                                 </tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- Recent Activity -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hoje</a></li>
                  <li><a class="dropdown-item" href="#">Esse Mês</a></li>
                  <li><a class="dropdown-item" href="#">Esse Ano</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                <div class="activity">

                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Voluptatem blanditiis blanditiis eveniet
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Voluptates corrupti molestias voluptatem
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Est sit eum reiciendis exercitationem
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                  </div><!-- End activity item-->

                </div>

              </div>
            </div><!-- End Recent Activity -->
          </div><!-- End Recent Requests -->

          <!-- Additional Content -->
          <div class="col-lg-4 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <img src="../assets/img/services.jpg" alt="" class="img-fluid services-img">
            <h3>Tudo pensado para facilitar suas consultas à requisições antigas ou em andamento</h3>
       
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Facilidade de visualização.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Linguagem clara e obejetiva.</span>
              </li>
              <li><i class="bi bi-check-circle"></i> <span>Segurança para fazer suas solicitações.</span></li>
            </ul>
            <p>
              O SAPO foi pensando para facilitar e agilizar o processo e abertura e acompanhamento de requisições de forma rápida e com segurança.
            </p>
          </div>
        </div>
      </div>
      </div>
    </section><!-- End Service Details Section -->

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
        Designed by <a href="#">Seduc, Itapissuma - PE</a>
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

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
</html>
