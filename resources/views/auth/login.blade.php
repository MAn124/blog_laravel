<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <!-- THEME STYLES-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- PAGE LEVEL STYLES-->
    <link href="{{asset('css/auth-light.css')}}" rel="stylesheet">
</head>

<body class="bg-silver-300 has-animation">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">Blog Admin</a>
        </div>
     @if (session('status'))
         <ul>
             <li class="text-danger"> {{ session('status') }}</li>
         </ul>
     @endif
        <form id="login-form" action="{{route('postlogin')}}" method="post" novalidate="novalidate">
            @csrf
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif 
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="forgot_password.html">Forgot password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Login</button>
            </div>
            <div class="social-auth-hr">
                <span>Or login with</span>
            </div>
            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-github m-r-5" href=""><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
            </div>
            <div class="text-center">Not a member?
                <a class="color-blue" href="{{route('register')}}">Create account</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop" style="display: none;">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>


</body></html>