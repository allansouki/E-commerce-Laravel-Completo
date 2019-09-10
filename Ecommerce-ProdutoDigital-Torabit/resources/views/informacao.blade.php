<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Informação do produto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/info.css')}}"> <!-- mudou -->
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" href="{{asset('css/docs.theme.min.css')}}">
  <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png" sizes="32x32">
</head>

<body>
  @include ('header')


  <div class="container corpo">
    <div class="row linha">
      <div class="col-md-2">
        <img src="/{{ $produto->imagem }}" width="180">
      </div>

      <div class="col-md-6 block2">
        <h1>{{ $produto->nome }}</h1>
        <p class="desc">{{ $produto->descricao }}</p>
        <p>{{ $produto->preco }} R$</p>
        <a href="/pagamento/{{$produto->id}}" class="btn btn-success bcompra"> Comprar </a>
      </div>
    </div>
    @include ('footer')
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>