@extends('layouts.frontend.app')

@section('title')
Home | Omega Secondary School
@endsection

@section('content')
<!--Start Banner-->
<section class="banner">
      <div
        id="carouselExampleIndicators"
        class="carousel slide carousel-fade"
        data-ride="carousel"
        data-interval="3000"
      >
        <div class="carousel-inner" role="listbox">
          <div
            class="carousel-item active"
            style="background-image: url('./assets/img/banner/bannerslider1.jpg');"
          >
            <div class="overlay">
              <div class="carousel-caption justify-content-left d-md-block">
                <h6>10 Years of Excellence!</h6>
                <h1>Welcome to Omega Family</h1>
                <div class="line"></div>
                <div class="row">
                <div class="col-md-10">
                <p class="d-block">
                The people opening the website are one of the few optimistic persons in the world who are trying to find the best school in Nepal. Omega S.S./College is an institution constantly upgrading with the time and need of the present generation. Omega welcomes you to see its state-of-the-art infrastructure equipped with the modern devices and softwares gifted by the innovative technology world. 
                </p>
                </div>
                </div>
              
                <a href="#about"
                  ><button class="btn btn-transparent banner-btn">
                    Find About Us
                  </button></a
                >
              </div>
            </div>
          </div>

          <div
            class="carousel-item"
            style="background-image: url('./assets/img/banner/bannerslider2.jpg');"
          >
            <div class="overlay">
              <div class="carousel-caption justify-content-left d-md-block">
                <h6>10 Years of Excellence</h6>
                <h1>Welcome to Omega Family</h1>
                <div class="line"></div>
                <div class="row">
                <div class="col-md-10">
                <p class="d-block">
                The people opening the website are one of the few optimistic persons in the world who are trying to find the best school in Nepal. Omega S.S./College is an institution constantly upgrading with the time and need of the present generation. Omega welcomes you to see its state-of-the-art infrastructure equipped with the modern devices and softwares gifted by the innovative technology world. 
                </p>
                </div>
                </div>
                <a href="#about">
                  <button class="btn btn-transparent banner-btn">
                    Find About Us
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </section>
    <!--End Banner-->
    <!--Start Services-->
    <section class="services">
      <div class="container">
        <div class="row justify-content-center">
          <div class="jumbotron services-box">
            <div class="row">
              <div class="col-md-4 ">
                <div class="card services-card" >
                  <img src="./assets/img/services/1.jpg" class="card-img-top" alt="...">
                  <div class="card-body p-1">
                    <h5 class="card-title pt-2">Pre-School</h5>
                    <p class="card-text pt-2">Junior wing which runs classes for Play Group, Nursery, LKG, UKG, One, Two, and Three grade students. </p>
                    <ul class="list-group w-100 services-card-list">
                      <a href="/pre-school/about"><li class="list-group-item services-card-list1">About Us <i class="fa fa-angle-right float-right px-2" aria-hidden="true"></i></li></a>
                      <a href="/pre-school/admission"> <li class="list-group-item services-card-list2">Admission  <i class="fa fa-angle-right float-right px-2" aria-hidden="true"></i></li></a>
                
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="card services-card" >
                  <img src="./assets/img/services/2.jpg" class="card-img-top" alt="...">
                  <div class="card-body p-1">
                    <h5 class="card-title pt-2">Middle School</h5>
                    <p class="card-text pt-2">Omega middle school runs classes from grade 4 to grade 10 and bridges the gap between childhood and adolescence.</p>
                    <ul class="list-group w-100 services-card-list">
                     <a href="/middle-school/facilities"><li class="list-group-item services-card-list1">Facilities <i class="fa fa-angle-right float-right px-2" aria-hidden="true"></i></li></a> 
                     <a href="/middle-school/admission"><li class="list-group-item services-card-list2">Admission  <i class="fa fa-angle-right float-right px-2" aria-hidden="true"></i></li></a>
                
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="card services-card" >
                  <img src="./assets/img/services/3.jpg" class="card-img-top" alt="...">
                  <div class="card-body p-1">
                    <h5 class="card-title pt-2">Higher School</h5>
                    <p class="card-text pt-2">Omega senior school offers programs for grade XI and XII in Science, Management, Humanities, and Law stream.</p>
                    <ul class="list-group w-100 services-card-list">
                      <a href="/senior-school/admission"><li class="list-group-item services-card-list1">Admission <i class="fa fa-angle-right float-right px-2" aria-hidden="true"></i></li></a>
                      <a href="/senior-school/courses"> <li class="list-group-item services-card-list2">Courses  <i class="fa fa-angle-right float-right px-2" aria-hidden="true"></i></li></a>
                
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--End Services-->
    <!--Start About-->
    <section class="about" id="about">
      <div class="container">
          <div class="row about-row">
            <div class="col-md-6 mt-4">
              <img src="./assets/img/about/about.JPG" class="img-fluid">
            </div>
            <div class="col-md-6 p-3 about-text">
              <h2>We are expert of the Best Educational Institutions.</h2>
              <h4>10 Years of Excellence!</h4>
              <p>Situated at the prime location of Kathmandu valley, Kumaripati, Lalitpur, Omega secondary school has proved its
