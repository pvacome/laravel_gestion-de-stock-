<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / Data - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets_nice/img/favicon.png" rel="icon') }}">
    <link href="{{ asset('assets_nice/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_nice/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_nice/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_nice/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
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
                <img src="{{ asset('assets_nice/img/2.JPG') }}" alt="" style="height: 100%">
                <span class="d-none d-lg-block">XAV-DESIGN</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

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
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
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
                                <img src="{{ asset('assets_nice/img/messages-2.jpg') }}" alt=""
                                    class="rounded-circle">
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
                                <img src="{{ asset('assets_nice/img/messages-3.jpg') }}" alt=""
                                    class="rounded-circle">
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

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('assets_nice/assets/img/profile-img.jpg') }}" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
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
                            <form action="{{ route('logout') }} " method="POST">
                                @csrf
                                <button class="btn btn-danger">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        {{-- <i class="bi bi-box-arrow-right"></i> --}}
                                        <span>Sign Out</span>
                                    </a>
                                </button>
                            </form>
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
                <a class="nav-link " href="{{url('dashboard')}} ">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Administrateur</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>

                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @if (Auth::user()->hasPermission('user-read'))
                        <li>

                            <a href=" {{ url('user') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les utilisateurs</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('Roles-read'))
                    <li>
                        <a href=" {{ url('/laratrust') }} ">
                            <i class="bi bi-circle"></i><span>Gerer les roles</span>
                        </a>
                    </li>
                @endif
                    @if (Auth::user()->hasPermission('customer-read'))
                        <li>
                            <a href=" {{ url('customer') }}">
                                <i class="bi bi-circle"></i><span>Gerer les clients</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('bill-read'))
                        <li>
                            <a href=" {{ url('bill') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les factures</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('provider-read'))
                        <li>
                            <a href=" {{ url('provider') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les fournisseurs</span>
                            </a>

                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('categories-read'))
                        <li>
                            <a href=" {{ url('category') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les categories</span>
                            </a>

                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('sale-read'))
                        <li>
                            <a href=" {{ url('sale') }} ">
                                <i class="bi bi-circle"></i><span>Gerer la vente</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('inventories-read'))
                        <li>
                            <a href=" {{ url('inventory') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les inventaires</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('report-read'))
                        <li>
                            <a href=" {{ url('report') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les rapports</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('labels-read'))
                        <li>
                            <a href=" {{ url('labels') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les etiquettes</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('product-read'))
                        <li>
                            <a href=" {{ url('product') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les produits</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('argence-read'))
                        <li>
                            <a href=" {{ url('argence') }} ">
                                <i class="bi bi-circle"></i><span>Gerer les agences</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('order-read'))
                    <li>
                        <a href=" {{ url('order') }}">
                            <i class="bi bi-circle"></i><span>Gerer les commandes</span>
                        </a>
                    </li>
                @endif
                </ul>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Comptable</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        @if (Auth::user()->hasPermission('bill-read'))
                            <a href=" {{ url('bill') }}">
                                <i class="bi bi-circle"></i><span>Gerer les factures</span>
                            </a>
                    </li>
                    @endif
                    @if (Auth::user()->hasPermission('report-read'))
                        <li>
                            <a href=" {{ url('report') }}">
                                <i class="bi bi-circle"></i><span>Gerer les rapports</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('order-read'))
                    <li>
                        <a href=" {{ url('order') }}">
                            <i class="bi bi-circle"></i><span>Gerer les commandes</span>
                        </a>
                    </li>
                @endif

                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Caissier</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    @if (Auth::user()->hasPermission('sale-read'))
                        <li>
                            <a href="{{ url('sale') }}">
                                <i class="bi bi-circle"></i><span>Gerer les ventes</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('customer-read'))
                        <li>
                            <a href="{{ url('customer') }}">
                                <i class="bi bi-circle"></i><span>Gerer les clients</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Magasinier</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    @if (Auth::user()->hasPermission('argence-read'))
                        <li>
                            <a href=" {{url('argence')}} ">
                                <i class="bi bi-circle"></i><span>Gerer les agences</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('provider-read'))
                        <li>
                            <a href="{{ url('provider') }}">
                                <i class="bi bi-circle"></i><span>Gerer les fournisseurs</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('product-read'))
                        <li>
                            <a href="{{url('product')}}">
                                <i class="bi bi-circle"></i><span>Gerer les produits</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('categories-read'))
                        <li>
                            <a href=" {{url('category')}}">
                                <i class="bi bi-circle"></i><span>Gerer les categories</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->hasPermission('inventories-read'))
                        <li>
                            <a href=" {{ url('inventory')}} ">
                                <i class="bi bi-circle"></i><span>Gerer les inventaires</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </li><!-- End Charts Nav -->





        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Lire les produits</h5>
                            <div>

                                @if (session('status'))

                                <div class="alert alert-success alert-dismissible fade show" style="width: 30cm;"
                                    role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="close" style="align:right">

                                    </button>
                                </div>
                                <br>
                            @endif
                            </div>
                            @if (Auth::user()->hasPermission('product-create'))
                                <a href=" {{ url('product/create') }} ">
                                    <button type="submit" class="btn btn-primary">Ajouter </button>
                                </a>
                            @endif
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Libelle</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">DSG</th>
                                        <th scope="col">Qte</th>
                                        <th scope="col">Numero</th>
                                        <th scope="col">PU</th>
                                        <th scope="col">PT</th>
                                        <th scope="col">DE</th>
                                        <th scope="col">DMJ</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->Name }}</td>
                                            <td>{{ $product->Labels }}</td>
                                            <td>{{ $product->Type }}</td>
                                            <td>{{ $product->Designation }}</td>
                                            <td>{{ $product->Quantity }}</td>
                                            <td>{{ $product->Number }}</td>
                                            <td>{{ $product->UnitPrice }}</td>
                                            <td>{{ $product->TotalPrice }}</td>
                                            <td>{{ $product->ExpirationDate }}</td>
                                            <td>{{ $product->DateOfManufacture }}</td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ url('/product/delete/' . $product->id) }} ">
                                                    {{ method_field('DELETE') }}
                                                    @csrf

                                                    <a href="{{ url('product/' . $product->id) }} ">
                                                        <button type="button" class="btn btn-success">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </a>
                                                    @if (Auth::user()->hasPermission('product-update'))
                                                        <a
                                                            href="  {{ url('product/' . $product->id . '/edit') }}
                                                    ">
                                                            <button type="button" class="btn btn-info">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                        </a>
                                                    @endif

                                                    @if (Auth::user()->hasPermission('product-delete'))
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('voulez vous vraiment surpprimer')">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>@valentin 2023</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_nice/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets_nice/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_nice/js/main.js') }}"></script>

</body>

</html>
