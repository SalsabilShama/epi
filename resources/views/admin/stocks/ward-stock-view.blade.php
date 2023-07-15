@extends('admin.template')



@section('bodyContent')

<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ward Stock</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Ward Name</th>
                        <th>Opening Balance</th>
                        <th>Current Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($ward_stocks as $key => $ward_stock)

                    <tr>

                        <td>{{ ++$key }}</td>

                        <td>{{ $ward_stock->date }}</td>
                        <td>{{ $ward_stock->name }}</td>
                        <td>{{ $ward_stock->opening_balance }}</td>
                        <td>{{ $ward_stock->current_balance }}</td>

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