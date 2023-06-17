@extends('admin.template')

@section('bodyContent')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                <a  href="{{ route('tika.index') }}"> Back</a>
              <div class="card-header">

                <h3 class="card-title">Create New Tika</h3>
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

              <form action="{{route('tika.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tika Name</label>
                    <input type="text" autocomplete="off"  class="form-control" id="tika_name" name="tika_name" placeholder="Tika Name" required>
                  </div >

                  <div class="form-group">
                    <label for="datepicker">Expired Date</label>
                    <input id="datepicker" autocomplete="off" type="text" class="form-control" id="name" name="expired_date" placeholder="Date" required>
    
                  </div >
                 
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
   
@endsection