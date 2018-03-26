@extends('adminlte::page')

	@section('title', 'Reservation System')
	@section('content_header')
	    <h1><b>RESERVATION DETAILS</b></h1>
	@stop
	
	@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="box-body">
              		<div class="row">
						<form method="POST" action="/add-customer">
							{{ csrf_field() }}
							<table class="table table-bordered table-hover" cellspacing="0" width="75%">
			                    <thead>
			                        <tr>
			                            <th><center>Date</center></th>
			                            <th><center>Representative</center></th>
			                            <th><center>Company/Group</center></th>
			                            <th><center>Email</center></th>
			                            <th><center>Option</center></th>
			                            
			                        </tr>

			                        <tr>
			                            <th><center>
			                            	<div class="input-group">
											  <span class="input-group-addon">Date: </span>
											  <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
											</div>
			                            </center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center>
			                			</th>
			                            <th class="col-xs-2"><center>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-eye"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-edit"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-trash-o"></i></div></center></th>
			                            
			                        </tr>

			                        <tr>
			                            <th><center>
			                            	<div class="input-group">
											  <span class="input-group-addon">Date: </span>
											  <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
											</div>
			                            </center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center>
			                			</th>
			                            <th class="col-xs-2"><center>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-eye"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-edit"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-trash-o"></i></div></center></th>
			                            
			                        </tr>

			                        <tr>
			                            <th><center>
			                            	<div class="input-group">
											  <span class="input-group-addon">Date: </span>
											  <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
											</div>
			                            </center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center>
			                			</th>
			                            <th class="col-xs-2"><center>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-eye"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-edit"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-trash-o"></i></div></center></th>
			                            
			                        </tr>

			                        <tr>
			                            <th><center>
			                            	<div class="input-group">
											  <span class="input-group-addon">Date: </span>
											  <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
											</div>
			                            </center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center>
			                			</th>
			                            <th class="col-xs-2"><center>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-eye"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-edit"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-trash-o"></i></div></center></th>
			                            
			                        </tr>

			                        <tr>
			                            <th><center>
			                            	<div class="input-group">
											  <span class="input-group-addon">Date: </span>
											  <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
											</div>
			                            </center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center></th>
			                            <th><center><div class="col-xs-10">
			                  						<input type="text" class="form-control" placeholder="Input here">
			                					</div></center>
			                			</th>
			                            <th class="col-xs-2"><center>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-eye"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-edit"></i></div>
			                            	<div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-trash-o"></i></div></center></th>
			                            
			                        </tr>


@stop