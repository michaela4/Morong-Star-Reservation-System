@extends('adminlte::page')

@section('title', 'Reservation System')

<?php 
    $x=1;
    $view=1; 
    $delete=1;
    $edit=1;
?>

@section('content_header')
    <h1>RESERVATION DETAILS</h1><hr>
@stop

@section('content')
	<h3><strong>Daytour Reservations</strong></h3><br>

	{{-- VIEW MODAL ///////////////////////////////////////////////////////////////////////////// --}}

    @foreach($reservations as $reservation)
    <div class="modal modal-default fade" id="modal-view{{$view}}">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" style="display: inline !important;"><b>VIEW RESERVATION DETAILS (Day Tour)</b></h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date:</span >
                                    <input type="date" name="#" class="form-control disabled" aria-describedby="basic-addon6" value="{{ $reservation->customer->present_date }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Reference #:</span >
                                    <input type="text" name="ref_no" class="form-control" aria-describedby="basic-addon6" value="{{ $reservation->ref_no }}" disabled> 
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Representative</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-describedby="basic-addon2" value="{{ $reservation->customer->name }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Company/Group</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-describedby="basic-addon6" value="{{ $reservation->customer->company_group }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Address/TIN#</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-describedby="basic-addon4" value="{{ $reservation->customer->address_tin }}" disabled>
                                </div>
                            </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Mobile No.</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-describedby="basic-addon5" value="{{ $reservation->customer->mobile_no }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Email</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-describedby="basic-addon3" value="{{ $reservation->customer->email }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Date of Tour</span >
                                    <input type="date" name="#" class="form-control disabled" id="tourDate" aria-describedby="basic-addon2" value="{{ $reservation->customer->date_of_tour }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon2">No. of Guests</span >
                                    <input type="number" name="#" class="form-control disabled" id="guestNum" aria-describedby="basic-addon2" value="{{ $reservation->customer->no_of_person }}" disabled>
                                </div>
                            </div>
                        </div><br>
                            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Check In Time</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-describedby="basic-addon2" value="{{ $reservation->check_in }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Check Out Time</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-describedby="basic-addon6" value="{{ $reservation->check_out }}" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Cottage</span >
                                    <input type="text" name="" class="form-control disabled" id="email" aria-describedby="basic-addon3" value="{{ $reservation->cottage->cottage_no }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Chosen Promo</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-describedby="basic-addon3" value="{{ $reservation->customer->reservation_type }}" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Cottage Accomodation</span >
                                    <input type="text" name="#" class="form-control disabled"  aria-describedby="basic-addon5" value="{{ $reservation->cottage->features }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="col-md-14">
                             @if ($reservation->id < 5)
                            <div class="input-group col-md-12">
                                <label>Inclusion(s)</label>
                                    <p>&nbsp;
                                        @if ($reservation->rides_id == '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;Ride(s): none
                                        @endif

                                        @if ($reservation->sports_id == '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;Sport(s): none
                                        @endif
                                        
                                        @if ($reservation->fees_and_corkage_id == '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;Fees and Corkage(s): none
                                        @endif
                                        
                                        
                                        @if ($reservation->rides_id != '')
                                            &nbsp;&nbsp;&nbsp;Ride(s): {{ $reservation->rides_id }},
                                        @endif <br>
                                        @if ($reservation->sports_id != '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sport(s): {{ $reservation->sports_id }},
                                        @endif <br>
                                        @if ($reservation->fees_and_corkage_id != '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fees and Corkage(s): {{ $reservation->fees_and_corkage_id }}
                                        @endif
                                    </p>
                            </div>
                            @endif
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">ACCOMODATION COST/BALANCE:</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value="{{ $reservation->overall_amount }}" disabled>
                                </div><br>
                        </div> 
                    </div>
                </div>
                
            </div>
      </div>
    </div>
    <?php 
        $view++; 
    ?>
    @endforeach

    {{-- EDIT MODAL ///////////////////////////////////////////////////////////////////////////// --}}

    @foreach($reservations as $reservation)
    <div class="modal modal-info fade" id="modal-edit{{$edit}}">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" style="display: inline !important;"><b>EDIT RESERVATION DETAILS (Day Tour)</b></h3>
                </div>
                <form method="POST" id="edit" action="/edit/{{$reservation->customer->id}}">
                    {{ csrf_field() }}

                    <div class="modal-body">
                        <div class="box-body">
                            <div class="row">
                                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id}}"><!--from user_name-->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon6">Date:</span >
                                        <input type="date" name="present_date" class="form-control" aria-describedby="basic-addon6" value="{{ $reservation->customer->present_date }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon6">Reference #:</span >
                                        <input type="text" name="ref_no" class="form-control" aria-describedby="basic-addon6" value="{{ $reservation->ref_no }}">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon2">Representative</span >
                                        <input type="text" name="name" class="form-control" id="representative" aria-describedby="basic-addon2" value="{{ $reservation->customer->name }}">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon6">Company/Group</span >
                                        <input type="text" name="company_group" class="form-control" id="company" aria-describedby="basic-addon6" value="{{ $reservation->customer->company_group }}">
                                    </div>
                                </div>
                            </div><br>

                            <div class="col-md-14">
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon" id="basic-addon4">Address/TIN#</span >
                                        <input type="text" name="address_tin" class="form-control" id="address" aria-describedby="basic-addon4" value="{{ $reservation->customer->address_tin }}">
                                    </div>
                                </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon" id="basic-addon5">Mobile No.</span >
                                        <input type="number" name="mobile_no" class="form-control " id="mobileNum" aria-describedby="basic-addon5" value="{{ $reservation->customer->mobile_no }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon" id="basic-addon3">Email</span >
                                        <input type="text" name="email" class="form-control " id="email" aria-describedby="basic-addon3" value="{{ $reservation->customer->email }}" >
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon2">Date of Tour</span >
                                        <input type="date" name="date_of_tour" class="form-control " id="tourDate" aria-describedby="basic-addon2" value="{{ $reservation->customer->date_of_tour }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon" id="basic-addon2">No. of Guests</span >
                                        <input type="number" name="no_of_person" class="form-control" id="guestNum" aria-describedby="basic-addon2" value="{{ $reservation->customer->no_of_person }}">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bootstrap-timepicker">
                                        <div class="input-group">
                                            <span class="input-group-addon">Check In:</span>
                                            <input type="text" name="check_in" id="check_in" class="form-control timepicker" required>
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="bootstrap-timepicker">
                                        <div class="input-group">
                                            <span class="input-group-addon">Check Out:</span>
                                            <input type="text" name="check_out" id="check_out" class="form-control timepicker" required>
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon" id="basic-addon3">Cottage</span >
                                        <select class="form-control select2" multiple="multiple" name="cottages_id[]" data-placeholder="Select Cottage" style="width: 100%;" required>

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
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group col-md-12">
                                        <span class="input-group-addon" id="basic-addon3">Status</span >
                                        <select name="reservation_status" class="form-control select2" style="width: 190px">
                                              <option value="">{{ $reservation->status }}</option>
                                              <option value="Pencil Book">Pencil Book</option>
                                              <option value="Confirmed">Confirmed</option>
                                              <option value="Walk In">Walk In</option>
                                              <option value="Arrived">Arrived</option>
                                        </select>  
                                    </div>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title" style="text-align: center;">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                Rides</a>
                                              </h4>
                                            </div>

                                            <div id="collapse1" class="panel-collapse collapse">
                                              <div class="panel-body">
                                                <div class="col-md-12">
                                                    @foreach($rides as $ride)
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="rides_id[]" value="{{ $ride->name }}">
                                                                    {{ $ride->name }} &nbsp; ₱{{ $ride->cost }}{{ $ride->description }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title" style="text-align: center;">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapss">
                                                Sports</a>
                                              </h4>
                                            </div>
                                            <div id="collapss" class="panel-collapse collapse">
                                              <div class="panel-body">
                                                <div class="col-md-12">
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
                                              </div>
                                            </div>
                                        </div>
                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title" style="text-align: center;">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse33">
                                                Fees and Corkage</a>
                                              </h4>
                                            </div>
                                            <div id="collapse33" class="panel-collapse collapse">
                                              <div class="panel-body">
                                                <div class="col-md-12">
                                                    @foreach($fees_corkages as $fees_corkage)
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="fees_and_corkage_id[]" value="{{ $fees_corkage->name }}">
                                                                    {{ $fees_corkage->name }} &nbsp; ₱{{ $fees_corkage->cost }}/{{ $fees_corkage->description }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                              </div>
                                            </div>
                                        </div> 
                                </div>
                            </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-12"> 
                                </div> <br>
                                <div class="col-md-12">
                                        <div class="input-group col-md-12">
                                            <span class="input-group-addon" id="basic-addon4">ACCOMODATION COST:</span >

                                            <input type="text" name="cost" id="cost" class="form-control" aria-describedby="basic-addon4" value="{{ $reservation->overall_amount }}" placeholder="overall_amount">
                                        </div><br>
                                </div> 
                                <div class="col-md-12">
                                        <div class="input-group col-md-12">
                                            <span class="input-group-addon" id="basic-addon4"><i>Less Down Payment</i></span >
                                            <input type="number" class="form-control" placeholder="0.00" id="less" onkeyup="doThis()">

                                            <script type="text/javascript">
                                                function doThis(){
                                                    var minus = document.getElementById("less").value;
                                                    console.log(minus);
                                                }
                                                
                                            </script>

                                        </div><br>
                                </div> 
                                <div class="col-md-12">
                                        <div class="input-group col-md-12">
                                            <span class="input-group-addon" id="basic-addon4">TOTAL BALANCE</span >
                                            <input type="text" name="overall_amount" class="form-control" aria-describedby="basic-addon4" value="" id="total_balance" placeholder="0.00">
                                        </div><br>
                                </div> 
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <input type="submit" value="Save" onclick="edit()" class="btn btn-outline pull-left" data-dismiss="modal">
                            </div>
                        </div>
                    </div>  

                </form>             
            </div>
      </div>
    </div>
    <?php 
        $edit++; 
    ?>
    @endforeach
   
    {{-- DELETE MODAL /////////////////////////////////////////////////////////////////////////// --}} 
    @foreach($reservations as $reservation)
    <div class="modal modal-danger fade" id="modal-delete{{$delete}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: #fff">&times;</span>
                    </button>
                    <h3 class="modal-title"><b>DELETE INFORMATION</b></h3>
                </div>
                
                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date:</span >
                                    <input type="date" name="#" class="form-control" aria-describedby="basic-addon6" value="{{ $reservation->customer->present_date }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Reference #:</span >
                                    <input type="text" name="ref_no" class="form-control" aria-describedby="basic-addon6" value="{{ $reservation->ref_no }}" disabled> 
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Representative</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-describedby="basic-addon2" value="{{ $reservation->customer->name }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Company/Group</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-describedby="basic-addon6" value="{{ $reservation->customer->company_group }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Address/TIN#</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-describedby="basic-addon4" value="{{ $reservation->customer->address_tin }}" disabled>
                                </div>
                            </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Mobile No.</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-describedby="basic-addon5" value="{{ $reservation->customer->mobile_no }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Email</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-describedby="basic-addon3" value="{{ $reservation->customer->email }}" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date of Tour</span >
                                    <input type="date" name="#" class="form-control disabled" id="tourDate" aria-describedby="basic-addon6" value="{{ $reservation->customer->date_of_tour }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon6">No. of Guests</span >
                                    <input type="number" name="#" class="form-control disabled" id="guestNum" aria-describedby="basic-addon6" value="{{ $reservation->customer->no_of_person }}" disabled>
                                </div>
                            </div>
                        </div><br>
                            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Check In Time</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-describedby="basic-addon2" value="{{ $reservation->check_in }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Check Out Time</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-describedby="basic-addon6" value="{{ $reservation->check_out }}" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Cottage</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-describedby="basic-addon3" value="{{ $reservation->cottage->cottage_no }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Chosen Promo</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-describedby="basic-addon3" value="{{ $reservation->customer->reservation_type }}" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Cottage Accomodation</span >
                                    <input type="text" name="#" class="form-control disabled"  aria-describedby="basic-addon5" value="{{ $reservation->cottage->features }}" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-md-14">
                             @if ($reservation->id < 5)
                            <div class="input-group col-md-12">
                                <label>Inclusion(s)</label>
                                    <p>&nbsp;
                                        @if ($reservation->rides_id == '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;Ride(s): none
                                        @endif

                                        @if ($reservation->sports_id == '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;Sport(s): none
                                        @endif
                                        
                                        @if ($reservation->fees_and_corkage_id == '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;Fees and Corkage(s): none
                                        @endif
                                        
                                        
                                        @if ($reservation->rides_id != '')
                                            &nbsp;&nbsp;&nbsp;Ride(s): {{ $reservation->rides_id }},
                                        @endif <br>
                                        @if ($reservation->sports_id != '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sport(s): {{ $reservation->sports_id }},
                                        @endif <br>
                                        @if ($reservation->fees_and_corkage_id != '')
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fees and Corkage(s): {{ $reservation->fees_and_corkage_id }}
                                        @endif
                                    </p>
                            </div>
                            @endif
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">ACCOMODATION COST/BALANCE:</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value="{{ $reservation->overall_amount }}" disabled>
                                </div><br>
                        </div>  
                    </div>
                </div>
                
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-4">
                            <form method="POST" id="deleteFinally" action="/delete/{{$reservation->customer->id}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="cottage_id" value="{{ $reservation->cottage_id }}">
                                <input type="hidden" name="user_id" value="{{ $reservation->user_id }}">
                                
                                <input type="button" class="btn btn-default col-md-12 deleteReservation" value="DELETE ENTIRE DATA" data-id="{{ $reservation->id }}" onclick="softDelete()">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php 
        $delete++; 
    ?>
    @endforeach


	<table class="table table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
			<tr>
			    <th>Date</th>
			    <th>Representative</th>
			    <th>Company/Group</th>
			    <th>Staff Assigned</th> <!--email-->
                <th>Status</th>
                <th>Deadline</th>
			    <th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php 
                $x = 1;
            ?>
                
			@foreach($reservations as $reservation)
			<tr>
				<td>{{ $reservation->customer->present_date }}</td>
				<td>{{ $reservation->customer->name }}</td>
				<td>{{ $reservation->customer->company_group }}</td>
				<td>{{ $reservation->user->user_name }}</td>
                <td>{{ $reservation->status }}</td>
                <td>{{ $reservation->customer->quote_date }}</td>
				<td class="col-md-2" style="text-align: center">
                        <span data-toggle="tooltip" data-placement="top" title="View">
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal-view{{$x}}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </span>
                        <span data-toggle="tooltip" data-placement="top" title="Edit">
                            <!--<a href="/edit/{{ $reservation->customer->id }}" class="btn btn-primary">
                                <i class="fa fa-fw fa-edit" aria-hidden="true"></i>
                            </a>-->
                            <button class="btn btn-info" data-toggle="modal" data-target="#modal-edit{{$x}}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </span>
                        <span data-toggle="tooltip" data-placement="top" title="Delete">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{$x}}">
                                 <i class="fa fa-trash-o" aria-hidden="true"></i>
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

	<!--NOT YET WORKING-->
    <div id="demo">          
    	@if ($x ==" ")
		<a href="/delete/{{$customer->id}}" id="demo"></a>

	@endif  
    </div>   
	
@stop

@section('js')
    <script> console.log('Testz Script'); </script>
    <script src="/js/reccustom.js"></script>
    <script>
		function myFunction() {
		    var x;

		    var url = '/delete/';
		    if (confirm("Are you sure you want to delete this data?") == true) {
		        console.log("You pressed OK!");
		    } else {
		    	console.log("Cancelled");
		    }
		    document.getElementById("demo").innerHTML = x;
		}
	</script>
@stop