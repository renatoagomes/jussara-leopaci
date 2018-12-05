<section id="contato">
    <div class="container">
        <div class="text-center pt-4">
            <h2 class="mt-4 mb-0"> Contato </h2>
            <p class="subtitulo mt-2">Entre em contato e em breve retornarei sua mensagem</p>
        </div>
        <div class="mx-auto mt-5 form-container">
        
            <!-- Nome Field -->
            <div class="form-group col-12 {{session()->has('flash_notification') ? 'mb-5' : 'nao'}}">
                @include ('flash::message')
            </div>


            {!! Form::open(['route' => 'contato']) !!}

            <!-- Nome Field -->
            <div class="form-group col-12">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <!-- Email Field -->
            <div class="form-group col-12 mt-5" >
                {!! Form::label('telefone', 'Telefone') !!}
                {!! Form::text('telefone', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <!-- Mensagem Field -->
            <div class="form-group col-12 mt-5">
                {!! Form::label('mensagem', 'Mensagem') !!}
                {!! Form::textarea('mensagem', null, ['class' => 'form-control', 'required', 'rows' => 5]) !!}
            </div>

            <!-- Submit Field -->
            <div class="form-group col-12 text-center mt-3">
                {!! Form::submit('ENVIAR', ['class' => 'btn btn-custom']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>
</section>
