@extends('adminlte::page')

@section('title', 'Reservation System')

@section('content_header')
    <h1>DAY TRIP - Regular Reservation</h1><hr>
@stop

@section('content')
<p>Fill in the following details.</p><hr>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="box-body">
              		<div class="row">
						<form method="POST" action="/add-daytrip-regular">
							{{ csrf_field() }}

							<input type="hidden" name="staff_id" id="staff_id" value="{{ Auth::user()->user_id}}">

							<input type="hidden" name="type_of_accommodation" id="type_of_accommodation" value="Daytrip Regular">

							<table class="table table-bordered table-hover" cellspacing="0" width="100%">
			                    <thead>
			                        <tr>
			                            <th>Accomodations</th>
			                            <th>Occupants</th>
			                            <th>Cottage No.</th>
			                            <th>Unit Cost</th>
			                            <th>Lenght of Stay</th>
			                            <th>Amount</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                    	@foreach($day_trip_regulars as $day_trip_regular)
				                    	<tr>
				                    		<td class="col-md-3">{{ $day_trip_regular->accomodation }}</td>
				                    		<td class="col-md-2">
				                    			<div class="col-xs-11">
			                  						<input type="number" class="form-control" placeholder="no.">
			                					</div>
			                				</td>
				                    		<td class="col-md-2">
				                    			<div class="col-xs-11">
			                  						<input type="text" class="form-control" placeholder="cottage no.">
			                					</div>
				                    		</td>
				                    		<td class="col-md-1">₱ {{ $day_trip_regular->unit_cost }}</td>
				                    		<td class="col-md-2">
				                    			<div class="col-xs-12">
			                  						<input type="number" class="form-control" placeholder="enter here">
			                					</div>
				                    		</td>
				                    		<td class="col-md-3">
				                    			<div class="col-xs-11">
			                  						<input type="number" class="form-control" placeholder="₱0.00">
			                					</div>
				                    		</td>
				                    	</tr>
			                    	@endforeach
			                    	<tr>
			                    		<td class="col-md-3">
			                    			<h5><strong>VAT</strong></h5>
			                    		</td>
										<td class="col-md-2"></td>
										<td class="col-md-2"></td>
										<td class="col-md-1"></td>
										<td class="col-md-2">
											<h5><strong>Total Accomodation Cost (VAT Inclusive):</strong></h5>
										</td>
										<td class="col-md-3">
											<div class="col-xs-11">
			                  						<input type="number" class="form-control" placeholder="₱0.00">
			                  						<input type="hidden" name="total_cost" value="100">
			                				</div>
										</td>	
			                    	</tr>
			                    </tbody>
			            	</table>  

						<p style="text-align: center;">
			                <em>6:00 am to 6:00pm only</em>
			            </p><br>

			        <div class="row">
			        	<div class="col-md-2"></div>
			            <div class="col-md-2">
							<label>Reservation Status:</label>
						</div>
						<!-- radio -->
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
				    <br><br>
			    
						<div class="col-md-2">
							<input type="button" value="Calculate" class="btn btn-warning col-md-12">
						</div>
						<div class="col-md-2" style="margin-left: 60%">
							<input type="submit" value="Next" class="btn btn-primary col-md-12">
						</div> 

					</div>
				</div>



				<h1>Amenities</h1>
				<h5>if next btn is clicked, these should appear</h5>

				<h3>Rides</h3><br>
				@foreach($rides as $ride)
					<div class="form-group">
			            <div class="checkbox">
			                <label>
			                    <input type="checkbox" name="rides_id" value="{{ $ride->id }}">
			                    {{ $ride->name }} &nbsp; ₱{{ $ride->cost }}/{{ $ride->description }}
			                </label>
			            </div>
			        </div>
				@endforeach

				<h3>Sports</h3><br>
				@foreach($sports as $sport)
					<div class="form-group">
			            <div class="checkbox">
			                <label>
			                    <input type="checkbox" name="sports_id" value="{{ $sport->id }}">
			                    {{ $sport->name }} &nbsp; ₱{{ $sport->cost }}/{{ $sport->description }}
			                </label>
			            </div>
			        </div>
				@endforeach

				<h3>Fees and Corkage</h3><br>
				@foreach($fees_corkages as $fees_corkage)
					<div class="form-group">
			            <div class="checkbox">
			                <label>
			                    <input type="checkbox" name="fees_and_corkage_id" value="{{ $fees_corkage->id }}">
			                    {{ $fees_corkage->name }} &nbsp; ₱{{ $fees_corkage->cost }}/{{ $fees_corkage->description }}
			                </label>
			            </div>
			        </div>
				@endforeach
				</form>

			</div>  
		</div>	
	</div>

@stop