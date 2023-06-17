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

                <h3 class="card-title">Tika Edit</h3>
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
              <form  method="POST" action="{{route('tika.update', $tika->id)}}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="Name">Tika Name</label>
                    <input type="text" name="tika_name" class="form-control" id="Name" placeholder="Enter Tika Name" value="{{$tika->name}}" required>
                  </div>
                    <div class="form-group">
                    <label for="datepicker">Expired Date</label>
                    <input id="datepicker" autocomplete="off" type="text" class="form-control" id="name" name="expired_date" value="{{$tika->expired_date}}" placeholder="Date" required>
    
                  </div >
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="submitbtn" class="btn btn-primary">Updated</button>
                </div>
              </form>
             
            </div>
            <!-- /.card -->
                </div>
            </div>
        </section>
    </div>

@endsection