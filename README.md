<p align="center">
  <img src="./public/images/logo.png" alt="Logo">
</p>

# SSETP - Sistema de Seguimiento de Etapa Productiva


SSETP es un aplicativo web desarrollado en Laravel con Moonshine, TailwindCSS, Alpine.js y MySQL. Este sistema está diseñado para gestionar el seguimiento de los aprendices en el Centro de Formación, simplificando y automatizando el proceso de seguimiento. Proporciona a los responsables de la formación acceso rápido y sencillo a la información relevante sobre los aprendices.

## Descripción del Proyecto

El proyecto tiene como objetivo facilitar el monitoreo de los aprendices mediante el desarrollo de un sistema web que permite la gestión y acceso a la información de manera eficiente. Utilizando una base de datos robusta, SSETP asegura que todos los datos relevantes estén disponibles para los instructores y responsables de la formación.

## Tecnologías Utilizadas

- **Laravel**: Framework PHP para el desarrollo de aplicaciones web.
- **Moonshine**: Herramienta para el desarrollo de interfaces administrativas en Laravel.
- **TailwindCSS**: Framework CSS para un diseño rápido y personalizable.
- **Alpine.js**: Framework JavaScript ligero para la interacción con el DOM.
- **MySQL**: Sistema de gestión de bases de datos relacional.

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tu-usuario/ssetp.git
   cd ssetp
   ```

2. Instala las dependencias de PHP y JavaScript:
   ```bash
   composer install
   npm install
   ```

3. Configura el archivo `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configura la base de datos en el archivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ssetp
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

5. Ejecuta las migraciones y los seeders:
   ```bash
   php artisan migrate --seed
   ```

6. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   npm run dev
   ```

## Uso

Accede a la aplicación en tu navegador a través de `http://localhost:8000/admin`. Desde allí, podrás gestionar y seguir el progreso de los aprendices en el Centro de Formación.

## Contribuidores

El proyecto fue desarrollado por los aprendices **Mayra Yurani Palma Rojas** y **Andrés Felipe Ramírez Collazos**, bajo la supervisión del instructor **Héctor D. Toledo García**.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

---

¡Gracias por utilizar SSETP! Si tienes alguna pregunta o sugerencia, no dudes en contactarnos.
