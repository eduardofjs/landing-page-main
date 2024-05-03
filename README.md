## Requisitos

- Docker >= 20.10.20
- Docker-compose >= v2.12.1
- NodeJs >= v16.15.1
- Python >= 3.8.10

## Acesso - Wordpress

Usuário: admin
Senha: develop2022

## Desenvolvimento

`cd configs/theme/directto && npm install && npm run watch`

Em outro terminal execute (Dentro da raiz do projeto):

`docker-compose build --no-cache`\
`docker-compose up -d`

## Produção

`cd configs/theme/directto && npm install && npm run production && cd ../../../`\
`python3 pre-deploy.py`\

Insira o host onde o wordpress ficara hospedado (Ex: www.directto.io)

- Sem http:// ou https://
- Sem a barra no final

Esse comando ira substituir o host no arquivo sql dentro de configs/db/ pelo novo host, se você quiser começar uma instalação do zero, basta apagar o .sql dentro de configs/db/ e pular essa etapa

> Esse comando não salva o ultimo host para substituir na proxima vez, então se quiser pode editar o arquivo pre-deploy.py e colocar o host que você quer substituir no arquivo sql

`docker-compose -f docker-compose.prod.yml build --no-cache`\
`docker-compose -f docker-compose.prod.yml up -d`

Se ocorrer algum erro de permissão, execute o comando abaixo dentro do container directto-wordpress

`sudo chown -R www-data:www-data wp-prod/wp-content/themes/directto`

## Acesso ao banco de dados

Pode ser configurado no arquivo .env, se o arquivo não existir, copie o arquivo .env.example e renomeie para .env

`cp .env.example .env`
