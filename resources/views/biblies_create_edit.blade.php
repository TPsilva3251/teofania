@include('layouts.paginas')

<body>
    @if (isset($model))
        Editar

    @else
        {{-- <form method="POST" action="biblia"> --}}
        <h2 class="titulo">Adicionar Nova Bíblia</h2>
    @endif

    <div class="box-body col-12">
        {!! Form::open(['url'=>'biblia/store', 'id'=>'formulario']) !!}
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome da Bíblia">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="categories_id" id="categories_id" value="1" hidden="true">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="descricao" id="descricao" cols="185" rows="4" placeholder="Digite aqui a descrição"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="traducao" id="traducao" placeholder="Tradução">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="idioma" id="idioma" placeholder="Idioma">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="tamanho_da_letra" id="tamanho_da_letra" placeholder="Tamanho da Letra">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="capa" id="capa" placeholder="Capa">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="acabamento" id="acabamento" placeholder="Acabamento">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="medida" id="medida" placeholder="Medida no formato 12,5 x 15,5 cm">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="formato" id="formato" placeholder="Formato">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control" name="paginas" id="paginas" placeholder="Número de páginas">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="indice" id="indice" placeholder="Índice" <i class="fa fa-info-circle" style="color:#007087" data-toggle="tooltip" data-placement="top" title="Digite sim ou não." aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="indicacao" id="indicacao" placeholder="Indicado para">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="number" class="form-control" name="isbn" id="isbn" placeholder="ISBN">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Código">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="number" class="form-control" name="peso" id="peso" placeholder="Peso">
                    </div>
                </div>
            </div>
            <div class="Division-secundary">
                <H3>IMAGENS</H3>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="img-group">
                        <img src="https://thumbnails-photos.amazon.com/v1/thumbnail/fD2Ocj-FTzW3xum9tqMJUA?viewBox=792%2C507&ownerId=AKPXXKKGQUSCQ" width="420px" height="250px" name="img" id="img1">
                        <br><br>
                        <input type="text" class="form-control " name="img1" id="timg1" placeholder="Digite a url da imagem 1">
                        <br>
                        <button type="button" class="btn btn-outline-secondary" id="bimg1">Visualizar</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-group">
                        <img src="https://thumbnails-photos.amazon.com/v1/thumbnail/fD2Ocj-FTzW3xum9tqMJUA?viewBox=1054%2C675&ownerId=AKPXXKKGQUSCQ" width="420px" height="250px" name="img" id="img2">
                        <br><br>
                        <input type="text" class="form-control" name="img2" id="timg2" placeholder="Digite a url da imagem 2">
                        <br>
                        <button type="button" class="btn btn-outline-secondary" id="bimg2">Visualizar</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-group">
                        <img src="https://thumbnails-photos.amazon.com/v1/thumbnail/fD2Ocj-FTzW3xum9tqMJUA?viewBox=1054%2C675&ownerId=AKPXXKKGQUSCQ" width="420px" height="250px" name="img" id="img3">
                        <br><br>
                        <input type="text" class="form-control" name="img3" id="timg3" placeholder="Digite a url da imagem 3">
                        <br>
                        <button type="button" class="btn btn-outline-secondary" id="bimg3">Visualizar</button>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-success" id="submit">Salvar</button>
        {!! Form::close() !!}
    </div>

{{-- ///////////////////////////////////////////////////////////////////////////////////////////////// --}}
<style>
    .titulo
    {
        text-align: center;
        color: #5b3d09;
    }

    .Division-secundary
    {
        background-color: #bf3d03;
        color: #ffffff;
        text-align: center;
    }

    .btn-outline-secondary
    {
        float: right;
    }

    .btn-success
    {
        float: right;
    }


</style>
</body>
<script>
    $('#bimg1').click(function(){
       let url = $('#timg1').val();
       document.getElementById('img1').src = url;
    });

    $('#bimg2').click(function(){
       let url = $('#timg2').val();
       document.getElementById('img2').src = url;
    });

    $('#bimg3').click(function(){
       let url = $('#timg3').val();
       document.getElementById('img3').src = url;
    });

</script>
