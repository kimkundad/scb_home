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









                <div class="col-md-3">
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
                          <h4 class="title" style="font-size: 16px; margin-top: 10px;">Distributor coupon</h4>
                          <div class="info">
                            <strong class="amount" id="new_count_message">{{$objs}} / {{$objs_2}}</strong>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>
                </div>



                <div class="col-md-3">
                  <section class="panel panel-featured-left panel-featured-success">
                  <div class="panel-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-success">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title" style="font-size: 18px; margin-top: 10px;">C&S coupon</h4>
                          <div class="info">
                            <strong class="amount" id="new_count_message">{{$objs_zero}} / {{$objs_zero_2}}</strong>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>
                </div>



                <div class="col-md-3">
                  <section class="panel panel-featured-left panel-featured-primary">
                  <div class="panel-body">
                    <div class="widget-summary">
                      <div class="widget-summary-col widget-summary-col-icon">
                        <div class="summary-icon bg-primary">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <div class="widget-summary-col">
                        <div class="summary">
                          <h4 class="title" style="font-size: 18px; margin-top: 10px;">Other coupon</h4>
                          <div class="info">
                            <strong class="amount" id="new_count_message">{{$objs_other}} / {{$objs_other_2}}</strong>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>
                </div>


                <div class="col-md-6">

  						<section class="panel">

  							 <div class="panel-body">


                   <form  action="{{url('admin/print_coupon/')}}" method="post" >
                          <input type="hidden" name="_method" value="POST">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <div class="form-group">
                             <label for="exampleInputEmail1">ใส่ตัวเลข ที่ต้องการจะพิมพ์คูปอง</label>
                           <input type="number" class="form-control" name="num_print" required>
                           </div>
                           <div class="form-group">
                           <select class="form-control" class="form-control" name="name_group" required>
                             <option value="">--เลือกกลุ่มที่จะพิมพ์--</option>
                             <option value="0">other</option>
                            <option value="1">distributor</option>
                            <option value="2">contractor & supplier</option>
                          </select>
                          </div>
                           <br>
                          <button type="submit" class="btn btn-default "><i class="fa fa-user-plus"></i> พิมพ์คูปอง</button>
                  </form>




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

      $( "#message-tbody" ).prepend('<tr><td>ID: '+data.code_user+'</td><td>'+data.name+'</td><td>'+data.phone+'</td><td>'+data.company+'</td><td>'+data.groups+'</td><td>'+data.income_time+'</td></tr>');
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
