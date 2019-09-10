<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contato</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/contato.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/docs.theme.min.css')}}">
        <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png" sizes="32x32">
    </head>

    <body>
    @include ('header')

      <div id="body-contato">
        <h2>Contato Torabit</h2>
         <br>

        <div class="container">
          <div class="row d-flex justify-content-between">
            <div class="col-md-5" id="bloco1">
            <img src="{{asset('imgs/imagens_cortadas/phone.png')}}" width="25%" height="27%">
            <h4>Ligue pra gente</h4>
            <p>Para assuntos mais urgentes, nada como</p>
            <label>uma ligação. <strong>Estamos à disposição.</strong></label>

            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5500000000000" target="_blank" class="btn">W H A T S A P P</a>
            </div>
           <div class="col-md-5" id="bloco2">
            <img src="{{asset('imgs/imagens_cortadas/mail.png')}}" width="25%" height="27%">
            <h4>Escreva para nós</h4>
            <p>Nossa Equipe está pronta para tirar</p>
            <label>suas dúvidas. <strong>contato@torabit.com.br</strong></label>

           <a href="mailto:email@site.com" target="_blank"class="btn">M E N S A G E M</a>
            </div>
          </div>
          <br>      
        </div>
          <br>

        <div id="midias">
          <div>

            <p><strong>Torabit Monitoramento digital<br></strong>
              Endereço Lorem Ipsum Dolor<br>
              Sit Amet, Consecteur<br>
              Adipiscing Elit<br>
              00000-000<br>
              São Paulo/SP</p>
          </div>

          <div id="img-link">
            <ul>
              <li>
                <a href="www.facebook.com/torabit"target="_blank"><img src="{{asset('imgs/imagens_cortadas/logoface.png')}}" width="74"></a>  
              </li>
              <li class="padding-top">
                <a href="www.twitter.com/tora_bit"target="_blank"><img src="{{asset('imgs/imagens_cortadas/logotw.png')}}" width="87"></a>  
              </li>
              <li class="padding-top2">
                <a href="www.instagram.com/tora_bit"target="_blank"><img src="{{asset('imgs/imagens_cortadas/logoin.png')}}" width="74"></a>  
              </li>
              <li class="padding-top2">
                <a href="www.youtube.com.br/torabit"target="_blank"><img src="{{asset('imgs/imagens_cortadas/logoyt.png')}}" width="75"></a>  
              </li>
            </ul> 
          </div>
        </div>
        <hr>
        @include ('footer')
      </div>
       

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>