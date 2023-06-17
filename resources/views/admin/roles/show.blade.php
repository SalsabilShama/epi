@extends('admin.template')



@section('bodyContent')
<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
     <div class="row">
          <div class="col-12">
            <div class="card">
                <a  href="{{ route('roles.index') }}"> Back</a>
              <div class="card-header">
                <h3 class="card-title">Role Show</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap table-bordered">
                    <thead>
                         <th>Role Name</th>
                         <th>Permissions</th>
                    </thead>
                  <tbody>
                    <tr>
                       <td>{{ $role->name }}</td>
                        <td>

                    @if(!empty($rolePermissions))

                        @foreach($rolePermissions as $v)

                            <label >{{ $v->name }},</label>
                            <br>

                        @endforeach

                    @endif
                        </td>
                    </tr>
                    
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
</div>
<div class="content-wrapper">
<div >

    <div >

        <div >

            <h2> Show Role</h2>

        </div>

        <div >

            <a  href="{{ route('roles.index') }}"> Back</a>

        </div>

    </div>

</div>



<div >

    <div >

        <div >

            <strong>Name:</strong>

            {{ $role->name }}

        </div>

    </div>

    <div >

        <div >

            <strong>Permissions:</strong>

            @if(!empty($rolePermissions))

                @foreach($rolePermissions as $v)

                    <label >{{ $v->name }},</label>

                @endforeach

            @endif

        </div>

    </div>

</div>
</div>
@endsection