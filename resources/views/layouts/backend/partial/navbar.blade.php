<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="index3.html" class="nav-link">Home</a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="#" class="nav-link">Contacto</a>
		</li>
	</ul>

	<!-- SEARCH FORM -->
	<form class="form-inline ml-3">
		<div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Messages Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="fa fa-comments-o"></i>
				<span class="badge badge-danger navbar-badge">3</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="{{ asset('assets/backend/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Jose Torres Nilo
								<span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
							</h3>
							<p class="text-sm">Llama cuando puedas...</p>
							<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>Hace 4 horas</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="{{ asset('assets/backend/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Juan Perez
								<span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
							</h3>
							<p class="text-sm">Recibi tu mensaje amigo</p>
							<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>Hace 4 Horas</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<!-- Message Start -->
					<div class="media">
						<img src="{{ asset('assets/backend/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
						<div class="media-body">
							<h3 class="dropdown-item-title">
								Nora Santos
								<span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
							</h3>
							<p class="text-sm">El tema va aqui</p>
							<p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> Hace 4 Horas</p>
						</div>
					</div>
					<!-- Message End -->
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">Ver todos los mensajes</a>
			</div>
		</li>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="fa fa-bell-o"></i>
				<span class="badge badge-warning navbar-badge">15</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">15 Notificaciones</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-envelope mr-2"></i> 4 nuevos mensajes
					<span class="float-right text-muted text-sm">3 mins</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-users mr-2"></i> 8 solicitudes de amistad
					<span class="float-right text-muted text-sm">12 horas</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-file mr-2"></i> 3 nuevos reportes
					<span class="float-right text-muted text-sm">2 dias</span>
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
			</div>
		</li>


		<!-- Profile Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<i class="fa fa-th-large"></i>

			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<span class="dropdown-item dropdown-header">Menu de Perfil</span>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-envelope mr-2"></i> Perfil
				</a>
				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item">
					<i class="fa fa-users mr-2"></i> Ajustes
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="{{ route('logout') }}"
				    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
					<i class="fa fa-file mr-2"></i> Salir
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>

			</div>
		</li>

	</ul>
</nav>