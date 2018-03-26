@extends('adminlte::page')

	@section('title', 'Reservation System')

	
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
			                            <th><center>Accomodations</center></th>
			                            <th><center>Occupants</center></th>
			                            <th><center>Cottage No.</center></th>
			                            <th><center>Unit Cost</center></th>
			                            <th><center>Lenght of Stay</center></th>
			                            <th><center>Amount</center></th>
			                        </tr>


@stop