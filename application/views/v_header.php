<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Praktik Dokter Umum</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon/logo.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css" />
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- datepicker -->
    <link href="<?= base_url(); ?>assets/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/libs/apex-charts/apex-charts.css" />


    <!-- 3rd CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Include File jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

    <!-- Helpers -->
    <script src="<?= base_url(); ?>assets/vendor/js/helpers.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url(); ?>assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Praktik Irga</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="<?= base_url('dashboard') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Master Data</span>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('pasien') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-pin"></i>
                            <div>Data Pasien</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('obat') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-capsule"></i>
                            <div>Data Obat</div>
                        </a>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('kunjungan') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cabinet"></i>
                            <div>Kunjungan</div>
                        </a>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-book-alt"></i>
                            <div>Laporan</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="<?= base_url('laporan') ?>" class="menu-link">
                                    <div>Daftar Pasien</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('laporan/get_obat') ?>" class="menu-link">
                                    <div>Daftar Obat</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url('laporan/get_kunjungan') ?>" class="menu-link">
                                    <div>Kunjungan</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">SETTING</span>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('auth/logout') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-power-off"></i>
                            <div>Log Out</div>
                        </a>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <div class="app-brand demo">
                            <a href="index.html" class="app-brand-link">
                                <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
                            </a>
                            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                                <i class="bx bx-chevron-left bx-sm align-middle"></i>
                            </a>
                        </div>
                        <ul class="navbar-nav flex-row ms-auto">
                            <!-- User -->
                            <li class="">
                                <div class="avatar avatar-online">
                                    <img src="<?= base_url(); ?>assets/img/logo.jpg" alt class="w-px-30 h-auto rounded-circle" />
                                </div>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->