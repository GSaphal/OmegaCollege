@extends('layouts.app')
@section('title')
E-Library | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
   
   <div class="row justify-content-center">
       <div class="col-xl-12 mb-5 mb-xl-0">
       @include('flash-message')

           <div class="card shadow">
               <div class="card-header border-0">
                   <div class="row align-items-center">
                       <div class="col">
                           <h3 class="mb-0">E-Library</h3>
                       </div>
                       <div class="col text-right">
                           <a href="{{route('library.create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add a Book</a>
                       </div>
                   </div>
                   <div class="row pt-2">
                       <div class="col-md-6">
                           @if (session('status'))
                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {{ session('status') }}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                           @endif
                       </div>
                   </div>
                   
               </div>
               <!-- Page Content -->
<div class="container-fluid">


<div class="row">
@foreach($library as $l)


  <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
    <div class="card" style="height:250px;">
    <object  data="{{asset('/storage/'.$l->book)}}" height='250'>Click here to download</object> 
   


    </div>
  </div>
@endforeach




 

</div>
<!-- /.row -->

<!-- Pagination -->
<!-- <ul class="pagination justify-content-center">
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">1</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">2</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#">3</a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
  </li>
</ul> -->

</div>
<!-- /.container -->
                </div>
       </div>
    
   </div>
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush