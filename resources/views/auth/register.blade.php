<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admincast bootstrap 4 &amp; angular 5 admin template, Шаблон админки | Register</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">

    <!-- THEME STYLES-->
    <link href="{{asset('css/main.css')}}"rel="stylesheet">
    <!-- PAGE LEVEL STYLES-->
    <link href="{{asset('css/auth-light.css')}}" rel="stylesheet">
</head>

<body class="bg-silver-300 has-animation">
    <div class="content">
        <div class="brand">
            <a class="link" href="index.html">Blog Admin</a>
        </div>
        <form id="register-form" action="{{route('registering')}}" method="post" novalidate="novalidate">
            @csrf
            <h2 class="login-title">Register</h2>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
               
            </div>
            <div class="form-group">
             
                <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        
            <div class="form-group text-left">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox" name="agree">
                    <span class="input-span"></span>I agree the terms and policy</label>
                    <br />
                    @if ($errors->has('agree'))
                    <span class="text-danger">{{ $errors->first('agree') }}</span>
                    @endif
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="level" id="application" value="1" >
                <label for="" style="margin">Admin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="level" id="application" value="0" >
                <label for="">User</label>
            </div>
            <br />
            @if ($errors->has('level'))
                <span class="text-danger">{{ $errors->first('level') }}</span>
            @endif
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Sign up</button>
            </div>
           
            <div class="text-center">Already a member?
                <a class="color-blue" href="{{route('login')}}">Login here</a>
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

   

</body></html>