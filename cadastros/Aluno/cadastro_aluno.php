<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Aluno</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../../icone.ico">
	<link rel="stylesheet" type="text/css" href="estilo_cadastro_aluno.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript">
    $("#fixo").mask("(00) 0000-0000");
    $("#fixo").val(this.value.match(/[0-9]*/));
    </script>
    <script type="text/javascript">
    $("#cel").mask("(00) 0000-00009");
    $("#cel").val(this.value.match(/[0-9]*/));
    </script>
    <script type="text/javascript">$(document).ready(function() {
  		$("#matricula").keyup(function() {
      	$("#matricula").val(this.value.match(/[0-9]*/));
  		});
		});
	</script>
	<script type="text/javascript">
    $("#anoingresso");
    </script>
    <script type="text/javascript">$(document).ready(function() {
  		$("#anoingresso").keyup(function() {
      	$("#anoingresso").val(this.value.match(/[0-9]*/));
  		});
		});
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
				<p style="font-size: 30px;">Aluno:</p>
				<br>
				<div id="lado1">
					Matrícula: &#160;&emsp;&emsp;&emsp;&emsp;&ensp;&#160;
					<input id="matricula" type="text" maxlength="11" pattern="([0-9]{12})"/>
					<br><br>
					Data de nascimento: &#160;
					<input type="date" id="datanasc" required>
					<br><br>
					Telefone fixo: &#160;&emsp;&emsp;&emsp;&#160;
					<input type="text" placeholder=" (00) 00000-0000" id="fixo" required>
					<br><br>
					Nível: &#160;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#160;&#160;
					<select id="nivelcurso">
   						<option value="Técnico">Técnico</option>
   						<option value="Graduação">Graduação</option>
					</select>
					<br><br>
					Ano de ingresso: &#160;&emsp;&#160;&#160;
					<input type="text" id="anoingresso" maxlength="4" pattern="([0-9]{4})" required>
				</div>

				<div id="lado2">
					Nome do aluno: &#160;
					<input type="name" id="nome" required placeholder=" Nome do Aluno">
					<br><br>
					Email: &#160;&emsp;&emsp;&emsp;&emsp;
					<input type="email" placeholder=" email@adress.com" id="email" required>
					<br><br>
					Celular: &#160;&emsp;&emsp;&emsp;&ensp;
					<input type="text" placeholder=" (00) 00000-0000" id="cel" required>
					<br><br>
					Turno: &#160;&emsp;&emsp;&emsp;&emsp;
					<select id="turno">
   					<option value="Integral">Integral</option>
   					<option value="Noturno">Noturno</option>
					</select> &nbsp;
					<br><br>
					Curso: &#160;&emsp;&emsp;&emsp;&emsp;
					<select id="nomecurso">
   						<option>Informática</option>
   						<option>Eletrotécnica</option>
   						<option>Mecânica</option>
   						<option>| | |</option>
					</select>
					</select>
				</div>
				<br><br><br><br><br><br><br><br><br><br>
				<button>Gravar</button>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#160;&#160;&#160;
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