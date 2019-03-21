<h3 class="mt-5">{{ $Homepage->titulo_aba_psic_atuacao }}</h3>

<p class="citacao mt-4">{{ $Homepage->intro_aba_psic_atuacao }}</p>

<hr class="mt-4 mb-4">

<div class="d-flex row">
    <div class="col-lg-5 col-md-12">
        <div class="row container-img-portrait">
            <div class="col-6">
                <img class="img-fluid" src="http://res.cloudinary.com/tesseract/image/upload/c_scale,h_500,q_auto/v1535989139/jussara/Cl%C3%ADnica_Psicanal%C3%ADtica_1.jpg" alt="">
            </div>
            <div class="col-6">
                <img class="img-fluid" src="http://res.cloudinary.com/tesseract/image/upload/c_scale,h_500,q_auto/v1536107794/Cl%C3%ADnica_Psicanal%C3%ADtica_3_b0u2vf.jpg" alt="">

            </div>
        </div>
        <div class="row mt-3 container-img-landscape">
            <div class="col-12">
                <img class="img-fluid" src="http://res.cloudinary.com/tesseract/image/upload/c_scale,q_auto,w_800/v1535989146/jussara/Cl%C3%ADnica_Psicanal%C3%ADtica_2.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="col-lg-7 col-md-12  mt-3">
        {!! $Homepage->texto_aba_psic_atuacao !!}
    </div>

</div>

