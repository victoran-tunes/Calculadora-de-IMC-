<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Introdução ao PHP</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<br>
		<div class="row text-center">
			<div class="col-md-6" id="coluna1">
				<img src="img/banner.png" id="banner">
				<br>
				O índice de massa corporal, conhecido como IMC, é uma técnica utilizada para verificar o estado nutricional e observar se a pessoa está dentro dos padrões de normalidade com relação ao seu peso e estatura.
				Esta técnica é medida por meio da fórmula: IMC = Peso (Kg)/ (Altura(m))². Neste cálculo leva-se em conta o peso e a altura do indivíduo, dividindo o peso pela altura elevada ao quadrado. Este cálculo é uma forma simples e de grande importância para detectar se a pessoa apresenta um grau de desnutrição, se está no padrão de normalidade, sobrepeso, obesidade ou obesidade mórbida.
				Ter um corpo saudável significa estar com o peso ideal de acordo com a quantidade de massa corporal. Por isso, devemos sempre manter uma alimentação saudável e praticar exercícios, evitando possíveis complicações com a saúde e melhorando a cada dia a qualidade de vida.
			</div>
			
			<div class="col-md-6" id="coluna2">
				<form method="get" action="index.php">
					<div class="row text-center">
						<div class="col-md-12" id="titulo">
							Cálculo de IMC e de Peso Ideal
						</div>
					</div>

					<div class="row text-center">
						<div class="col-md-6">
							<img src="img/forma.png" id="forma">
							<br>
							Informe seu peso (kg)
							<br>
							<input type="text" name="peso" id="peso" size="20" value="">
							<br><br>
							Informe sua Altura
							<br>
							<input type="text" name="altura" id="altura" size="20" value="">
							<br><br>
							Informe seu Sexo
							<br>
							<select name="sexo" id="sexo">
								<option value="F">Feminino</option>
								<option value="M">Masculino</option>
							</select>
							<br><br>
							<input type="submit" name="btnCalcular" value="Calcular">

						</div>

						<div class="col-md-6">
							<!--mostrar aqui a imagem (condição), IMC e peso ideal-->
							
							<?php
								if(isset($_GET["peso"])){
									$peso = $_GET["peso"];
									$altura = $_GET["altura"];
									$sexo = $_GET["sexo"];

									$imc = $peso / ($altura * $altura);

									if($sexo=="F"){
										$pesoideal = 49 + (0.67 * ($altura * 100 - 152.4));
									} else {
										$pesoideal = 52 + (0.75 * ($altura * 100 - 152.4));
									}


									echo "<br>";

									if($imc<17){
										echo "<img src='img/peso1.png'>";
									}

									if($imc>=17.0 && $imc<18.5){
										echo "<img src='img/peso2.png'>";
									}

									if($imc>=18.5 && $imc<25.0){
										echo "<img src='img/peso3.png'>";
									}

									if($imc>=25.0 && $imc<30.0){
										echo "<img src='img/peso4.png'>";
									}

									if($imc>=30.0 && $imc<35.0){
										echo "<img src='img/peso5.png'>";
									}

									if($imc>=35 && $imc<40.0){
										echo "<img src='img/peso6.png'>";
									}

									if($imc>=40){
										echo "<img src='img/peso7.png'>";
									}
									
									echo "<br><br>O seu IMC é $imc";
									echo "<br>O seu peso ideal é $pesoideal kg";


									/*Usar isso sempre que quiser que ao recarregar a página os componentes 
									recebam de volta o mesmo valor que tinham. Basta alterar o ID do componente e o valor
									a carregar que já deve estar salvo em uma variável*/
									echo "<script>";
									echo "$('#peso').val('$peso');";
									echo "$('#altura').val('$altura');";
									echo "$('#sexo').val('$sexo');";
									echo "</script>";

								}
							?>
						
					</div>
					</div>

				</form>		
			</div>
	
	</div>

	
</body>

</html>