# Examen1-chanezStore
Primer examen parcial de Taller de Aplicaciones en Internet
Rodrigo Chanez Aramayo

Requisitos
PHP >= 8.2
Composer

Instalación
Clonar el repositorio
git clone https://github.com/rodrigouab2025/Examen1-chanezStore.git
cd Examen1-chanezStore

composer install

Configurar base de datos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bdchanezstore
DB_USERNAME=root
DB_PASSWORD=

Migrar tablas
php artisan migrate
php artisan db:seed

Ejecutar el servidor
php artisan serve
http://127.0.0.1:8000
