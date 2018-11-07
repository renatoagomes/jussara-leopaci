<section id="lista-posts">
    <div class="container">

        <div class="row mx-auto container-cards">

            @php
                $Posts = [1];
            @endphp

            @foreach($Posts as $post)
                <div class="post-card card">
                
                    <div class="card-header">
                        <a href="/blog/Baby-Blues-e-Depressão-pós-parto-não-são-a-mesma-coisa" class="titulo">
                            <h3 class="mb-3">Baby Blues e Depressão pós-parto não são a mesma coisa?
                                <p class="data">6 de Novembro de 2018</p>
                            </h3>
                        </a>
                    </div>

                    <img class="img-responsive" src="https://res.cloudinary.com/tesseract/image/upload/v1538796221/jussara/Texto_01_Depress%C3%A3o_Baby_blues.jpg" alt="">
                
                    <div class="card-body">
                        <p>
                        Baby Blues e Depressão Pós-Parto são termos bastante difundidos nas redes sociais, sites e livros sobre maternidade, gravidez e ... <a href="/blog/Baby-Blues-e-Depressão-pós-parto-não-são-a-mesma-coisa"><strong>[leia mais]</strong> </a>
                        </p>
                    </div>

                    <div class="card-footer w-100 text-right">
                        <a href="javascript:void(0)" onclick="sharePost('/blog/Baby-Blues-e-Depressão-pós-parto-não-são-a-mesma-coisa')" target="_blank">
                        <i class="fa fa-share-alt"></i>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
