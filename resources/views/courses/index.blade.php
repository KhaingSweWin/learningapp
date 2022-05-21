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
            <a href="javascript:void(0)" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#courseModal">Add Course</a>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
             
                <table class="table table-striped" id="course_table">
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
                    <tbody id="tbody">
                    @forelse($courses as $index=>$course)
                    <tr>
                        <td>{{$index+$courses->firstItem()}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->description}}</td>
                        <td>{{$course->age}}</td>
                        <td>{{$course->seat}}</td>
                        <td>{{$course->time}}</td>
                        <td>{{$course->fee}}</td>
                        <form action="{{ route('courses.destroy',$course->id)}}" method="post">
                          @csrf
                          @method('Delete')
                          <td><a class="btn btn-success" href="{{route('courses.show',$course->id)}}">View</a><a class="btn btn-warning" href="{{route('courses.edit',$course->id)}}">Edit</a> <button type="submit" class="btn btn-danger">Delete</button></td>
                        </form>
                        
                    </tr>                    
                    @empty
                    <tr>
                      <td colspan="8">No more courses</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
                {!! $courses->links() !!}
            </div>
        </div>
        <div class="row">
          <div class="col-6 bg-danger" id="adddata">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam illo consequatur inventore velit ipsum culpa ipsa distinctio excepturi vero voluptas doloribus eos nobis pariatur, perspiciatis, illum nesciunt, minus sint atque.</p>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" data-action="{{route('courses.store')}}" id="courseForm" enctype="multipart/form-data">
            
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
              <div class="mb-3">
                  <label class="form-label"> Name</label>
                  <input type="text" name="name" class="form-control" id="name">
                  @error('name')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label"> Description</label>
                  <input type="text" name="description" class="form-control" id="description">
                  @error('description')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label"> Age</label>
                  <input type="text" name="age" class="form-control" id="age">
                  @error('age')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label"> Seat</label>
                  <input type="number" name="seat" class="form-control" id="seat">
                  @error('seat')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label"> Fee </label>
                  <input type="text" name="fee" class="form-control" id="fee">
                  @error('fee')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label class="form-label">Time</label>
                  <input type="text" name="time" class="form-control" id="time">
                  @error('time')
                  <span class="text-danger"> {{ $message }}</span>
                  @enderror
              </div>
            
         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="save" >Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  
</div>
  <!-- /.content-wrapper -->
@endsection

