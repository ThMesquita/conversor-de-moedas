# Conversor de Moedas v2.0

Este é um projeto simples de conversor de moedas que permite converter valores em reais (BRL) para dólares americanos (USD), utilizando a cotação atual obtida diretamente do Banco Central do Brasil.

## Funcionalidades

- O usuário insere um valor em reais (R$) através de um formulário.
- O sistema faz uma requisição à API do Banco Central do Brasil para obter a cotação mais recente do dólar.
- O valor em reais é convertido em dólares americanos e o resultado é exibido formatado como moeda.
- O botão "Voltar" permite retornar à tela de inserção de valores para fazer novas conversões.

## Tecnologias Utilizadas

- **HTML**: Para a estruturação da página.
- **CSS**: Para estilização do layout da aplicação.
- **PHP**: Para realizar o cálculo da conversão e fazer a requisição à API do Banco Central.
- **API do Banco Central do Brasil**: Para obter a cotação atual do dólar.

## Como Usar

1. **Pré-requisitos**:
   - Um servidor com suporte a PHP (como XAMPP, WAMP ou qualquer outro servidor web que suporte PHP).
   - Acesso à internet, pois o sistema faz uma requisição à API para obter a cotação.

2. **Instruções**:
   - Clone o repositório para sua máquina local.
   - Certifique-se de que todos os arquivos HTML, PHP e CSS estão na mesma pasta.
   - Inicie o servidor local.
   - Acesse o arquivo `index.html` no navegador para abrir o formulário de conversão.
   - Insira o valor em reais (R$) e clique em "Converter".
   - O valor equivalente em dólares (USD) será mostrado na próxima página.

## Estrutura do Projeto

- `index.html`: Página inicial que contém o formulário para inserção do valor em reais.
- `conversao.php`: Página responsável por calcular a conversão e exibir o resultado.
- `style.css`: Folha de estilo usada para definir o layout da aplicação.

## Exemplo de Uso

1. O usuário insere R$ 100 no campo de valor.
2. O sistema faz uma requisição à API do Banco Central para obter a cotação do dólar.
3. O sistema calcula o valor equivalente em dólares e exibe o resultado.

