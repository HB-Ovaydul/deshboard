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
								<h3 class="page-title">Welcome Teacher!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">All Teacher</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    
        <div class="add">
            <a class="btn btn-md btn-primary shadow" href="{{ Route('student.create') }}">Add Teacher</a>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                        
             <!-- Recent Orders -->
               <div class="card card-table shadow">
                  <div class="card-header">
                      <h4 class="card-title">All Teacher</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Cell</th>
                                  <th>Department</th>
                                  <th>Gender</th>
                                  <th>Status</th>
                                  <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                             
                                @forelse ($all_teacher as $teacher)
                                <tr>
                                    <td>
                                      <h2 class="table-avatar">
                                          <a href="" class="avatar avatar mr-2 "><img style="max-height: 100%; max-width:100%; object-fit:cover;"  class="avatar-lg rounded-circle shadow" src="{{ url('photos/', $teacher -> photo) }}" alt="User Image"></a>
                                         <a href="#">{{ $teacher -> name }}</a>
                                      </h2>
                                    </td>
                                    <td>{{ $teacher -> email }}</td>
                                    <td>{{ $teacher -> cell }}</td>
                                    <td>{{ $teacher -> department }}</td>
                                    <td>{{ $teacher -> gender }}</td>

                                    <td>
                                      <div class="status-toggle">
                                          <input type="checkbox" id="status_1" class="check" checked>
                                          <label for="status_1" class="checktoggle">checkbox</label>
                                       </div>
                                    </td>

                                    <td>
                                        <a class="btn btn-sm btn-info" href="{{ Route('teacher.show', $teacher -> id) }}"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-warning" href="{{ Route('teacher.edit', $teacher -> id) }}"><i class="fa fa-edit"></i></a>
                                        <a class="delet btn btn-sm btn-danger" href="{{ Route('teacher.destroy', $teacher -> id) }}"><i class="fa fa-trash"></i></a>
                                    </td>

                                 </tr>
                                @empty
                                       <tr>
                                           <td colspan="7" class="bg-dark text-light text-center
                                                        ">Data Empty</td>
                                      </tr>          
                                @endforelse
                          
                             </tbody>
                     </table>
                   </div>
                </div>
            </div>
             <!-- /Recent Orders -->            
        </div>
    </div>
</div>			
</div>
<!-- /Page Wrapper -->
</div>
<!-- /Main Wrapper -->


@endsection