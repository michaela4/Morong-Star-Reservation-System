@extends('adminlte::page')

@section('title', 'Reservation System')

@section('content_header')
    <h1>SET RESERVATION</h1>
@stop

@section('content')
    <p>Fill in the following reservation details.</p><hr>
    <h2>Customer Details</h2>
    <div class="container-fluid">
		<div class="row">
			<form method="POST" action="/add-customer">
				{{ csrf_field() }}
				<div class="col-md-6">


					<div class="form-group" align="left">
						<input type="hidden" name="user_name" id="user_name" value="{{ Auth::user()->user_name}}">
						<div class="input-group">
						  <span class="input-group-addon">Date</span>
						  <input type="date" name="present_date" class="form-control" id="date" value="{{ $customer->present_date }}" aria-label="date" required autofocus> 
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Quote Valid Until</span>
						  <input type="date" name="quote_date" class="form-control" id="validDate" value="{{ $customer->quote_date }}" aria-label="validDate" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Representative</span>
						  <input type="text" name="name" class="form-control" id="representative" value="{{ $customer->name }}" aria-label="representative" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Company/Group</span>
						  <input type="text" name="company_group" class="form-control" id="compay" value="{{ $customer->company_group }}" aria-label="compay" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Mobile No.</span>
						  <input type="number" name="mobile_no" class="form-control" id="mobile" value="{{ $customer->mobile_no }}" aria-label="mobile" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Email</span>
						  <input type="email" name="email" class="form-control" id="email" value="{{ $customer->email }}" aria-label="email" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">No. of Person</span>
						  <input type="number" name="no_of_person" class="form-control" id="no_of_person" value="{{ $customer->no_of_person }}" aria-label="no_of_person" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Date of Tour</span>
						  <input type="date" name="date_of_tour" class="form-control" id="tourDate" value="{{ $customer->date_of_tour }}" aria-label="tourDate" required autofocus>
						</div>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">Address/TIN No.:</span>
						  <input type="text" name="address_tin" class="form-control" id="addressTin" value="{{ $customer->address_tin }}" aria-label="addressTin" required autofocus>
						</div>

						<br>
						<div class="col-md-4">
							<input type="reset" value="Reset" class="btn btn-warning col-md-12">
						</div>
						<div class="col-md-4">
							<input type="submit" value="Next" class="btn btn-primary col-md-12">
						</div>
					</div>
				</div>
			</form>

			<h2>Choose Type of Reservation</h2><hr>
			<div class="btn-group">
                  <button type="button" class="btn btn-info">Day Tour</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/daytrip-regular">Regular</a></li>
                    <li><a href="#">Off Peak Season</a></li>
                  </ul>
            </div>

            <div class="btn-group">
                  <button type="button" class="btn btn-success">Overnight Stay</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Regular</a></li>
                    <li><a href="#">Peak Season</a></li>
                    <li><a href="#">Off Peak Season</a></li>
                    <li><a href="#">Week Days Summer</a></li>
                  </ul>
            </div>
		</div>	

		<a href="/test">to Test</a>
	</div>

@stop