<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos os empregados</title>
</head>
<body>
<!-- poñer lsitado máis bonito e que solo se lle mostre ao admin, ou á propia empresa dona dos empregados 
-->

	@foreach ($empregadoEmpresa as $empoEmpa)
	<a href="/empregado/{{ $empoEmpa->idEmpo }}">
		<p>
			Empregado id: {{ $empoEmpa->idEmpo }} 
			<br>
			idUser: {{ $empoEmpa->idUser }} - idEmpa: {{ $empoEmpa->idEmpa}} - nif: {{ $empoEmpa->NIFEmpo }} - nome: {{ $empoEmpa->nomeEmpo }} {{ $empoEmpa->apelido1Empo }} {{ $empoEmpa->apelido2Empo }}
		</p>
	</a>
	@endforeach

</body>
</html>