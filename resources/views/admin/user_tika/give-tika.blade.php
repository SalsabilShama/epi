@extends('admin.template')

@section('bodyContent')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
                @if($tika_balance<=0)
              <div class="alert alert-block alert-danger mt-2">
                  <i class=" fa fa-check cool-green "></i>
                  Tika Stock Not Available
              </div>
              @else
              <div class="card-header">

                <h3 class="card-title">Give Tika</h3>
              </div>
              <form id="quickForm"  method="POST" action="{{route('tika_given_post')}}">
                @if(Session::has('message'))
              <div class="alert alert-block alert-success mt-2">
                  <i class=" fa fa-check cool-green "></i>
                  {{ nl2br(Session::get('message')) }}
              </div>
              @endif
                @csrf
                
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Tika</label>
                    <select class="form-control select2" style="width: 100%;" name="tika_id" required>
                      @foreach($tikas as $tika)
                      <option value="{{$tika->id}}">{{$tika->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label>Select Register User</label>
                    <select class="form-control select2" style="width: 100%;" name="user_id" required>
                      @foreach($users as $user)
                      <option value="{{$user->id}}">{{$user->name}} ({{$user->registration_number}})</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="dose_number">Dose Number</label>
                    <input  autocomplete="off" type="number" class="form-control" id="dose_number" name="dose_number" placeholder="Dose Number" required>
    
                  </div >
                 <div class="form-group">
                    <label for="datepicker">Next Date</label>
                    <input id="datepicker" autocomplete="off" type="text" class="form-control" id="name" name="next_date" placeholder="Date" required>
    
                  </div >
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                </div>
              </form>
             
            </div>
            @endif
            <!-- /.card -->
                </div>
            </div>
        </section>
    </div>

@endsection