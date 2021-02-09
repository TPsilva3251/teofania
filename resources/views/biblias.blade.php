@include('layout')
@include('biblias.1')
<br><br>
{{-- <div class="col-sm-3">
        <img src="https://www.sbb.com.br/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/7/8/7899938412367_ra085tiber_baixa_2.jpg"
        alt="" >
        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#biblia_1">
            Ver detalhes
        </button>
</div> --}}
<div class="divisory-primary">Bíblias de Estudo</div>
<br>
<section>
    <div class="thumbnail-wrapper col-sm-12 col-md-12 col-lg-12 col-xg-12">
        @foreach ($biblias as $biblia)
            <img src="{{$biblia->img2}}" height="215px">
        @endforeach
        {{-- <img src="https://www.sbb.com.br/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/7/8/7899938412367_ra085tiber_baixa_2.jpg" id="img1"/>
        <img src="https://www.sbb.com.br/media/catalog/product/cache/1/image/415x415/9df78eab33525d08d6e5fb8d27136e95/9/7/9788531115899_na085e_01.jpg" height="215px" id="img2">
        <img src="https://www.sbb.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/9/7/9788531116841_na085bec_01.jpg" height="215" id="img3">
        <img src="https://www.sbb.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/9/7/9788531116872_arc085bepp_02.jpg" height="215px" id="img4">
        <img src="https://www.sbb.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/9/7/9788531116834_na080bd_01.jpg" height="215" id="img5"> --}}
        {{-- <img src="https://www.sbb.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/8/7898521819491_arc085tibpp_01.jpg" height="215px" id="img6"> --}}
    </div>
    {{-- <br><br>
    <div class="thumbnail-wrapper col-sm-12 col-md-12 col-lg-12 col-xg-12">
        <img src="https://www.sbb.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/8/7899938411193_arc085bepp_02.jpg" height="215px" id="img7">
    </div> --}}
</section>
<style>
    /* .btn-outline-warning{
        margin-left: 15%;
    } */
.thumbnail-wrapper {
    display:inline-block;
    position:relative;
}
.thumbnail-wrapper button {
    position:absolute;
    top:50%;
    left:37%;
    -webkit-transform:translate3d(-50%, -50%, 0);
    -moz-transform:translate3d(-50%, -50%, 0);
    transform:translate3d(-50%, -50%, 0);
}
.divisory-primary{
    background-color: #bf3d03;
    color: antiquewhite;
    text-align: center;
    font-size: 150%;
    padding: 1%;
}
</style>
<script>

    $('#img1').click(function(){
        $('#biblia_1').modal();
    });
    $('#img2').click(function(){
        $('#biblia_2').modal();
    });
    $('#img3').click(function(){
        $('#biblia_3').modal();
    });
    $('#img4').click(function(){
        $('#biblia_4').modal();
    });
    $('#img5').click(function(){
        $('#biblia_5').modal();
    });
    $('#img6').click(function(){
        $('#biblia_6').modal();
    });
    $('#img7').click(function(){
        $('#biblia_7').modal();
    });
</script>
