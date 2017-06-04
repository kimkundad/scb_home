<html>
	<head>
		<title>Property Next 4.0 The new s curve</title>
		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('./assets/vendor/bootstrap/css/bootstrap.css')}}" />


	</head>
	<body>
    <div class="rows" style="margin-top:350px;">
    <h1 class="text-center" style="margin-right:-100px; margin-top: 5px;">{{$get_data->code_user}}</h1>
    <h1 class="text-center">{{$get_data->name}}</h1>
    <h4 class="text-center">{{$get_data->company}}</h4>
    </div>


    <div class="rows" style="margin-top:150px; transform: rotate(180deg);">
    <h1 class="text-center" style="margin-right:-100px; margin-top: 5px;">{{$get_data->code_user}}</h1>
    <h1 class="text-center">{{$get_data->name}}</h1>
    <h4 class="text-center">{{$get_data->company}}</h4>
    </div>
		<script>
			window.print();
		</script>
	</body>
</html>
