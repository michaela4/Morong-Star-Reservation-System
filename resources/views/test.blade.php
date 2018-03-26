@extends('adminlte::page')

@section('title', 'Reservation System')

@section('content_header')
    <h1>RESERVATION DETAILS</h1>
@stop

@section('content')

<!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

<!--<div class="col-md-6">
    <button>next</button>
                <label>Daytour</label>
                    <div class="form-group">
                        <div class="col-md-3">
                            <div class="radio" onclick="eventStart()">
                                <label>
                                    <input type="radio" name="reservation_type" value="Daytrip Regular">
                                        Regular
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-left: 24%">
                            <div class="radio" onclick="eventStarter()">
                                <label>
                                    <input type="radio" name="reservation_type" value="Daytrip Off Peak Season">
                                        Off Peak Season
                                </label>
                            </div>
                        </div>
                    </div>
                    <br><br>

                <p id="test1">im test1</p>
                 <p id="test2">im test2</p>
                <label style="margin-left:-74%" class="test2">Overnight Stay</label>
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
                                <div class="radio" id="mine">
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

            <p id="test">testing</p>


<h1>trying to submit form</h1>

<form action="#">
First name: 
<input type="text" name="FirstName" value="Mickey"><br>
Last name: 
<input type="text" name="LastName" value="Mouse"><br>
<input type="submit" value="Submit">
</form> -->

<br><br><br><br>

<div id="div1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">

This is some text in the div.
<p>This is a paragraph in the div.</p>
<p>This is another paragraph in the div.</p>

</div>
<br>
<button>Remove div element</button>

<div class="col-md-4">
    <?php $x = 1; ?>
    @foreach($rides as $ride)
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input class="rides" type="checkbox" name="rides_id[]" value="{{ $ride->cost }}" >
                    {{ $ride->name }} &nbsp; ₱{{ $ride->cost }}{{ $ride->description }}
                    
                </label>
            </div>
        </div>
        <?php $x++; ?>
    @endforeach
</div>

<p>
    <strong>Amount (US$)</strong>: <input type="text" name="amount" id="amount" />
</p>


<p>
    <strong>Food</strong> <br />        
    <input class="my-activity" type="checkbox" name="activity['food']['breakfast']" value="5"> Breakfast (US$ 5)<br/>
    <input class="my-activity" type="checkbox" name="activity['food']['lunch']" value="10"> Lunch (US$ 10)<br/>
    <input class="my-activity" type="checkbox" name="activity['food']['dinner']" value="15"> Dinner (US$ 15)<br/>        
</p>
<p>
    <strong>Entertainment</strong> <br />        
    <input class="my-activity" type="radio" name="activity['entertainment']" value="5"> Swimming (US$ 5)<br/>
    <input class="my-activity" type="radio" name="activity['entertainment']" value="10"> Movie (US$ 10)<br/>
    <input class="my-activity" type="radio" name="activity['entertainment']" value="15"> Sight Seeing (US$ 15)<br/>        
</p>
<p>
    <strong>Amount (US$)</strong>: <input type="text" name="amount" id="amount" />
</p>








 <input type="radio" onclick="showRegular()" name="reservation_type" value="Daytrip Regular">
                                        Regular
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-left: 24%">
                            <div class="radio" onclick="eventStarter()">
                                <label>
                                    <input type="radio" onclick="showPromo()" name="reservation_type" value="Daytrip Off Peak Season">
                                        Off Peak Season
<div id="startHere"></div>

<div id="try">
<h1>regular</h1>
</div>

<div id="try2">
<h1>promo</h1>
</div>

<button onclick="remove()">send</button>

@stop

@section('js')
    <script> console.log('Test Script'); </script>
@stop