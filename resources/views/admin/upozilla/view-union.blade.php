@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Union Management</h3>
                <div class="card-tools">
                    <a  href="{{ route('unionAdd') }}"> Create New Union</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Union Name</th>
                        <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($unions as $key => $union)

                    <tr>

                        <td>{{ ++$key }}</td>

                        <td>{{ $union->name }}</td>

                        <td>
                            <a class="btn btn-warning btn-sm"   href="">Edit</a>
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
@endsection