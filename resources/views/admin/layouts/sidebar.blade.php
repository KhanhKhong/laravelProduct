<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	<a class="navbar-brand" href="index.html">Admin</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slides">
				<a class="nav-link {{ Route::currentRouteName() == 'slides' || Route::currentRouteName() == 'create_slide'? 'item-active':'' }}" href="{{ route('slides') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Slides</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="News">
				<a class="nav-link {{ Route::currentRouteName() == 'news' || Route::currentRouteName() == 'create_new'? 'item-active':'' }}" href="{{ route('news') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">News</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Product Category">
				<a class="nav-link {{ Route::currentRouteName() == 'categories' || Route::currentRouteName() == 'create_category'? 'item-active':'' }}" href="{{ route('categories') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Product Category</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
				<a class="nav-link {{ Route::currentRouteName() == 'products' || Route::currentRouteName() == 'create_product'? 'item-active':'' }}" href="{{ route('products') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Product</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
				<a class="nav-link {{ Route::currentRouteName() == 'contact' || Route::currentRouteName() == 'create_contact'? 'item-active':'' }}" href="{{ route('contact') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">Contact</span>
				</a>
			</li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
				<a class="nav-link {{ Route::currentRouteName() == 'about' || Route::currentRouteName() == 'create_about'? 'item-active':'' }}" href="{{ route('about') }}">
					<i class="fa fa-fw fa-dashboard"></i>
					<span class="nav-link-text">About</span>
				</a>
			</li>
		</ul>
		<ul class="navbar-nav sidenav-toggler">
			<li class="nav-item">
				<a class="nav-link text-center" id="sidenavToggler">
					<i class="fa fa-fw fa-angle-left"></i>
				</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				<i class="fa fa-fw fa-sign-out"></i>Logout</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
	</div>
</nav>
