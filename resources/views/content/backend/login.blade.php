<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login | Jurusan Teknik Elektro dan Teknik Informatika</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo-politap.png')}}">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body class="bg-primary bg-pattern">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        {{-- <a href="index.html" class="logo"><img src="{{ asset('backend/assets/images/logo-poltek1.png')}}" height="24" alt="logo"></a> --}}
                        <h5 class="font-size-16 text-white-50 mb-4">Website Sistem Informasi Jurusan Teknik Elektro dan Teknik Informatika</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-5 col-sm-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Login untuk melanjutkan</h5>
                                
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-custom mb-4">
                                                <input type="text" class="form-control" id="email" name="email" required>
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-group form-group-custom mb-4">
                                                <input type="password" class="form-control" id="userpassword" name="password" required>
                                                <label for="userpassword">Password</label>
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-success d-block w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js')}}"></script>
    <script src="{{ asset('backend/assets/js/app.js')}}"></script>
</body>
</html>
