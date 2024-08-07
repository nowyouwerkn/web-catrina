@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

<style>
  .gallery-card{
    min-height: 720px !important;
  }
</style>
@endpush

@section('content')
<section class="section section-gastro intro-section">
    <img class="decorative-root root-1" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="gastro-plate plate-1 parallax" data-rellax-speed="5" src="{{ asset('img/gastro-1.png') }}" alt="">
    <img class="gastro-plate plate-2 parallax" data-rellax-speed="-4" src="{{ asset('img/gastro-2.png') }}" alt="">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="display-title btm-mr text-center">
            <h1 class="display-1">Sabor</h1>
            <p class="display-3 decorative">propuesta gastronómica</p>
          </div>
        </div>

        <div class="col-md-3 offset-md-6 position-relative">
          <p><strong>Nuestra gastronomía es un honor a la tierra mexicana.</strong></p>
          <p>Cocina tradicional y regional, cocina de autor y de temporada preparada desde nuestro horno y parilla para una experiencia inigualable. Extensos sabores y productos frescos para consentir y deleitar los paladares.</p>
          <p>La virtud de nuestro menú se distingue por la calidad, donde cuidamos la combinación perfecta entre olores, texturas, colores y sabores junto con una presentación excepcional.</p>

          <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#menuModal" class="btn btn-primary">Ver el Menú</a>
        </div>
      </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 h5" id="menuModalLabel">Selecciona el Menú</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
          <div class="table-details">
            <div class="d-flex align-items-center justify-content-between">
              <p>Desayunos</p>
              <a class="h6" href="{{ asset('files/menu_desayunos.pdf') }}" target="_blank">Descargar PDF <ion-icon name="cloud-download-outline"></ion-icon></a>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p>Bebidas</p>
              <a class="h6"  href="{{ asset('files/menu_bebidas.pdf') }}" target="_blank">Descargar PDF <ion-icon name="cloud-download-outline"></ion-icon></a>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p>Comidas y Cenas</p>
              <a class="h6"  href="{{ asset('files/menu_comidas.pdf') }}" target="_blank">Descargar PDF <ion-icon name="cloud-download-outline"></ion-icon></a>
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="full-image-wrap business-banner" style="margin-top: -100px; z-index:2;"></div>

<section id="la-frida" class="section std-p">
  <div class="container">
      <div class="row btm-mr">
          <div class="col-md-6">
              <div class="title-group">
                  <p class="wide">Cocina de nuestro México</p>
                  <h2 class="display-3">Cocina creativa con tradición</h2>
              </div>
          </div>
      </div>
  </div>
  
  <div class="container std-p pb-0">
      <div class="row">
          <div class="col-md-3 offset-md-4">
              <p>Si eres vegetariano, podremos deleitarte con platillos asombrosos de autor hechos cuidadosamente para que vivas al igual una experiencia de altura.</p>
              <p>Incluimos platillos desarrollados especialmente para recibir y consentir a las personas que viven con diabetes, ofreciendo platillos cuidados y sorprendentes, avalados por nutrición clínica.</p>
          </div>

          <div class="col-md-3 offset-md-1">
            <div class="table-details">
                <div class="d-flex align-items-center justify-content-between">
                  <p>Desayunos</p>
                  <a class="h6" style="font-size: .9em;" href="{{ asset('files/menu_desayunos.pdf') }}" target="_blank">Descargar PDF <ion-icon name="cloud-download-outline"></ion-icon></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <p>Bebidas</p>
                  <a class="h6" style="font-size: .9em;"  href="{{ asset('files/menu_bebidas.pdf') }}" target="_blank">Descargar PDF <ion-icon name="cloud-download-outline"></ion-icon></a>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <p>Comidas y Cenas</p>
                  <a class="h6" style="font-size: .9em;"  href="{{ asset('files/menu_comidas.pdf') }}" target="_blank">Descargar PDF <ion-icon name="cloud-download-outline"></ion-icon></a>
                </div>
                <a href="{{ route('gastro') }}" class="btn btn-block btn-box">Más Información +</a>
            </div>
          </div>
      </div>
  </div>
</section>

<section id="bar-kahlo" class="section std-p">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel gallery-carousel mb-5">
              <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/sabor-1.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/sabor-2.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/sabor-3.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/sabor-4.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/sabor-5.jpg') }}" alt="">
                </div>
              </div>
              <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/sabor-6.jpg') }}" alt="">
                </div>
              </div>
          </div>
          </div>
      </div>
  
      <div class="row align-items-center mt-5">
          <div class="col-md-5 offset-md-1">
              <div class="title-group">
                  <p class="wide">Hacienda Catrina</p>
                  <h2 class="display-3">Bar Kahlo</h2>
                  <p class="decorative display-3">es sabor</p>
              </div>
          </div>
          <div class="col-md-4 offset-md-1">
              <p>En Bar Kahlo contamos con una variedad de destilados y vinos nacionales e importados premium para todos tus invitados, aquí mismo, en Puerto Interior.</p>
              <p>Reserva y permítenos atenderte con nuestra hospitalidad para una estancia excepcional. Todas las amenidades fueron seleccionadas para darte una magnífica experiencia con un toque de auténtico lujo mexicano.</p>
          </div>
      </div>
  </div>  
</section>

<div class="section">
    @include('layouts.utilities.scroll_text')
    @include('layouts.utilities.cta_video')
  </div>
@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.gallery-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
  });
</script>
@endpush
