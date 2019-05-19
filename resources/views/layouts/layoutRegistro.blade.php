<html>
	<head>
@include("layouts.code.links")
@yield("links")

	<style type="text/css">
		h1 a{
			color:white;
			text-decoration: none;
			transition: .2s all ease-in-out;
		}
		h1 a:hover{
			color:rgba(200,0,0,1);
			text-decoration: none;
			transition: .2s all ease-in-out;
		}
	</style>

	</head>

	<body>
		<h1 style="font-family: graceland; color: white;"><a href=".">Juggernaut</a> | Formulario de registro</h1>
		@include("layouts.code.formulario")
		@yield("formulario")

		@include("layouts.code.scripts")
		@yield("scripts")
	</body>
</html>
