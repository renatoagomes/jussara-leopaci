<section id="header-home">
    {{-- Incluindo o menu principal --}}
    @include ('partials.nav-principal', [
        'active' => 'home'
    ])

    <div>
        <div class="container">

            <div class="container-texto ">
                <div class="slide active">
                    <h2>"(...) mas afinal é preciso <br>começar a amar, para não adoecer" </h2>
                    <br>
                    <h4>Freud (1914)</h4>
                </div>
                <div class="slide" style="display:none">
                    <h2>"A história não é o passado. A história é o passado na medida em que é historiado no presente - historiado no presente porque foi vivido no passado."</h2>
                    <br>
                    <h4>Lacan (1954)</h4>
                </div>
            </div>
        </div>
    </div>
</section>


