<?php

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pagamento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/cadastro.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/header.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('owl.carrossel.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/pagamento.css')}}" />

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- <script src="main.js"></script> -->
</head>

<style>
</style>

<body>

  @include('header')

  <section class="principal-body">



    <section class="all-text-desc">


      <div class="info-products">
        <span>Confira os produtos escolhidos:</span><br>
        <div class="expain-products">
          <h4>Produto:</h4>
          <h4>Descrição:</h4>
          <h4>Preço:</h4>
        </div><br>

        @foreach ($produtos as $produto)
        <div class="div-products-item">
          <label id="label-produto" for="">{{$produto->nome}}</label>
          <label id="label-descricao">"{{$produto->descricao}}"</label>
          <label id="label-preco" for="">R${{$produto->preco}}</label>
          <img id="label-img" src="{{asset($produto->imagem)}}" alt="">
        <!--  <a class="btn btn-primary" href="{{ route('info.produto', $produto->id) }}">Detalhe</a>  -->
          <a class="btn btn-danger lbutton" href="">Excluir</a>
        </div>
        @endforeach



        <div class="div-total">
          <h3 class="total">Total: R$ {{$produto->preco + $produto->preco}}
          </h3>
        </div>

        <div class="container botoes">
          <div class="row linha2">
            <div class="col-md-4">
             <div class="">
              <a class="btn btn-primary botao1" href="/">Continuar Comprando</a>
              </div>
            </div>

            <div class="col-md-4">
             <div class="">
              <a class="btn btn-success botao2" href="/resultadoCompra">Finalizar compra</a>
             </div>
            </div>
           </div>
         </div>
      </div>




    </section>
  </section>

  <section class="great-body">



    <section class="back-body">

      <section class="all-body">

        <div class="div1">


          <div class="first-text">
            <h6>Escola o seu Plano</h6>
            <div class="border-text"></div>
          </div>

          <div class="cards">
            <div class="card1">
              <div class="inp-valor">
                <label class="lab-inp" for="">
                  <input id="primeiro" type="checkbox" name="Anual">
                  <span class="lab-inp-sp"></span>
                </label>
                <label for="primeiro"><strong>Anual</strong></label>
              </div>
              <div class="content-price">
                <h5>R$00,00/mês</h5>
              </div>
            </div>
            <div class="card1">
              <div class="inp-valor">
                <label class="lab-inp" for="">
                  <input id="segundo" type="checkbox" name="Mensal">
                  <span class="lab-inp-sp"></span>
                </label>
                <label for="segundo"><strong>Mensal</strong></label>
              </div>
              <div class="content-price">
                <h5>R$00,00/mês</h5>
              </div>
            </div>
          </div>

          <div class="pay-informations">

            <div class="pay-info-1">

              <h4>Informações de pagamento</h4>
              <h5>Por que inserir meus dados?</h5>
            </div>


            <div class="pay-info-2">

              <h4>Informações de pagamento</h4>
              <h5>Por que inserir meus dados?</h5>
            </div>

          </div>

          <div class="fops">

            <div class="fop1">

              <strong>Cartão de credito</strong><br>
              <img class="cc-img" src="{{asset('imgs\icones/bandeiras-de-cartao-mundipagg.png')}}" width="120px" alt="">
            </div>
            <div class="fop2">

              <strong>PayPal</strong><br>
              <img class="paypal-img" src="'imgs\icones/paypal.png'" width="30px" alt="">
            </div>

          </div>

          <!-- FORMULÁRIO DE PAGAMENTO -->
          <form class="pay-form" method="post" action="/pagamento">

            @csrf

            <div class="card-and-cvv">
              <!-- <p> -->
              <div class="card-number">
                <label for="card_number"> <strong>Numero do Cartão</strong></label><br>
                <div class="content-input">
                  <i class="material-icons">
                    credit_card
                  </i>
                  <input name="cardNumber" class="inp-form" type="number" size="20" placeholder="  XXXX-XXXX-XXXX-XXXX">
                </div>
              </div>
              <div class="cvv-number">
                <label class="this-label" for="cvv_number"><strong>CVV</strong> </label><br>
                <div class="content-input-cvv">
                  <i class="material-icons">
                    security
                  </i>
                  <input name="cvvNumber" class="inp-form" type="number" placeholder="  123 ">
                  <i class="material-icons">
                    notification_important
                  </i>
                </div>
              </div>
              <!-- </p> -->
            </div>

            <div class="month-and-year">

              <div class="card-month">
                <label for="card_number"><strong> Mês</strong></label><br>
                <select name="select">
                  <option value="valor2" selected>Escolha</option>
                  <option value="valor1">Janeiro</option>
                  <option value="valor3">Fevereiro</option>
                  <option value="valor3">Março</option>
                  <option value="valor3">Abril</option>
                  <option value="valor3">Maio</option>
                  <option value="valor3">Junho</option>
                  <option value="valor3">Julho</option>
                  <option value="valor3">Agosto</option>
                  <option value="valor3">Setembro</option>
                  <option value="valor3">Outubro</option>
                  <option value="valor3">Novembro</option>
                  <option value="valor3">Dezembro</option>
                </select>



              </div>
              <div class="card-year">
                <label class="this-label" for="cvv_number"><strong> Ano</strong></label> <br>
                <select class="sel-year" name="select2">
                  <option value="valor2" selected>Escolha</option>
                  <option value="valor1">2019</option>
                  <option value="valor3">2020</option>
                  <option value="valor3">2021</option>
                  <option value="valor3">2022</option>
                  <option value="valor3">2023</option>
                  <option value="valor3">2024</option>
                  <option value="valor3">2025</option>
                  <option value="valor3">2026</option>
                </select>
              </div>
            </div>

            <!-- <div class="pais-btn"> -->

            <a href="/resultadoCompra" class="buy-btn">

              Comprar

              <!-- <h4 class="text-comprar">Comprar</h4> -->

            </a>

            <!-- </div> -->

          </form>


        </div>

        <div class="div2">
          <div class="img-simbol">
            <img class="tik-verde-img" src="{{asset('imgs/icones/tik_verde.png')}}" width="40px" alt="">
          </div>
          <div class="txts">
            <p><strong>Seus 30 dias Trial Free</strong> são totalmente grátis<br>
              e estará válido até 6 de agosto <br>
              <strong>Cancele a qualquer momento.</strong> </p>


            <!-- <li class="list-group-item d-flex justify-content-between lh-condensed"> -->
            <div>
              <h4 class="tora-text">O Torabit Shopping Inclui:</h4>



            </div>

            <li class="list-1">
              <img class="img-check" src="{{asset('imgs\icones\visto2.png')}}" width="15px" height="15px" alt="">
              <span>Diferencial 1</span>
            </li>
            <li class="list-1">
              <img class="img-check" src="{{asset('imgs\icones\visto2.png')}}" height="15px" alt="">
              <span>Diferencial 2</span>
            </li>
            <li class="list-1">
              <img class="img-check" src="{{asset('imgs\icones\visto2.png')}}" width="15px" height="15px" alt="">
              <span>Diferencial 3</span>
            </li>
            <li class="list-1">
              <img class="img-check" src="{{asset('imgs\icones\visto2.png')}}" width="15px" height="15px" alt="">
              <span>Diferencial 4</span>
            </li>

            <li class="list-1">
              <img class="img-check" src="{{asset('imgs\icones\visto2.png')}}" width="15px" height="15px" alt="">
              <span>Diferencial 5</span>
              <br>
            </li>
            </ul>
          </div>
        </div>




      </section>

    </section>

    @include ('footer')

  </section>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascirpt" src="{{asset('js/carrosel.js')}}"></script>

</body>

</html>