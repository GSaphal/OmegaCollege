@extends('layouts.app')
@section('title')
E-Library | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
   
   <div class="row justify-content-center">
       <div class="col-xl-12 mb-xl-0">
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

               <div class="container-fluid">
              <div class="row mt-2">
                <div class="col-md-12">
                        <form  method="get" action="/library/search/data">
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Enter a Book Name to Search">
                                    <span class="input-group-btn">
                                      <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                  </div>
                                  </form>
                      </div>
              </div>
                <div class="float-right mt-3">
                      <div class="btn-group dropleft">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Advanced Filter
                        </button>
                          <div class="dropdown-menu">

                                                        
                                                        <div class="col-md-12">
                                                        <div class="form-group">
                                                                <label class="form-control-label" for="input-grade">Grade</label>
                                                                <select class="form-control" name="grade" id="grade"  required >
                                                                <option value="11" selected >XI</option>
                                                                <option value="12" >XII</option>

                                                                        </select>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group  ">
                                                            <label class="form-control-label" for="input-faculty">Select a Faculty</label>
                                                                <select class="form-control faculty" name="faculty" id="faculty"  required >
                                                                <option value="" selected hidden></option>
                                                                        </select>
                                                        
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 stream">
                                                            <div class="form-group">
                                                            <label class="form-control-label" for="stream">Select a Stream</label>
                                                                <select class="form-control" name="stream" id="stream"   >
                                                                <option value="" selected hidden></option>


                                                                        </select>
                                                      
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 ">
                                                            <div class="form-group">
                                                              <button class="btn btn-primary  ">Filter</button>                                   
                                                      
                                                            </div>
                                                        </div>

                                          
                                                      
                          </div>
            
                      </div>
                </div>
                <h3 class="py-3">Found {{$library->count()}} results</h3>
              
                <div class="row mt-3">
                @foreach($library as $l)


                  <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                  <a href="{{asset('/storage/'.$l->book)}}" target="_blank">
                    <div class="card book-card  h-100" >
                
                    <img data-pdf-thumbnail-file="{{asset('/storage/'.$l->book)}}" class="card-img-top" data-pdf-thumbnail-height="300">
                


                    <div class="book-card-overlay">
                    <h3 style="color:white;text-align:center;font-size:1.2rem;display:flex;justify-content:center;margin-top:50px;">{{$l->book_name}}</h3>
                    </div>
                    </div>
                  </a>
                  
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
<script>
 $(document).ready(function () {              
  $('.faculty').on('change', function() {
                    if( this.value == 2 || this.value== 3 ||this.value== 4 || this.value== 5 ) $('.stream').hide();
                    if( this.value == 0 || this.value== 1) $('.stream').show();
                });
 
    });

               
         
  
var selectableValues = [
	{
  	'title' : 'Science' ,
    'values' : [
   'Physical',
   'Biological'
    ]
  } ,
  {
  	'title' : 'Management' ,
    'values' : [
        'Computer',
        'Business Maths',
        'Business Studies',
        'Economics',
        'Marketing ',
    'Travel and Mountaineering ',
    'Hotel Management '
    ]
  },
  {
  	'title' : 'Humanities' ,
   
  },
  {
  	'title' : 'Law' ,
    
  },
 
];

var $faculty = $stream = false;

jQuery(function($){

	$faculty = $('#faculty');
  $stream = $('#stream');
  
	// Populate Select One
  $.each(selectableValues, function(k,v){
  	$faculty.append('<option value="'+k+'">'+v.title+'</option>');
  });

  $faculty.on('change',function(){
  	populateSelectTwo(this.value);
  });

});

function populateSelectTwo( parentKey ){
	$('option',$stream).remove();

  $.each(selectableValues[parentKey].values, function(k,v){
  	$stream.append('<option value="'+v+'">'+v+'</option>');
  });
}

</script>
<script>
$('.dropdown-menu option, .dropdown-menu select').click(function(e) {
        e.stopPropagation();
});
</script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush