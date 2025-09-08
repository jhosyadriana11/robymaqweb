@extends('layouts.app')

@section('title', 'Servicios - Robymaq')

@section('body_class', 'bodyservicios')

@section('content')
	<div class="container-s">
		<div class="titulo">
			<img src="img/fondost/robots3.png" alt="robot" class="imgs">
			<div class="titulo2">
				<h1 class="whitefont">Servicios</h1>
			</div>
		</div>
		<div class="apartado1s">
			<p class="lead">Los servicios aquí presentados muestran una pequeña parte de lo que hacemos. Para más información de los mismos y los productos 
			que se manejan, puede llamar al número proporcionado y con gusto le atenderemos.</p>
		</div>
		<div class="apartado2s">
			<div class="servicio1">
				<div class="imgss1"></div>
				<div class="center">
					<h5>Servicio y mantenimiento a robots industriales</h5>
				</div>
			</div>
			<div class="servicio2">
				<div class="imgss2"></div>
				<div class="center">
					<h5>Servicio de programación de robots</h5>
				</div>
			</div>
			<div class="servicio3">
				<div class="imgss3"></div>
				<div class="center">
					<h5>Servicio de diseño de herramentales de robots (EOAT)</h5>
				</div>
			</div>
			<div class="servicio4">
				<div class="imgss4"></div>
				<div class="center">
					<h5>Diseño y fabricación de estructuras</h5>
				</div>
			</div>
			<div class="servicio5">
				<div class="imgss5"></div>
				<div class="center">
					<h5>Integración y automatización</h5>
				</div>
			</div>
			<div class="servicio6">
				<div class="imgss6"></div>
				<div class="center">
					<h5>Cursos de operación de robots</h5>
				</div>
			</div>
		</div>
		<br />
		<br />
		<div class="apartado3s">	
			<div class="apartado3sp1">
				<h4 class="azulfont center">Algunos de nuestros clientes</h4>
			</div>
			<br>
			<div class="apartado3sp2">
				<div class="boxcli">
					<p><img src="img/logos/nissanlogo.png" alt="nissan" class="c1imgs1"></p>
					<p class="leadsm">Nissan Mexicana</p>
				</div>
				<div class="boxcli">
					<p><img src="img/logos/compaslogo.jfif" alt="compas" class="c1imgs1"></p>
					<p class="leadsm">Cooperation Manufacturing Plant Aguascalientes (COMPAS)</p>
				</div>
				<div class="boxcli">
					<p><img src="img/logos/unipreslogo.jpeg" alt="unipres" class="c1imgs1"></p>
					<p class="leadsm">Unipres Mexicana</p>
				</div>
				<div class="boxcli">
					<p><img src="img/logos/jatcologo.png" alt="jatco" class="c1imgs1"></p>
					<p class="leadsm">Jatco de México</p>
				</div>
				<div class="boxcli">
					<p><img src="img/logos/ahrestylogo.jfif" alt="ahresty" class="c1imgs1"></p>
					<p class="leadsm">Ahresty Mexicana</p>
				</div>
				<div class="boxcli">
					<p><img src="img/logos/gmlogo.jpg" alt="gm" class="c1imgs1"></p>
					<p class="leadsm">General Motors</p>
				</div>
			</div>
			<br />
			<br />
			<br />
			<br />
		</div>  
	</div>
@endsection