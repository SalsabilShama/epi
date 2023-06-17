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

                <h3 class="card-title">Create New Admin</h3>
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
              <form id="quickForm"  method="POST" action="{{route('admin.store')}}">
                @csrf
                
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Upozilla</label>
                    <select class="form-control select2" style="width: 100%;" name="upozilla_id" required>
                      @foreach($upozillas as $upozila)
                      <option value="{{$upozila->id}}">{{$upozila->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label>Select Union</label>
                    <select class="form-control select2" style="width: 100%;" name="union_id" required>
                      @foreach($unions as $union)
                      <option value="{{$union->id}}">{{$union->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label>Select Ward</label>
                    <select class="form-control select2" style="width: 100%;" name="ward_id" required>
                      @foreach($wards as $ward)
                      <option value="{{$ward->id}}">{{$ward->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Enter Name" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                      <div class="form-group">
                      <label>Select Role</label>
                      <select class="form-control select2" style="width: 100%;" name="role" required>
                        @foreach($roles as $role)
                        <option value="{{$role}}">{{$role}}</option>
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