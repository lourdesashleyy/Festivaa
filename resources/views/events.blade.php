<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('My Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="utf-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                    <meta name="description" content="" />
                    <meta name="author" content="" />
                    <title>Dashboard - SB Admin</title>
                    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
                    <link href="styless.css" rel="stylesheet" />
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
                    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
                </head>
                <body class="sb-nav-fixed">
                    <div id="layoutSidenav">
                        <div id="layoutSidenav_nav">
                            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                                <div class="sb-sidenav-menu" style="background-color: #b23d26;">
                                    <div class="nav">
                                        <div class="sb-sidenav-menu-heading">- General -</div>
                                        <a class="nav-link" href="{{route('dashboard')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Dashboard
                                        </a>
                                        <div class="sb-sidenav-menu-heading">- Manage -</div>
                                        <a class="nav-link" href="{{route('events')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            My Events
                                        </a>
                                        <a class="nav-link" href="{{route('createevent')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Create Event
                                        </a>
                                        <a class="nav-link" href="{{route('mailinglist')}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Mailing List
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid px-4">
                                <div class="row" style="margin-top: 35px;">
                                    <div class="row gx-5 align-items-center">
                                        <div class="card" style="width: 33%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <img class="eventlistimage" src="assets/img/event1.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">EVENT</h5>
                                                <div style="display: flex; flex-wrap: wrap; gap: 10px; width: max-content; margin-right 10px;">
                                                    <a href="{{route('organizereventdetails')}}" class="btn" style="background-color: #01926b; color: white; border-radius: 100px; padding-left: 25px; padding-right: 25px;">SEE DETAILS</a>
                                                    <a href="{{route('editevent')}}" class="btn btn-primary" style="border-radius: 100px;"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger" style="border-radius: 100px;"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 33%; margin:10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                            <img class="eventlistimage" src="assets/img/event1.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">EVENT</h5>
                                                <div style="display: flex; flex-wrap: wrap; gap: 10px; width: max-content; margin-right 10px;">
                                                    <a href="{{route('organizereventdetails')}}" class="btn" style="background-color: #01926b; color: white; border-radius: 100px; padding-left: 25px; padding-right: 25px;">SEE DETAILS</a>
                                                    <a href="{{route('editevent')}}" class="btn btn-primary" style="border-radius: 100px;"><i class="bi bi-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger" style="border-radius: 100px;"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                    <script src="js/scripts.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                    <script src="assets/demo/chart-area-demo.js"></script>
                    <script src="assets/demo/chart-bar-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
                    <script src="js/datatables-simple-demo.js"></script>
                </body>
            </html>

    </div>
</x-app-layout>
