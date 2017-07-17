<?PHP 
    include("includes/head.php");
?>

		<title>Garlic Toothpaste - Adquirir</title>

	</head>


    <script type="text/javascript">
        $(document).ready(function(){
            $("#cep").mask("99.999-999");
        });
    </script>
	<body>
		<header>
			<h1>Garlic Toothpaste</h1>
		</header>

		<?PHP
            include("includes/menu.php");
        ?>
        
        <section id="corpo">
            <strong>Adquira já o seu!</strong>
            <br>
            <form id="form-pedido" method="post" action="#" enctype="multipart/form-data">
                
                <div class="campo-form">
                    <label for="nome">Nome:</label>
				    <input class="input-form" id="nome" type="text" name="nome" required placeholder="Nome" value="">
                </div>
                
                <div class="campo-form">
						<label for="email">E-mail:</label>
						<input class="input-form" id="email" type="text" name="email" placeholder="E-mail" required value="">
				</div>
                
                <div class="campo-form">
						<label for="cep">CEP (Somente Números):</label>
						<input class="input-form" id="cep" type="text" name="cep" placeholder="" required value="">
				</div>
                
                <div class="campo-form">
						<label for="rua">Rua:</label>
						<input class="input-form" id="rua" type="text" name="rua" required placeholder="Rua" value="">
					</div>
					
					<div class="campo-form">
						<label for="num">Número:</label>
						<input class="input-form" id="num" type="text" name="num" required placeholder="Número" value="">
					</div>
					
					<div class="campo-form">
						<label for="bairro">Bairro:</label>
						<input class="input-form" id="bairro" type="text" name="bairro" required placeholder="Bairro" value="">
					</div>
					
					<div class="campo-form">
						<label for="cidade">Cidade:</label>
						<input class="input-form" id="cidade" type="text" name="cidade" required placeholder="Cidade" value="">
					</div>
					
					<div class="campo-form">
						<label for="estado">Estado:</label>
						<input class="input-form" id="estado" type="text" name="estado" required placeholder="Estado" value="">
					</div>
                
                    <div class="campo-form">
						<label for="parcelas">Parcelas:</label>
						<select class="input-form" id="parcelas" name="parcelas">
				            <option value="1">1x R$ 10,70 (sem juros)</option>
				            <option value="2">2x R$ 5,35 (sem juros)</option>
                            <option value="3">3x R$ 3,70 (com juros)</option>
						</select>
					</div>
                
                    <div class="campo-form">
						<input class="input-form" id="form-enviar" type="submit" value="Comprar" name="comprar" >
					</div>
            </form>
        </section>
	</body>
</html>