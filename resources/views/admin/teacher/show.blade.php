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
                        <a class="btn btn-md btn-primary shadow" href="{{ Route('teacher.index') }}">Back To All Teacher</a>
                    </div>
                    <br>
                    <br>

                    <div class="user-profile">
                        <div class="card-profile shadow w-50 mx-auto">
                            <div class="card-body">
                                   <img  style="max-height: 100%; max-width:100%; object-fit:cover;"  class="avatar-xxl rounded-circle shadow border-10 border border-primary" src="{{ url( 'photos/', $teacher -> photo ) }}" alt="">
                               <div class="heade">
                                   <h3>{{ $teacher -> name }}</h3>
                                   <h5>{{ $teacher -> email }}</h5>
                                   <h5>{{ $teacher -> cell }}</h5>
                                   <h5>{{ $teacher -> department }}</h5>
                                   <h5>{{ $teacher -> gender }}</h5>
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