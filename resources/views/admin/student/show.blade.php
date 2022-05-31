@extends('admin.layouts.app')


@section('main-content')
		<!-- Main Wrapper -->
 <div class="main-wrapper">	
			<!-- Page Wrapper -->
     <div class="page-wrapper">
			<!--Container-->
    <div class="content container-fluid">
        			<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome To Your Profile!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    
                    <div class="add">
                        <a class="btn btn-md btn-primary shadow" href="{{ Route('student.index') }}">Back To All Student</a>
                    </div>
                    <br>
                    <br>

                    <div class="user-profile">
                        <div class="card-profile shadow w-50 mx-auto">
                            <div class="card-body">
                                   <img  style="max-height: 100%; max-width:100%; object-fit:cover;"  class="avatar-xxl rounded-circle shadow border-10 border border-primary" src="{{ url( 'photos/', $student -> photo ) }}" alt="">
                               <div class="heade">
                                   <h3>{{ $student -> name }}</h3>
                                   <h5>{{ $student -> email }}</h5>
                                   <h5>{{ $student -> cell }}</h5>
                                   <h5>{{ $student -> department }}</h5>
                                   <h5>{{ $student -> gender }}</h5>
                               </div>
                            </div>
                        </div>
                    </div>

				</div>
                <!--Container-->			
			</div>
			<!-- /Page Wrapper -->
        </div>
		<!-- /Main Wrapper -->


@endsection