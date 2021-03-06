<aside id="sidebar-left" class="sidebar-left">	
	<div class="sidebar-header">
		<div class="sidebar-title">
			Navigation
		</div>
		<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					<li>
						<a class="nav-link" href="dashboard.php">
							<i class="bx bx-home-alt" aria-hidden="true"></i>
							<span>Dashboard</span>
						</a>                        
					</li>
					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-cart-alt" aria-hidden="true"></i>
							<span>Master Setup</span>
						</a>
						<ul class="nav nav-children">
							<li><a class="nav-link" href="material.php"> Material</a></li>
							<li><a class="nav-link" href="#"> Users</a></li>
							<li><a class="nav-link" href="#"> Config</a></li>
						</ul>
					</li>
					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-cart-alt" aria-hidden="true"></i>
							<span>Sample Pages</span>
						</a>
						<ul class="nav nav-children">
							<li><a class="nav-link" href="sample-page.php"> Sample Page</a></li>
							<li><a class="nav-link" href="sample-tables.php"> Sample Tables</a></li>
							<li><a class="nav-link" href="sample-form.php"> Sample Form</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<script>
			// Maintain Scroll Position
			if (typeof localStorage !== 'undefined') {
				if (localStorage.getItem('sidebar-left-position') !== null) {
					var initialPosition = localStorage.getItem('sidebar-left-position'),
						sidebarLeft = document.querySelector('#sidebar-left .nano-content');
					
					sidebarLeft.scrollTop = initialPosition;
				}
			}
		</script>
		

	</div>

</aside>