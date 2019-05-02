<section id="contexto" class="container">
    <hr class="mt-5">
    @foreach ($Model->referencias as $Referencia)
        <a id="rodape" href="#"></a>
        <a id="abnt" href="#"></a>
        <p class="rodape-abnt">{{$Referencia->texto}} <a target="_blank" href="{{$Referencia->link}}">{{$Referencia->link}}</a> </p>
    @endforeach
</section>
