<html>
<head>
    @include('librerias')
    <style>
        body{
            background-image:url('futbol.jpg');
            background-repeat:no-repeat;
        }
    </style>
</head>
<body>
<div class="login-box animated fadeInDown">
    <div class="login-logo">
        <a href="#" style="color:#ffffff"><b ><img src="{{asset('EntreLigas.png')}}" width="100%"/></b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <center><h4>Registro de Usuario</h4></center>
        <form action="{{ URL::to('registerUser') }}" method="post" role="form" id="form" name="form">
            <div class="form-group has-feedback">
                <label>Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">
                <span class="glyphicon  glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Contraseña</label>
                <input type="password" class="form-control" placeholder="Password" id="clave" name="clave">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fadeInDown">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4>
                    <i class="icon fa fa-ban"></i>
                    Datos Incorrectos
                </h4>
                {{ Session::get('error') }}
            </div>
            @endif
        </form>
        <div class="form-group has-feedback">
            <center><button class="btn btn-primary" id="submit"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;Registrar</button>
            </center>
        </div>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
</body>
</html>