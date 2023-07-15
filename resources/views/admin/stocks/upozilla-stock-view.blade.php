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
                        <th>Upozilla Name</th>
                        <th>Opening Balance</th>
                        <th>Current Balance</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($upozilla_stocks as $key => $upozilla_stock)

                    <tr>

                        <td>{{ ++$key }}</td>

                        <td>{{ $upozilla_stock->date }}</td>
                        <td>{{ $upozilla_stock->name }}</td>
                        <td>{{ $upozilla_stock->opening_balance }}</td>
                        <td>{{ $upozilla_stock->current_balance }}</td>

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