<html>
    <head>
        <script>
            var i = 1000;
            function contagemRegressiva()
            {
                i--;
                document.getElementById('cronometro').innerHTML = i + '';
                if(i == 0)
    		{
		    i = 30;
		}
	    }
	    setInterval("contagemRegressiva()", 1000);
		</script>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/estilo.css" />		
    </head>
    <body>
		<div id="tudo">
			<div id="cabecalho">
				<div class="media_centralizada">Torneio DeepStack</div>
				<div class="pequena_centralizada">Buy: R$ 50,00, Rebuy R$ 50,00 Sem addOn</div>
			</div>
			<div id="corpo">
				<div id="esquerda">
					<div id="quadradinho">
						<div class="media_centralizada">Nível</div>
						<div class="media_centralizada">1</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Entradas</div>
						<div class="media_centralizada">37</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Jogadores</div>
						<div class="media_centralizada">37</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Rebuys</div>
						<div class="media_centralizada">10</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Stacks Totais</div>
						<div class="media_centralizada">55.000</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Média de Stacks</div>
						<div class="media_centralizada">1.500</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Arrecadação</div>
						<div class="media_centralizada">R$ 1.850</div>
					</div>
				</div>
				<div id="meio">
					<div id="cronometro">
						1000
					</div>
					<div id="informacoes">
						<div class="media_centralizada">Texas Holdem</div>
						<div class="grande_centralizada">Blinds</div>
						<div class="grande_centralizada">10/20</div>
						<div class="grande_centralizada">Ante: 10</div>
					</div>
					<div id="informacoes">
						<div class="media_centralizada">Próximo blind: Texas Holdem</div>
						<div class="grande_centralizada">Blinds: 10/20</div>
						<div class="grande_centralizada">Ante: 10</div>
					</div>					
				</div>
				<div id="direita">
					<div id="quadradinho">
						<div class="media_centralizada">Hora</div>
						<div class="media_centralizada">13:43:22</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Tempo de torneio</div>
						<div class="media_centralizada">0:20:22</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada">Próximo Intervalo</div>
						<div class="media_centralizada">55:22</div>
					</div>
					<div id="quadradinho">
						<div class="media_centralizada"></div>
					</div>
				</div>
			</div>
			<div id="rodape">
				<div class="media_centralizada">Premiação</div>
			</div>
		</div>
    </body>
</html>

