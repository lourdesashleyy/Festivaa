<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="    color: white;">
            {{ __('Edit Event') }}
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
                    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
                </head>
                <body class="sb-nav-fixed">
                    <div id="layoutSidenav">
                        <div id="layoutSidenav_content">
                            <main>
                                <div class="container-fluid px-4">
                                    <div class="row" style="margin-top: 35px;">
                                        <div class="col-xl-6" style="width: 65%;">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fa-solid fa-bars"></i>
                                                     Event Details
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{route('updateBlog', ['id'=>$postBlog['id']])}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="author">Organizer Name:</label>
                                                            <input type="text" id="author" name="author" value="{{ $postBlog['author'] }}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="blog_title">Event Title:</label>
                                                            <input type="text" id="blog_title" name="blog_title" value="{{ $postBlog['blog_title'] }}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="blog_content">Event Description:</label>
                                                            <textarea id="blog_content" name="blog_content" class="form-control">{{ $postBlog['blog_content'] }}</textarea>
                                                        </div>
                                                        <input type="submit" value="Update" class="btn btn-primary" style="margin-top: 10px;">
                                                    </form>
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
                    <script src="assets/demo/chart-bar-demo .js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
                    <script src="js/datatables-simple-demo.js"></script>
                </body>
            </html>

    </div>
</x-app-layout>