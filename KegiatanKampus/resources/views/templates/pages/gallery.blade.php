@extends('templates.default')

@section('content')
<div class="photo-gallery">
    <div class="container">
        <div data-aos="fade-up" data-aos-delay="50" class="intro">
            <h2 class="text-center">Gallery</h2>
            <p class="text-center">Daftar foto-foto terbaru</p>
        </div>
        <div class="row photos" data-aos="fade-up" data-aos-delay="150">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
        </div>
    </div>
</div>
@endsection