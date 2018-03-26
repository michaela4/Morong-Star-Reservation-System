{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3>HOME</h3>
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
                <form role="form" method="POST" action="">
                     
                    <div class="box-body">
                        <div class="form-group">
                          <label for="accomodation">Accomodation</label>
                          <input type="text" class="form-control" id="accomodation" placeholder="Enter accomodation">
                        </div>

                        <div class="form-group">
                          <label for="unit_cost">Unit Cost</label>
                          <input type="text" class="form-control" id="unit_cost" placeholder="Enter unit cost ">
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

@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script> console.log('Test Script'); </script>
@stop