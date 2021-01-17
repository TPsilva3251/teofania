@include('layout')
@if(session('mensagem'))
    <div class="alert alert-success">
        <p style="text-align:center;">{{session('mensagem')}}</p>
    </div>
@endif
<form action="/mail" method="GET">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
<section>
    <br><br>
    <div class="divisory-primary"> Fale com a Teofania por e-mail</div>
    <br><br>
    <div class="e-mail">
        <div class="input-group col-sm-13" >
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" placeholder="Digite aqui seu nome" aria-label="Digite aqui seu nome" aria-describedby="basic-addon2">
            </div>
           <div class="col-sm-6">
                <input type="text" class="form-control" name="email" placeholder="Digite aqui seu endereço de e-mail" aria-label="Digite aqui seu endereço de e-mail" aria-describedby="basic-addon2">
           </div>
        </div>
        <br>
        <div class="form-group col-sm-12">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="text" placeholder="Deixe sua mensagem para a Teofania"></textarea>
        </div>
        <div class="col-sm-3">
             <a href="/mail">
                 <button type="submit" class="btn btn-primary"> <span>Enviar E-mail</span>
                 </button>
             </a>
        </div>
    </div>
    <br>
    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=55021992256706" target="_blank">
        {{-- <button type="button" class="btn btn-success" id="btn_whatsapp">
        Fale com a Teofania pelo Whatsapp </button> --}}
        <div class="divisory-secundary"><img src="/WhatsApp-icone.png" height="35"> Fale com a Teofania pelo Whatsapp</div>
    </a>



</section>
</form>
<style>
.divisory-primary{
    background-color: #bf3d03;
    color: antiquewhite;
    text-align: center;
    font-size: 150%;
    padding: 1%;
}
.divisory-secundary{
    background-color: #28a745;
    color: antiquewhite;
    text-align: center;
    font-size: 150%;
    padding: 1%;
}
</style>
