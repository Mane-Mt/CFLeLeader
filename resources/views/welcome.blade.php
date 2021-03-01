@extends('layouts/master')

@section('title','index')
@section('main')
<style>
.carousel{
  background:#000;
}
.overlay-img{
  opacity: 0.7;
}
</style>
@include('layouts/partials/_header')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>{{config('app.name')}}</h1>
      {{-- <h2>On est une equipe de formateur dans plusieurs domaines comme"la conduite et l'Informatique"</h2> --}}
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Historique</h3>
              <p>
            Les graves distorsions et inefficacités dont souffraient les systèmes éducatifs africains malgré
            l'absorption d'importantes ressources publiques depuis plus d'une trentaine d'années avaient amené certains gouvernements africains, sur conseil de la Banque Mondiale, à adopter des stratégies visant à une réorientation des ressources
            disponibles vers les Enseignements Professionnalisés...         
            </p>
              <a href="/historique" class="about-btn">lire la suite<i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <h4>notre mission</h4>
                  <p>la mission du cabinet 3A, depuis 2014 est de
                    former des hommes et des femmes de qualité, alliant la connaissance intellectuelle et pratique aux
                    valeurs morales
                    </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <h4>Notre Objectif</h4>
                  <p> Pour accompagner les diplomés de nos école privé et public a
                    mieux s'adapter dans cette professionel en
                    pleine mutation le cabinet 3A se propose de
                    donner ses formations adéquat et adapter à notre environnement
                  </p>
                </div>
                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <h4 style="display:inline-block">Actualités ou Informations</h4>
                  <p>
                  @php
                      $actualites = getActualites();
                      $nbreActu = actusNumber();
                      $cpt = 0;
                      
                    @endphp
                    @if($actualites->isEmpty())
                    <div class="carte alert alert-primary">Aucune Information disponible pour le moment</div>
                    @else

                   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
  
                    @for($i = 0; $i < $nbreActu; $i++)
                      <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{$i==0 ? 'active' :''}}"></li>
                    @endfor
                      
                    </ol>
                    <div class="carousel-inner">
                      @foreach($actualites as $actu)
                        <div class="carousel-item {{ $cpt==0 ? 'active' : ''}}">
                        <div class="overlay-img">
                          <img class="d-block w-100" src="{{ asset('storage/'.$actu->image)}}" alt="First slide" height="300" width="auto">
                       </div>
                       <div class="carousel-caption d-none d-md-block">
                          <h5>{{$actu->titre}}</h5>
                          <p style="color:white;">{{substr(nl2br($actu->content), 0, 100)}} ...</p>
                          <a href="/actualite/{{$actu->id}}" class="btn btn-primary">Lire la suite</a>
                        </div>
                      </div>
                      @php($cpt++)
                      @endforeach
                    
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  @endif
                  </p>
                  
                </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Nos Services</h2>
          <p>Nous offrons des formations et des accompagnements dans plusieurs domaine notament :</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><img src="assets/img/services/conduite.png" height="100" width="auto"></i></div>
              <h4 class="title"><a href="">La Auto-Ecole</a></h4>
              <p class="description">Nous donnons la meilleur formation en conduite  ou auto-école avec un permis assuré</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img src="assets/img/services/compta.png" height="100" width="auto"> </div>
              <h4 class="title"><a href="">Formation comptable</a></h4>
              <p class="description">Faites vous formés dans les logiciels de ténue de la comptabilité telsque Sage Saari  etc ..</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><img src="assets/img/services/info.png" height="100" width="auto"></div>
              <h4 class="title"><a href="">Informatique</a></h4>
              <p class="description">Nous offrons des formations en initiation à l'informatique et en developpement web</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><img src="assets/img/services/artInfo.png" height="100" width="auto"></div>
              <h4 class="title"><a href="">Vente des materiels informatiques</a></h4>
              <p class="description">Faites vous formés en secretariat et la bureautique</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Formations</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <?php $formations = getFormations() ?>
        
        @if($formations->isNotEmpty())
        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Conduite</li>
              <li data-filter=".filter-app">Informatique</li>
              <li data-filter=".filter-card">Comptabilite</li>
            </ul>
          </div>
        </div>
        
          <div class="row portfolio-container" data-aos="fade-up">
             @foreach ($formations as $formation)
                  {{--  <div class="row portfolio-container" data-aos="fade-up">  --}}

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap text-center">
                      <img src="{{ asset('storage/'.$formation->image)}}" class="img-fluid" alt="{{($formation->libelle)}}" height="4" width="200">
                      <div class="portfolio-links">
                        <a href="{{ asset('storage/'.$formation->image)}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                        @if($formation->active=='1')
                        <a href="/formationData/{{$formation->id}}" title="Plus de Details"><i class="bx bx-link"></i></a>
                        @endif
                      </div>
                    </div>
                    <div class="formation-title">{{($formation->libelle)}}</div>
                  </div>

              @endforeach 
      
          @else
           <div class="carte alert alert-primary">Aucune formation n'est disponible pour le moment</div>
          @endif
         </div> 
      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Formateurs</h2>
          <p>Nous disposons des meilleurs formateurs très très compétent dans leurs domaines , en voici quelques uns !!</p>
        </div>
       
          
         <?php
           $formateurs = getFormateurs()
         ?>
        
         @if($formateurs->isNotEmpty())
         <div class="owl-carousel testimonials-carousel">
           @foreach($formateurs as $formateur)
             <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$formateur->motDuFormateur}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{ !empty($formateur->image) ? asset('storage/'.$formateur->image) : asset('assets\img\default-profile.png')}}"  class="testimonial-img" alt="">
            <h3>{{$formateur->nom.' '.$formateur->prenoms}}</h3>
            <h4>{{$formateur->matiere}}</h4>
          </div>
          </div>
           @endforeach
         @else
           <div class="carte alert alert-primary">Aucun formateur n'est disponible pour le moment</div>
        @endif
        
     
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Equipe</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

     <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/tchalla.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>TChALLA Alon-Egnim</h4>
                <span>Directeur </span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="{{asset('assets\img\default-profile.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Directeur</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="{{asset('assets\img\default-profile.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Secretaire</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
        
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
          <p>Vous pouvez nous contacter pour d'eventuel question , suggestion ou proposition sur nos contacts</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Addresse</h3>
              <p> AGBALEPEDO,Avenue de la chance <br> <strong>LOME-TOGO</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>sergetchalla.alon@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><strong>+228 91212351/
                 99814744</strong></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.59893001946!2d1.2014970141875307!3d6.184396445522749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159731bdcc2c1%3A0x58bfcc572a7c6c9c!2sCabinet%203A!5e0!3m2!1sfr!2stg!4v1610714468007!5m2!1sfr!2stg" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="/savecontact" method="POST" class="contact-form" id="#message">
              {{csrf_field()}}
              {{ method_field('POST') }}
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required data-rule="minlen:4" data-msg="Le nom doit contenir au minimu 4 charactères" required class="@error('name') is-invalid @enderror"/>
                  @error('name')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                   <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required data-rule="email" data-msg="S'il vous plait ! veuillez un email valide" class="@error('email') is-invalid @enderror"/>
                  @error('email')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required data-rule="minlen:4" data-msg="le sujet doit contenir au minimun 8 caractère !" class="@error('subject') is-invalid @enderror"/>
                @error('subject')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                 <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" required data-rule="required" data-msg="Veuillez saisir votre message ou suggestion !" placeholder="Message"class="@error('Message') is-invalid @enderror"/></textarea>
                  @error('Message')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre Message à été envoyé. Merci !</div>
              </div>
              <div class="text-center"><button type="submit" class=" btn btn-primary">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
