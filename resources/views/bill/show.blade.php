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

    <!-- ======= Sidebar ======= -->

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="box">
                            <img src="{{ asset('assets_nice/img/2.JPG') }}" alt="" style="height: 200px"
                                width="300px">
                        </div>
                        <style>
                            .box {
                                margin: 30px auto;
                                margin-left: 45%;
                            }
                        </style>

                        <div class="card-body">
                            <!-- Table with stripped rows -->
                            <b>

                                <H3>

                                    <td>Client:
                                        {{ $bill->client->name }}
                                    </td>

                            </b>

                            </H3>

                            <H3>
                                <b>
                                    <td>Numero:
                                        {{ $bill->Number }}
                                    </td>
                                </b>

                            </H3>
                            <H3>
                                <b>
                                    <td>Date:
                                        {{ $bill->date }}
                                    </td>

                                </b>
                            </H3>


                            <br>

                            {{-- @if (session('status'))

                            <div class="alert alert-danger alert-dismissible fade show" style="width: 30cm;"
                                role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="close" style="align:right">

                                </button>
                            </div>

                            <br>
                        @endif --}}

                            <a href=" {{ url('imprimer/create/'.$bill->id) }} ">
                                <button type="submit" class=" jjj btn btn-primary">Ajouter un produit </button>
                            </a>
                            <style>
                                .jjj {
                                    opacity: 0;
                                }

                                .jjj:hover {
                                    opacity: 100;
                                }
                            </style>
                            <table class="table datatable">
                                <thead>

                                    <tr>

                                        <th scope="col">Designation</th>
                                        <th scope="col">quantite</th>
                                        <th scope="col">PrixUnitaire</th>
                                        <th scope="col">PrixTotale</th>
                                        {{-- <th scope="col">Action</th> --}}

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($bill->products as $produit)
                                        <tr>

                                            <td>{{ $produit['Name'] }}</td>
                                            {{-- {{ dd($produit->produit)}} --}}

                                            <td>{{ $produit['Quantity'] }}</td>
                                            <td>{{ $produit['UnitPrice'] }}</td>
                                            <td>{{ $produit['Quantity']*$produit['UnitPrice'] }}</td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ url('/imprimer/delete/' . $produit['id']) }} ">
                                                    {{ method_field('DELETE') }}
                                                    @csrf

                                                    {{-- <a href="{{ url('imprimer/' . $imprimer->id) }} ">
                                                    <button type="button" class="btn btn-success">
                                                        {{-- <i class="bi bi-printer"></i> --}}
                                                    {{-- <i class="bi bi-eye"></i>
                                                        impression
                                                    </button>
                                                </a>

                                                @if (Auth::user()->haspermission('imprimer-update'))
                                                    <a
                                                        href="  {{ url('imprimer/' . $imprimer->id . '/edit') }}
                                                ">
                                                        <button type="button" class="btn btn-info">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                    </a>
                                                @endif  --}}
                                                    {{-- <a href=" {{url('imprimers')}} ">

                                                    <button type="submit" class="btn btn-secondary">


                                                    </button>
                                                </a> --}}




                                                    {{-- @if (Auth::user()->haspermission('imprimer-delete'))
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('voulez vous vraiment surpprimer')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                @endif --}}


                                                </form>



                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr><td></td><td></td><td></td><td>Total : {{ $prixTotal}} </td></tr>
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
