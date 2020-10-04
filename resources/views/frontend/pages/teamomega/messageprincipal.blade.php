@extends('layouts.frontend.app')

@section('title')
Message from Principal | Omega Secondary School
@endsection

@section('content')
  
 <!--Page View-->
 <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>Message from Principal</h2>
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
                    <img src="{{asset('assets\img\ramesh.PNG')}}" class="img-fluid mt-4">
                    </div>
<div class="col-md-7 mt-4">
<p>Dear Students/ Guardians,<br>OMEGA is an institution which is just the job for those
students who want to remain ahead of the game
and get past the stumbling blocks in the field they
are associated with. In the meanwhile, the institution
is here to nourish, foster, back up the students in so
far as it gives rise to the multitudes of “dark horses” in
science, management, humanities and Law.<br/>
<br>
This institution can be considered as mirror of
dedicated and amical pool of learning
environment. We hold our high regard to all the
interested students.</p>
<div class="message-name ">Ramesh Adhikari</div>
<div class="message-designation ">Principal</div>


</div>
</div>
</div>
</section>
@endsection
 
 
 
