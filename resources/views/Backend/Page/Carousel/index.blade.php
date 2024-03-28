@extends('Backend.app')
@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>x
                </div>
                <div>

                    <a href="{{route('carousel.create')}}"><button class="btn btn-primary">Add</button></a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>S.No</th>
              <th>Carousel</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($carousel as $carousels )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{asset($carousels->carousel_image)}}" height="45px" width="45px" alt="">
                    </td>
                    <td>
                        @if($carousels->status == 'active')
                        <a href="{{route('carousel.deactive',$carousels->id)}}" ><Button class="badge badge-success">ONLINE</Button></a>
                        @else
                        <a href="{{route('carousel.active',$carousels->id)}}" ><Button class="badge badge-danger">OFLINE</Button></a>
                        @endif

                    </td>
                    <td><a href=""><Button class="btn btn-primary">EDIT</Button></a></td>
                  </tr>


                @endforeach


          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

@endsection
