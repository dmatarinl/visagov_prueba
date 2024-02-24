# Visagov_prueba

Prueba para Visagov
## Características

Menú de Navegación interactivo con: 
- Página de inicio Home
- Libros
- Contacto
- Servicio multi lenguaje para los Idiomas Español e Inglés que modificarán tanto el idioma completo de la app (Incluido navbar, mensaje de error)
## Tecnologías Utilizadas

- Docker & Docker Compose
- PHP 8.2.
- Laravel 10.10
- Bootstrap 5.3.3
- MySQL
- Node.js & NPM

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- Docker y Docker Compose
- Node.js y NPM

## Configuración del Proyecto

Sigue estos pasos para obtener tu entorno de desarrollo ejecutándose.

### 1. Clonación del Repositorio

Clona este repositorio en tu máquina local usando:

```bash
git clone [URL del repositorio]
cd [nombre del directorio del proyecto]
```

### 2. Configuración del entorno

Habitualmente el paso básico a seguir sería:
```bash
cp .env.example .env
```
Ya que está pensado para ejecutar en un entorno local y no habrá datos vulnerables, he añadido el .env al código.

Si no se utiliza el aportado, se tendrá que generar la key mediante: 
```bash
php artisan key:generate
```
o si ya tenéis docker instalado y corriendo:
```bash
docker-compose exec app php artisan key:generate
```

### 3. Construcción y Ejecución con Docker

Para evitar conflictos entre versiones de PHP y Laravel de otros proyectos en mi sistema, he decidido utilizar un contenedor Docker. Para ello necesitaremos tener instalado Docker y docker compose (Recomiendo el uso de docker desktop). He añadido el dockerfile y el docker-compose.yml necesarios.

Una vez en la carpeta ráiz, ejecutaremos por terminal:

```bash
docker-compose up --build
```
Este comando construye las imágenes si no existen y luego inicia los contenedores. Es adecuado para la primera ejecución y también puede usarse para reconstruir los contenedores después de realizar cambios en el código o en la configuración de Docker.

### 4. Instalación de dependencias
En otra terminal ejecutaremos:
```bash
docker-compose exec app composer install
```
y 
```bash
npm install
npm run dev
```
Y voilá, Ya deberíamos poder visualizar la prueba en http://localhost:8000