academic strength by making a difference to individuals and community. We are proud to look back over a decade
of enriching thousands of lives with the quality education making them a successful human.
Omega takes this opportunity not only to celebrate past achievements but also to look for the future as Omega
continues to deliver leaders who can truly make a difference to the community. Based on the pride past
achievements, Omega is continually improving its overall infrastructure and education delivery methods linking
with modern information technology.<br><br>
Come, see, and experience the lively vibrancy of the school atmosphere!
You are always welcome at Omega School/College.</p>
            
                <a href="/contact"><button class="btn btn-primary ">Contact Us</button></a>
            
            </div>
          </div>
      </div>
    </section>
    <!--End About-->
    <!--Start Awards-->
    <section class="awards mt-4">
      <div class="awards-overlay">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-md-text-center award-text">
              <h1>Our Acheivements</h1>
              <p>All these years, our students acheivement is what makes us proud.</p>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
    
                <div class="p-5 rounded">
                    <!-- Bootstrap carousel-->
                    <div class="carousel slide" id="carouselExampleIndicators1" data-ride="carousel">
                  


                        <!-- Bootstrap inner [slides]-->
                        <div class="carousel-inner px-5 pb-4">
                            <!-- Carousel slide-->
                            <div class="carousel-item active">
                                <div class="media">
                                   <img src="{{asset('assets\img\awards\1.JPG')}}" />
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                            <div class="media">
                                   <img src="{{asset('assets\img\awards\2.JPG')}}"  />
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                            <div class="media">
                                   <img src="{{asset('assets\img\awards\3.JPG')}}"  />
                                </div>
                                </div>
                                <div class="carousel-item">
                            <div class="media">
                                   <img src="{{asset('assets\img\awards\4.JPG')}}" />
                                </div>
                                </div>
                            </div>
                        </div>


                        <!-- Bootstrap controls [dots]-->
                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left text-dark text-lg"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
   
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Awards-->
<!--Start News-->
    <section class="news">
      <div class="container">
        <h1>Academic's News</h1>

        <div class="row justify-content-center  news-row">
     
   
 
    @foreach($news->slice(0,3) as $n)
          <div class="col-md-4">
            <div class="card" >
              <div class="card-image">
              <img src="{{asset('storage/'.$n->news_image)}}"   class="card-img-top" alt="...">
              <div class="img-card-overlay text-center"><i class="fas fa-paperclip"></i></div>
            </div>
              <div class="card-body">
                <div class="card-posted"><i class="fa fa-clock px-1 my-2" aria-hidden="true"></i>{{$n->created_at->diffForHumans()}}</div>
                <span class="badge badge-secondary text-light font-weight-0 mb-2">{{$n->news_category}}</span>
                <h5 class="card-title">{{$n->news_title}}</h5>
                <p class="card-text">{{$n->news_description}}</p>
                <a href="/news/{{$n->id}}" class="btn btn-primary btn-news">Read More</a>
              </div>
            </div>
          </div>
          @endforeach   

    
          </div>
        </div>
      </div>
    </section>
<!--End News-->
<!--Start Events-->
<section class="events">
  <div class="container">
    <div class="row">
      <div class="col-md-7 events-col">
        <div class="events-title">Upcoming Events</div>
        <div class="line"></div>
        @foreach($events->slice(0,3) as $e)
        <div class="card" >
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{asset('storage/'.$e->event_image)}}" style="height:150px;"  class="card-img">
            </div>
            <div class="col-md-8">
              <div class="card-body">
              <a href="/events/{{$e->id}}">  <h5 class="card-title">{{$e->event_title}}</h5></a>
                <span class="badge badge-secondary text-light font-weight-0 mb-2">{{$e->event_category}}</span>

                <p class="card-text"><i class="fa fa-calendar-alt px-2" aria-hidden="true"></i> Starting on: {{$e->event_start}}</p>
              </div>
            </div>
          </div>
     
    
        </div>                  

                  @endforeach
    
        
      </div>
      <div class="col-md-5 testimonails">
        <div class="testimonails-title">Our Happy Students</div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner mt-5">
              <div class="item carousel-item active">
                  <div class="img-box"><img src="{{asset('assets\img\subas.JPG')}}" alt=""></div>
                  <p class="testimonial">Being a student of OMEGA, I can vouch for the efficiency of this college for me and for all
the other interested students for that matter intended for opening up, augmenting and
expanding the knowledge in the field of engineering.</p>
                  <p class="overview"><b>Mr. Subash Neupane</b>Mechanical Engineer</p>
                  <div class="star-rating"> </div>
              </div>
              <div class="item carousel-item">
                  <div class="img-box"><img src="{{asset('assets\img\rabindra.JPG')}}" alt=""></div>
                  <p class="testimonial">The amalgamation of theoretical foundation with the practical knowledge offered by the
OMEGA has aided me to develop and understand the deep insights into the medicine subject.
It has equipped me to break the MBBS course difficulty a hype.</p>
                  <p class="overview"><b>Dr. Rabindra Oli</b>M.B.B.S. </p>
                  <div class="star-rating"> </div>
              </div>
              <div class="item carousel-item">
                  <div class="img-box"><img src="{{asset('assets\img\pankaj.JPG')}}" alt=""></div>
                  <p class="testimonial">OMEGA provides great opportunity for student to broaden their knowledge beyond their field
of studies. Joining OMEGA is my best decision as it has helped me to show what I can
achieve and also the path through which I can achieve my goal.</p>
                  <p class="overview"><b>Pankaj Shah</b>C.A.</p>
                
              </div>
          </div> <!-- Carousel controls --> <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
      </div>
      </div>
    </div>
    </div>
</section>
<!--End Events-->
@endsection
