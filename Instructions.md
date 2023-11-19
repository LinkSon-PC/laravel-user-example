Para instalar la autenticación (auth) en Laravel 6 con Bootstrap, puedes seguir los siguientes pasos:

Instalar Laravel:
Si aún no has creado tu proyecto Laravel, puedes hacerlo utilizando Composer con el siguiente comando:

composer create-project --prefer-dist laravel/laravel nombre-proyecto "6.*"
Esto creará un nuevo proyecto Laravel en un directorio llamado nombre-proyecto con la versión 6 de Laravel.

Instalar el sistema de autenticación:
Laravel proporciona un sistema de autenticación incorporado que puedes instalar con el siguiente comando:

composer require laravel/ui "^1.0" --dev
Este comando instalará el paquete laravel/ui que incluye comandos Artisan para generar vistas de autenticación.

Generar las vistas de autenticación:
Después de instalar el paquete, ejecuta el siguiente comando para generar las vistas de autenticación:

php artisan ui bootstrap --auth
Este comando generará las vistas necesarias para la autenticación con Bootstrap.

Instalar dependencias de Frontend:
Ahora necesitas instalar las dependencias de frontend (Bootstrap en este caso). Utiliza el siguiente comando:

npm install
Asegúrate de tener Node.js y NPM instalados en tu sistema.

Compilar los activos:
Compila los activos (CSS y JavaScript) con el siguiente comando:

npm run dev
O puedes usar npm run watch si deseas que los activos se vuelvan a compilar automáticamente cuando realices cambios.

Configuración de la base de datos:
Asegúrate de configurar correctamente tu archivo .env con la conexión de base de datos. Luego ejecuta las migraciones para crear las tablas necesarias:

php artisan migrate
Este comando creará las tablas necesarias para el sistema de autenticación.

Servir la aplicación:
Finalmente, puedes servir tu aplicación Laravel con el siguiente comando:

php artisan serve
Ahora puedes acceder a tu aplicación en http://localhost:8000 y ver la autenticación con Bootstrap en acción.