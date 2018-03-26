@extends('adminlte::page')

@section('title', 'Reservation System')

<?php 
    $firtstVal=0;
    $secondVal=0;
    $thirdVal=0; 
     // for edit
?>

@section('content_header')
    <h1>SET RESERVATION</h1>
@stop

@section('content')
    <p>Fill in the following reservation details.</p><hr>

    <div class="container-fluid">
		<div class="row">
		    <div class="col-md-6">
		    	<h2>Customer Details</h2><br>
			</div>
			<div class="col-md-6">
		    	<h2>Choose Type of Reservation</h2><br>
			</div>
		</div>
	</div>

    <div class="container-fluid">
		<div class="row">

			<form method="POST" action="/add-customer">
				{{ csrf_field() }}

<!--CUSTOMER DETAILS ////////////////////////////////////////////////////////-->
    		<div id="customer details">
				<div class="col-md-6">
					<div class="form-group" align="left">
			
						<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}"><!--from user_name-->
						<div class="input-group">
						  <span class="input-group-addon">Date: </span>
						  <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Quote Valid Until: </span>
						  <input type="date" name="quote_date" class="form-control" id="validDate" aria-label="validDate" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Representative: </span>
						  <input type="text" name="name" class="form-control" id="representative" aria-label="representative" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Company/Group: </span>
						  <input type="text" name="company_group" class="form-control" id="compay" aria-label="compay" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Mobile No.</span>
						  <input type="number" name="mobile_no" class="form-control" id="mobile" aria-label="mobile" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Email</span>
						  <input type="email" name="email" class="form-control" id="email" aria-label="email" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">No. of Person</span>
						  <input type="number" name="no_of_person" class="form-control" id="no_of_person" aria-label="no_of_person" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Date of Tour</span>
						  <input type="date" name="date_of_tour" class="form-control" id="tourDate" aria-label="tourDate" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Address/TIN No.:</span>
						  <input type="text" name="address_tin" class="form-control" id="addressTin" aria-label="addressTin" required autofocus>
						</div>
						<br>
					</div>
				</div>
			</div>

<!--CHOOSE TYPE OF RESERVATION////////////////////////////////////////////////////////-->
	            <label>Daytour</label>
				    <div class="form-group">
				        <div class="col-md-3">
					        <div class="radio">
					            <label>
					                <input type="radio" name="reservation_type" onclick="showDTReg()" value="Daytrip Regular">
					                    Regular
					            </label>
					        </div>
					    </div>
						<div class="col-md-3" style="margin-left: 24%">
						    <div class="radio">
						        <label>
						            <input type="radio" name="reservation_type" onclick="showDTPromo()" value="Daytrip Promo">
						                Off Peak Season
						        </label>
						    </div>
						</div>
					</div>
					<br><br>
				<label style="margin-left:-74%">Overnight Stay</label>
					<div class="form-group" style="margin-left:-2.5%">
						<div class="col-md-12">
						    <div class="col-md-6">
						        <div class="radio">
						            <label>
						                <input type="radio" name="reservation_type" value="Overnight Regular">
						                    Regular
						            </label>
						        </div>
						    </div>
						    <div class="col-md-6">
						        <div class="radio">
						            <label>
						                <input type="radio" name="reservation_type" value="Overnight Peak Season">
						                    Peak Season
						            </label>
						        </div>
						    </div>
						</div><br>
						<div class="col-md-12">
						    <div class="col-md-6">
						        <div class="radio">
						            <label>
						                <input type="radio" name="reservation_type" value="Overnight Off Peak Season">
						                  	Off Peak Season
						            </label>
						        </div>
						    </div>
						    <div class="col-md-6">
						        <div class="radio">
						            <label>
						            	<input type="radio" name="reservation_type" value="Overnight Week Days Summer">
						           			Week Days Summer
						            </label>
						        </div>
						    </div>	
						</div>
					</div>
			</div>

