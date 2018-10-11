@extends('templates.default')

@section('content')
<div class="features-boxed">
    <div class="container">
        <div data-aos="fade-up" data-aos-delay="50" class="intro">
            <h2 class="text-center">Informasi Latihan</h2>
            <p class="text-center">Kapan Jadwal Latihan ?</p>
        </div>
        <div class="row justify-content-center features" data-aos="fade-up" data-aos-delay="150">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Lokasi Latihan</h3>
                    <p class="description">Lokasi kampus H ???</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Waktu Latihan</h3>
                    <p class="description">Jam Latihan&nbsp;</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Hari Latihan</h3>
                    <p class="description">Hari Latihan kapan saja</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-up" class="map-clean">
    <div class="container" data-aos="fade-up" data-aos-delay="250">
        <div class="intro">
            <h2 class="text-center">Lokasi latihan</h2>
            <p class="text-center">Lokasi alamatnya</p>
        </div>
    </div><iframe allowfullscreen="" frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDaEw6o8OhJvRQnTF3gI_tibMejtfasOlY&amp;q=Paris%2C+France&amp;zoom=15" data-aos="fade-up" data-aos-delay="250"></iframe></div>
<div
@endsection