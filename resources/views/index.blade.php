@include('layout')
<section>
    <br><br>
    <div class="divisory-primary"> Novidades</div>
    <br>
    {{-- <section class="carousel">
        <input type="radio" name="carousel" id="carousel1" checked="checked" />
        <input type="radio" name="carousel" id="carousel2" />
        <input type="radio" name="carousel" id="carousel3" />
        <input type="radio" name="carousel" id="carousel4" />

        <main class="carousel__stage">
            <aside class="carousel__item">
            <img class="carousel__image" src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t1.0-9/73390846_954196648252048_4718313980324478976_n.jpg?_nc_cat=108&_nc_oc=AQlQ6gMTHap_Q5TFNfhXIpK9gFSGmgrA62fULp6Gsr1YmmV0sY_wJyANl0Xr_OfTC70&_nc_ht=scontent.fmoc4-1.fna&oh=c87643207fc9b62c358d5bcabff422c0&oe=5E62EF13" width="500" height="250">
            <label for="carousel2" class="carousel__next"></label>
            </aside>

            <aside class="carousel__item">
            <label for="carousel1" class="carousel__prev"></label>
            <img class="carousel__image" src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t1.0-9/70729203_940348089636904_1392793435223621632_n.jpg?_nc_cat=111&_nc_oc=AQmIVEy6a6RjOSG7sBSKhZdEgQk5E_nxxFg85GcGtdCDeK8Q2YE5mEWc_iS7RCy0svg&_nc_ht=scontent.fmoc4-1.fna&oh=299ef962fbdb3d824583159f4aaaf95a&oe=5E35D115" width="500" height="250">
            <label for="carousel3" class="carousel__next"></label>
            </aside>

            <aside class="carousel__item">
            <label for="carousel2" class="carousel__prev"></label>
            <img class="carousel__image" src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t1.0-9/71772236_945439252461121_2500861131774492672_n.jpg?_nc_cat=110&_nc_oc=AQm9M7oFtuq0qUlDkFHfuGH0xt_I_UBdl6SaaEyLnkREKHVfytAQ3f-gbJ9IQotW4EA&_nc_ht=scontent.fmoc4-1.fna&oh=068c4d0b15079a9ba33ca030ce9f4617&oe=5E1F1796" width="500" height="250">
            <label for="carousel4" class="carousel__next"></label>
            </aside>

            <aside class="carousel__item">
            <label for="carousel3" class="carousel__prev"></label>
            <img class="carousel__image" src="https://scontent.fmoc4-1.fna.fbcdn.net/v/t1.0-9/69255601_922055974799449_585676798637899776_n.jpg?_nc_cat=107&_nc_oc=AQmT0sAPnndAGC4_RRQc3QFQ0SSMZtel0fHw_HH0OcioZ8-IgAbSooFKULlOm5PcpD0&_nc_ht=scontent.fmoc4-1.fna&oh=6124da642c855df09ed2fa06b1a521d1&oe=5E22E962" width="500" height="250">
            </aside>
        </main>
    </section> --}}

    <div class="content">
           <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="/slide1.png" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                        <img src="/slide2.png" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                        <img src="/slide3.png" class="img-fluid d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="/slide4.png" class="img-fluid d-block">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </div>

</section>
<style>
    .divisory-primary{
        background-color: #bf3d03;
        color: antiquewhite;
        text-align: center;
        font-size: 150%;
        padding: 1%;
    }




</style>

