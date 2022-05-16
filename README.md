<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1>Projeto para empresa Santins </h1>

Desenvolvido em Laravel 9 e php 8.1.5

<h2> Instalação </h2>

1º - Clonar o projeto:

"git clone https://github.com/matheusMrs07/projetoSantins.git"

<h3>Caso esteja usando Docker:</h3>
2º - Iniciar conteiner docker:

"docker-compose up -d"

3º - Abrir terminal do docker

"docker-compose exec app bash"

4º - instaar dependencias 

"composer install"

"npm install"

"npm run dev"

5º - copiar .env

"cp .env.example .env"

O projeto vai abrir no link http://localhost:8989/

<h3>Caso não use o Docker </h3>

2º - instaar dependencias 

"composer install"

"npm install"

"npm run dev"

3º - configurar .env de acordo com seu ambiente de deenvolvimento 

4º - Iniciar server:

"php artisan serve" 

<h2>Ao abrir o projeto </h2>

Na tela de home criar uma nova conta em "Register"

Ao entrar no sistema, a lista de universidades estará disponívem na aba "universities" do sidebar.

No cato superior direito, ao clicar no nome do usuário é possível, fazer editar o perfil, visualizar as inscrições do usuário e fazer logout.



Para o desevolvimento do projeto foi utilizado o template gratuíto Argon Dashboard Laravel, disponível em https://argon-dashboard-laravel.creative-tim.com/docs/getting-started/overview.html
