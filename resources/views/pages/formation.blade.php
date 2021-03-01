@extends('layouts/master')
@section('title','formation')
@section('title')
  Formation Details
@endsection

@section('main')
@include('layouts/partials/_header_formation')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Les details de la formation</h2>

        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ asset('storage/'.$formation->image)}}" class="img-fluid" alt="">
            {{--  <img src="{{asset('assets/img/portfolio/portfolio-details-2.jpg')}}" class="img-fluid" alt="">
            <img src="{{asset('assets/img/portfolio/portfolio-details-3.jpg')}}" class="img-fluid" alt="">  --}}
          </div>
 
          <div class="portfolio-info">
            <h3>{{$formation->libelle}}</h3>
            <ul>
            <?php session(['formId'=>$formation->id ]);?>
              <li><span class="pay-info">Frais d'inscription </span> : <span class="insPrice">{{$formation->inscription_price}} F CFA</span></li>
              @if(isset($formation->promo) AND !$formation->promo=='0')
                    <li class="oldPrice"><span class="pay-info"> Frais de Formation</span> : <span class="formPrice"> {{$formation->formation_price}} F CFA</span></li>
                    <li><span class="pay-info"> Promotion</span> : <span class="formPrice">{{$formation->promo_price}} F CFA</span></li>
                  <?php $total = $formation->inscription_price + $formation->promo_price ; ?> 
            @else
                <li><span class="pay-info"> Frais de Formation</span> : <span class="formPrice">{{$formation->formation_price}} F CFA</span></li>
                <?php $total = $formation->inscription_price + $formation->formation_price ;  ?>
            @endif
                <li><strong>Total</strong>:<span class="totalPrice">{{$total}} F CFA</span></li>
                  <?php session(['amount'=>$total]);?>
                  <?php session(['description'=>'Frais de formation de: '.$formation->libelle.'']);?>
              <li> <a href="/inscription" class=" btn btn-suscribe btn-block">s'inscrire</a> 
            </li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Plus de Details</h2>
          <p>
            {{$formation->description}}
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection
 
