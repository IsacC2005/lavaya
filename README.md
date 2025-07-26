# LavaYa

LavaYa es una aplicacion para la gestion de procesos del negocio 'LavaYa' el cual 
se dedica al alguiler de lavadoras, esta aplicacion gestiona el pedidos y horarios

---

## 🚀 Requisitos

Antes de comenzar, asegúrate de tener instalado lo siguiente en tu sistema:

* **PHP:** Versión 8.0 o superior (se recomienda la última versión estable de PHP 8).
* **Composer:** Gestor de dependencias de PHP.
* **Node.js:** Versión 16.x o superior (se recomienda la última LTS).
* **npm** (viene con Node.js) o **Yarn** (gestor de paquetes de Node.js, opcional pero recomendado por algunos).
* **MySQL** (o tu base de datos preferida, como PostgreSQL, SQLite, etc.).
* **Git:** Para clonar el repositorio.

---

## ⚙️ Instalación

Sigue estos pasos para poner en marcha el proyecto en tu máquina local:

1.  **Clona el repositorio:**

    ```bash
    git clone https://github.com/IsacC2005/lavaya.git
    cd lavaya
    ```

2.  **Instala las dependencias de PHP:**

    ```bash
    composer install
    ```

3.  **Configura el archivo de entorno (`.env`):**

    Copia el archivo de ejemplo `.env.example` y renómbralo a `.env`:

    ```bash
    cp .env.example .env
    ```

    Abre el archivo `.env` recién creado y configura tus credenciales de base de datos y cualquier otra variable de entorno necesaria. Aquí tienes un ejemplo de configuración de base de datos para MySQL:

    ```env
    APP_NAME="Tu Proyecto"
    APP_ENV=local
    APP_KEY=
    APP_DEBUG=true
    APP_URL=http://localhost:8000

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos # Cambia esto por el nombre de tu BD
    DB_USERNAME=tu_usuario_bd           # Cambia esto por tu usuario de BD
    DB_PASSWORD=tu_password_bd          # Cambia esto por tu contraseña de BD
    ```

4.  **Genera la clave de la aplicación Laravel:**

    ```bash
    php artisan key:generate
    ```

5.  **Ejecuta las migraciones de la base de datos:**

    Esto creará las tablas necesarias en tu base de datos.

    ```bash
    php artisan migrate
    ```

    ```bash
    php artisan db:seed
    ```

6.  **Instala las dependencias de JavaScript:**

    ```bash
    npm install # Si usas npm
    # o
    # yarn install # Si usas Yarn
    ```

7.  **Compila los assets de frontend:**

    * **Para desarrollo (con recarga en caliente - HMR):**

        ```bash
        npm run dev
        ```
        Mantén este comando ejecutándose en una terminal separada mientras desarrollas.

    * **Para producción (archivos optimizados):**

        ```bash
        npm run build
        ```

---

## ▶️ Ejecución del Proyecto

Una vez que hayas completado los pasos de instalación, puedes iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve
