@extends('layouts.frontend.app')

@section('title')
Message from Chairperson | Omega Secondary School
@endsection

@section('content')
  
 <!--Page View-->
 <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>Message from Chairperson</h2>
          </div>
          <div class="about-links">
            Team-Omega <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Message</span>
          </div>
        </div>
        </div>
      </section>
    </section>
    <!--End Page View-->
    <section class="message">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-5">
                    <img src="{{asset('assets\img\shishir.PNG')}}" class="img-fluid mt-4">
                    </div>
<div class="col-md-7 mt-4">
<p>Dear Prospective students,<br>With the profound joy and all ones heart, OMEGA
welcomes you to the realm of academy which
serves up the students with learning experience
tantamount to the real turning point to produce
personification of savants in science, management,
humanities and Law. This institution goes the whole
hog to be instrumental in scaling up the successful
future careers of the students by emphasizing an
individual care, career counselling and guidance.
<br>Dear Students, it is my message to all of you that you
are capable of amazing things. You have only got
three choices in life, give up, give in or give it all
you’ve got.</p>
<div class="message-name ">Shishir Raj Gautam</div>
<div class="message-designation ">Chairperson</div>


</div>
</div>
</div>
</section>
@endsection
 
 
 
