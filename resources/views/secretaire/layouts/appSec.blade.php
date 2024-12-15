<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Updated: Apr 20 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
@include('secretaire.layouts.headerSec')

<!-- ======= Sidebar ======= -->
@include('secretaire.layouts.sideBar')

<main id="main" class="main">
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Patients</h5>


                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    >
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>100</h6>
                                        <span class="text-success small pt-1 fw-bold">52%</span>
                                        <span class="text-muted small pt-2 ps-1"
                                        >consulter</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Rendez-Vous</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    >
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>20</h6>
                                        <span class="text-success small pt-1 fw-bold">40%</span>
                                        <span class="text-muted small pt-2 ps-1"
                                        >Confirmer</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Revenue Card -->
                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Rendez-Vous Annulee</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    >
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>14</h6>
                                        <span class="text-success small pt-1 fw-bold">60%</span>
                                        <span class="text-muted small pt-2 ps-1"
                                        >Non Confirmer</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Revenue Card -->
                </div>
            </div>
            <!-- End Left side columns -->
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste Des Patients</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Sexe</th>
                                <th>Adresse</th>
                                <th data-type="date" data-format="YYYY/DD/MM">
                                    Date de Naissance
                                </th>
                                <th>Telephone</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Ndiaye</td>
                                <td>Abdou Fatah</td>
                                <td>M</td>
                                <td>Touba</td>
                                <td>2002/02/11</td>
                                <td>772341909</td>
                                <td>
                                    <button>✅</button>
                                    <button>❌</button>
                                </td>


                            </tr>
                            <tr>
                                <td>Gueye</td>
                                <td>Aminata</td>
                                <td>F</td>
                                <td>Keur Massar</td>
                                <td>2004/05/11</td>
                                <td>789291019</td>
                                <td>
                                    <button>✅</button>
                                    <button>❌</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ly</td>
                                <td>Abdoulaye</td>
                                <td>M</td>
                                <td>Keur Massar</td>
                                <td>2001/04/21</td>
                                <td>782991019</td>
                                <td>
                                    <button>✅</button>
                                    <button>❌</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Diaw</td>
                                <td>Khadim</td>
                                <td>M</td>
                                <td>Touba</td>
                                <td>2000/06/19</td>
                                <td>756278181</td>
                                <td>
                                    <button>✅</button>
                                    <button>❌</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- ======= Footer ======= -->
@include('secretaire.layouts.footerSec')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
