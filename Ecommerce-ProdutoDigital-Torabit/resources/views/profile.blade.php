<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TorabitShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/sobre.css')}}">
    <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png"
            sizes="32x32">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
            type='text/css'>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
            href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <!--<link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="shortcut icon" href="favicon.ico"> -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/carr.css')}}">
        <link rel="stylesheet" href="{{asset('css/docs.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.js')}}"></script>
    <title>Área do cliente</title>
</head>
<body>
@include('header')
<br> <br> <br>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>
</html>