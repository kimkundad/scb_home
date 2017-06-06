@extends('admin.layouts.template')

@section('admin.stylesheet')

<style type="text/css">
.select2-container .select2-choice {
        display: block;
        height: 35px;
    }
    .dataTables_wrapper .dataTables_length .select2-container {
        margin-right: 10px;
        width: 85px;
    }

    .dataTables_wrapper .dataTables_filter input {
         margin-left: 0em;
         display: block;
width: 99%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
    .dataTables_wrapper .dataTables_filter label {
       width: 100%;
       float: left;
    }
    .panel-body {
padding: 10px;
}
table.dataTable.nowrap th, table.dataTable.nowrap td {
white-space: normal;
}
.widget-summary .summary .title {
    margin: 0;
    font-size: 16px;
    font-size: 1.2rem;
    line-height: 22px;
    line-height: 2.2rem;
    color: #333333;
    font-weight: 500;
}
.bg-quaternary {
    background: #734BA9;
    color: #FFF;
}
.panel-featured-quaternary {
    border-color: #734BA9;
}
</style>
@stop('admin.stylesheet')

@section('admin.content')

<audio id="notif_audio"><source src="{!! asset('sounds/notify.ogg') !!}" type="audio/ogg"><source src="{!! asset('sounds/notify.mp3') !!}" type="audio/mpeg"><source src="{!! asset('sounds/notify.wav') !!}" type="audio/wav"></audio>
				<section role="main" class="content-body">




					<!-- start: page -->







							<div class="row">


                <div class="col-md-6">
  								<section class="panel">

  									<div class="panel-body">

  										<!-- Flot: Pie -->
  										<div class="chart chart-md" id="flotPie"></div>
  						<!--				<script type="text/javascript">

  											var flotPieData = [{
  												label: "Series 1",
  												data: [
  													[1, 40]
  												],
  												color: '#0088cc'
  											}, {
  												label: "Series 2",
  												data: [
  													[1, 30]
  												],
  												color: '#2baab1'
  											}, {
  												label: "Series 3",
  												data: [
  													[1, 15]
  												],
  												color: '#734ba9'
  											}, {
  												label: "Series 4",
  												data: [
  													[1, 15]
  												],
  												color: '#E36159'
  											}];



  										</script> -->

  									</div>
  								</section>
  							</div>






                <div class="col-md-6">
                  <section class="panel panel-featured-left panel-featured-secondary">
                  <div class="panel-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-secondary">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title" style="font-size: 18px; margin-top: 10px;">จำนวนผู้มาร่วมงาน ณ เวลานี้</h4>
                          <div class="info">
                            <strong class="amount" id="new_count_message">{{$count_user}}</strong>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>
                </div>

                <div class="col-md-6">
                  <section class="panel panel-featured-left panel-featured-quaternary">
                  <div class="panel-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-quaternary">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title" style="font-size: 18px; margin-top: 10px;">จำนวนผู้ร่วมงานทั้งหมด</h4>
                          <div class="info">
                            <strong class="amount" id="new_count_all_message">{{$count_user_all}}</strong>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>
                </div>

							<div class="col-xs-12">

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>
								</div>

								<h2 class="panel-title">Property Next 4.0 The new s curve  ( ผู้ลงทะเบียนเข้ามาแล้ว : <span class="text-danger" id="new_count_message2">{{$count_user}}</span> )</h2>
							</header>
							 <div class="panel-body">


                 <div class="row">


                   <div class="col-md-8 pull-right">
                     <br>
                     <div class="form-group ">
                       <label class="col-md-4 control-label"></label>
                       <div class="col-md-8">
                         <form class="form-horizontal" action="{{url('admin/searchbitcoin')}}" method="GET" enctype="multipart/form-data">
                           {{ csrf_field() }}
                         <div class="input-group input-search">
                           <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                           <span class="input-group-btn">
                             <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                           </span>
                         </div>
                       </form>
                       </div>
                     </div>
                   </div>

                 </div>


<br>

                 <div class="table-responsive">

                <table class="table table-bordered table-striped mb-none ">
                   <thead>
                     <tr>
                       <th>#</th>
                       <th>ชื่อ-นามสกุล</th>
                       <th>อีเมล์</th>
                       <th>เบอร์โทร</th>
                       <th>ชื่อบริษัท</th>
                       <th>กลุ่ม</th>
                       <th>เวลา</th>
                     </tr>
                   </thead>
                   <tbody id="message-tbody">
                     @if($objs)
                 @foreach($objs as $u)
                      <tr>
                        <td>ID: {{$u->code_user}}</td>
                        <td>
                          <a>{{$u->name}}</a>
                        </td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->phone}}</td>
                        <td>{{$u->company}}</td>

                        <td>{{$u->groups}}</td>
                        <td>{{$u->income_time}}</td>

                       </tr>



                        @endforeach
               @endif

                   </tbody>
                 </table>
               </div>


               <div class="pagination"> {{ $objs->links() }} </div>
              </div>
						</section>

							</div>
						</div>

</section>
@stop

@section('scripts')
<script src="{{url('node_modules/socket.io-client/dist/socket.io.js')}}"></script>

<script src="{{url('node_modules/socket.io-client/dist/socket.io.js')}}"></script>


<script src="{{url('assets/vendor/flot/jquery.flot.js')}}"></script>

<script src="{{url('assets/vendor/flot/jquery.flot.pie.js')}}"></script>


<script>
var socket = io.connect( 'http://'+window.location.hostname+':3000' );

socket.on( 'new_count_message', function( data ) {

    $( "#new_count_message" ).html( data.new_count_message );
    $( "#new_count_message2" ).html( data.new_count_message );
    $( "#new_count_all_message" ).html( data.all_count_message );
    console.log(data.all_count_message);
    $('#notif_audio')[0].play();

});

  socket.on( 'new_message', function( data ) {

      $( "#message-tbody" ).prepend('<tr><td>ID: '+data.code_user+'</td><td>'+data.name+'</td><td>'+data.email+'</td><td>'+data.phone+'</td><td>'+data.company+'</td><td>'+data.groups+'</td><td>'+data.income_time+'</td></tr>');
      $('#notif_audio')[0].play();
      console.log(data.income_time);
      $.ajax({
          url: '{{url('api/get_chart')}}', // getchart.php
          dataType: 'JSON',
          type: 'GET',
         // dataType: 'jsonp',
          data: {
            id: "4",
                },
          success: function(response) {



      var plot = $.plot('#flotPie', response, {
        series: {
          pie: {
            show: true,
            combine: {
              color: '#999',
              threshold: 0.1
            }
          }
        },
        legend: {
          show: false
        },
        grid: {
          hoverable: true,
          clickable: true
        }
      });


  }
      });

      var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
      var notice = new PNotify({
            title: 'มีผู้เข้าร่วมงานใหม่',
            text: data.name+' ได้เข้าร่วมงานแล้ว',
            type: 'success',
            addclass: 'stack-topleft'
          });

  });
</script>

<script>
$(document).ready(function(){
    $.ajax({
        url: '{{url('api/get_chart')}}', // getchart.php
        dataType: 'JSON',
        type: 'GET',
       // dataType: 'jsonp',
        data: {
        	id: "4",
              },
        success: function(response) {



		var plot = $.plot('#flotPie', response, {
			series: {
				pie: {
					show: true,
					combine: {
						color: '#999',
						threshold: 0.1
					}
				}
			},
			legend: {
				show: false
			},
			grid: {
				hoverable: true,
				clickable: true
			}
		});


}
    });

});
</script>

@stop('scripts')
