<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>@yield('title', 'Vigilium')</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/vigi1.png')}}">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" >		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
		
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="{{asset('plugins/fullcalendar/fullcalendar.min.css')}}">

		<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<div class="header">
			
				<!-- Logo -->
				<div class="header-left">
					<a href="{{ route('index') }}" class="logo">
						<img src="{{asset('img/vigi.png')}}" alt="Logo">
					</a>
					<a href="{{ route('index') }}" class="logo logo-small">
						<img src="{{asset('img/vigi1.png')}}" alt="Logo" width="30" height="30">
					</a>
					<a href="javascript:void(0);" id="toggle_btn">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
				</div>
				<!-- /Logo -->
				
				<!-- Sidebar Toggle -->
				
				<!-- /Sidebar Toggle -->
				
				<!-- Search -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link pr-0" data-toggle="dropdown">
							<i data-feather="bell"></i> <span class="badge badge-pill"></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="{{asset('img/profiles/avatar-02.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="{{asset('img/profiles/avatar-03.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<div class="avatar avatar-sm">
													<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
												</div>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">New user registered</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="{{asset('img/profiles/avatar-04.jpg')}}">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<div class="avatar avatar-sm">
													<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
												</div>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img">
								@if(Auth::user()->profile_photo)
									<img src="{{ asset('storage/profile/' . Auth::user()->profile_photo) }}" alt="Profile Image" width="50" height="50" />
								@else
									<i class="fas fa-user-circle fa-2x"></i> 
								@endif
								<span class="status online"></span>
							</span>
							<span>{{ Auth::user()->username }}</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
							<a class="dropdown-item" href="{{ route('setting', ['section' => 'profile']) }}"><i data-feather="settings" class="mr-1"></i> Settings</a>
							<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							
							<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<i data-feather="log-out" class="mr-1"></i> Logout
							</a>
							
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<div class="dropdown mobile-user-menu show">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right ">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						
						<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							Logout
						</a>						
					</div>
				</div>
				<!-- /Header Menu -->
				
			</div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div class="sidebar-contents">
						<div id="sidebar-menu" class="sidebar-menu">
							<div  class="mobile-show">
								<div class="offcanvas-menu"  >
									<div class="user-info align-center bg-theme text-center">
										<span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
										<a href="javascript:void(0)" class="d-block menu-style text-white">
											<div class="user-avatar d-inline-block mr-3">
												@if(Auth::user()->profile_photo)
													<img src="{{ asset('storage/profile/' . Auth::user()->profile_photo) }}" alt="Profile Image" width="50" class="rounded-circle" />
												@else
													<i class="fas fa-user-circle fa-2x"></i> 
												@endif
											</div>
										</a>
									</div>
								</div>
								<div class="sidebar-input">
									<div class="top-nav-search">
										<form>
											<input type="text" class="form-control" placeholder="Search here">
											<button class="btn" type="submit"><i class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
							</div>
							<ul>
								<li class="{{ request()->routeIs('admin.index') ? 'active' : '' }}">
									<a href="{{ route('admin.index') }}">
										<img src="{{ asset('img/home.svg') }}" alt="sidebar_img">
										<span>Tableau de bord</span>
									</a>
								</li>
								<li class="{{ request()->routeIs('employee') ? 'active' : '' }}">
									<a href="{{ route('employee') }}">
										<img src="{{ asset('img/employee.svg') }}" alt="sidebar_img">
										<span> Personnel</span>
									</a>
								</li>
								<li class="{{ request()->routeIs('manage') ? 'active' : '' }}">
									<a href="{{ route('manage') }}">
										<img src="{{ asset('img/manage.svg') }}" alt="sidebar_img">
										<span>Projets</span>
									</a>
								</li>
								<li class="{{ request()->routeIs('taches') ? 'active' : '' }}">
									<a href="{{ route('taches') }}">
										<img src="{{ asset('img/review.svg') }}" alt="sidebar_img">
										<span>Tâches</span>
									</a>
								</li>
								<li class="{{ request()->routeIs('calendar') ? 'active' : '' }}">
									<a href="{{ route('calendar') }}">
										<img src="{{ asset('img/calendar.svg') }}" alt="sidebar_img">
										<span>Calendrier</span>
									</a>
								</li>
								<li class="{{ request()->routeIs('leave') ? 'active' : '' }}">
									<a href="{{ route('leave') }}">
										<img src="{{ asset('img/leave.svg') }}" alt="sidebar_img">
										<span>Équipe </span>
									</a>
								</li>
								<li class="{{ request()->routeIs('report') ? 'active' : '' }}">
									<a href="{{ route('report') }}">
										<img src="{{ asset('img/report.svg') }}" alt="sidebar_img">
										<span>Rapports</span>
									</a>
								</li>
								<li class="{{ request()->routeIs('setting') ? 'active' : '' }}">
									<a  href="{{ route('setting', ['section' => 'profile']) }}">
										<img src="{{ asset('img/settings.svg') }}" alt="sidebar_img">
										<span>Paramètres</span>
									</a>
								</li>
							</ul>
							<ul class="logout">
								<li>
									<!-- Lien de déconnexion -->
									<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<img src="{{asset('img/logout.svg')}}" alt="sidebar_img">
										<span>Déconnexion</span>
									</a>
								</li>
							</ul>
							
							<!-- Formulaire de déconnexion -->
							<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
								@csrf
							</form>							
						</div>
				  </div>
				</div>
			</div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<main>
                @yield('content')
            </main>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->

		<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('js/popper.min.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>
		
		
		<!-- Slimscroll JS -->
		<script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="{{asset('plugins/select2/js/select2.min.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('js/script.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>

		<script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="ee89149286dba8368f1ad08c-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91fa97fb9f21d135","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

		<!-- jQuery -->
		<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('js/popper.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		
		<!-- Feather Icon JS -->
		<script src="{{asset('js/feather.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{asset('plugins/moment/moment.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		
		<!-- Full Calendar JS -->
        <script src="{{asset('js/jquery-ui.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
        <script src="{{asset('plugins/fullcalendar/fullcalendar.min.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
        <script src="{{asset('plugins/fullcalendar/jquery.fullcalendar.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('js/script.js')}}" type="3497d15e63574d089327f6bb-text/javascript"></script>

		<script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="3497d15e63574d089327f6bb-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91fa98026f47d3e4","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

		<script data-cfasync="false" src="{{asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="assets/js/jquery-3.6.0.min.js" type="025e7ee00385a4c96d6f3617-text/javascript"></script>
		  
		<!-- Slimscroll JS -->
		<script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}" type="025e7ee00385a4c96d6f3617-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="{{asset('plugins/select2/js/select2.min.js')}}" type="025e7ee00385a4c96d6f3617-text/javascript"></script>
		<script src="{{asset('plugins/select2/js/select2.min.js')}}" type="ee89149286dba8368f1ad08c-text/javascript"></script>
		
		<!-- jQuery -->
		<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('js/popper.min.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		
		<!-- Feather Icon JS -->
		<script src="{{asset('js/feather.min.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('plugins/slimscroll/jquery.slimscroll.min.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		
		<!-- Chart JS -->
		<script src="{{asset('plugins/apexchart/apexcharts.min.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		<script src="{{asset('plugins/apexchart/chart-data.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('js/script.js')}}" type="607b7ad8d70fe441d2644fff-text/javascript"></script>
		

		<script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="607b7ad8d70fe441d2644fff-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91fa97d8cd51d135","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

		@stack('scripts')
		@if(session('notify'))
			<script>
				Swal.fire({
					toast: true,
					position: 'top-end',
					icon: "{{ session('notify.type') }}", 
					title: "{!! session('notify.message') !!}",
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true
				});
			</script>
		@endif
</body>
</html>