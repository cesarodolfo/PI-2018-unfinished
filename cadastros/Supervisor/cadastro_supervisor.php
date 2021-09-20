<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Supervisor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo_cadastro_supervisor.css">
	<link rel="shortcut icon" type="image/x-icon" href="../../icone.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript">
    $("#fixo").mask("(00) 0000-0000");
    $("#fixo").val(this.value.match(/[0-9]*/));
    </script>
    <script type="text/javascript">
    $("#cpf").mask("000.000.000-00");
    $("#cpf").val(this.value.match(/[0-9]*/));
    </script>
    <script type="text/javascript">
    	$("#rg").mask("00.000.000-0");
    </script>
</head>
<body>
	<div class="container">
		<div class="cabeçalho">
			<img src="../../cabeçalho.png" width="20%"" height="40%">
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
				<p style="font-size: 30px;">Supervisor:</p>
				<br>
				<div id="lado1">
					CPF: &#160;&emsp;&emsp;&emsp;&emsp;&#160;&emsp;&emsp;
					<input id="cpf" type="text" maxlength="11" pattern="([0-9]{12})"/>
					<br><br>
					Registro Geral:&#160;&#160;&emsp;&emsp;
					<input type="text" id="rg" required>
					<br><br>
					Formação: &#160;&#160;&emsp;&#160;&#160;&emsp;&emsp;
					<select id="formacao">
					</select>
					<br><br>
					Nível: &#160;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#160;
					<select id="nivelcurso">
					</select>
				</div>

				<div id="lado2">
					Nome do supervisor: &#160;
					<input type="name" id="nome" required placeholder=" Nome do Supervisor">
					<br><br>
					Telefone fixo: &#160;&emsp;&emsp;&emsp;&#160;
					<input type="text" placeholder=" (00) 0000-0000" id="fixo" required>
					<br><br>
					Cargo:&#160;&#160;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<select id="cargo">
					</select>
				</div>
				<br><br><br><br><br><br><br><br>
				<button>Gravar</button>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#160;
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