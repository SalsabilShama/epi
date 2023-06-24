@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Union Uses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Tika Used</th>
                        <th>Tika Damage</th>
                        <th>Tika Expired</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($union_uses as $key => $union_use)

                    <tr>

                        <td>{{ ++$key }}</td>

                        <td>{{ $union_use->date }}</td>
                        <td>{{ $union_use->tika_used }}</td>
                        <td>{{ $union_use->tika_damage }}</td>
                        <td>{{ $union_use->tika_expired }}</td>

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