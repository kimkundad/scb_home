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
						<h2>Digital Currency Seminar</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.html">
										<i class="fa fa-home"></i>
									</a>
								</li>

								<li><span>Digital Currency Seminar</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>


					<!-- start: page -->







							<div class="row">


                <div class="row">
                  <div class="col-md-12">




                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <section class="panel panel-featured-left panel-featured-primary">
                          <div class="panel-body">
                            <div class="widget-summary">
                              <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                  <i class="fa fa-child"></i>
                                </div>
                              </div>
                              <div class="widget-summary-col">
                                <div class="summary">
                                  <h4 class="title">รายได้ต่ำกว่า 150,000 บาท</h4>
                                  <div class="info">
                                    <strong class="amount">{{$count_user_1}}</strong>
                                  </div>
                                </div>
                                <div class="summary-footer">
  														<a class="text-muted text-uppercase">(view all)</a>
  													</div>

                              </div>
                            </div>
                          </div>
                        </section>
                      </div>


                      <div class="col-md-12 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-primary">
                            <div class="panel-body">
                              <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                  <div class="summary-icon bg-primary">
                                    <i class="fa fa-graduation-cap"></i>
                                  </div>
                                </div>
                                <div class="widget-summary-col">
                                  <div class="summary">
                                    <h4 class="title">ช่วง 150,001 – 300,000 บาท</h4>
                                    <div class="info">
                                      <strong class="amount">{{$count_user_2}}</strong>
                                    </div>
                                  </div>
                                  <div class="summary-footer">
    														<a class="text-muted text-uppercase">(view all)</a>
    													</div>

                                </div>
                              </div>
                            </div>
                          </section>
                        </div>


                        <div class="col-md-12 col-lg-4 col-xl-4">
                            <section class="panel panel-featured-left panel-featured-primary">
                              <div class="panel-body">
                                <div class="widget-summary">
                                  <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                      <i class="fa fa-user-secret"></i>
                                    </div>
                                  </div>
                                  <div class="widget-summary-col">
                                    <div class="summary">
                                      <h4 class="title">ช่วง 300,001 – 500,000 บาท</h4>
                                      <div class="info">
                                        <strong class="amount">{{$count_user_3}}</strong>
                                      </div>
                                    </div>
                                    <div class="summary-footer">
      														<a class="text-muted text-uppercase">(view all)</a>
      													</div>

                                  </div>
                                </div>
                              </div>
                            </section>
                          </div>





                          <div class="col-md-12 col-lg-4 col-xl-4">
                              <section class="panel panel-featured-left panel-featured-primary">
                                <div class="panel-body">
                                  <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                      <div class="summary-icon bg-primary">
                                        <i class="fa fa-star-half"></i>
                                      </div>
                                    </div>
                                    <div class="widget-summary-col">
                                      <div class="summary">
                                        <h4 class="title">ช่วง 500,001 – 750,000 บาท</h4>
                                        <div class="info">
                                          <strong class="amount">{{$count_user_4}}</strong>
                                        </div>
                                      </div>
                                      <div class="summary-footer">
        														<a class="text-muted text-uppercase">(view all)</a>
        													</div>

                                    </div>
                                  </div>
                                </div>
                              </section>
                            </div>





                            <div class="col-md-12 col-lg-4 col-xl-4">
                                <section class="panel panel-featured-left panel-featured-primary">
                                  <div class="panel-body">
                                    <div class="widget-summary">
                                      <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-primary">
                                          <i class="fa fa-star"></i>
                                        </div>
                                      </div>
                                      <div class="widget-summary-col">
                                        <div class="summary">
                                          <h4 class="title">ช่วง 750,001 – 1,000,000 บาท</h4>
                                          <div class="info">
                                            <strong class="amount">{{$count_user_5}}</strong>
                                          </div>
                                        </div>
                                        <div class="summary-footer">
          														<a class="text-muted text-uppercase">(view all)</a>
          													</div>

                                      </div>
                                    </div>
                                  </div>
                                </section>
                              </div>



                              <div class="col-md-12 col-lg-4 col-xl-4">
                                  <section class="panel panel-featured-left panel-featured-primary">
                                    <div class="panel-body">
                                      <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon">
                                          <div class="summary-icon bg-primary">
                                            <i class="fa fa-street-view"></i>
                                          </div>
                                        </div>
                                        <div class="widget-summary-col">
                                          <div class="summary">
                                            <h4 class="title">ช่วง 1,000,001 – 2,000,000 บาท</h4>
                                            <div class="info">
                                              <strong class="amount">{{$count_user_6}}</strong>
                                            </div>
                                          </div>
                                          <div class="summary-footer">
            														<a class="text-muted text-uppercase">(view all)</a>
            													</div>

                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </div>




                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <section class="panel panel-featured-left panel-featured-primary">
                                      <div class="panel-body">
                                        <div class="widget-summary">
                                          <div class="widget-summary-col widget-summary-col-icon">
                                            <div class="summary-icon bg-primary">
                                              <i class="fa fa-paw"></i>
                                            </div>
                                          </div>
                                          <div class="widget-summary-col">
                                            <div class="summary">
                                              <h4 class="title">ช่วง 2,000,001 – 4,000,000 บาท</h4>
                                              <div class="info">
                                                <strong class="amount">{{$count_user_7}}</strong>
                                              </div>
                                            </div>
                                            <div class="summary-footer">
              														<a class="text-muted text-uppercase">(view all)</a>
              													</div>

                                          </div>
                                        </div>
                                      </div>
                                    </section>
                                  </div>




                                  <div class="col-md-12 col-lg-4 col-xl-4">
                                      <section class="panel panel-featured-left panel-featured-primary">
                                        <div class="panel-body">
                                          <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                              <div class="summary-icon bg-primary">
                                                <i class="fa fa-music"></i>
                                              </div>
                                            </div>
                                            <div class="widget-summary-col">
                                              <div class="summary">
                                                <h4 class="title">ช่วง 4,000,001 – 20,000,000 บาท</h4>
                                                <div class="info">
                                                  <strong class="amount">{{$count_user_8}}</strong>
                                                </div>
                                              </div>
                                              <div class="summary-footer">
                														<a class="text-muted text-uppercase">(view all)</a>
                													</div>

                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                    </div>



                                    <div class="col-md-12 col-lg-4 col-xl-4">
                                        <section class="panel panel-featured-left panel-featured-primary">
                                          <div class="panel-body">
                                            <div class="widget-summary">
                                              <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                  <i class="fa fa-trophy"></i>
                                                </div>
                                              </div>
                                              <div class="widget-summary-col">
                                                <div class="summary">
                                                  <h4 class="title">มากกว่า 20,000,001 บาทขึ้นไป</h4>
                                                  <div class="info">
                                                    <strong class="amount">{{$count_user_9}}</strong>
                                                  </div>
                                                </div>
                                                <div class="summary-footer">
                  														<a class="text-muted text-uppercase">(view all)</a>
                  													</div>

                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                      </div>


                                      <div class="col-md-12 col-lg-4 col-xl-4">
                                          <section class="panel panel-featured-left panel-featured-quartenary">
                                            <div class="panel-body">
                                              <div class="widget-summary">
                                                <div class="widget-summary-col widget-summary-col-icon">
                                                  <div class="summary-icon bg-quartenary">
                                                    <i class="fa fa-user"></i>
                                                  </div>
                                                </div>
                                                <div class="widget-summary-col">
                                                  <div class="summary">
                                                    <h4 class="title">กำลังตรวจสอบ</h4>
                                                    <div class="info">
                                                      <strong class="amount">{{$count_user_10}}</strong>
                                                    </div>
                                                  </div>
                                                  <div class="summary-footer">
                    														<a class="text-muted text-uppercase" href="{{url('admin/bitcoin_checking')}}">(view all)</a>
                    													</div>

                                                </div>
                                              </div>
                                            </div>
                                          </section>
                                        </div>



                                        <div class="col-md-12 col-lg-4 col-xl-4">
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
                                                      <h4 class="title">Wallet ไม่ถูกต้อง</h4>
                                                      <div class="info">
                                                        <strong class="amount">{{$count_user_11}}</strong>
                                                      </div>
                                                    </div>
                                                    <div class="summary-footer">
                      														<a class="text-muted text-uppercase">(view all)</a>
                      													</div>

                                                  </div>
                                                </div>
                                              </div>
                                            </section>
                                          </div>



                                          <div class="col-md-12 col-lg-4 col-xl-4">
                                              <section class="panel panel-featured-left panel-featured-tertiary">
                                                <div class="panel-body">
                                                  <div class="widget-summary">
                                                    <div class="widget-summary-col widget-summary-col-icon">
                                                      <div class="summary-icon bg-tertiary">
                                                        <i class="fa fa-user"></i>
                                                      </div>
                                                    </div>
                                                    <div class="widget-summary-col">
                                                      <div class="summary">
                                                        <h4 class="title">จำนวนผู้ได้รับคัดเลือก</h4>
                                                        <div class="info">
                                                          <strong class="amount">{{$count_user_12}}</strong>
                                                        </div>
                                                      </div>
                                                      <div class="summary-footer">
                        														<a class="text-muted text-uppercase" href="{{url('admin/success_user_bitcoin')}}">(view all)</a>
                        													</div>

                                                    </div>
                                                  </div>
                                                </div>
                                              </section>
                                            </div>







                    </div>
          </div>


							<div class="col-xs-12">

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#"  class="panel-action panel-action-toggle" data-panel-toggle></a>
								</div>

								<h2 class="panel-title">รายชื่อผู้ได้รับคัดเลือก <span class="text-danger"> ( ผู้ลงทะเบียนทั้งหมด : {{$count_user}} )</span></h2>
							</header>
							 <div class="panel-body">


                 <div class="row">
                   <div class="col-md-4">


                   </div>

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
                       <th>อีเมล</th>
                       <th>เบอร์โทร</th>
                       <th>Salary</th>
                       <th>ตำแหน่ง</th>
                       <th>บริษัท</th>
                       <th>line id</th>

                       <th>จัดการ</th>
                     </tr>
                   </thead>
                   <tbody>
                     @if($objs)
                 @foreach($objs as $u)
                       <td>{{$u->id_bit}}</td>

                       <td>

                         @if(strlen($u->wallet_id) == 34)
                         <a href="https://www.facebook.com/{{$u->provider_user_id}}" target="_blank">{{$u->name_bit}}</a>
                         @else
                        <a href="https://www.facebook.com/{{$u->provider_user_id}}" class="text-danger" target="_blank">{{$u->name_bit}}</a>
                         @endif

                       </td>
                       <td>{{$u->email_bit}}</td>
                       <td>{{$u->phone_bit}}</td>

                       <td>{{$u->salary_bit}}</td>
                       <td>{{$u->position_bit}}</td>
                       <td>{{$u->company_bit}}</td>

                       <td>{{$u->line_id_bit}}</td>

                       <td>

                         @if($u->status_user == 2)
                           <a type="button" style="float:left; margin-right:3px; margin-top:5px;" class="btn btn-danger btn-xs"><i class="fa fa-frown-o "></i></a>
                           @elseif($u->status_user == 1)
                            <a type="button" style="float:left; margin-right:3px; margin-top:5px;" class="btn btn-success btn-xs"><i class="fa fa-star"></i></a>
                              @else
                              <a type="button" style="float:left; margin-right:3px; margin-top:5px;" class="btn btn-warning btn-xs"><i class="fa fa-meh-o"></i></a>
                              @endif

                         <a style="float:left; margin-right:3px; margin-top:5px;" class="btn btn-success btn-xs " target="_blank"
                         download="{{$u->qrcode}}.jpg" href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($u->qrcode)) !!}"
                         role="button"><i class="fa fa-qrcode"></i> </a>


                         <a style="float:left; margin-right:3px; margin-top:5px;" target="_blank"
                         class="btn btn-primary btn-xs modal-sizes" href="#modalSM-{{$u->id_bit}}" role="button"><i class="fa fa-wrench"></i> </a>

                         <a style="float:left; margin-right:3px; margin-top:5px;" target="_blank"
                         class="btn btn-info btn-xs " href="{{url('admin/user/detail/'.$u->user_id)}}" role="button"><i class="fa fa fa-life-saver"></i> </a>

                           <form  action="{{url('admin/bitcoin/'.$u->id_bit)}}" method="post" onsubmit="return(confirm('Do you want Delete'))" style="float: left;">
                             <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <button style="float:left; margin-top:5px;" type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                           </form>

                    <!-- popup -->
                           <div id="modalSM-{{$u->id_bit}}" class="modal-block modal-block-sm mfp-hide">
										<section class="panel">
                      <form  action="{{url('admin/bitcoin/'.$u->id_bit)}}" method="post"  >
											<header class="panel-heading">
												<h2 class="panel-title">แก้ไข {{$u->name_bit}}?</h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
                          <div class="modal-text">

                            <div class="form-group">
                              <label for="inputPassword3" class=" control-label">ชื่อเล่น : {{$u->nickname_bit}}</label>
                           </div>

                           <div class="form-group">
                             <label for="inputPassword3" class=" control-label">อาชีพ : {{$u->career_bit}}</label>
                          </div>

                          <div class="form-group">
                            <label for="inputPassword3" class=" control-label">Wallet id : {{$u->wallet_id}}</label>
                         </div>

                         <div class="form-group">
                           <label for="inputPassword3" class=" control-label">สมัครวันที่ : <?php echo DateThai($u->created_at); ?></label>
                        </div>


                        <div class="form-group">
                          <label for="inputPassword3" class=" control-label">อีเมล์ : </label>
                          <input type="text" class="form-control" name="email_bit"   value="{{ $u->email_bit }}" >
                       </div>

                              <input type="hidden" name="_method" value="PUT">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">

                               <div class="form-group">
                                 <label for="inputPassword3" class=" control-label">สิทธิการร่วมกิจกรรม</label>
                               <select class="form-control" name="status_user">
                                <option value="">--เลือกสิทธิการเข้าร่วม--</option>


                                <option value="0" @if( $u->status_user == 0)
                                                                  selected='selected'
                                                                  @endif >รอไปก่อน</option>
                                <option value="1" @if( $u->status_user == 1)
                                                                  selected='selected'
                                                                  @endif >ได้เข้าร่วม</option>
                                <option value="2" @if( $u->status_user == 2)
                                                                  selected='selected'
                                                                  @endif >กำลังตรวจสอบ</option>

                              </select>
                              </div>
                              <br>
                              <p class="text-danger">*เมื่อกด ยืนยันผ่าน ระบบจะส่งอีเมล์ไป confirm ผู้เข้าร่วม</p>
													</div>
												</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary" type="submit">Update</button>
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

@if ($message = Session::get('success'))
<script type="text/javascript">
var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
var notice = new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success',
      addclass: 'stack-topleft'
    });
</script>
@endif


@if ($message = Session::get('success_edit'))
<script type="text/javascript">
var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
var notice = new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success',
      addclass: 'stack-topleft'
    });
</script>
@endif

@if ($message = Session::get('del'))
<script type="text/javascript">
var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
var notice = new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: '{{$message}}',
      type: 'success',
      addclass: 'stack-topleft'
    });
</script>
@endif


@stop('scripts')
