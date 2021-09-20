<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Empresa</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../../icone.ico">
	<link rel="stylesheet" type="text/css" href="estilo_cadastro_empresa.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript">
    $("#telfix").mask("(00) 0000-00009");
    </script>

</head>
<body>
	<div class="container">
		<div class="cabeçalho">
			<img src="../../cabeçalho.png" width="20%" height="40%">
		</div>
		<div class="painel">
			<br>
			<p id="p1">&emsp;Painel</p>
			<div class="corpainel">
			<ul>
				<li>
					<a>Cadastros</a>
					<ul>
						<li><a href="../Aluno/cadastro_aluno.php">Aluno</a></li>
						<li><a href="../Orientador/cadastro_orientador.php">Orientador</a></li>
						<li><a href="../Empresa/cadastro_empresa.php">Empresa</a></li>
						<li><a href="../Supervisor/cadastro_supervisor.php">Supervisor</a></li>
					</ul>
				</li>
				<br>
				<li>
					<a>Vínculos</a>
					<ul>
					</ul>
				</li>
				<br>
				<li>
					<a>Relatórios</a>
					<ul>
					</ul>
				</li>
			</ul>
			</div>
		</div>
		<div class="div1">
			<div class="div3">
				<br>
				<p style="font-size: 30px;">Empresa:</p>
				<br>
				<div id="lado1">
					CNPJ:<br>
					<input type="text" class="form-control" onkeypress="$(this).mask('00.000.000/0000-00')" id="cnpj" required placeholder="00.000.000/0000-00">
					<br><br>
					Nome do Diretor:<br>
					<input type="name" id="nome" required>
					<br><br>
					Email:<br>
					<input type="email" placeholder=" email@adress.com" id="email" required>
					<br><br>
					INS-Estadual:<br>
					<input type="name" id="nome" required>
					<br><br>
				</div>

				<div id="lado2">
					Nome da empresa:<br>
					<input type="name" id="nome" required>
					<br><br>
					Nome do Responsável do RH:<br>
					<input type="name" id="nome" required>
					<br><br>
					Telefone:<br>
					<input type="tel" placeholder=" (00) 00000-0000" id="telfix" required>
					<br><br>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br>
				<button>Gravar</button>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#160;&#160;&#160;&#160;&#160;
				<a href="../inicio.php"><button>Voltar</button></a>
			</div>
		</div>
		<br><br>
		<div class="rodape">
			<div id="rp1" style="text-align-last: center;">
				<h1>Desenvolvedores:</h1><br>
        			Gustavo Silva Monteiro<br>
        			Rodolfo Cesar Cordeiro<br>
        			Vinícius Latini Gonçalves
			</div>
			<div id="rp3" style="text-align-last: center;">
				<h1>Orientadores:</h1><br>
					Luis Augusto Mattos Mendes<br>
        			Érica da Costa Reis Carvalho<br>
        	</div>
			<div id="rp2" style="text-align-last: center;">
				<h1>Contato:</h1><br>
				Telefone: (32) 3449-2308<br><br><br>
			</div>
        	<div class="logocefet">
				&emsp;&emsp;<img src="../../rodape/logocefet.png" style="height: 90px; width: 120px;"><br>
				<strong>Unidade III - Leopoldina</strong>
			</div>
		</div>
	</div>
</body>
</html>