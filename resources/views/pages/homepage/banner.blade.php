<section id="header-home">
    {{-- Incluindo o menu principal --}}
    @include ('partials.nav-principal', [
        'active' => 'home'
    ])

    <div>
        <div class="container">

            <div class="container-texto ">
                <div class="slide active">
                    <h4>"(...) mas afinal é preciso começar a amar, <br> para não adoecer" </h4>
                    <p>Freud (1914)</p>
                </div>
                <div class="slide" style="display:none">
                    <h4>"A história não é o passado. A história é o passado <br>na medida em que é historiado no presente - <br>historiado no presente porque foi vivido no passado."</h4>
                    <p>Lacan (1954)</p>
                </div>
            </div>
        </div>
    </div>
</section>


