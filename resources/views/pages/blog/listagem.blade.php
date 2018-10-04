<section id="lista-posts">
    <div class="container">

        <div class="row mx-auto container-cards">

            @php
                $Posts = [1,2,3,4];
            @endphp

            @foreach($Posts as $post)
                <div class="post-card card">
                
                    <div class="card-header">
                        <a href="/blog/Baby-Blues-e-Depressão-pós-parto-não-são-a-mesma-coisa" class="titulo">
                            <h3 class="mb-3">Baby Blues e Depressão pós-parto não são a mesma coisa?

                                <p class="data">1 de Junho de 2018</p>
                            </h3>
                        </a>
                    </div>

                    <img class="img-responsive" src="https://res.cloudinary.com/tesseract/image/upload/v1535248012/jussara/r94CBE5.png" alt="">
                
                    <div class="card-body">
                        <p>
                        A maternidade é comum a mulher se sentir frágil diante das mudanças corporais, hormonais e incertezas do futuro, ela também revela - da concepção ao... <a href="/blog/Baby-Blues-e-Depressão-pós-parto-não-são-a-mesma-coisa"><strong>[leia mais]</strong> </a>
                        </p>
                    </div>

                    <div class="card-footer w-100 text-right">
                        <i class="fa fa-heart"></i>
                        <i class="fa fa-share-alt"></i>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
