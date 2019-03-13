<section id="apresentacao" class="container">
    <a id="apresentacao" href="#"></a>
    <div class="text-center pt-4">
        <span class="detalhe-top sem-respiro">__________</span>
        <h2 class="mt-4 mb-0">{{$Homepage->titulo_apresentacao}}</h2>
        <span class="subtitulo mt-2">{{$Homepage->subtitulo_apresentacao}}</span>
    </div>
    <p class="mt-4 col">{{$Homepage->texto_apresentacao}}</p>
    <h3 class="mt-5 col">Curriculum resumido</h3>
    <div class="row d-flex">
        <div class="col-lg-8 col-md-12">
            <ul class="pl-1">
                @foreach ($Homepage->objListaCurriculum as $item)
                    <li class="m-3 ml-4 ">{{$item}}</li>
                @endforeach
                    <li class="m-3 ml-4 ">Saiba mais - <a target="_blank" href="{{$Homepage->link_curriculum}}" class="link-lattes">Curriculum Lattes</a> </li>
            </ul>
        </div>
        <div class="container-foto col-lg-4 col-md-12">
            <img class="foto-jussara" src="{{$Homepage->linkFotoApresentacao}}" alt="Foto Jussara Leopaci">
            <p class="subtitulo mt-2">Jussara Leopaci - Psicóloga clínica</p>
        </div>
    </div>
</section>
