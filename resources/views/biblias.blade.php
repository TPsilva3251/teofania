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
<div class="thumbnail-wrapper col-sm-3">
    <img src="https://www.sbb.com.br/media/catalog/product/cache/1/small_image/210x/9df78eab33525d08d6e5fb8d27136e95/7/8/7899938412367_ra085tiber_baixa_2.jpg" />
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#biblia_1">
        Ver detalhes
    </button>
</div>
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

</style>
