@extends('templates.default')

@section('content')
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div data-aos="fade" class="swiper-slide" style="background-image:url(&quot;assets/img/1.jpg&quot;);"></div>
            <div class="swiper-slide" style="background-image:url(&quot;assets/img/2.jpg&quot;);"></div>
            <div class="swiper-slide" style="background-image:url(&quot;assets/img/3.jpeg&quot;);"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="projects-horizontal">
    <div class="container" data-aos="fade-up">
        <div class="intro">
            <h2 class="text-center">Kegiatan Terbaru</h2>
            <p class="text-center">daftar kegiatan bla bla</p>
        </div>
        <div class="row projects">
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                    <div class="col">
                        <h3 class="name">Rully Ikhsan</h3>
                        <p class="description">N/A</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                    <div class="col">
                        <h3 class="name">Adinda&nbsp;</h3>
                        <p class="description">Muslimah</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
                    <div class="col">
                        <h3 class="name">Agustia</h3>
                        <p class="description">Kalem</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/minibus.jpeg"></a></div>
                    <div class="col">
                        <h3 class="name">Cahyo</h3>
                        <p class="description">Kocak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection