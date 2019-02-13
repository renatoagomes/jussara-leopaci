<section id="header-home">
    {{-- Incluindo o menu principal --}}
    @include ('partials.nav-principal', [
        'active' => 'home'
    ])
    <div>
        <div class="container">
            <div class="container-texto ">

                @foreach ($Homepage->objFrasesSlider as $key => $citacao)
                <div class="slide @if($key == 0) active @endif" data-duracao="{{$citacao->duracao}}" @if ($key != 0) style='display:none' @endif >

                        <h2>{!! $citacao->frase !!}</h2>
                        <br>
                        <h4>{{$citacao->autor}}</h4>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


