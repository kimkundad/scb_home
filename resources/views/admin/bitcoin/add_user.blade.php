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

								<li><span>Add User</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>


					<!-- start: page -->







							<div class="row">





							<div class="col-xs-6">

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>
								</div>

								<h2 class="panel-title">เพิ่มผู้ต้องการลงทะเบียน </h2>
							</header>
							 <div class="panel-body">


                 <br>
                 <form class="form-horizontal" id="cutproduct1">

                   {{ csrf_field() }}



                   <fieldset>
                     <div class="form-group">
                       <label class="col-md-3 control-label" for="profileFirstName">ชื่อ-นามสกุล*</label>
                       <div class="col-md-8">
                         <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                       </div>
                     </div>



                     <div class="form-group">
                       <label class="col-md-3 control-label" for="profileCompany">เบอร์โทร*</label>
                       <div class="col-md-8">
                         <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" required="">
                       </div>
                     </div>

                     <div class="form-group">
                       <label class="col-md-3 control-label" for="profileFirstName">กลุ่ม*</label>
                       <div class="col-md-8">
                         <select class="form-control mb-md" name="groups" id="groups">
                           <option value="">--เลือกชื่อกลุ่ม--</option>
														<option value="0">ไม่มีกลุ่ม</option>
														<option value="1">Distributor</option>
														<option value="2">Contractor & Supplier</option>
													</select>
                       </div>
                     </div>

                     <div class="form-group">
                       <label class="col-md-3 control-label" for="profileFirstName">บริษัท*</label>
                       <div class="col-md-8">
                         <input type="text" class="form-control" name="company" value="{{ old('company') }}" id="company">
                       </div>
                     </div>








                   </fieldset>
                   <br>





                   <div class="panel-footer">
                     <div class="row">
                       <div class="col-md-9 col-md-offset-3">

                         <a class="tooltip_flip tooltip-effect-1 btn btn-primary" type="button" id="submit">Submit</a>
                         <button type="reset" class="btn btn-default">Reset</button>
                       </div>
                     </div>
                   </div>

                 </form>




              </div>
						</section>

							</div>

              <div class="col-xs-6 panel-body">
                <table class="table table-bordered table-striped mb-none dataTable " id="datatable-default">
                  <thead>
												<tr>
													<th>ชื่อบริษัท </th>
                          <th>กลุ่ม</th>
												</tr>
											</thead>
                  <tbody>
                    <tr>
                      <td>บจ.อาร์พี แอสเตท</td><td>Developer</td>
                    </tr>
                      <tr><td>บจ.แอล เอส อาร์ คอปอร์เรชั่น</td><td>Developer</td></tr>
                      <tr><td>บจ.แอล.พี.เค.พร็อพเพอร์ตี้</td><td>Developer</td></tr>
                      <tr><td>บจ.โอ.จี.ซี.การ์เด้นทาวเวอร์</td><td>Developer</td></tr>
