<section id="demo">
  <div class="row">
    <div class="large-12 columns">
      <div class="owl-carousel owl-theme">

        @foreach ($produtos as $produto)
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;">
            <a href="{{ route('info.produto', $produto->id) }}"> <img class="imagem" src="{{ $produto->imagem }}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$ {{ $produto->preco }}/ano</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="{{ route('info.produto', $produto->id) }}" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        @endforeach

        <!--
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;">
            <a href="/pagamento/2"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto2.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="/pagamento/2" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;">
            <a href="/pagamento/3"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto3.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="pagamento/3" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;">
            <a href="/pagamento/4"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto4.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="/pagamento/4" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;">
            <a href="/pagamento/5"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto1.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="/pagamento/5" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;;">
            <a href="/pagamento/6"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto2.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="/pagamento/6" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;;">
            <a href="/pagamento/7"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto3.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="/pagamento/7" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card text-center" class="rounded-top" style="18rem;;">
            <a href="/pagamento/8"> <img class="imagem" src="{{asset('imgs/imagens_cortadas/foto4.png')}}" class="card-img-top" alt="..."> </a>
            <div class="card-body alturacard">

              <p class="card-text"> R$79/mês</p>
              <p class="mensal"> ou 12x R$67/mês</p>
              <a href="/pagamento/8" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

      </div>                                             -->

      </div>

      <script>
        $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 3,
                nav: false
              },
              1000: {
                items: 4,
                nav: true,
                loop: false,
                margin: 20
              }
            }
          })
        })
      </script>
    </div>
  </div>
</section>