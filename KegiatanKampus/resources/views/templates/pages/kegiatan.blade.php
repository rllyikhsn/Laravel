@extends('templates.default')

@section('content')
<div class="article-list">
    <div class="container" data-aos="fade-up">
        <div data-aos="fade-up" class="intro">
            <h2 class="text-center">Kegiatan UKM</h2>
            <p class="text-center">Semua daftar kegiatan</p>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                <h3 class="name">Judul kegiatan</h3>
                <p class="description">bla bla</p><a href="#" class="action"></a></div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                <h3 class="name">Adinda</h3>
                <p class="description">Jutek</p><a href="#" class="action"></a></div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                <h3 class="name">Agustia</h3>
                <p class="description">Baik</p><a href="#" class="action"></a></div>
        </div>
    </div>
</div>
@endsection