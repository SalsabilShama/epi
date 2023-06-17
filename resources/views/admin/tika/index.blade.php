@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tika Management</h3>
              @can('tikas-add')
                <div class="card-tools">
                    <a  href="{{ route('tika.create') }}"> Create New Tika</a>
                </div>
              @endcan
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Tika Name</th>
                        <th>Expired Date</th>
                        <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($tikas as $key => $tika)

                    <tr>

                        <td>{{ ++$key }}</td>

                        <td>{{ $tika->name }}</td>
                        <td>{{ $tika->expired_date }}</td>

                        <td>
                             @can('tikas-edit')

                            <a class="btn btn-warning btn-sm"   href="{{ route('tika.edit',$tika->id) }}">Edit</a>
                             @endcan
                            @can('tikas-delete')

                                {!! Form::open(['method' => 'DELETE','route' => ['tika.destroy', $tika->id],'style'=>'display:inline']) !!}

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
@endsection