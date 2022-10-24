<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# TRABAJO ENTREGABLE  - SENATI
TRABAJO ENTREGABLE APLICACIONES WEB III
EMPLEADO EN EL FRAMEWORK DE **LARAVEL 9.x** PHP.

## INSTALACIÓN
CLONAR REPOSITORIO EN `ruta: ../laragon/www`

**CONSOLA POWERSHELL**
Para este paso require tener instalado **NODEJS** 
( [DESCARGALO AQUÍ](https://nodejs.org/en/) )
Usamos el terminal powershell con la ruta del repositorio.
```
npm install
```

**TERMINAL DE LARAGON**
En este paso se usaremos **LARAGON** 
( [DESCARGALO AQUÍ](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe) )
Luego entraremos a la consola que viene laragon y ejecutaremos los siguientes comandos.
```
composer global require laravel/installer
cd appweb3-senati
composer install
```

**PREPARA LA BASE DE DATOS**
En la ruta del repositorio `ruta:../appweb3-senati/database/sql/SQL-SCRIPT.sql`
Ahí se tiene el archivo SQL que se ejecutará en la base de datos **MYSQL** de **LARAGON** en **HEIDISQL PORTABLE**

**ENCIENDE EL SERVIDOR**
- En la consola de Powershell ejecutaremos el comando 
```
npm run dev
```
Se encenderá los servicios de **VITE**

- En la terminal de laragon ejecutaremos el comando
```
php artisan serve
```
La consola arrojará el enlace de la página web que se realizó.