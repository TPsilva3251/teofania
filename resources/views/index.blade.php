@include('layout')
<section>
    <br><br>
    <div class="divisory-primary"> Novidades</div>
    <br><br><br><br>
    <section class="carousel">
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
    </section>

</section>
<style>
    .divisory-primary{
        background-color: #bf3d03;
        color: antiquewhite;
        text-align: center;
        font-size: 150%;
        padding: 1%;
    }


    .carousel {
        width: 100%;
        height: 100%;
        background-color: #BF3706;
        transform: translateZ(0);
    }

    .carousel input {
        position: absolute;
        left: -10000px;
    }

    .carousel__stage {
        overflow: hidden;
        font-size: 0;
        white-space: nowrap;
        width: 100%;
        height: 50%;
        transition: text-indent 600ms;
        position: relative;
    }

    .carousel__item {
        display: inline-block;
        width: 100%;
        height: 100%;
        overflow: hidden;
        text-indent: 0;
        opacity: 0.6;
        text-align: center;
    }

    .carousel__image {
        /* height: 50%; */
        /* width: auto; */
        display: inline-block;
    }

    .carousel__next,
    .carousel__prev {
        display: none;
        position: absolute;
        top: 50%;
        color:thistle;
        /* background: rgba(100,100,100,100); */
        z-index: 1;
        font-size: 1rem;
        padding: 20px;
        cursor: pointer;
        margin-left: 25%;
        margin-right: 25%;
    }



    .carousel__prev {
        left: 0;
    }

    .carousel__prev:after {
        content: ' ◄ ';
        display: inline-block;
    }

    .carousel__next {
        right: 0;
    }

    .carousel__next:after {
        content: ' ► ';
        display: inline-block;
    }

    #carousel1:checked ~ .carousel__stage .carousel__item:nth-child(1),
    #carousel2:checked ~ .carousel__stage .carousel__item:nth-child(2),
    #carousel3:checked ~ .carousel__stage .carousel__item:nth-child(3),
    #carousel4:checked ~ .carousel__stage .carousel__item:nth-child(4) {
        opacity: 1;
    }

    #carousel1:checked ~ .carousel__stage {
        text-indent: 0;
    }

    #carousel2:checked ~ .carousel__stage {
        text-indent: -100%;
    }

    #carousel3:checked ~ .carousel__stage {
        text-indent: -200%;
    }

    #carousel4:checked ~ .carousel__stage {
        text-indent: -300%;
    }

    #carousel1:checked ~ .carousel__stage .carousel__item:nth-child(1) .carousel__prev,
    #carousel1:checked ~ .carousel__stage .carousel__item:nth-child(1) .carousel__next,
    #carousel2:checked ~ .carousel__stage .carousel__item:nth-child(2) .carousel__prev,
    #carousel2:checked ~ .carousel__stage .carousel__item:nth-child(2) .carousel__next,
    #carousel3:checked ~ .carousel__stage .carousel__item:nth-child(3) .carousel__prev,
    #carousel3:checked ~ .carousel__stage .carousel__item:nth-child(3) .carousel__next,
    #carousel4:checked ~ .carousel__stage .carousel__item:nth-child(4) .carousel__prev,
    #carousel4:checked ~ .carousel__stage .carousel__item:nth-child(4) .carousel__next {
        display: block;
    }
</style>
