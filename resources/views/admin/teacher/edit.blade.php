@extends('admin.layouts.app')
@section('main-content')
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome To Update!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Update Your Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

                    <!--Student button Start-->
                	<div class="add">
                        <a class="btn btn-md btn-primary shadow" href="{{ Route('teacher.index') }}">Back To All Teacher</a>
                    </div>
					<br>
					<br>
					<!--Student button End-->	
					
					<!--Form Start-->
					<div class="row">
						<div class="col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h4 class="card-title">Update Now</h4>
								</div>

								@if ($errors -> any())
									@foreach ($errors -> all() as $err)
										<p class="alert alert-warning">{{ $err }} <button class="close" data-dismiss="alert">&times;</button></p>
									@endforeach
								@endif

								@if (Session::has('success'))
									<p class="alert alert-success">{{ Session::get('success') }} <button class="close" data-dismiss="alert">&times;</button></p>
								@endif

        						 <div class="card-body">
									<form action="{{ Route('student.update', $teacher -> id) }}" method="POST" enctype="multipart/form-data">
										@csrf
										<input type="hidden" name="cid" value="{{ $teacher -> id }}">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Name</label>
											<div class="col-lg-9">
												<input name="name" type="text" value="{{ $teacher-> name }}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Email</label>
											<div class="col-lg-9">
												<input name="email" type="text" value="{{ $teacher -> email}}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Cell</label>
											<div class="col-lg-9">
												<input name="cell" type="text" value="{{ $teacher -> cell }}" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Department</label>
											<div class="col-lg-9">
												<select name="department" id="" class="form-control form-select">
													<option value="">-Select-</option>
													<option value="{{ old('department') == 'JDC/JSC' ? 'selected' : 'JDC/JSC' }}" value="JDC/JSC">JDC/JSC</option>
													<option value="{{ old('department') == 'DHAKIL/SSC' ? 'selected' : 'DHAKIL/SSC' }}" value="DHAKIL/SSC">DHAKIL/SSC</option>
													<option value="{{ old('department') == 'HSC' ? 'selected' : 'HSC' }}" value="HSC">HSC</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Gender</label>
											<div class="col-lg-9">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" checked="">
													<label class="form-check-label" for="gender_male">
													Male
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
													<label class="form-check-label" for="gender_female">
													Female
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Photo</label>
											<div class="col-lg-9">
												<input name="photo" type="file" value="{{ url('photos/', $teacher -> photo ) }}" class="form-control">
											</div>
										</div>
										<div class="text-right">
											<button name="submit" type="submit" class="shadow btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--Form End-->


				</div> <!--End Container-->
			</div> 
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->
    
@endsection



