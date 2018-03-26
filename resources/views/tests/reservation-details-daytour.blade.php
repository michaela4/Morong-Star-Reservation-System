{{-- resources/views/admin/dashboard.blade.php --}}
<?php
use App\Book;
use App\BookCopy;
use App\Author;
use App\BookAuthor;
?>
<style type="text/css" media="screen">
    input {
        color: #000 !important;
    }
    .disabled { 
        cursor: default !important;
    }
</style>
@extends('adminlte::page')

@section('title', 'Reservation Details|Day Tour')

<?php 
    $multiple=1;
    $view=1; 
    $borrow=1;
    $delete=1;
?>

@section('content_header')
<h1><b>RESERVATION DETAILS</b></h1>
@if (Session::has('flash_message'))
<div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif

@stop

@section('content')
    

    {{-- VIEW MODAL ///////////////////////////////////////////////////////////////////////////// --}}
    
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
                                    <input type="date" name="#" class="form-control disabled" id="refNum" aria-label="Reference #" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Reference #:</span >
                                    <input type="number" name="#" class="form-control disabled" id="refNum" aria-label="Reference #" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Representative</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-label="ISBN No." aria-describedby="basic-addon2" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Company/Group</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-label="Call No." aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Mobile No.</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-label="Publisher" aria-describedby="basic-addon5" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Email</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-label="Copyright" aria-describedby="basic-addon3" value="" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date of Tour</span >
                                    <input type="date" name="#" class="form-control disabled" id="tourDate" aria-label="Publication Type" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon6">No. of Guests</span >
                                    <input type="number" name="#" class="form-control disabled" id="guestNum" aria-label="No. of Copies" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>
                            <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Address/TIN#</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div>
                            </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">CHECK IN TIME</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-label="ISBN No." aria-describedby="basic-addon2" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">CHECK OUT TIME</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-label="Call No." aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Cottage Accomodation</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-label="Publisher" aria-describedby="basic-addon5" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Cottage No.</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-label="Copyright" aria-describedby="basic-addon3" value="" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Inclusion</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div><br>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">ACCOMODATION COST:</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div><br>
                        </div> 
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4"><i>Less Down Payment</i></span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div><br>
                        </div> 
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">TOTAL BALANCE</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div><br>
                        </div> 
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
   {{-- EDIT MODAL ///////////////////////////////////////////////////////////////////////////}}

   <div class="modal modal-danger fade" id="modal-edit{{$edit}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
        
                    <h3 class="modal-title"><b>EDIT RESERVATION DETAILS</b></h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date:</span >
                                    <input type="date" name="#" class="form-control disabled" id="refNum" aria-label="Reference #" aria-describedby="basic-addon6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Reference #:</span >
                                    <input type="number" name="#" class="form-control disabled" id="refNum" aria-label="Reference #" aria-describedby="basic-addon6">
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Representative</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-label="ISBN No." aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Company/Group</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-label="Call No." aria-describedby="basic-addon6">
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Mobile No.</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-label="Publisher" aria-describedby="basic-addon5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Email</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-label="Copyright" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date of Tour</span >
                                    <input type="date" name="#" class="form-control disabled" id="tourDate" aria-label="Publication Type" aria-describedby="basic-addon6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon6">No. of Guests</span >
                                    <input type="number" name="#" class="form-control disabled" id="guestNum" aria-label="No. of Copies" aria-describedby="basic-addon6">
                                </div>
                            </div>
                        </div><br>
                            <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Address/TIN#</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4">
                                </div>
                            </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">CHECK IN TIME</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-label="ISBN No." aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">CHECK OUT TIME</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-label="Call No." aria-describedby="basic-addon6">
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Cottage Accomodation</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-label="Publisher" aria-describedby="basic-addon5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Cottage No.</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-label="Copyright" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div><br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Inclusion</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4">
                                </div><br>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">ACCOMODATION COST:</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4">
                                </div>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4"><i>Less Down Payment</i></span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4">
                                </div>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">TOTAL BALANCE</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4">
                                </div>
                        </div> 
                    </div><br>  
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="" type="button" class="btn btn-success col-md-12">
                                <i class="fa fa-calculator" aria-hidden="true"></i>
                                &nbsp;Calculate
                            </a>    
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-primary col-md-12" href=""> 
                                <i class="fa fa-save" aria-hidden="true"></i>
                                &nbsp;Save
                            </a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    {{-- DELETE MODAL /////////////////////////////////////////////////////////////////////////// --}} 
    
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
                                    <input type="date" name="#" class="form-control disabled" id="refNum" aria-label="Reference #" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Reference #:</span >
                                    <input type="number" name="#" class="form-control disabled" id="refNum" aria-label="Reference #" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">Representative</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-label="ISBN No." aria-describedby="basic-addon2" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Company/Group</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-label="Call No." aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Mobile No.</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-label="Publisher" aria-describedby="basic-addon5" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Email</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-label="Copyright" aria-describedby="basic-addon3" value="" disabled>
                                </div>
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">Date of Tour</span >
                                    <input type="date" name="#" class="form-control disabled" id="tourDate" aria-label="Publication Type" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon6">No. of Guests</span >
                                    <input type="number" name="#" class="form-control disabled" id="guestNum" aria-label="No. of Copies" aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>
                            <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Address/TIN#</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div>
                            </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">CHECK IN TIME</span >
                                    <input type="text" name="#" class="form-control disabled" id="representative" aria-label="ISBN No." aria-describedby="basic-addon2" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon6">CHECK OUT TIME</span >
                                    <input type="text" name="#" class="form-control disabled" id="company" aria-label="Call No." aria-describedby="basic-addon6" value="" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon5">Cottage Accomodation</span >
                                    <input type="number" name="#" class="form-control disabled" id="mobileNum" aria-label="Publisher" aria-describedby="basic-addon5" value="" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon3">Cottage No.</span >
                                    <input type="text" name="#" class="form-control disabled" id="email" aria-label="Copyright" aria-describedby="basic-addon3" value="" disabled>
                                </div>
                            </div>
                        </div><br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">Inclusion</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div><br>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">ACCOMODATION COST:</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4"><i>Less Down Payment</i></span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div>
                        </div> <br>
                        <div class="col-md-14">
                                <div class="input-group col-md-12">
                                    <span class="input-group-addon" id="basic-addon4">TOTAL BALANCE</span >
                                    <input type="text" name="#" class="form-control disabled" id="address" aria-label="No. of Pages" aria-describedby="basic-addon4" value=" " disabled>
                                </div>
                        </div> 
                    </div><br>  
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-default col-md-12">DELETE ENTIRE DATA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <table id="books" class="table table-bordered table-hover" cellspacing="0">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Representative</th>
                    <th>Company/Group</th>
                    <th>Email</th>
                    <th>Option</th>
                    
                </tr>
            </thead>


            
            <tbody>
                <?php 
                    $x = 1;
                ?>
                
                <tr>
                    <td class="col-md-2">
                        <center>
                                <div class="input-group">
                                <span class="input-group-addon">Date: </span>
                                <input type="date" name="present_date" class="form-control" id="date" aria-label="date" required autofocus>
                                </div>
                        </center>
                    </td>
                    <td class="col-md-2">
                        <center><div class="col-xs-10">
                            <input type="text" class="form-control" placeholder="Input here">
                                </div>
                        </center>
                    </td>
                    <td class="col-md-2"> 
                        <center><div class="col-xs-10">
                                <input type="text" class="form-control" placeholder="Input here">
                                </div>
                        </center>
                    </td>
                    <td class="col-md-2">
                        <center><div class="col-xs-10">
                                <input type="text" class="form-control" placeholder="Input here">
                                </div>
                        </center>
                    </td>

                    <td class="col-md-2" style="text-align: center">
                        <span data-toggle="tooltip" data-placement="top" title="View">
                            <button class="btn btn-default" data-toggle="modal" data-target="#modal-view{{$x}}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </span>
                        <span data-toggle="tooltip" data-placement="top" title="Edit">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit{{$x}}">
                                 <i class="fa fa-fw fa-edit" aria-hidden="true"></i>
                            </button>
                        </span>
                        <span data-toggle="tooltip" data-placement="top" title="Delete">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{$x}}">
                                 <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </span>
                    </td>
                </tr> 
            
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script> console.log('Test Script'); </script>
    <script>    
        $(document).ready(function() {
            $('#books').DataTable();
            $('#booksModal').DataTable();
        });
    </script>
    <script type="text/javascript">
        function showNextPart() {
            $('#firstPart').attr('hidden', 'hidden');
            $('#secondPart').removeAttr('hidden');
            $('#closeBtn').css('display', 'none');
            $('#nextBtn').css('display', 'none');
            $('#backBtn').css('display', 'inline');
            $('#submitBtn').css('display', 'inline');
        }
        function showPrevPart() {
            $('#secondPart').attr('hidden', 'hidden');
            $('#firstPart').removeAttr('hidden');
            $('#backBtn').css('display', 'none');
            $('#closeBtn').css('display', 'inline');
            $('#submitBtn').css('display', 'none');
            $('#nextBtn').css('display', 'inline');
        }
    </script>
    <script src="/js/reccustom.js"></script>
@stop
