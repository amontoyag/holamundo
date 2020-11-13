<!DOCTYPE html>
<html>
<head>
	<title>Hola Mundo</title>
</head>
<body>
	<h1>Hola Mundo</h1>
	<h3> Así lo trae desde la base de datos como una variable php</h3>
	<p>{{$arribos_capitanias}}</p>
	<h3> Así se podría ver en formato tabla</h3>
	<div class="fbox-content">

		<?php $int=1 ?>
		
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Nombre Capitanía</th>
			  <th>Total arribos</th>													  
			</tr>
		  </thead>
		  <tbody>
		  	@foreach($arribos_capitanias as $capitania)
				<tr>
				  <td>{{$int}}</td>
				  <td>{{$capitania->nom_capitania}}</td>
				  <td>{{$capitania->total}}</td>													  
				</tr>
				<?php $int=$int+1 ?>														
			@endforeach													
		  </tbody>
		</table>
	</div>
</body>
</html>