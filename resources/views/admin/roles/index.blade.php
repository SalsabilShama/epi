@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Role Management</h3>

                <div class="card-tools">
                    <a  href="{{ route('roles.create') }}"> Create New Role</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($roles as $key => $role)

                    <tr>

                        <td>{{ ++$i }}</td>

                        <td>{{ $role->name }}</td>

                        <td>

                            <a class="btn btn-default btn-sm"  href="{{ route('roles.show',$role->id) }}">Show</a>

                                <a class="btn btn-warning btn-sm"   href="{{ route('roles.edit',$role->id) }}">Edit</a>

                            @can('role-delete')

                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                {!! Form::close() !!}

                            @endcan

                        </td>

                    </tr>

                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  </div><!-- /.container-fluid -->
</section>
<!-- <div >

    <div >

        <div >

            <h2>Role Management</h2>

        </div>

        <div >

        @can('role-create')

            <a class="btn"  href="{{ route('roles.create') }}"> Create New Role</a>

            @endcan

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

    <div >

        <p>{{ $message }}</p>

    </div>

@endif



<table >

  <tr>

     <th>No</th>

     <th>Name</th>

     <th width="280px">Action</th>

  </tr>

    @foreach ($roles as $key => $role)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $role->name }}</td>

        <td>

            <a  href="{{ route('roles.show',$role->id) }}">Show</a>

            @can('role-edit')

                <a  href="{{ route('roles.edit',$role->id) }}">Edit</a>

            @endcan

            @can('role-delete')

                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>



{!! $roles->render() !!}


</div> -->

@endsection