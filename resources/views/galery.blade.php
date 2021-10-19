@extends('layout.master')
@section('title','Tropisiaminal|Galery')

@section('judul_halaman','Galery')
@section('konten')
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
<div class="slider-container">

    <div class="slide active"><img src="img/Group 77@2x.png" alt=""></div>
    <div class="slide"><img src="img/hans-veth-o33FMDaXJS8-unsplash@2x.png" id="slide"></div>
    <div class="slide"><img src="img/smit-patel-dGMcpbzcq1I-unsplash@2x.png" id=""></div>
    
    <button class="arrow left-arrow" id="left">
     <img style="width: 30px" src="img/Arrow 1.png" alt="">
    </button>

    <button class="arrow right-arrow" id="right">
      <img style="width: 30px" src="img/Arrow 1.png" alt="">
     </button>

  </div>
  <div class="grid">
    <div class="grid-inner">
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
     <div class="item">
      <div class="item-inner"></div>
     </div>
    </div>
   </div>
  <script>
      const body = document.body
    const slides = document.querySelectorAll('.slide')
    const leftBtn = document.getElementById('left')
    const rightBtn = document.getElementById('right')

    let activeSlide = 0

    rightBtn.addEventListener('click', () => {
    activeSlide++

    if (activeSlide > slides.length - 1) {
        activeSlide = 0
    }

    setBgToBody()
    setActiveSlides()
    })


    leftBtn.addEventListener('click', () => {
    activeSlide--

    if (activeSlide < 0 ) {
        activeSlide = slides.length - 1
    }

    setBgToBody()
    setActiveSlides()
    })

    setBgToBody()


    function setBgToBody() {
    body.style.backgroundImage = slides[activeSlide].style.backgroundImage
    }

    function setActiveSlides() {
    slides.forEach((slide) => slide.classList.remove('active'))

    slides[activeSlide].classList.add('active')
    }
  </script>
@endsection
