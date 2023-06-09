<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Panel SatuPintu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/')?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/')?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- icon -->
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/a00c16a2d0/UntitledProject/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/')?>vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/')?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/')?>img/logo.png" alt="">
        <span class="d-none d-lg-block">SATUPINTU</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?= base_url('assets/')?>img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?= base_url('assets/')?>img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?= base_url('assets/')?>img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?= base_url('assets/')?>img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $user['nama']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('user/member')?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-user-fill"></i><span>Profile</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-apps-2-line"></i><span>Features</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('user/admin/cekresi')?>">
              <i class="bi bi-circle"></i><span>Cek Resi</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('user/admin/cektaglis')?>">
              <i class="bi bi-circle"></i><span>Cek Tagihan Listrik</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('user/admin/follsig')?>">
              <i class="bi bi-circle"></i><span>Sosial Media</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('user/admin/orderpulsa')?>">
              <i class="bi bi-circle"></i><span>Order Pulsa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-search-2-line"></i><span>Cek Status</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('user/admin/cekstatus')?>">
              <i class="bi bi-circle"></i><span>Followers IG</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('user/admin/cekstatusp')?>">
              <i class="bi bi-circle"></i><span>Pulsa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="ri-user-settings-fill"></i><span>Pengaturan Akun</span>
        </a>
      </li><!-- End Pengaturan Akun Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url("user/member/isisaldo_v")?>">
          <i class="ri-money-dollar-circle-fill"></i><span>Isi Saldo</span>
        </a>
      </li><!-- End isi Saldo Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url("user/member/konfirmasisaldo")?>">
          <i class="ri-ticket-2-fill"></i><span>Tiket Saldo</span>
        </a>
      </li><!-- End Tiket Saldo Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Riwayat Transaksi</span>
        </a>
      </li><!-- End Riwayat Transaksi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Riwayat Transaksi Web</span>
        </a>
      </li><!-- End Riwayat Transaksi Web Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('auth/logout')?>">
          <i class="ri-logout-box-fill"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('user/member')?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Halo!</strong> Selamat datang, <?= $user['nama']?>.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6><a href="<?= base_url("user/member/isisaldo_v")?>">Isi Saldo</a></h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Saldo</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $user['saldo']?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6><a href="#">Detail Riwayat</a></h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Riwayat Transaksi</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri-history-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php 
                        $dataPenunjuk = array(
                          'username' => $this->session->userdata('username')
                          );
                        $data = count($this->webmodel->getData_khusus("history",$dataPenunjuk)); echo $data?>
                      </h6>
                      <span class="text-muted small pt-2 ps-1">pesanan</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="col-lg-10">

              <a href="<?= base_url("user/member/isisaldo")?>"><button type="button" class="btn btn-outline-success btn-dark btn-sm">Isi Saldo</button></a>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  
                  <!-- Default Table -->
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col"><center><a href="#"><img src="<?= base_url()?>assets/img/pulsa.png" alt="" width="100"></a></center></th>
                        <th scope="col"><center><img src="<?= base_url()?>assets/img/pulsatrf.png" alt="" width="100"></center></th>
                        <th scope="col"><center><img src="<?= base_url()?>assets/img/kuota.png" alt="" width="100"></center></th>
                        <th scope="col"><center><img src="<?= base_url()?>assets/img/games.png" alt="" width="90"></center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><center>Pulsa Reguler</center></td>
                        <td><center>Pulsa Transfer</center></td>
                        <td><center>Paket Internet</center></td>
                        <td><center>Games</center></td>
                      </tr>
                      <tr>
                        <td><center><img src="<?= base_url()?>assets/img/listrik.png" alt="" width="100"></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/emoney.png" alt="" width="100"></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/streaming.png" alt="" width="100"></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/sosmed.png" alt="" width="100"></center></td>
                      </tr>
                      <tr>
                        <td><center>Token Listrik</center></td>
                        <td><center>Saldo E-Money</center></td>
                        <td><center>Streaming</center></td>
                        <td><center>Sosial Media</center></td>
                      </tr>
                      <tr>
                        <td><center><a href="#"><img src="<?= base_url()?>assets/img/cekresi.png" alt="" width="100"></a></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/taglis.png" alt="" width="100"></center></td>
                        <td><center><a href="<?= base_url('user/member/cekidgame')?>"><img src="<?= base_url()?>assets/img/cekid.png" alt="" width="100"></center></td>
                        <td><center><a href="<?= base_url('downloader/convertmp4')?>"><img src="<?= base_url()?>assets/img/mp4mp3.png" alt="" width="100"></a></center></td>
                      </tr>
                      <tr>
                        <td><center>Cek Resi</center></td>
                        <td><center>Cek Tagihan Listrik</center></td>
                        <td><center>Cek ID Game</center></td>
                        <td><center>YT MP4 to MP3</center></td>
                      </tr>
                      <tr>
                        <td><center><a href="<?= base_url('downloader/instagram')?>"><img src="<?= base_url()?>assets/img/ig.png" alt="" width="100"></a></center></td>
                        <td><center><a href="<?= base_url('downloader/tiktok')?>"><img src="<?= base_url()?>assets/img/tiktok.png" alt="" width="100"></a></center></td>
                        <td><center><a href="<?= base_url('downloader/youtube')?>"><img src="<?= base_url()?>assets/img/yt.png" alt="" width="100"></a></center></td>
                        <td><center><a href="<?= base_url('downloader/facebook')?>"><img src="<?= base_url()?>assets/img/fb.png" alt="" width="100"></a></center></td>
                      </tr>
                      <tr>
                        <td><center>IG Downloader</center></td>
                        <td><center>TT Downloader</center></td>
                        <td><center>YT Downloader</center></td>
                        <td><center>FB Downloader</center></td>
                      </tr>
                      <tr>
                        <td><center><img src="<?= base_url()?>assets/img/ai.png" alt="" width="100"></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/comingsoon.png" alt="" width="100"></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/comingsoon.png" alt="" width="100"></center></td>
                        <td><center><img src="<?= base_url()?>assets/img/comingsoon.png" alt="" width="100"></center></td>
                      </tr>
                      <tr>
                        <td><center>ChatGPT</center></td>
                        <td><center>Coming Soon</center></td>
                        <td><center>Coming Soon</center></td>
                        <td><center>Coming Soon</center></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Default Table Example -->
                </div>
                </div>
              </div>
            </div><!-- End Reports -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
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

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/')?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url('assets/')?>vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/quill/quill.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url('assets/')?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/')?>js/main.js"></script>

</body>

</html>