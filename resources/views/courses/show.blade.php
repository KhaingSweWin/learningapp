@extends('applayouts.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-md-12">
            <a href="{{ route('courses.index')}}" class="btn btn-success">Back to Courses</a>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 Course Name
                  
              </div>
            <div class="col-md-6">
              :{{ $course->name }}
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 Course Description
                  
              </div>
            <div class="col-md-6">
              :{{ $course->description }}
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 Age
                  
              </div>
            <div class="col-md-6">
              :{{ $course->age }}
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 Seat
                  
              </div>
            <div class="col-md-6">
              :{{ $course->seat }}
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 Course Fee
                  
              </div>
            <div class="col-md-6">
              :{{ $course->fee }}
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 Time Schedule
                  
              </div>
            <div class="col-md-6">
              :{{ $course->time }}
                
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection