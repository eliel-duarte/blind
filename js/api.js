            
        function atualiza()
        {
            // Substitua pelo URL da API
            const url = "https://api.zerosheets.com/v1/zyt";
        
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (!data) {
                        throw new Error('Erro ao buscar dados da API');
                    }
        
                    // Exibindo o jackpot
                    document.getElementById('jackpot').textContent = data[0].valor;
        
                    // Coletando nomes e valores dos jogadores
                    const nomes = [];
                    const valores = [];
        
                    for (let i = 3; i <= 11; i++) {
                        const variaveis = data[i];
                        if (variaveis) {
                            if (variaveis.nome) {
                                nomes.push(variaveis.nome);
                            }
                            if (variaveis.valor) {
                                valores.push(variaveis.valor);
                            }
                        }
                    }
        
                    // Exibindo nomes e valores nas posições corretas
                    for (let i = 0; i < nomes.length; i++) {
                        document.getElementById('nome' + (i + 1)).textContent = nomes[i];
                        document.getElementById('valor' + (i + 1)).textContent = valores[i];
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                });
            }