@extends('admin.layout.main')

@section('content')

<div class="">
        

          <div class="clearfix"></div>

          <div class="row">
      	<div class="col-md-5 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edit Specialist</h2>
								
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2"  action="{{route('admin.update.specialist',$specialid->id) }}" method="post" class="form-horizontal form-label-left">
                                    @csrf
                                  @method('PUT')
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" id="name" value="{{$specialid->name}}"  name="name" required="required" class="form-control ">
											</div>
										</div>
									
									
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>

            <div class="col-md-7 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Button Example <small>Users</small></h2>
                
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row">
               
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                     
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                          <thead>
                            <tr>
                              <th>S.L</th>
                              <th>Name</th>
                              <th>Create Date</th>
                              <th>Action</th>
                           
                            </tr>
                          </thead>


                          <tbody>
                          @foreach($specialist as $key => $lt)
                            <tr>
                              <td>{{$key +1}}</td>
                              <td>{{$lt->name}}</td>
                              <td>{{$lt->created_at}}</td>
                              <td>        
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                     Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('admin.speciallist.edit',$lt->id)}}">Edit</a>
                      <button class="dropdown-item" onclick="confirmDeleteLoanType({{$lt->id}})" >Delete</button>
                      <form action="{{route('delete.speciallist',$lt->id)}}" method="post" id="delete-form{{$lt->id}}">
                                    @csrf 
                                    @method('DELETE') 
                                </form>
                    </div>
                  </div></td>
                           
                            </tr>
                          
                         @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>


        <script>
 function confirmDeleteLoanType(userId){
    Swal.fire({
  title: "Confirm Delete",
  text: "Are you sure want to delete this item ?",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    document.getElementById("delete-form"+userId).submit();
    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted this item.",
      icon: "success"
    });
  }
});
 }
    </script>

@endsection