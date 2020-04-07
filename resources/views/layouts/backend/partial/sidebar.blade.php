<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="{{ asset('assets/backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		     style="opacity: .8">
		<span class="brand-text font-weight-light">plusSilver.com</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Silverio del Rosario</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview">
					<a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
						<i class="nav-icon fa fa-dashboard"></i>
						<p>
							Inicio
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="{{ route('admin.pos.index') }}" class="nav-link {{ Request::is('admin/pos') ? 'active' : '' }}">
						<i class="nav-icon fa fa-dashboard"></i>
						<p>
							Punto de Venta (POS)
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/employee*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/employee*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Empleado
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.employee.create') }}" class="nav-link {{ Request::is('admin/employee/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar Empleado</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.employee.index') }}" class="nav-link {{ Request::is('admin/employee') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Empleados</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/attendance*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/attendance*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Asistencias (EMP)
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.attendance.create') }}" class="nav-link {{ Request::is('admin/attendance/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Registrar Asistencia</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.attendance.index') }}" class="nav-link {{ Request::is('admin/attendance') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todas las Asistencias</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/customer*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/customer*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Cliente
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.customer.create') }}" class="nav-link {{ Request::is('admin/customer/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar Cliente</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.customer.index') }}" class="nav-link {{ Request::is('admin/customer') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Clientes</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/supplier*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/supplier*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Proveedor
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.supplier.create') }}" class="nav-link {{ Request::is('admin/supplier/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar Proveedor</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.supplier.index') }}" class="nav-link {{ Request::is('admin/supplier') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Proveedores</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/advanced_salary*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/advanced_salary*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Salarios (EMP)
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.advanced_salary.create') }}" class="nav-link {{ Request::is('admin/advanced_salary/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar nuevo Salario</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.advanced_salary.index') }}" class="nav-link {{ Request::is('admin/advanced_salary') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Salarios</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview {{ Request::is('admin/salary*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/salary*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Salarios (EMP)
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.salary.index') }}" class="nav-link {{ Request::is('admin/salary') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Pagar Salarios</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.salary.create') }}" class="nav-link {{ Request::is('admin/salary/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Pagos salariales</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview {{ Request::is('admin/category*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Categorias
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.category.create') }}" class="nav-link {{ Request::is('admin/category/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar Categoria</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.category.index') }}" class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todas las Categorias</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/product*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/product*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Productos
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.product.create') }}" class="nav-link {{ Request::is('admin/product/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar nuevos Productos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.product.index') }}" class="nav-link {{ Request::is('admin/product') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Productos</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview {{ Request::is('admin/expense*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/expense*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Gastos
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.expense.create') }}" class="nav-link {{ Request::is('admin/expense/create') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Agregar Gastos</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.expense.today') }}" class="nav-link {{ Request::is('admin/expense-today') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>El gasto de hoy</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.expense.month') }}" class="nav-link {{ Request::is('admin/expense-month*') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Gasto Mensual</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.expense.yearly') }}" class="nav-link {{ Request::is('admin/expense-yearly*') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Gasto Anual</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.expense.index') }}" class="nav-link {{ Request::is('admin/expense') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Todos los Gastos</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview {{ Request::is('admin/order*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/order*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Ordenes de venta
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.order.pending') }}" class="nav-link {{ Request::is('admin/order/pending') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Ordenes Vta Pendientes</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.order.approved') }}" class="nav-link {{ Request::is('admin/order/approved') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Ordenes Vta Aprovadas</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview {{ Request::is('admin/sales*') ? 'menu-open' : '' }}">
					<a href="#" class="nav-link {{ Request::is('admin/sales*') ? 'active' : '' }}">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Reporte de Ventas
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.sales.today') }}" class="nav-link {{ Request::is('admin/sales-today') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Informe de hoy</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.sales.monthly') }}" class="nav-link {{ Request::is('admin/sales-monthly*') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Informe Mensual</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.sales.total') }}" class="nav-link {{ Request::is('admin/sales-total') ? 'active' : '' }}">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Ventas Totales</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-header">MENU</li>
				<li class="nav-item has-treeview">
					<a href="{{ route('admin.setting.index') }}" class="nav-link {{ Request::is('admin/setting') ? 'active' : '' }}">
						<i class="nav-icon fa fa-server"></i>
						<p>
							Configuración
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
					   document.getElementById('logout-form').submit();">
						<i class="nav-icon fa fa-sign-out"></i> Salir
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>