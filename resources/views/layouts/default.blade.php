<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eNno Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/set1.css') }}" />
	<link href="{{ asset('css/overwrite.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css')  }}" rel="stylesheet">
    <!-- =======================================================
        Theme Name: eNno
        Theme URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
	@yield("css")
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}"><span>eNno</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="{{ url('/') }}">Inicio</a></li>
						<li role="presentation"><a href="{{ url('/produtos') }}">Produtos</a></li>
						<li role="presentation"><a href="{{ url('empresa') }}">Empresa</a></li>
						<li role="presentation"><a href="{{ url('contatos') }}">Contatos</a></li>
						<!--<li role="presentation"><a href="{{ url('contact') }}">Contact</a></li>!-->						
					</ul>
				</div>
			</div>			
		</div>
	</nav>
	
	@yield("content")
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
	<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/fliplightbox.min.js') }}"></script>
	<script src="{{ asset('js/functions.js') }}"></script>	
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
	@yield("scripts")	
    
</body>
</html>