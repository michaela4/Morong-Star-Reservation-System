@extends('adminlte::page')

@section('title', 'Reservation System')

<?php 
    $try=1; // for edit
?>

@section('content_header')
    <h1>COTTAGES</h1><hr>
@stop

@section('content')

{{-- EDIT MODAL ///////////////////////////////////////////////////////////////////////////// --}}
    @foreach($cottages as $cottage)
    <div class="modal modal-primary fade" id="modal-try{{$try}}">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><b>EDIT COTTAGE STATUS</b></h3>
                </div>

                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group" style="margin-left: 175px">
                                    <form method="POST" action="/edit/cottage/{{$cottage->id}}">
                                        {{ csrf_field() }}

                                        <select name="cottage_status" class="form-control select2" style="width: 200px;">
                                          <option>{{  $cottage->status }}</option>
                                          @if ( $cottage->status == 'available') 
                                          <option disabled>Available</option>
                                          @else 
                                          <option value="available">Available</option>
                                          @endif

                                          @if ( $cottage->status == 'Pencil Book') 
                                          <option disabled>Pencil Book</option>
                                          @else 
                                          <option value="Pencil Book">Pencil Book</option>
                                          @endif

                                          @if ( $cottage->status == 'Confirmed') 
                                          <option disabled>Confirmed</option>
                                          @else 
                                          <option value="Confirmed">Confirmed</option>
                                          @endif

                                          @if ( $cottage->status == 'Walk In') 
                                          <option disabled >Walk In</option>
                                          @else 
                                          <option value="Walk In">Walk In</option>
                                          @endif

                                          @if ( $cottage->status == 'Arrived') 
                                          <option disabled>Arrived</option>
                                          @else 
                                          <option value="Arrived">Arrived</option>
                                          @endif

                                          @if ( $cottage->status == 'Under Repair') 
                                          <option disabled>Under Repair</option>
                                          @else 
                                          <option value="Under Repair">Under Repair</option>
                                          @endif
                                        </select>
                                </div>
                            </div>
                        </div><br>  
                	</div>
               	</div>

                <div class="modal-footer">
                    <div class="row">
                    	<div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="submit" value="Save" class="btn btn-primary col-md-12" > 
                            </input>
                        </div>    
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <?php 
        $try++; 
    ?>
    @endforeach

	<table class="table table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Cottage</th>
			    <th>Capacity</th>
			    <th>Agent</th>
			    <th>Status</th>
			    <th>Regular Rate</th>
			    <th>Features</th>
			    <th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php 
                $x = 1;
            ?>
                
			@foreach($cottages as $cottage)
				<tr>
					<td>{{ $cottage->cottage_no }}</td>
					<td>{{ $cottage->capacity }}</td>
					<td>{{ $cottage->agent }}</td>
										
						@if ($cottage->status == 'not available')
                          <td class="danger"><label>not available</label></td>
                        @elseif ($cottage->status == 'Confirmed')
                        	<td class="info"><label>confirmed</label> </td>
                        @elseif ($cottage->status == 'Pencil Book')
                            <td class="label-label warning"><label>pencil book</label></td>
                        @elseif ($cottage->status == 'Walk In')
                            <td class="default"><label>walk in</label></td>
                        @elseif ($cottage->status == 'Arrived')
                            <td class="active"><label>arrived</label></td>
                        @elseif ($cottage->status == 'Under Repair')
                            <td class="danger"><label>under repair</label></td>
                        @else
                            <td class="success"><label>available</label></td>
                        @endif             
                    
					<td>₱ {{ $cottage->regular_rate }}</td>
					<td>{{ $cottage->features }}</td>
					<td class="col-md-2">
                        <span data-toggle="tooltip" data-placement="top" title="Edit">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-try{{$x}}">
                                <i class="fa fa-fw fa-edit" aria-hidden="true"></i>
                            </button>
                        </span>
                	</td>
				</tr>
			<?php
                $x++;
            ?>
            @endforeach
		</tbody>
	</table>

@stop