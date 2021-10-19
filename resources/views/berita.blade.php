@extends('layout.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
@section('title','Tropisiminal | berita')

@section('judul_halaman','Berita')

@section('konten')
    <div class="body">
        <div class="d-flex ">
            <div class="item flex justify-content-start" style="margin-left: 12%; margin-top:10%">
                <img class="img-start position-absolute" src="img/zoe-reeve-9hSejnboeTY-unsplash@2x.png" width="250" height="450" alt="">
                <ul style="margin-left: 42%">
                    <li style="list-style: none; width:200px;"><img src="img/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png" width="250"></li>
                    <li style="list-style: none; width:200px;"><img src="img/david-clode-AtCChdVhAmA-unsplash@2x.png" width="250" height="280" style="margin-top: 20px;"></li>
                </ul>
            </div>
            <div class="item flex justify-content-end" style="margin-top: 14%; padding-right:10%">
                <h1 class="fw-bold">10 Hewan Herbivora <br> Yang Berbahaya</h1>
                <p class="fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, esse iure. Nostrum laboriosam animi neque nam consequatur perspiciatis rerum molestiae itaque.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam numquam deserunt facere ducimus nostrum ullam, quod minima maxime magnam accusantium, distinctio quas eos dolore excepturi sint cupiditate, delectus provident magni culpa dolorum.</p>
                <button style="padding: 15px 30px; background-color:">baca selengkapnya </button>
            </div>
        </div>
    </div>
    <div class="py-5" style="margin-left: 12%; margin-right:12%;">
        <h1 class="fw-bold">Berita Lainnya</h1>
        <div class="d-flex justify-content-start">
            <div class="card" style="width: 23rem; margin-left: 25px; top:50px;">
              <img src="img/rick-l-037fCBgZB10-unsplash@2x.png" class="img-top" width="100%;">
              <div class="body" style="background-color:rgb(243, 243, 243)">
                <h5 class="text-center fw-bold" style="margin-top:10px;">Apa kabar Kebun Binatang <br> Saat Wabah Covid-19?</h5>
                <p class="text-center">Some quick example text to build <br> on the card title and make up the bulk </p>
              </div>
            </div>
            <div class="card" style="width: 23rem; margin-left: 25px; top:50px;">
              <img src="img/hans-veth-o33FMDaXJS8-unsplash@2x.png" class="img-top" width="100%;">
              <div class="body" style="background-color:rgb(243, 243, 243)">
                <h5 class="text-center fw-bold" style="margin-top:10px;">Anugerah dari hutan<br> Indonesia</h5>
                <p class="text-center">Some quick example text to build <br> on the card title and make up the bulk </p>
              </div>
            </div>
            <div class="card" style="width: 23rem; margin-left: 25px; top:50px;">
              <img src="img/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png" class="img-top" width="100%;">
              <div class="body" style="background-color:rgb(243, 243, 243)">
                <h5 class="text-center fw-bold" style="margin-top:10px;">10 Hewan Hebivora<br> Yang Berbahaya</h5>
                <p class="text-center">Some quick example text to build <br> on the card title and make up the bulk </p>
              </div>
            </div>
          </div>
            <div class="d-flex justify-content-start py-4">
            <div class="card" style="width: 23rem; margin-left: 25px; top:50px;">
              <img src="img/TERUMBU-KARANG (1).png" class="img-top" width="100%;">
              <div class="body" style="background-color:rgb(243, 243, 243)">
                <h5 class="text-center fw-bold" style="margin-top:10px;">Terumbu Karang: pengertian,<br> Jenis,Sebaran,dan Masalah</h5>
                <p class="text-center">Some quick example text to build <br> on the card title and make up the bulk </p>
              </div>
            </div>
            <div class="card" style="width: 23rem; margin-left: 25px; top:50px;">
              <img src="img/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png" class="img-top" width="100%;">
              <div class="body" style="background-color:rgb(243, 243, 243)">
                <h5 class="text-center fw-bold" style="margin-top:10px;">Ternyata, Tanduk Rusa Berasal <br> dari Sel Kanker Tulang</h5>
                <p class="text-center">Some quick example text to build <br> on the card title and make up the bulk </p>
              </div>
            </div>
            <div class="card" style="width: 23rem; margin-left: 25px; top:50px;">
              <img src="img/mathew-schwartz-OjQgsR1oyEw-unsplash@2x.png" class="img-top" width="100%;">
              <div class="body" style="background-color:rgb(243, 243, 243)">
                <h5 class="text-center fw-bold" style="margin-top:10px;"> 4 Penyakit yang Ditularkan<br>Hewan ke Manusia </h5>
                <p class="text-center">Some quick example text to build <br> on the card title and make up the bulk </p>
              </div>
            </div>
          </div>
        </div>
        
    </div>
@endsection
