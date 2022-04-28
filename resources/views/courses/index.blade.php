@extends('applayouts.master')

<!-- Content Wrapper. Contains page content -->
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
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('courses.create')}}" class="btn btn-success">Add Course</a>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
             
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Age</th>
                        <th>Seat</th>
                        <th>Time</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                  
                    @forelse($courses as $course)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->description}}</td>
                        <td>{{$course->age}}</td>
                        <td>{{$course->seat}}</td>
                        <td>{{$course->time}}</td>
                        <td>{{$course->fee}}</td>
                        <td><button class="btn btn-warning">Edit</button> <button class="btn btn-danger">Delete</button></td>
                    </tr>                    
                    @empty
                    <tr>
                      <td colspan="8">No more courses</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection