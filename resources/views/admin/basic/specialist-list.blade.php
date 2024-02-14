@extends('admin.layout.main')

@section('content')

<div class="">
        

          <div class="clearfix"></div>

          <div class="row">
      	<div class="col-md-5 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create Specialist</h2>
								
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2"  action="{{route('specialist_insert') }}" method="post" class="form-horizontal form-label-left">
                                            @csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name<span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" id="name" value="{{old('name')}}"  name="name" required="required" class="form-control ">
											</div>
										</div>
									
									
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
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
                              <td>61</td>
                           
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

@endsection