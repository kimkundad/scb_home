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
</style>
@stop('admin.stylesheet')

@section('admin.content')


            <?php

            function DateThai($strDate)
            {
            $strYear = date("Y",strtotime($strDate))+543;
            $strMonth= date("n",strtotime($strDate));
            $strDay= date("j",strtotime($strDate));
            $strHour= date("H",strtotime($strDate));
            $strMinute= date("i",strtotime($strDate));
            $strSeconds= date("s",strtotime($strDate));
            $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
            $strMonthThai=$strMonthCut[$strMonth];
            return "$strDay $strMonthThai $strYear $strHour:$strMinute.น";
            }

             ?>



				<section role="main" class="content-body">

					<header class="page-header">
						<h2>Property Next 4.0 The new s curve</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.html">
										<i class="fa fa-home"></i>
									</a>
								</li>

								<li><span>Check User</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>


					<!-- start: page -->







							<div class="row">





							<div class="col-xs-12">

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>
								</div>

								<h2 class="panel-title">Property Next 4.0 The new s curve <span class="text-danger"> ( ผู้ลงทะเบียนทั้งหมด : {{$count_user}} )</span></h2>
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
                       <th>เบอร์โทร</th>
                       <th>ชื่อบริษัท</th>
                       <th>กลุ่ม</th>
                       <th>Char</th>


                       <th>จัดการ</th>
                     </tr>
                   </thead>
                   <tbody>
                     @if($objs)
                 @foreach($objs as $u)
                       <td>{{$u->code_user}}</td>

                       <td>

                         <a>{{$u->name}}</a>

                       </td>
                       <td>{{$u->phone}}</td>
                       <td>{{$u->company}}</td>

                       <td>{{$u->groups}}</td>
                       <td>{{$u->char_user}}</td>


                       <td>






                         <a style="float:left; margin-right:3px; margin-top:5px;" target="_blank"
                         class="btn btn-primary btn-xs modal-sizes" href="#modalSM-{{$u->id}}" role="button"><i class="fa fa-wrench"></i> </a>





                    <!-- popup -->
                           <div id="modalSM-{{$u->id}}" class="modal-block modal-block-sm mfp-hide">
										<section class="panel">
                      <form id="cutproduct1">
											<header class="panel-heading">
												<h2 class="panel-title">แก้ไข {{$u->name}}?</h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
                          <div class="modal-text">

                            <div class="form-group">
                              <label for="inputPassword3" class=" control-label">เบอร์โทร : {{$u->phone}}</label>
                           </div>

                           <div class="form-group">
                             <label for="inputPassword3" class=" control-label">ชื่อบริษัท : {{$u->company}}</label>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class=" control-label">กลุ่ม : {{ $u->groups }}</label>

                         </div>




                               <div class="form-group">
                                 <label for="inputPassword3" class=" control-label">สิทธิการร่วมกิจกรรม</label>
                               <select class="form-control" id="status_user" name="status_user">
                                <option value="">--เลือกสิทธิการเข้าร่วม--</option>


                                <option value="0" @if( $u->confirmed == 0)
                                                                  selected='selected'
                                                                  @endif >ยังไม่มา</option>
                                <option value="1" @if( $u->confirmed == 1)
                                                                  selected='selected'
                                                                  @endif >ได้เข้าร่วมแล้ว</option>


                              </select>
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="inputPassword3" class=" control-label">Admin id : {{ Auth::user()->id }}</label>
                                <input type="hidden" id="admin_id" class="form-control" name="admin_id" value="{{ Auth::user()->id }}" >
                                <input type="hidden" id="id_user" class="form-control" name="id"   value="{{ $u->id }}" >
                             </div>
													</div>
												</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<a class="tooltip_flip tooltip-effect-1 btn btn-primary" type="button" id="submit">Update</a>
														<button class="btn btn-default modal-dismiss">Cancel</button>
													</div>
												</div>
											</footer>
                      </form>
										</section>
									</div>
                  <!-- popup -->



                       </td>
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
<script>
$(document).ready(function(){



$('.tooltip_flip.tooltip-effect-1').click(function(e){
  e.preventDefault();


  var $form = $(this).closest("form#cutproduct1");
            var formData =  $form.serializeArray();



   var dataString = {
          status_user : $form.find("#status_user").val(),
          admin_id : $form.find("#admin_id").val(),
          id_user : $form.find("#id_user").val(),
          _token : '{{ csrf_token() }}'
        };

    $.ajax({
        type: "POST",
        url: "{{url('admin/bitcoin_sender')}}",
        data: dataString,
        dataType: "json",
        cache : false,
        success: function(data){


          $("#status_user").val('');
          $("#admin_id").val('');
          $("#id_user").val('');

          if(data.success == true){

          //  $("#notif").html(data.notif);

            var socket = io.connect( 'http://'+window.location.hostname+':3000' );

            socket.emit('new_count_message', {
              new_count_message: data.new_count_message,
              all_count_message: data.all_count_message
            });
            console.log(data.all_count_message);


            socket.emit('new_message', {
              code_user: data.code_user,
              name: data.name,
              phone: data.phone,
              company: data.company,
              char_user: data.char_user,
              groups: data.groups
            });
          //  alert(data.phone_bit);
          //  window.location.reload();


          var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
          var notice = new PNotify({
                title: 'ทำรายการสำเร็จ',
                text: 'ทำการเพิ่มผู้ลงทะเบียนใหม่',
                type: 'success',
                addclass: 'stack-topleft'
              });

          window.open('{{url('admin/print/')}}/'+data.id, '_blank');

          } else if(data.success == false){

            alert("ไม่ต้องกดก็ได้");

          }




          var delayMillis = 2200; //1 second

          setTimeout(function() {
            window.location.reload();
          }, delayMillis);



        } ,error: function(xhr, status, error) {
          alert(error);
        },

    });

});

});
</script>


@stop('scripts')
