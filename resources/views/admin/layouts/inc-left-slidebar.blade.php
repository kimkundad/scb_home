<style>

ul.nav-main > li.nav-expanded > a {
  box-shadow: 2px 0 0 #7347b3 inset;
}
html.no-overflowscrolling .nano > .nano-pane > .nano-slider {
    background: #7347b3;
}
.page-header h2 {
    border-bottom-color: #7347b3;
}
</style>
<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar" ></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li {{ (Request::is('admin/dashboard*') ? 'class=nav-expanded' : '') }} >
										<a href="{{url('admin/dashboard/')}}"  >
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>


                  <li {{ (Request::is('admin/bitcoin*') ? 'class=nav-expanded' : '') }}  {{ (Request::is('admin/searchbitcoin*') ? 'class=nav-expanded' : '') }}>
										<a href="{{url('admin/bitcoin/')}}" >
											<i class="fa fa-user" aria-hidden="true"></i>
											<span>ผู้ลงทะเบียน</span>
										</a>
									</li>


                  <li {{ (Request::is('admin/add_user*') ? 'class=nav-expanded' : '') }}  {{ (Request::is('admin/add_user*') ? 'class=nav-expanded' : '') }}>
										<a href="{{url('admin/add_user')}}" >
											<i class="fa fa-user-plus " aria-hidden="true"></i>
											<span>เพิ่มผู้ลงทะเบียนใหม่</span>
										</a>
									</li>


                  <li {{ (Request::is('admin/print*') ? 'class=nav-expanded' : '') }}  {{ (Request::is('admin/print*') ? 'class=nav-expanded' : '') }}>
										<a href="{{url('admin/print')}}" >
											<i class="fa fa-print" aria-hidden="true"></i>
											<span>พิมพ์คูปอง</span>
										</a>
									</li>


								</ul>



							</nav>



							<hr class="separator" />


						</div>

					</div>

				</aside>
				<!-- end: sidebar -->