<!--FOR DAYTRIP REGULAR SECTION //////////////////////////////////////////////////////-->
			<div class="col-md-12">
				<div id="daytripRegular"><br>
					<h2>Daytrip Regular</h2>
					<hr>
					<div class="box-body">
		              	<div class="row">
								<table class="table table-bordered table-hover" cellspacing="0" width="75%">
								<script>
									function cal(){
										var kids = document.getElementById("kids").value;
										var adult = document.getElementById("adult").value;
										var kidsAmount = 200;
										var adultAmount = 300;
										var cottage = 2500;
										var totalAmount = (kids * kidsAmount) + (adult * adultAmount) + (cottage *1);
										var vat = document.getElementById("vat").value;
										var totalVat = (totalAmount * 1) + (vat * 1);
										document.getElementById("amount").value = totalAmount;
										document.getElementById("vatIn").value = totalVat;
									}
									function doMath(){
										var kids = document.getElementById("child").value;
										var adult = document.getElementById("grownUp").value;
										var kidsAmount = 200;
										var adultAmount = 300;
										var totalAmount = (kids * kidsAmount) + (adult * adultAmount);
										var vat = document.getElementById("vats").value;
										var totalVat = (totalAmount * 1) + (vat * 1);
										document.getElementById("amnt").value = totalAmount;
										document.getElementById("vatInc").value = totalVat;
									}
								</script>
					                     <thead>
					                        <tr>
					                            <th><center>Open Cottage and Chair(2500)</center></th>
					                            <th><center>No. of Kids (P 200/kid)</center></th>
					                            <th><center>No. of Adults (P 200/adult)</center></th>
					                            <th><center>Lenght of Stay</center></th>
					                            <th><center>Amount</center></th>
					                        </tr>
					                    
					                        <tr>
					                        	<th class="col-md-2">
					                        		<div class="form-group">
									                  <select class="form-control select2" multiple="multiple" name="cottages_id[]" data-placeholder="Select Cottage" style="width: 100%;">

									                  	@foreach($cottages as $cottage)
									                    	<option value="{{ $cottage->id }}">
									                    		{{ $cottage->cottage_no }} 
									                    	</option>
									                    @endforeach
									                    @foreach($cottages as $cottage)
									                    	<input type="hidden" name="id" value="{{ $cottage->id }}">
									                    @endforeach
									                  </select>
									                </div>
									            </th>
					                        	<th>
					                        		<input type="number" class="form-control" name="kids" min="0" placeholder="0" id="kids" onkeyup="cal()">
					                        	</th>
					                        	<th>
					                        		<input type="number" class="form-control" name="adult" min="0"  placeholder="0" id="adult" onkeyup="cal()">
					                        	</th>
					                        	<th>
					                        		<input type="number" class="form-control" name="lengthOfStay" placeholder="Per Hour" style="text-align: right;">
					                        	</th>
					                        	<th class="col-md-1">
					                        		<input type="number" class="form-control" name="amount" placeholder="0" min="0" id="amount">
					                        	</th>
					                        </tr>
					                   
					                        <tr>
					                        	<td class="col-md-3">
					                        		<h5><center><strong>VAT:</strong></center></h5>
					                        	</td>
												<td class="col-md-2"><input type="number" name="vat" id="vat" onkeyup="cal()" class="form-control" placeholder="₱0.00" min="0"></td>
												<td class="col-md-2">
													<h5><strong>Total Accomodation Cost (VAT Inclusive):</strong>
													</h5>
												</td>
												<td class="col-md-2">
													<div class="col-xs-11">
					                  						<input type="number" class="form-control" name="vatIn" id="vatIn" placeholder="₱0.00" min="0">
					                				</div>
					                			</td>
											
					                        </tr>
					                    </thead>
					            </table>
					                <p style="text-align: center;">
					                	<em>6:00 am to 6:00pm only</em>
					            	</p><br>
					            	<div class="row">
					            		<div class="col-md-3">
						            		<div class="input-group">
											  <span class="input-group-addon">Check In: </span>
											  <input type="text" name="check_in" id="check_in" class="form-control" aria-label="check_in" placeholder="6:00 am" required autofocus>
											</div>
										</div>

										<div class="col-md-3">
						            		<div class="input-group">
											  <span class="input-group-addon">Check Out: </span>
											  <input type="text" name="check_out" id="check_out" class="form-control" aria-label="check_out" placeholder="6:00 pm" required autofocus>
											</div>
										</div>

					            		<div class="col-md-3">
						            		<div class="input-group">
											  <span class="input-group-addon">Reference No.: </span>
											  <input type="text" name="ref_no" class="form-control" id="ref_no" aria-label="ref_no" placeholder="Ref. No." required autofocus>
											</div>
										</div>

										<div class="col-md-3">
					            		</div>
					            	</div><br><br>

			            <div class="row">
					        	<div class="col-md-2"></div>
					            <div class="col-md-2">
									<label>Reservation Status:</label>
								</div> 
								<!-- radio-->
					            <div class="form-group">
					                	<div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Pencil Book" value="Pencil Book" checked>
						                      Pencil Book
						                    </label>
						                  </div>
						             	</div>
						             	<div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Confirmed" value="Confirmed">
						                      Confirmed
						                    </label>
						                  </div>
						                </div>
						                <div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Walk In" value="Walk In">
						                      Walk In
						                    </label>
						                  </div>
						                </div>
						                <div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Arrived" value="Arrived">
						                      Arrived
						                    </label>
						                  </div>
						                </div>
						        </div>   
						</div>
					    
						<div class="col-md-3"><br>
							<button onclick="showAmenities()" id="amenitiesBtn" class="btn btn-primary btn-lg col-md-12">
								Select Amenities
							</button>
						</div>

		                </div>
		            </div>
		        </div>	
	    	</div>

