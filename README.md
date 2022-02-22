# TempMail BOT
BOT PHP para obter email temporário utilizando o [10 Minute Mail](https://10minutemail.net)

&nbsp;
## Métodos:
**string: getMail()**\
O BOT retorna o endereço de email atual, caso não haja nenhum email no momento, o BOT cria um novo e o retorna.

**string: getNewMail()**\
O BOT cancela o email atual, cria um novo e então o retorna

**string: getLastMessage()**\
O BOT retorna a última mensagem que o email recebeu no formato de HTML 

**void: refreshTime()**\
O BOT atualiza o tempo do email, retornando para 10 minutos

**string: getActivationCode(string: $site)**\
O BOT busca o código de ativação do site passado por passado por parâmetro (necessário ser a última mensagem recebida)\
Sites disponíveis no momento:
- Twitter

&nbsp;
## Licenças de Terceiros:
[**Simple Html Dom Parser for PHP**](https://github.com/voku/simple_html_dom) (MIT): Responsável por tranformar texto em HTML DOM para melhor manipulação no PHP
