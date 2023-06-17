@extends('admin.template')



@section('bodyContent')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <a  href="{{ route('roles.index') }}"> Back</a>
              <div class="card-header">

                <h3 class="card-title">Edit Role</h3>
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

              <form action="{{route('roles.update', $role->id)}}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Role Name" value="{{$role->name}}" required>
                  </div >
                   <div class="form-group">

                        <strong>Permission:</strong>

                        <br/>

                        @foreach($permission as $value)

                           
                         <div class="icheck-success">
                        <input type="checkbox" class="form-check-input" name="permission[]" value="{{$value->id}}" id="{{$value->id}}" {{in_array($value->id, $rolePermissions) ? 'checked' : ''}}>
                         <label class="form-check-label" for="{{$value->id}}">{{ $value->name }}</label>
                        </div>

                        @endforeach

                     </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
<!-- <div class="content-wrapper">
<div >

    <div >

        <div >

            <h2>Edit Role</h2>

        </div>

        <div >

            <a  href="{{ route('roles.index') }}"> Back</a>

        </div>

    </div>

</div>



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



{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}

<div >

    <div >

        <div >

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div >

        <div >

            <strong>Permission:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div >

        <button type="submit" >Submit</button>

    </div>

</div>

{!! Form::close() !!}




</div> -->

@endsection