<!--FOR DAYTRIP OFF PEAK SEASON PROMO //////////////////////////////////////////////////////-->
			 <div class="col-md-12"><br>
				<div id="daytripOffPeakSeasonPromo">
					<h2>Daytrip Off Peak Season</h2>
					<hr>
					<div class="box-body">
		              	<div class="row">
								<table class="table table-bordered table-hover" cellspacing="0" width="75%">
					                    <thead>
					                        <tr>
					                            <th><center>Accomodation</center></th>
					                            <th><center>No. of Kids (P 200/kid)</center></th>
					                            <th><center>No. of Adults (P 200/adult)</center></th>
					                            <th><center>Lenght of Stay</center></th>
					                            <th><center>Amount</center></th>
					                        </tr>
					                    
					                        <tr>
					                        	<th class="col-md-2">
					                        		@foreach($day_trip_promos as $day_trip_promo)
									                  	{{ $day_trip_promo->accomodation }}
					                        		@endforeach
					                        		<div class="form-group">
									                  <select class="form-control select2" multiple="multiple" name="cottages_id[]" data-placeholder="Select Cottage" style="width: 100%;">

									                  	@foreach($cottages as $cottage)
									                    	<option value="{{ $cottage->id }}">
									                    		{{ $cottage->cottage_no }} 
									                    	</option>
									                    @endforeach
									                    @foreach($cottages as $cottage)
									                    	<input type="hidden" name="id" value="{{ $cottage->id }}">
									                    @endforeach
									                  </select>
									                </div>
									            </th>
					                        	<th>
					                        		<input type="number" class="form-control" name="child" min="0" placeholder="0" id="child" onkeyup="doMath()">
					                        	</th>
					                        	<th>
					                        		<input type="number" class="form-control" name="grownUp" min="0"  placeholder="0" id="grownUp" onkeyup="doMath()">
					                        	</th>
					                        	<th>
					                        		<input type="number" class="form-control" name="lengthOfStay" placeholder="Per Hour" style="text-align: right;">
					                        	</th>
					                        	<th class="col-md-1">
					                        		<input type="number" class="form-control" name="amnt" placeholder="0" min="0" id="amnt">
					                        	</th>
					                        </tr>
					                   
					                        <tr>
					                        	<td class="col-md-3">
					                        		<h5><center><strong>VAT:</strong></center></h5>
					                        	</td>
												<td class="col-md-2"><input type="number" name="vat" id="vats" onkeyup="doMath()" class="form-control" placeholder="₱0.00" min="0"></td>
												<td class="col-md-2">
													<h5><strong>Total Accomodation Cost (VAT Inclusive):</strong>
													</h5>
												</td>
												<td class="col-md-2">
													<div class="col-xs-11">
					                  						<input type="number" class="form-control" name="vatIn" id="vatInc" placeholder="₱0.00" min="0">
					                				</div>
					                			</td>
											
					                        </tr>
					                    </thead>
					            </table>
					                <p style="text-align: center;">
					                	<em>6:00 am to 6:00pm only</em>
					            	</p><br>
					            	<div class="row">
					            		<div class="col-md-3">
						            		<div class="input-group">
											  <span class="input-group-addon">Check In: </span>
											  <input type="text" name="check_in" id="check_in" class="form-control" aria-label="check_in" placeholder="6:00 am" required autofocus>
											</div>
										</div>

										<div class="col-md-3">
						            		<div class="input-group">
											  <span class="input-group-addon">Check Out: </span>
											  <input type="text" name="check_out" id="check_out" class="form-control" aria-label="check_out" placeholder="6:00 pm" required autofocus>
											</div>
										</div>

					            		<div class="col-md-3">
						            		<div class="input-group">
											  <span class="input-group-addon">Reference No.: </span>
											  <input type="text" name="ref_no" class="form-control" id="ref_no" aria-label="ref_no" placeholder="Ref. No." required autofocus>
											</div>
										</div>

										<div class="col-md-3">
					            		</div>
					            	</div><br><br>

			            <div class="row">
					        	<div class="col-md-2"></div>
					        	<div class="form-group">
							            <div class="col-md-2"><br>
											<label>Reservation Status:</label>
										</div>
									<!--radio-->
					                	 <div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Pencil Book" value="Pencil Book" checked>
						                      Pencil Book
						                    </label>
						                  </div>
						             	</div>
						             	<div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Confirmed" value="Confirmed">
						                      Confirmed
						                    </label>
						                  </div>
						                </div>
						                <div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Walk In" value="Walk In">
						                      Walk In
						                    </label>
						                  </div>
						                </div>
						                <div class="col-md-2">
						                  <div class="radio">
						                    <label>
						                      <input type="radio" name="reservation_status" id="Arrived" value="Arrived">
						                      Arrived
						                    </label>
						                  </div>
						                </div>
						        </div>   
						</div>
						
						<div class="col-md-3"><br>
							<button onclick="showAmenities()" id="amenitiesBtnP" class="btn btn-primary btn-lg col-md-12">
								Select Amenities
							</button>
						</div>

		                </div>
		            </div>
		        </div>	
	    	</div>

