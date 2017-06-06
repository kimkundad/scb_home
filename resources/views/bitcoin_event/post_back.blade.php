<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Digital Currency Seminar</title>


    <!-- Bootstrap -->
    <link href="{{url('assets/bitcoin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/bitcoin/css/main.css')}}" rel="stylesheet">
    <link href="{{url('assets/bootstrap-sweetalert-master/dist/sweetalert.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
  body{
    background-color: #251e61;
  }
  .head-subann{

      height: 434px;
      margin-top: 20px;
      color: #FFF;
      font-size: 40px;
      padding: 130px;
  }
  @media (max-width: 768px){
    .head-subann{
      background: none;
      background-color: #261d61;
      font-size: 18px;
      height: auto;
      padding: 25px;
  }
  .sc-member-second .row{
      margin-top:30px;
      text-align: center;
  }
  }

  .form-control {
  font-weight: bold;
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 16px;
  line-height: 1.42857143;
  color: #f89400;
  background-color: #171046;
  background-image: none;
  border: 1px solid #322979;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
select,
option:focus,
.uneditable-input:focus {
border-color: rgba(248, 148, 0, 0.8);
box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(248, 148, 0, 0.6);
outline: 0 none;
}
.sc-member-second{
    color: #fff;
    background-color: #322874;
    height: auto;
    padding: 30px 0px;
}

.sc-member-second .row{
    margin-top:30px;
}
@media (min-width: 1200px)
{
.container {
    width: 1500px;
}
}
.sweet-alert h2{
  color:#666;
      margin-bottom: 0px;
          margin-top: 48px;
}
.sa-button-container{
  display: none;
}

.header {

    min-height: 700px;

}
  </style>
  <body id="ann-page">



<audio id="notif_audio"><source src="{!! asset('sounds/notify.ogg') !!}" type="audio/ogg"><source src="{!! asset('sounds/notify.mp3') !!}" type="audio/mpeg"><source src="{!! asset('sounds/notify.wav') !!}" type="audio/wav"></audio>

  <header style="background-color: #251e61; background: url({{url('assets/image/SCBscreenprop.jpg')}});
    border-color: #251e61;
    border-radius: 0px; border-radius: 0px;
    min-height: 1024px;
    background-size: 100%;
    background-repeat: no-repeat;">

    <div id="text-show"></div>

    </header>




  <!--  <header style="background-color: #251e61;
    border-color: #251e61;
    border-radius: 0px;">
    <div class="container" style="margin-top:30px; ">
      <a href="{{url('acmeinvestor_digitalcurrency_seminar')}}"><img src="{{url('assets/bitcoin/images/acme-logo.png')}}" class="img-responsive"></a>
    </div>
    </header>

    <br><br>


-->





<!--
    <section class="sc-blue">
      <div class="container">
        <div class="text-center">
          <h2>รายชื่อผู้มาลงทะเบียนหน้างาน</h2>
          <p class="title-sub"><b>หมายเหตุ* </b>ผู้เข้าร่วมสัมมนาจะได้รับแจก Bitcoin ในวันงาน (ต้องมีบัญชี Blockchain)</p>
        </div>

        @if($objs)

        <div class="row img-circle" style="margin-top: 0px;" id="message-tbody">

          @foreach($objs as $u)

          <div class="col-md-2" style="margin-top: 30px;">
            <div class="col-md-4" style=" padding-right: 5px; padding-left: 5px; ">
              <a href="https://www.facebook.com/{{$u->provider_user_id}}" target="_blank">
                <img src="//graph.facebook.com/{{$u->provider_user_id}}/picture?width=300&height=300" class="img-circle img-responsive center-block" >
            </a>
            </div>
            <div class="col-md-8" style="margin-top: 5px; padding-right: 5px; padding-left: 5px;">
              <a href="https://www.facebook.com/{{$u->provider_user_id}}" target="_blank" style="text-decoration: none;">
                <p style="margin: 0 0 0px; font-size: 15px;">{{$u->name_bit}}</p>
              <p style="margin: 0 0 0px; line-height: 1.2em;">{{$u->nickname_bit}}</p></a>
            </div>
          </div>

          @endforeach

       </div>



         @endif



      </div>
    </section>



-->














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('assets/bitcoin/js/jquery.min.js')}}"></script>    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('assets/bitcoin/js/main.js')}}"></script>
    <script src="{{url('assets/bitcoin/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/bootstrap-sweetalert-master/dist/sweetalert.js')}}"></script>


    <script src="{{url('node_modules/socket.io-client/dist/socket.io.js')}}"></script>

    <script>

    $( "#text-show" ).prepend('<h1 class="text-center" style="font-size:100px;  padding-top: 350px; margin-top: 0px; margin-bottom: 0px; text-align: center;">ยินดีต้อนรับ</h1>');

    var socket = io.connect( 'http://'+window.location.hostname+':3000' );

    socket.on( 'new_count_message', function( data ) {

        $( "#new_count_message" ).html( data.new_count_message );
        $('#notif_audio')[0].play();

    });

      socket.on( 'new_message', function( data ) {



        $( "#message-tbody" ).prepend('<tr><td>ID: '+data.code_user+'</td><td>'+data.name+'</td><td>'+data.phone+'</td><td>'+data.company+'</td><td>'+data.groups+'</td><td>'+data.income_time+'</td></tr>');
        $('#notif_audio')[0].play();

          if(data.admin_id == 1){
              $("#text-show").html("");
              $( "#text-show" ).prepend('<h1 class="text-center" style="font-size:75px;  padding-top: 350px; margin-top: 0px; margin-bottom: 0px; text-align: center;">'+data.name+'</h1><h4 style="font-size:40px; text-align: center; margin-top: 0px; margin-bottom: 0px;">'+data.company+'</h4>');

            var delayMillis = 1600;
            setTimeout(function() {
              $("#text-show").html("");
              $( "#text-show" ).prepend('<h1 class="text-center" style="font-size:100px;  padding-top: 350px; margin-top: 0px; margin-bottom: 0px; text-align: center;">ลงทะเบียนเรียบร้อย</h1>');

              var delayMilli = 1200;

                setTimeout(function() {
                  $("#text-show").html("");
                  $( "#text-show" ).prepend('<h1 class="text-center" style="font-size:100px;  padding-top: 350px; margin-top: 0px; margin-bottom: 0px; text-align: center;">ยินดีต้อนรับ</h1>');
                }, delayMilli);


            }, delayMillis);



          }



      });

    /*  var delayMillis = 500;

      setTimeout(function() {
        $("#text-show").html("");
        $( "#text-show" ).prepend('<h1 class="text-center" style="font-size:100px;  right: 400px; top: 300px; position: absolute;">ยินดีต้อนรับ</h1>');
      }, delayMillis); */

    </script>

  </body>
</html>
