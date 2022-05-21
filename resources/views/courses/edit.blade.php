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
            <a href="{{ route('courses.index')}}" class="btn btn-success">Back to Courses</a>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
             
                <form method="post" action="{{route('courses.update',$course->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label"> Name</label>
                        <input type="text" name="name" class="form-control" value="{{$course->name}}">
                        @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Description</label>
                        <input type="text" name="description" class="form-control" value="{{$course->description}}">
                        @error('description')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Age</label>
                        <input type="text" name="age" class="form-control" value="{{$course->age}}">
                        @error('age')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Seat</label>
                        <input type="number" name="seat" class="form-control" value="{{$course->seat}}">
                        @error('seat')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Fee </label>
                        <input type="text" name="fee" class="form-control" value="{{$course->fee}}">
                        @error('fee')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time</label>
                        <input type="text" name="time" class="form-control"value="{{$course->time}}">
                        @error('time')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" name="submit" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
@endsection