@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admin Management</h3>
                @can('users-add')
                <div class="card-tools">
                    <a  href="{{ route('admin.create') }}"> Create New Admin</a>
                </div>
                @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($admins as $key => $admin)

                    <tr>

                        <td>{{ ++$i }}</td>

                        <td>{{ $admin->name }}</td>
                        @php @endphp
                        <td> {{$admin->roles->pluck('name','name')->first()}}</td>

                        <td>
                            @can('users-edit')
                            <a class="btn btn-warning btn-sm"   href="{{ route('admin.edit',$admin->id) }}">Edit</a>
                            @endcan
                             <!-- <a class="btn btn-danger btn-sm"  href="{{ route('admin.delete',$admin->id) }}">Delete</a> -->

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
<div >

@endsection