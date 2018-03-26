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
						<form method="POST" action="/add-customer">
							{{ csrf_field() }}
							<table class="table table-bordered table-hover" cellspacing="0" width="100%">
			                    <thead>
			                        <tr>
			                            <th class="text-center">Accomodations</th>
			                            <th class="text-center">Occupants</th>
			                            <th class="text-center">Cottage No.</th>
			                            <th class="text-center">Unit Cost</th>
			                            <th class="text-center">Lenght of Stay</th>
			                            <th class="text-center">Amount</th>
			                        </tr>
			                    </th>			                    <tbody>
			                    	@foreach($day_trip_regulars as $day_trip_regular)
				                    	<tr>
				                    		<td class="col-md-3">{{ $day_trip_regular->accomodation }}</td>
				                    		<td class="col-md-2">
				                    			<div class="col-xs-11">
			                  						<input type="number" class="form-control" placeholder="No.">
			                					</div>
			                				</td>
				                    		<td class="col-md-2">
				                    			<div class="col-xs-11">
			                  						<input type="text" class="form-control" placeholder="Cottage no.">
			                					</div>
				                    		</td>
				                    		<td class="col-md-1">₱ {{ $day_trip_regular->unit_cost }}</td>
				                    		<td class="col-md-2">
				            	        			<div class="col-xs-12">
			                  						<input type="number" class="form-control" placeholder="Enter here">
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
			                            <th></th>
			                            <th>VAT: </th>
			                            <th></th>
			                            <th></th>
			                            <th class="text-right">Total Accomodation cost: </th>
			                            <th>0.00</th>
			                        </tr>

			                    </tbody>
			            	</table>
			            	<div class="col-md-2 float-left">
							<input type="button" value="Calculate" class="btn btn-warning col-md-12 pull-left">
						</div>
						<div class="col-md-2 float-right">
							<input type="submit" value="Next" class="btn btn-primary col-md-12 pull-right">
						</div>
						</form>   
					</div>
  				</div>
			</div>        
		</div>	
	</div>

@stop