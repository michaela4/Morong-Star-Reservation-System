@extends('adminlte::page')

	@section('title', 'Reservation System')

	@section('content_header')
	    <h1>DAY TRIP - Regular Reservation</h1><hr>
	    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
			                            <th class="text-center">Accomodations</th>
			                            <th class="text-center">Occupants</th>
			                            <th class="text-center">Cottage No.</th>
			                            <th class="text-center">Unit Cost</th>
			                            <th class="text-center">Lenght of Stay</th>
			                            <th class="text-center">Amount</th>
			                        </tr>
			                        <tr>
			                        	<th class="text-center">Open Cottage with tables and chairs</th>
			                        	<th ><center>up to 15</center></th>
			                        	<th class="col-md-2">
			                        		<div class="form-group">
							                  <select class="form-control">
							                    <option>Nipa House 1</option>
							                    <option>Nipa House 2</option>
							                    <option>Nipa House 3</option>
							                    <option>Nipa House 4</option>
							                    <option>Nipa House 5</option>
							                  </select>
							                </div>
							            </th>
			                        	<th>2,500.00</th>
			                        	<th>1</th>
			                        	<th>
			                        		<div class="input-group">
								                <span class="input-group-addon">P</span>
								                <input type="number" class="form-control">
								                <span class="input-group-addon">.00</span>
								              </div>
			                        	</th>
			                        </tr>
			                        <tr>
			                        	<th class="text-center">Entrance Feesfdfkjhgfdfhj (Adult)<br> Access to Beach, Swimming Pool and Adventure Park
			                        	</th>
			                        	<th ><div class="col-xs-7">
			                  						<input type="number" class="form-control" placeholder="No.">
			                				</div>
							            </th>
			                        	<th>
			                        		<div class="form-group">
							                  <select class="form-control">
							                    <option>Nipa House 1</option>
							                    <option>Nipa House 2</option>
							                    <option>Nipa House 3</option>
							                    <option>Nipa House 4</option>
							                    <option>Nipa House 5</option>
							                  </select>
							                </div>
							            </th>
			                        	<th>300.00</th>
			                        	<th>1</th>
			                        	<th><div class="input-group">
								                <span class="input-group-addon">P</span>
								                <input type="number" class="form-control">
								                <span class="input-group-addon">.00</span>
								              </div>
								        </th>
			                        </tr>
			                        <tr>
			                        	<th class="text-center">Entrance Fee (Kids)<br> Access to Beach, Swimming Pool and Adventure Park
			                        	</th>
			                        	<th><div class="col-xs-7">
			                  						<input type="number" class="form-control" placeholder="No.">
			                				</div>
							            </th>
			                        	<th>
			                        		<div class="form-group">
							                  <select class="form-control">
							                    <option>Nipa House 1</option>
							                    <option>Nipa House 2</option>
							                    <option>Nipa House 3</option>
							                    <option>Nipa House 4</option>
							                    <option>Nipa House 5</option>
							                  </select>
							                </div>
							            </th>
			                        	<th>200.00</th>
			                        	<th>1</th>
			                        	<th>
			                        		<div class="input-group">
								                <span class="input-group-addon">P</span>
								                <input type="number" class="form-control">
								                <span class="input-group-addon">.00</span>
								              </div>
			                        	</th>
			                        </tr>
			                   
			                        	  <tr>
			                            <th></th>
			                            <th class="text-right">VAT: </th>
			                            
			                            <th>
			                            	 <div class="input-group">
								                <span class="input-group-addon">P</span>
								                <input type="number" class="form-control">
								                <span class="input-group-addon">.00</span>
								              </div>
			                            </th>
			                            <th></th>
			                            <th class="text-right">Total Accomodation cost: </th>
			                            <th>
			                            	<div class="input-group">
								                <span class="input-group-addon">P</span>
								                <input type="number" class="form-control">
								                <span class="input-group-addon">.00</span>
								              </div>
			                            </th>   
			                        </tr>			                        
			                    </thead>
			                </table>
			                <th>
			                	<center>
			                    	6:00am to 6:00pm only
			                    </center>
			                </th>
			                <th>
			                	
			                  	<div class="col-md-2 float-left">
									<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Next</button>

								<div class="modal-content">
       								<div class="modal fade" id="myModal" role="dialog">
    										<div class="modal-dialog">
    
   										   <!-- Modal content-->
      									<div class="modal-content">
        										<div class="modal-header">
         												 <button type="button" class="close" data-dismiss="modal">&times;</button>
          														<h4 class="modal-title">AMENITIES</h4>
        										</div>
        								<div class="modal-body">
          									<div class="container-flu­id">
												<div class="row">
													<div class="col-md-12">
														<div class="box-body">
															<div class="row">
																<form method="POST" action="/­add-customer">
																{{ csrf_field() }}
																<table class="table table-bordered table-hover" cellspacing="0" width="75%">
														<thead>
														<tr>
															<th>
																<b>RIDES: until 6pm only</b>
															</th>
															<th>
																<center><b>SPORT­S: until 10pm only</b></center>
															</th>
															<th>
																<center>Fees and Corkages:</center>
															</th> 
														</tr>
														<tr>
														<th>
															<label>
																<input type="checkbox" class="flat-red">
																Banana Boat Ride P250/head
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Banana Bus Ride P250/head
															</label>
															<br>
																<label>
																	<input type="checkbox" class="flat-red">
																	Tootsie Wow P350/head
																</label>
															<br>
																<label>
																	<input type="checkbox" class="flat-red">
																	Flying Fish P350/head
																</label>
															<br>
																<label>
																	<input type="checkbox" class="flat-red">
																	Zipline Ride P100/head
																</label>
															<br>
																<label>
																	<input type="checkbox" class="flat-red">
																	Island Hoping P500/head min. of 10
																</label>
															<br>
																<label>
																	<input type="checkbox" class="flat-red">
																	Fun Cart P100/hr
																</label>
															<br>	
																<label>
																	<input type="checkbox" class="flat-red">
																	Kayaking P100/hr
																</label>
														</th>
														<!-- Sports -->
														<th>
															<label>
																<input type="checkbox" class="flat-red">
																Basketball P300 or P500/hr (day/night)
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
 																Volleyball P300 or P500/hr (day/night)
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Table Tennis P100/hr
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Biliard P100/hr
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Dart P75/hr
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Chess P75/hr
															</label>
														</th>
														<!-- Fees and Corkages -->
														<th>
															<label>
																<input type="checkbox" class="flat-red">
																Food Corkage P50/head maximum charge
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Beer/Soda Corkage P200/case
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Hard Liqour Corkage P20/bottle
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Electrice Appliance P100/unit
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Gas Stove P500/unit
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Table/Chairs of 10 P100/set
															</label>
															<br>
															<label>
																<input type="checkbox" class="flat-red">
																Bonfire P2,000/set
															</label>
															<br>	
															<label>
																<input type="checkbox" class="flat-red">
																Exceeding Occupant P500/head
															</label>
															<br>	
															<label>
																<input type="checkbox" class="flat-red">
																Extra matress P250/set
															</label>
															<br>	
															<label>
																<input type="checkbox" class="flat-red">
																Videoke P10/song or P3,500 rental (8am-10pm only)
															</label>
															<br>	
															<label>
																<input type="checkbox" class="flat-red">
																Basic Sound System P3,500/unit (8am-10pm only)
															</label>
														</th>
														</tr>
														</thead>
													</table>
												</form>
											</div>		
										</div>
									</div>
								</div>
							</div>
						</div>
        
        				<div class="modal-footer">
          					<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
      					</div>
     				</div>
      			</div>
  			</div>
  		</div>
	</form>
</div>
</div>
</div>
</div>
</div>

			                

			                    	<div class="input-group input-group-lg">
               								<div class="input-group-btn">
                  								<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Reservation Status
                  								 <span class="fa fa-caret-down"></span></button>
                 								<ul class="dropdown-menu">
                    								<li><a href="#">Pencil Book</a></li>
                    								<li><a href="#">Confirm</a></li>
                    								<li><a href="#">Walk-in</a></li>
                    								<li><a href="#">Arrived</a></li>
                  								</ul>
                							</div>
                					</div>

               
@stop