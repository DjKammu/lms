@extends('layouts.app')

@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url({{ url('images/bg_2.jpg') }}); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> 
              <span class="mr-2"><a href="{{ url('/courses') }}">Courses</a></span> 
              <span>{{ @$course['title'] }}</span></p>
            <h1 class="mb-3 bread">{{ @$course['title'] }}</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    <section class="ftco-section">
      <div class="container">
        <div class="row">
        <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">{{ @$course['title'] }}</h2>
            <p>
            <img src="{{ url(\Storage::url($course['image'])) }}" alt="" class="img-fluid">
            </p>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-course-tab" data-toggle="pill" href="#pills-course" role="tab" aria-controls="pills-course" aria-selected="false">Course Outline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-comments-tab" data-toggle="pill" href="#pills-comments" role="tab" aria-controls="pills-comments" aria-selected="false">Comments</a>
                </li>
              </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                {!! @$course['description'] !!}
              </div>


              <div class="tab-pane fade" id="pills-course" role="tabpanel" aria-labelledby="pills-course-tab">...</div>


              <div class="tab-pane fade" id="pills-comments" role="tabpanel" aria-labelledby="pills-comments-tab">...</div>
            </div>
        </div>
        
        <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>

          </div>  
        </div>

        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Popular Courses we offer</h2>
          </div>
        </div>
        <div class="row">
          @foreach($courses as $course)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="course align-self-stretch">
              <a href="{{ route('course.show',$course->slug)}}" class="img" 
                style="background-image: url( {{ url(\Storage::url($course->image)) }})"></a>
              <div class="text p-4">
                <p class="category"><span class="price">Free</span></p>
                <!-- <p class="category"><span>English</span> <span class="price">$250</span></p> -->
                <h3 class="mb-3"><a href="#">{{ $course->title}}</a></h3>
                <p>{{ Str::limit(strip_tags($course->description),100) }}</p>
                <p><a href="{{ route('course.show',$course->slug)}}" class="btn btn-primary">Enroll now!</a></p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>

      </div>
    </section>
@endsection
