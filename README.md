# Barber App

Aplicación de gestión de citas para una barbería, desarrollada con **Laravel 12** como parte de un aprendizaje práctico del framework.

## ✨ Características principales

- Gestión de usuarios con roles (cliente/barbero/admin).
- Creación y gestión de citas (appointments).
- Estados de citas (pendiente, confirmada, cancelada, completada, etc.).
- Backend unificado para web y móvil.
- Base de datos con relaciones claras y normalizadas.
- Semillas (`seeders`) y fábricas (`factories`) para datos de prueba.
- Tests automáticos con PHPUnit.
- Preparada para despliegue o ampliación futura.

## 🔧 Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/tu-usuario/barber-app.git
   cd barber-app
   ```
2. Instala dependencias:

    ```bash
    composer install
    npm install && npm run dev
    ```
3. Configura el entorno:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4. Migra y llena la base de datos con datos iniciales:

    ```bash
    php artisan migrate:fresh --seed
    ```
5. Levanta el servidor:

    ```bash
    php artisan serve
    ```
## ✅ Tests

Ejecuta todos los tests:

```bash
php artisan test
```
## 📜 Licencia
Este proyecto está licenciado bajo la Licencia MIT. Puedes usarlo, modificarlo y distribuirlo libremente. Ver [LICENSE](LICENSE.md).
