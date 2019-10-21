@include('layout')
<form action="/createMail" method="GET">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<section>
    <br><br>
    <div class="divisory-primary"> Fale com a Teofania</div>
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
        <br><br>
        <a href="/mail">
            <button type="submit" class="btn btn-primary"> <span>Enviar E-mail</span>
            </button>
        </a>

    </div>
   <div class="Whatsapp col-sm-12">
        <a href="http://link.ds7.com.br/506bfab" target="_blank">
            <button type="button" class="btn btn-success" id="btn_whatsapp">
              Fale com a Teofania pelo Whatsapp </button>
        </a>
   </div>
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
</style>

