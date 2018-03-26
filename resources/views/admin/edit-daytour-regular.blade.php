{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><b>EDIT DAYTOUR REGULAR PACKAGE</b></h1>
@stop

@section('content')
<!--modal for editing package-->
    <div class="modal modal-warning fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Package Information</h4>
              </div>

              <div class="modal-body">
                <!--Admin LTE-->
                <form role="form" method="POST" action="/save-daytour-regular-package">
                     {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $daytrip->id }}">

                    <div class="box-body">
                        <div class="form-group">
                          <label for="accomodation">Accomodation</label>
                          <input type="text" class="form-control" id="accomodation" value="{{ $daytrip->accomodation }}" placeholder="Enter accomodation">
                        </div>

                        <div class="form-group">
                          <label for="unit_cost">Unit Cost</label>
                          <input type="text" class="form-control" id="unit_cost" value="{{ $daytrip->unit_cost }}" placeholder="Enter unit cost ">
                        </div>
                    </div>    

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline">Submit</button>
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    </div>

               </form>
               <!-- /.end of form -->
               
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>


    <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Accomodation</th>
                <th>Amount</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daytrips as $daytrip) 
            <tr>
                <td> {{ $daytrip->accomodation }} </a></td> 
                <td> $ {{ $daytrip->unit_cost }}</td>
                <td>
                    <a href="/{{ $daytrip->id">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-toggle="tooltip" data-placement="right" Title="Edit" data-target="#modal-info">
                        <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                    </a>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-toggle="tooltip" data-placement="right" Title="Delete" data-target="#modal-danger" value="/{{ $daytrip->id }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script> console.log('Test Script'); </script>
@stop