{{-- Campos de upload de foto --}}

@if (isset($comCropper))

    <div class="controles-cropper text-center">
        <button
            type="button"
            class='btn btn-info'
            onclick='uploadFile(this);'
            data-aspectratio="{{$aspectRatio}}"
            data-formid="{{$formID}}"
            data-previewid="{{$previewID}}"
            class="btn btn-lg btn-warning">
                <i class="glyphicon glyphicon-upload"></i> &nbsp; <strong>Trocar Imagem</strong>
        </button>
        <div class="hide fileupload">
            {!! Form::file(isset($name) ? $name : 'file', isset($extraAttrs) ? $extraAttrs : null) !!}
        </div>

        <button
            type="button"
            data-aspectratio="{{$aspectRatio}}"
            data-formid="{{$formID}}"
            data-previewid="{{$previewID}}"
            class="btn btn-warning btnStartCrop">
            <i class="glyphicon glyphicon-scissors"></i> &nbsp;  Cortar Imagem
             </button>

        <button
            type="button"
            data-aspectratio="{{$aspectRatio}}"
            data-formid="{{$formID}}"
            data-previewid="{{$previewID}}"
            class="btn btn-success btnConfirmCrop" style="display:none;">
            <i class="glyphicon glyphicon-check"></i>  &nbsp; Confirmar
             </button>

        <button
            type="button"
            data-aspectratio="{{$aspectRatio}}"
            data-formid="{{$formID}}"
            data-previewid="{{$previewID}}"
            class="btn btn-danger btnCancelCrop" style="display:none;">
                <i class="glyphicon glyphicon-remove"></i>  &nbsp; Cancelar
        </button>

    </div>
@else
    {!! Form::file(isset($name) ? $name : 'file', isset($extraAttrs) ? $extraAttrs : null) !!}
@endif



