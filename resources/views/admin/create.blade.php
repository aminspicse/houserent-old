@extends('layouts.layout')

@section('content')

                    <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>sdfsdf<small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{url('admin/post/store')}}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title/House Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="title" type="text" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Address <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="address" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Area/Yaton</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="area" class="form-control" type="text">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Number of Bedroom</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="nm_bedroom" class="form-control" type="text">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Number of Bath Room</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="nm_bathroom" class="form-control" type="text">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Number of Garage</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="nm_garage" class="form-control" type="text">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Details</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="details" class="form-control" type="text">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="photo" class="form-control" type="file">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Video</label>
											<div class="col-md-6 col-sm-6 ">
												<input name="video" class="form-control" type="text">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
									<img src="https://localhost/houserent/public/storage/logos/MfHdTMsuseS0qmaiqlIQxCneAtJcc5kbsE4Fz1O0.jpg" alt="Hear is a Picture">
								</div>
							</div>
						</div>
					</div>

@endsection