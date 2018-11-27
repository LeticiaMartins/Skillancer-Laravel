<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro Skillancers</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> 

		<style>
		
		.logo{
			position: fixed;
			margin-bottom:550px;
			margin-left: 140px;
		}

		h1{
			position: fixed;
			font-family: "Kaushan Script", cursive; 
			color: #fcf7eb;
			text-decoration: none;
			font-weight: 700;
			margin-top: -300px;
			letter-spacing: 1px;
			margin-left: 3px;
		}
		
		</style>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">

		<a href="index.php"><h1>Skillancers</h1></a>

		<div class= "logo"> 
					<a class= "fontelogo" href="index.php"><img src="images/logo.png" alt="" width= "50" height= "50"></a>
				</div>

			<div class="inner">
				<div class="image-holder">
					<img src="images/homem.jpg" alt="">
				</div>

				<form name= "signup" action="" method= "POST">

					<h1>crie sua conta</h1>

				
					<div class="form-wrapper">
						<input name= "username" type="text" placeholder="Nome" class="form-control">
						

					<div class="form-wrapper">
						<input name= "username" type="text" placeholder="Sobrenome" class="form-control">

					<div class="form-wrapper">
						<input name= "username" type="text" placeholder="Nome de Usuárix" class="form-control">
						<i class="zmdi zmdi-account"></i>					
					</div>

					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Senha" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>


					<div class="form-wrapper">
						<input type="password" placeholder="Confirmar Senha" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Enviar
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>