<!--AMENITIES SECTION ////////////////////////////////////////////////////////////-->
		 	<div class="col-md-12">
				<br>
				<div id="amenities">
					<h1>Amenities</h1><hr>
						<div class="col-md-4">
							<h3>Rides</h3><br>
							@foreach($rides as $ride)
								<div class="form-group">
						            <div class="checkbox">
						                <label>
						                    <input type="checkbox" name="rides_id[]" value="{{ $ride->name }}">
				
						                    {{ $ride->name }} &nbsp; ₱{{ $ride->cost }}/{{ $ride->description }}
						                </label>
						            </div>
						        </div>
							@endforeach
						</div>
						<div class="col-md-4">
							<h3>Sports</h3><br>
							@foreach($sports as $sport)
								<div class="form-group">
						            <div class="checkbox">
						                <label>
						                    <input type="checkbox" name="sports_id[]" value="{{ $sport->name }}">
						                    
						                    {{ $sport->name }} &nbsp; ₱{{ $sport->cost }}/{{ $sport->description }}
						                </label>
						            </div>
						        </div>
							@endforeach
						</div>
						<div class="col-md-4">
							<h3>Fees and Corkage</h3><br>
							@foreach($fees_corkages as $fees_corkage)
								<div class="form-group">
						            <div class="checkbox">
						                <label>
						                    <input type="checkbox" name="fees_and_corkage_id[]" value="{{ $fees_corkage->name }}">

						                    {{ $fees_corkage->name }} &nbsp; ₱{{ $fees_corkage->cost }}/{{ $fees_corkage->description }} &nbsp;
						                </label>
						            </div>
						        </div>
							@endforeach
						</div>
					<br><br>
				</div>
			</div>

			<div class="col-md-12">
				<p id="space"><br></p>
				<div class="col-md-8">
				</div>	
				<div class="col-md-2">
					<button type="reset" class="btn btn-warning col-md-12">Reset</button>
				</div>
				<div class="col-md-2">
					<input type="submit" value="Next" class="btn btn-primary col-md-12">
				</div><br><br><br>
			</div>
			
			</form>
   		
   		</div>
	</div> -->
@stop