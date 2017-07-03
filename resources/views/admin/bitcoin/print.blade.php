<html>
	<head>
		<title>Property Next 4.0 The new s curve</title>
		<!-- Web Fonts  -->
		<link href="{{url('assets/bitcoin/css/main.css')}}" rel="stylesheet">

		<!-- Vendor CSS -->

		<style>
		.div_main{
		   width:9in;
		   height:11.69in;
		   margin:auto; /*ให้อยู่กลางจอ*/
		}
		/*ไม่แสดงปุ่มเวลาพิมพ์*/
		@media noprint {
		  img {
		    display:none;
		  }
		}
		</style>

	</head>
	<body>

		<?php

		$pizza = $get_data->name;
		$price = explode(" ", $pizza);
		//echo $price[0];
		//echo "<br>";
		//echo $price[1];
		if(empty($price[1])){
			$price[1] = " ";
		}
		 ?>




	<div class="div_main" style="margin-top: 0px;margin-bottom: 0px;">
      <br><br><br><br><br><br><br><br><br><br><br><br>
	  @if($get_data->groups == 'other')
    <h1 class="text-center" style="font-size: 70px;
	margin-right:-200px; margin-bottom: -15px;margin-top: 5px;text-align: center; ">00{{$get_data->code_user}}</h1>
	@else
	<h1 class="text-center" style="font-size: 70px;
	margin-right:-200px; margin-bottom: -15px;margin-top: 5px;text-align: center; ">{{$get_data->code_user}}</h1>
	@endif
    <h4 class="text-center" style="font-size: 42px; margin-top: 0px;
	margin-bottom: 0px;text-align: center;letter-spacing: 2px;">{{$price[0]}}<br>{{$price[1]}}</h4>
    <h4 class="text-center" style="font-size: 22px; margin-top: -2px;
	margin-bottom: 10px;text-align: center;letter-spacing: 0px;">{{$get_data->company}}</h4>


	<div style="margin-top:80px; transform: rotate(180deg);">
		@if($get_data->groups == 'other')
      <h1 class="text-center" style="font-size: 70px;
  	margin-right:-200px; margin-bottom: -15px;margin-top: 5px;text-align: center; ">00{{$get_data->code_user}}</h1>
  	@else
  	<h1 class="text-center" style="font-size: 70px;
  	margin-right:-200px; margin-bottom: -15px;margin-top: 5px;text-align: center; ">{{$get_data->code_user}}</h1>
  	@endif
	    <h4 class="text-center" style="font-size: 42px; margin-top: 0px;
		margin-bottom: 0px;text-align: center;letter-spacing: 2px;">{{$price[0]}}<br>{{$price[1]}}</h4>
	    <h4 class="text-center" style="font-size: 22px; margin-top: -2px;
		margin-bottom: 10px;text-align: center;letter-spacing: 0px;">{{$get_data->company}}</h4>

    </div>
	</div>



		<script>
			window.print();
		</script>
	</body>
</html>
