<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #17a2b8;
    height: 100vh;
  }
  #login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
  }
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
  }

</style>

<body>

    <div id="login">
    <a href="{{route('home')}}" class="nav-item nav-link btn btn-secondary p-3 ">Home</a>
        <div class="container">
        
        <h3 class="text-center text-white mt-3"> Admin Login Form</h3>
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">

                @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session('message') }}</p>
                    @endif
                    
                    @if($errors->any())
                                @foreach ($errors->all() as $err )
                                    <p class="alert alert-danger">{{$err}}</p>
                                @endforeach

                            @endif
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="{{route('admin.do-login')}}" method="post">
                        @csrf
                            
                        
                        <h3 class="text-center text-info">Login</h3>
                        
                            <div class="form-group">
                                <label class="text-info">Username:</label><br>
                                <input required type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label  class="text-info">Password:</label><br>
                                <input required type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                               <!--  <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                            <!-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
