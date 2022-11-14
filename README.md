## Proceso de Instalacion
1. Crea una copia del repositorio en tu cuenta personal mediante un '**fork**'.
2. Copia el codigo fuente en tu computadora mediante un '**clone**'.
```
git clone https://github.com/etc...
```
3. Copia la plantilla del archivo de configuracion y edita los usuarios y nombre de la base de datos con la que
va a trabajar tu aplicacion.
```
cp .env.example .env
```
4. Abre una terminal y ejecuta los siguientes comandos para crear la configuracion base del proyecto:
```
composer install
npm install
php artisan key:generate
php artisan migrate
```
