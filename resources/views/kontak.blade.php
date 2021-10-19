@extends('layout.master')
@section('title','kontak')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@section('judul_halaman','Kontak')
    
@section('konten')
    <br/>
    <br/>
    <br/>
    <br/>
        <div style="margin: 80px" class="container-contact">
            <div class="fhoto-peta">
             <a href="">
                <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60912418492!2d107.57311667705362!3d-6.903273917378883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1633191117312!5m2!1sid!2sid" width="1220" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </a>
        </div>
            <h3 class="py-5 fw-bold">Kontak kami</h3>
        </div>
        <div class="container-form">
            <div class="textarea">
                <textarea class="form-control " id="deskripsi" name="deskripsi" placeholder="Deskripsi" ></textarea>
            <div class="mb-4">
                <input type="text" class="form" id="subject" name="subject" placeholder="Subject">
                <input type="text" class="form" id="name" name="name" placeholder="Name">
                <input type="email" class="form" id="email" name="email" placeholder="Email">
                <a href=""><button class="inbox">kirim<i class="bi bi-inbox-fill"></i></button></a>
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container-contact-1">
            <section>
            <div class="icon-email"><i class="bi bi-envelope"></i>
            <h4>email</h4>
            <p>Tropisiaminal@gmail.com</p>
            </div>
            </section>
            <section>
            <div class="icon-phone"><i class="bi bi-telephone"></i>
            <h4>Phone</h4>
            <p>+62 8123 4567 890</p>
            </div>
            </section>
            <section>
            <div class="icon-location"><i class="bi bi-geo-alt"></i>
            <h4>Location</h4>
            <p>Bandung, Indonesia</p>
            </div>
            </section>
        </div>
        
    <br/>
@endsection
 
