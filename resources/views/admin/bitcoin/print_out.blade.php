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


    @if($objs)
    @foreach($objs as $u)
    <div class="div_main" style="margin-top: 0px;margin-bottom: 0px;">
      <br><br><br><br><br><br><br><br>
    <h1 class="text-center" style="font-size: 65px;margin-bottom: -15px;margin-top: 0px;text-align: center; ">{{$u->code_user}}</h1>
    <h4 class="text-center" style="margin-top: 0px;margin-bottom: 0px;text-align: center;letter-spacing: 2px;">{{$u->name}}</h4>
    <h4 class="text-center" style="margin-top: 0px;margin-bottom: 10px;text-align: center;letter-spacing: 2px;">{{$u->company}}</h4>
    </div>
    @endforeach
    @endif


		<script>
			window.print();
		</script>
	</body>
</html>
