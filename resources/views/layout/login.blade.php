<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Macrohon Water Management System
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('assets/style.css') }}" rel="stylesheet" /> -->
</head>

<body class="">
    <div class="container-fluid mt-4">
        <h2 class="text-center mb-4"><strong>Macrohon Water Management System</strong></h2>
        <div class="row">
            <div class="col-md-4 offset-md-4 col-sm-8 offset-sm-2 mt-4">
                <div class="card">
                    <div class="card-header card-header-warning" style="top: -20px !important;">
                        <h4 class="card-title">System User Authentication</h4>
                        <p class="card-category">Please complete neccessary fields</p>
                    </div>
                    <div class="card-body"> 
                        @error('username')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>                                
                        </div>
                        @enderror
                        <form class="mt-2 pl-3 pr-3" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <center>
                                <button type="submit" class="btn btn-warning mt-5">Login</button>
                            </center>
                            <div class="clearfix mb-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright text-center">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Developed by:
                    <a href="#" target="_blank">SLSU - CCSIT</a> Development Team.
                </div>
            </div>
        </footer>
    </div>

    @include('templates.script-links')
</body>

</html>