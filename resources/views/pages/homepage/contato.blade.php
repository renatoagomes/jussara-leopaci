<section id="contato">
    <div class="container">
        <div class="text-center pt-4">
            <h2 class="mt-4 mb-0"> Contato </h2>
            <p class="subtitulo mt-2">Entre em contato e em breve retornarei sua mensagem</p>
        </div>
        <div class="mx-auto w-50 mt-5">
            {!! Form::open(['route' => 'contato']) !!}

            <!-- Nome Field -->
            <div class="form-group col-12">
                {!! Form::label('name', 'Nome') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Email Field -->
            <div class="form-group col-12 mt-5" >
                {!! Form::label('telefone', 'Telefone') !!}
                {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Password Field -->
            <div class="form-group col-12 mt-5">
                {!! Form::label('mensagem', 'Mensagem') !!}
                {!! Form::textarea('mensagem', null, ['class' => 'form-control', 'rows' => 4]) !!}
            </div>

            <!-- Submit Field -->
            <div class="form-group col-12 text-center mt-3">
                {!! Form::submit('ENVIAR', ['class' => 'btn btn-custom']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>
</section>