<tr><td>บจ.โอเค วิลเลจ</td><td>Developer</td></tr>
<tr><td>บจ.โอเชี่ยน พรอพเพอร์ตี้</td><td>Developer</td></tr>
<tr><td>บจ.โอริน พร็อพเพอร์ตี้</td><td>Developer</td></tr>
<tr><td>บจ.ไอยรา พร็อพเพอร์ตี้</td><td>Developer</td></tr>
<tr><td>บจ.ฮองอัน ยาลาย(กรุงเทพ)</td><td>Developer</td></tr>
<tr><td>บริษัท กานดา พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท แกรนด์ อินฟินิตี้ พร๊อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท แกรนด์ แอสเสท โฮเทลส์ แอนด์ พรอพเพอร์ตี้ จำกัด(มหาชน)</td><td>Developer</td></tr>
<tr><td>บริษัท เควสท์ ดีเวลล็อปเม้นท์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท แคปปิตอล กูรู จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เจ้าพระยามหานคร จำกัด (มหาชน)</td><td>Developer</td></tr>
<tr><td>บริษัท ฉัตรหลวง 2005 จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เฉลิมนคร จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ชัยพัฒนาที่ดิน จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ไชน่า เซ็นเตอร์ (สาทร-กัลปพฤกษ์) จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ซิตี้ รีสอร์ท ลิฟวิ่ง โฮม จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ซี.พี. แลนด์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ซื่อตรง คอนสตรัคชั่น จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ไซมิส แอสเสท จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ดรีมแลนด์ พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ดับบลิว ดีเวลลอปเม้นท์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เดอะ แบ็กยาร์ด จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เดอะเบสท์ พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ทรัพย์ในดินสินในน้ำนำโชค จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ที เอ เอส พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ไทยคอร์ป แคปปิตอล จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ธนาสิริ กรุ๊ป จำกัด (มหาชน)</td><td>Developer</td></tr>
<tr><td>บริษัท นติธาน จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท นนทวี เรสซิเด๊นซ์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท นายารา แคปปิตอล จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท นีโอคอน จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เนาวรัตน์พัฒนาการ จำกัด(มหาชน)</td><td>Developer</td></tr>
<tr><td>บริษัท บ้านพัฒนาสิริ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท บ้านมณฑลพร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ปริญสิริ จำกัด.</td><td>Developer</td></tr>
<tr><td>บริษัท พัฒนาสิริ ดีเวลลอปเม้นท์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท พาโนราม่า พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท พิศาลโฮม จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท พีซ พลัส พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ภัทรีดา ดีเวลลอปเม้นท์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท มโนรมย์ ดีเวลลอปเม้นท์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท รัตนภพการเคหะ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท รามคำแหง พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ริชชี่ ริช พร็อพ เพอร์ตี้</td><td>Developer</td></tr>
<tr><td>บริษัท ริเวอร์เดล กอล์ฟ แอนด์ คันทรี่ คลับ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท รุ่งกิจ เรียลเอสเตท จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท รูบิกส์คิวบ์แลนด์แอนด์พร็อพเพอร์ตี้ดีเวลลอปเม้นท์จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท วังทองกรุ๊ป </td><td>Developer</td></tr>
<tr><td>บริษัท วิลล่า คุณาลัย จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท วี.กรุ๊ป ฮอนด้าคาร์ส์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท วีไอพี ลิฟวิง แลนด์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท สยามมั่นคง จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท สุชาวลัย พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เสรีสากลธุรกิจ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท อาสา เรียลเอสเตท จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เอ ซี เพอร์เฟคโฮม จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เอ.เค. พร็อพเพอร์ตี้ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เอ.เค.แลนด์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เอ.ดี.เฮ้าส์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เอ.บี.เดคคอร์เรท จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เอคิว เอสเตท จำกัด (มหาชน)</td><td>Developer</td></tr>
<tr><td>บริษัท เอ็น.ซี.เฮ้าส์ซิ่ง จำกัด(มหาชน)</td><td>Developer</td></tr>
<tr><td>บริษัท เอ็นริชเสตทส์</td><td>Developer</td></tr>
<tr><td>บริษัท แอดวาสน์โฮม จำก้ัด</td><td>Developer</td></tr>
<tr><td>บริษัท แอล เอส อาร์ คอร์ปอเรชั่น จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท แอล แอนด์ ที แอสเสท จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท ฮิวแมนเนสท์ จำกัด</td><td>Developer</td></tr>
<tr><td>บริษัท เฮ้าส์ เดเวลลอปเม้นท์</td><td>Developer</td></tr>
<tr><td>บริษัท ไฮฮีโร่ จำกัด</td><td>Developer</td></tr>
<tr><td>บ้านคุณาภัทร</td><td>Developer</td></tr>
<tr><td>เออเบิ้ล พร๊อพเพอร์ตี้</td><td>Developer</td></tr>
<tr><td>ทรัพย์รุ่งเรือง</td><td>Contractor</td></tr>
<tr><td>น้อมบุญ</td><td>Contractor</td></tr>
<tr><td>บ.แลนด์ แอนด์ พร๊อพเพอร์ตี้ กรุ๊ฟ จำกัด</td><td>Contractor</td></tr>
<tr><td>บจ.อรุณวิลเลจ</td><td>Contractor</td></tr>
<tr><td>บจ.อาร์พี แอสเตท</td><td>Contractor</td></tr>
<tr><td>บริษัท แกรนด์ อินฟินิตี้ พร๊อพเพอร์ตี้ จำกัด</td><td>Contractor</td></tr>
<tr><td>บริษัท ดับบลิว ดีเวลลอปเม้นท์ จำกัด</td><td>Contractor</td></tr>
<tr><td>บริษัท เดอะเบสท์ พร็อพเพอร์ตี้ จำกัด</td><td>Contractor</td></tr>
<tr><td>บริษัท ธนาสิริ กรุ๊ป จำกัด (มหาชน)</td><td>Contractor</td></tr>
<tr><td>บริษัท นนทวี เรสซิเด๊นซ์ จำกัด</td><td>Contractor</td></tr>
<tr><td>บริษัท พิศาลโฮม จำกัด</td><td>Contractor</td></tr>
<tr><td>บริษัท เอ็นริชเสตทส์</td><td>Contractor</td></tr>
<tr><td>บริษัท เฮ้าส์ เดเวลลอปเม้นท์ </td><td>Contractor</td></tr>
<tr><td>บ้านคุณาภัทร</td><td>Contractor</td></tr>

                  </tbody>
                </table>
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


  
    var a=$form.find("#name").val();
    var b=$form.find("#phone").val();
    var c=$form.find("#groups").val();
    var d=$form.find("#company").val();
    if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="")
      {
      alert("กรอกข้อมมูลให้ครบทุกช่องนะครับน้องๆ");
      return false;
      }




   var dataString = {
          name : $form.find("#name").val(),
          phone : $form.find("#phone").val(),
          groups : $form.find("#groups").val(),
          company : $form.find("#company").val(),
          _token : '{{ csrf_token() }}'
        };

    $.ajax({
        type: "POST",
        url: "{{url('admin/store_user')}}",
        data: dataString,
        dataType: "json",
        cache : false,
        success: function(data){


          $("#name").val('');
          $("#phone").val('');
          $("#groups").val('');
          $("#company").val('');

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

            var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
            var notice = new PNotify({
                  title: 'ทำรายการไม่สำเร็จ',
                  text: data.data_message,
                  type: 'error',
                  addclass: 'stack-topleft'
                });

          }




          var delayMillis = 2200;

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
