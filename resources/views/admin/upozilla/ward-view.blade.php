@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ward Management</h3>
                @can('wards-add')
                <div class="card-tools">
                    <a  href="{{ route('wardAdd') }}"> Create New Ward</a>
                </div>
                @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Ward Name</th>
                        <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($wards as $key => $ward)

                    <tr>

                        <td>{{ ++$key }}</td>

                        <td>{{ $ward->name }}</td>
                        @can('wards-edit')
                        <td>
                            <a class="btn btn-warning btn-sm"   href="">Edit</a>
                        </td>
                        @endcan

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