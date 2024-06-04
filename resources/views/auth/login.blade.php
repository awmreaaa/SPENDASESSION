<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mt-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color:#90B4EC; margin-top:10px;">
                                <div class="card-header border-0">
                                    <div class="text-center">
                                        <h3 class="mt-3" style="margin-right: 40px;">
                                            <img src="admin/assets/img/logo-smp2.png" alt="" style="width: 80px;"> Login
                                        </h3>
                                        <p>Selamat Datang Di SpendaSession</p>
                                    </div>
                                </div>
                                @if ($errors->any (   ))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <div class="card-body">
                                        <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" value="{{ old('email') }}" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="submit" type="submit">Login</button>
                                            </div>
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
        <script src="admin/js/scripts.js"></script>
    </body>
</html>