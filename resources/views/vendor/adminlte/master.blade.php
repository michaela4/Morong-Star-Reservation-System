<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
@yield('title', config('adminlte.title', 'AdminLTE 2'))
@yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--added by miks 12/31/17-->
    <link rel="stylesheet" href="css/w3.css">

    <!--time picker-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-timepicker.min.css') }}">


    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

    @if(config('adminlte.plugins.select2'))
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    @endif

    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    @endif

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--css of select 2-->
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/skins/_all-skins.min.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini @yield('body_class')">


            @yield('body')
            <!--nwlynowthis-->
            <script src="{{ asset('vendor/adminlte/vendor/jquery/jquery.min.js') }}"></script>

            <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

            <!--extra js added 1/1/18 by miks-->


            <!-- FastClick -->
            <script src="{{ asset('js/fastclick.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('js/demo.js') }}"></script>

            <!--extra js added 1/1/18 by miks-->


            <!-- FastClick -->
            <script src="{{ asset('js/fastclick.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('js/demo.js') }}"></script>
            <!-- AdminLTE for select 2 -->
            <script src="{{ asset('js/select2.full.min.js') }}"></script>
            <!-- AdminLTE for time picker -->
            <script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>

            @if(config('adminlte.plugins.select2'))
                <!-- Select2 -->
                <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
            @endif

            @if(config('adminlte.plugins.datatables'))
                <!-- DataTables -->
                <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
            @endif

            @yield('adminlte_js')




</body>

<script>
    var checker = " ";
    var ridesTotal = 0; // rides
    var sportsTotal = 0;
    var corkagesTotal = 0;
    var amenitiesTotal = 0;
    var totalAmount = 0;
    var overallTotal = 0;
    var deduct = 0;
    var less = 0;
    var updatedCost = 0;

    var kids = 0;
    var adult = 0;
    var kidsAmount = 200;
    var adultAmount = 300;
    var cottage = 2500;
    var vat = 0;
    var totalVat = 0;

    $(function () {
        $('.select2').select2()
    })

    $('.timepicker').timepicker({
      showInputs: false
    })

    $("#daytripRegular").hide();
    $("#daytripOffPeakSeasonPromo").hide();
    $("#amenities").hide();
    $("#space").hide();

    function showDTReg() {
        $("#daytripRegular").show();
        $("#daytripOffPeakSeasonPromo").hide();  
        $("#amenities").hide();   
        $("#amenitiesBtn").show();
        checker = "regular";
    }

    function showDTPromo() {
        $("#daytripOffPeakSeasonPromo").show();
        $("#daytripRegular").hide();
        $("#amenities").hide();
        $("#amenitiesBtnP").show();
        checker = "Promo";
    }

    function showAmenities() {
        $("#amenitiesBtn").hide();
        $("#amenitiesBtnP").hide();
        $("#amenities").show();
        $("#space").show(); 

    }

    function edit(){
        console.log('ran');
        $("#edit").submit();
    }

    function remove(){
        if (checker == "Promo") {
            $("#daytripRegular").remove();
            $("form").submit();
        } else {
            $("#daytripOffPeakSeasonPromo").remove();
            $("form").submit();
        }  
    }



    //tests here
    $("#try").hide();
    $("#try2").hide();
        function showPromo(){
            $("#try2").show();
            $("#try").hide();
            checker = "Promo";
        }

        function showRegular(){
            $("#try").show();
            $("#try2").hide();
            checker = "regular";
        }


    console.log('Testaa Script'); 
    function softDelete (){
        $('.deleteReservation').on('click', function() {
            var choice = confirm('Do you really want to delete this record?');
            if(choice === true) {
                $("#deleteFinally").submit();
            } 
            return false;
        }); 
}

//Tian's
    function cal(){
        kids = document.getElementById("kids").value;
        adult = document.getElementById("adult").value;
        totalAmount = (kids * kidsAmount) + (adult * adultAmount) + (cottage *1);
        vat = document.getElementById("vat").value;
        totalVat = (totalAmount * 1) + (vat * 1);
        document.getElementById("amount").value = totalAmount;
        document.getElementById("vatIn").value = totalVat;
        overallTotal = overallTotal + totalAmount;
        console.log(overallTotal);

        if (overallTotal == 0) {
                $('#overallTotal').val('');
            } else {                
                $('#overallTotal').val(overallTotal);
            }
    }

    function doMath(){
        kids = document.getElementById("child").value;
        adult = document.getElementById("grownUp").value;
        totalAmount = (kids * kidsAmount) + (adult * adultAmount);
        vat = document.getElementById("vats").value;
        totalVat = (totalAmount * 1) + (vat * 1);
        document.getElementById("amnt").value = totalAmount;
        document.getElementById("vatInc").value = totalVat;
        overallTotal = overallTotal + totalAmount;
        console.log(overallTotal);

        if (overallTotal == 0) {
                $('#overallTotal').val('');
            } else {                
                $('#overallTotal').val(overallTotal);
            }
    }
// end

    function doLessPayment(){
        var deducted = document.getElementById("less").value;
         var now = 0 + deducted
         console.log(now);
        overallTotal = document.getElementById("cost").value;
        updatedCost = overallTotal - less;
        console.log(updatedCost);

        if (updatedCost == 0) {
            $('#total_balance').val('');
        } else {                
            $('#total_balance').val(updatedCost);
        }

    }

    $(".ridess").click(function(event) {
        $(".ridess:checked").each(function() {
            ridesTotal += parseInt($(this).val());
            overallTotal = overallTotal + ridesTotal;
            console.log(overallTotal);
            amenitiesTotal = amenitiesTotal + ridesTotal;
        });
        if (amenitiesTotal == 0) {
            $('#amountt').val('');
        } else {                
            $('#amountt').val(amenitiesTotal);
        }

        if (overallTotal == 0) {
            $('#overallTotal').val('');
        } else {                
            $('#overallTotal').val(overallTotal);
        }
    });

    $(".sports").click(function(event) {
        $(".sports:checked").each(function() {
            sportsTotal += parseInt($(this).val());
            overallTotal = overallTotal + sportsTotal;
            console.log(overallTotal);
            amenitiesTotal = amenitiesTotal + sportsTotal;
        });
        if (amenitiesTotal == 0) {
            $('#amountt').val('');
        } else {                
            $('#amountt').val(amenitiesTotal);
        }

        if (overallTotal == 0) {
            $('#overallTotal').val('');
        } else {                
            $('#overallTotal').val(overallTotal);
        }
    });

    $(".corkages").click(function(event) {
        $(".corkages:checked").each(function() {
            corkagesTotal += parseInt($(this).val());
            overallTotal = overallTotal + corkagesTotal;
            console.log(overallTotal);
            amenitiesTotal = amenitiesTotal + corkagesTotal;
        });
        if (amenitiesTotal == 0) {
            $('#amountt').val('');
        } else {                
            $('#amountt').val(amenitiesTotal);
        }

        if (overallTotal == 0) {
            $('#overallTotal').val('');
        } else {                
            $('#overallTotal').val(overallTotal);
        }
    });

 
</script>

</html>
