@extends('user.partials.template')
@section('title')
Registration
@endsection
@section('main')


<div class="health_section shadow"  style="background:#F8F9F9 ;">
	<div class="container">
		
		<div class="container mt-3 px-5 ">
			
			<div class="card  myCard regform" style="background: #AED6F1 ;" >
				<div class="card-body regbody shadow" >
					@if(Session::has('message'))
					    <div class="alert alert-block alert-success">
					        <i class=" fa fa-check cool-green "></i>
					        {{ nl2br(Session::get('message')) }}
					    </div>
					@endif
					<h1 style="text-align: center; color: #2C3E50;">Online Registration !!!</h1>
						<form method="post" action="{{route('registrationPost')}}">
						@csrf
						<div class="row p-2">

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Child Name:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control" name="childName" placeholder="Enter Your Child Name">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Birth Certificate No:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="number" class="form-control" name="childBirthNo" placeholder="Enter Child's Birth Certificate No">
							</div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group row ">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor">Father's Name:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control"  name="fathersName" placeholder="Father's Name " required="true">
							</div>
						</div>
						</div>

					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor">Father's NID No:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="number" class="form-control" name="fatherNid" placeholder="National Id Card Number"required="true">
							</div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group row ">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor">Mother's Name:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control"  name="mothersName" placeholder="Mother's Name " required="true">
							</div>
						</div>
						</div>

					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor">Mother's NID No:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="number" class="form-control" name="motherNid" placeholder="National Id Card Number"required="true">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Guardian Email:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="email" class="form-control" name="guardianEmail" placeholder="Enter Your Email">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Mobile Number:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="number" class="form-control" name="mobilenumber" placeholder="Enter Your Mobile Number" required="true">
							</div>
						</div>
						</div>

						

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" > Date of Birth:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control" name="childDob" placeholder="Enter Child's Date of Birth" required="true">
							</div>
						</div>
						</div>


						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" > Passport No:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="number" class="form-control" name="childPPNo" placeholder="Enter Child's Passport No">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Child Place of Birth:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control" name="placeOfBirth" placeholder="Enter Child's Place of Birth">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Gender:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<select class="form-control bold" name="gender" required="true">
									<option value="" >Select Gender</option>
									<option value="male" >Male</option>
									<option value="Female" >Female</option>
									<option value="others">Others</option>
								</select>
							</div>

							</div>
						</div>


						

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Password:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="password" class="form-control" name="password" placeholder="Give Your Password for Logging" required="true">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Present Address:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control" name="presentAddress" placeholder="Provide Your Present Address" required="true">
							</div>
						</div>
						</div>

						<div class="col-md-6">
							<div class="form-group row">
							<label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Confirm Password:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="password" class="form-control" name="confirmPassword" placeholder="Confirm The Password" required="true">
							</div>
						</div>
						</div>

						

						<div class="col-md-6">
							<div class="form-check">
  							<label class="form-check-label" >
    							<input type="checkbox" style="height: 20px; width: 20px; margin-top:5px;" class="form-check-input"  value="">
    							<span style="font-size:18px; margin-left: 10px; color:#191970; ">I Agree that all information avobe is true.</span>
  							</label>
						</div>
						</div>
						


							<!-- <label class="col-sm-4 col-md-4 col-form-label lebelcolor" >Present Address:</label>
							<div class="col-sm-8 col-md-8 px-0">
								<input type="text" class="form-control" name="presentAddress" placeholder="Provide Your Present Address" required="true">
							</div> -->
					

					</div>
						
						
						<!-- <center>		
						<div class="form-group row">
							<label class="col-sm-2 col-md-2 col-form-label lebelcolor" >Gender:</label>
							<div class="col-sm-7 col-md-7 px-0">
								<select class="form-control" name="gender">
									<option value="" class="lebelcolor">Select Gender</option>
									<option value="male"class="lebelcolor">Male</option>
									<option value="Female"class="lebelcolor">Female</option>
									<option value="others"class="lebelcolor">Others</option>
								</select>
							</div>
						</div>
						</center> -->

					<!-- 
						<div class="form-group row">
							<label class="col-sm-2 col-md-2 col-form-label lebelcolor">Present Address:</label>
							<div class="col-sm-7 col-md-7 px-0">
							<textarea class="form-control form-control-md" placeholder="Provide Your Present Address"></textarea>
							</div>
						</div>
						 -->

						<center>
							<button type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btnDes btcolor">Register
							</button>
						</center>
					</form>
				</div>
			</div>
			</center>
		</div>

	</div>
</div>

@endsection