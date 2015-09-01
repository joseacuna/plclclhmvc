@extends('principal::_layout.master')
@section('content')
<header>
<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="">Planificacion De Clases</a>
	</div>


	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="http:\\dirdoc.utem.cl">Dirdoc</a></li>
            <li><a href="http:\\reko.utem.cl">Reko</a></li>

		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
</header>

    <div class="container" id="portada" style="margin-top: 70px">
		@yield('login')

    </div>

   @stop()