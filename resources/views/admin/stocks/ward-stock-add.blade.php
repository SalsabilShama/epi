@extends('admin.template')

@section('bodyContent')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">

                <h3 class="card-title">Ward Stock Add</h3>
              </div>
              <form  method="POST" action="{{ route('wardStockAdd') }}">
                @if(Session::has('message'))
              <div class="alert alert-block alert-success mt-2">
                  <i class=" fa fa-check cool-green "></i>
                  {{ nl2br(Session::get('message')) }}
              </div>
              @endif
                @csrf
                
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Upozilla</label>
                    <select class="form-control select2" style="width: 100%;" name="upozilla_id" required>
                      @foreach($upozillas as $upozila)
                      <option value="{{$upozila->id}}">{{$upozila->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label>Select Union</label>
                    <select class="form-control select2" style="width: 100%;" name="union_id" required>
                      @foreach($unions as $union)
                      <option value="{{$union->id}}">{{$union->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Ward</label>
                    <select class="form-control select2" style="width: 100%;" name="ward_id" required>
                      @foreach($wards as $ward)
                      <option value="{{$ward->id}}">{{$ward->name}}</option>
                      @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="datepicker">Date of Month</label>
                    <input id="datepicker" autocomplete="off" type="text" class="form-control" name="date" placeholder="Date" required>
    
                  </div >
                  <div class="form-group">
                    <label for="stock_balance">Tika Balance</label>
                    <input  autocomplete="off" type="number" class="form-control" id="stock_balance" name="stock_balance" placeholder="Stock" required>
    
                  </div >
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
                </div>
              </form>
             
            </div>
            <!-- /.card -->
                </div>
            </div>
        </section>
    </div>

@endsection