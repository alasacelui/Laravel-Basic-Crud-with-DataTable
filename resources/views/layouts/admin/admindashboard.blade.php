<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.includes.styles')
    @yield('styles')
	<title id="title">@yield('title', 'Admin Dashboard')</title>
</head>

<body> 
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
					<img class="img-fluid rounded-circle d-block mx-auto" src="{{ handleNullImage(auth()->user()->avatar) }}"  width="110" alt="avatar.svg" />
        		</a>
				<ul class="sidebar-nav" >
					<p class="text-center mb-0
					">
						<small >Administrator </small>
					</p>
					<li class="sidebar-header text-white">
						Pages
					</li>

					<li class="sidebar-item admin_dashboard">
						 <a class="sidebar-link" href="{{ route('admin.dashboard.index') }}">
              				<i class="align-middle" data-feather="hexagon"></i> <span class="align-middle">Dashboard</span>
           				 </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('profile.index') }}">
							 <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">My Profile</span>
						</a>
				   </li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('admin.jobpost.index') }}">
							 <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Manage Job Post</span>
						</a>
				   </li>

		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          			<i class="hamburger align-self-center"></i>
        		</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                				<i class="align-middle" data-feather="settings"></i>
              				</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                				<img src="{{ handleNullImage(auth()->user()->avatar_thumbnail) }}" class="avatar img-fluid rounded me-1" alt="" /> <span class="text-dark">@auth
									{{ Auth::user()->name }}
								@endauth
								</span>
              				</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="{{ route('profile.index') }}"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
											  document.getElementById('logout-form').submit();">
								 {{ __('Logout') }}
							 	</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				@yield('content')
			</main>

			@include('layouts.includes.footer')
		</div>
	</div>

	@routes
	@include('layouts.includes.scripts')
	<script src="{{ asset('js/admin/script.js') }}"></script>
	@yield('script')

</body>

</html>