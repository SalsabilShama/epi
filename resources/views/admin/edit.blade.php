@extends('admin.template')

@section('bodyContent')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <a  href="{{ route('admin.index') }}"> Back</a>
              <div class="card-header">

                <h3 class="card-title">Admin Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if (count($errors) > 0)

                    <div >

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                        </ul>

                    </div>

                @endif
              <form  method="POST" action="{{route('admin.update')}}">
                @csrf
                <input type="hidden" name="admin_id" value="{{$admin->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Enter Name" value="{{$admin->name}}" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$admin->email}}"  required>
                  </div>
                 <!--  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div> -->
                      <div class="form-group">
                      <label>Select Role</label>
                      <select class="form-control select2" style="width: 100%;" name="role" required>
                        @foreach($roles as $role)
                        <option value="{{$role}}" {{$userRole==$role?'selected':''}}>{{$role}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                </div>
              </form>
             
            </div>
            <!-- /.card -->
                </div>
            </div>
        </section>
    </div>

@endsection