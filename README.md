# Laravel Project

## Description
This is a Laravel-based project designed to demonstrate logging functionality with support for multiple loggers (file, database, email). The project is built on Laravel 11 and follows best practices for scalability and maintainability.

---

## Features
- Multiple logging methods:
    - File logging
    - Database logging
    - Email logging
- API routes for logging messages.
- Configurable logger types.

---

## Prerequisites

- **PHP**: Version 8.2 or higher
- **Composer**: Latest version
- **Database**: PostgreSQL
- **Node.js**: Latest LTS version (for frontend or mix tasks)
- **Laradock**
---

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

4. Update environment variables in `.env`:
   ```dotenv
   DB_CONNECTION=pgsql
   DB_HOST=your-database-host
   DB_PORT=5432
   DB_DATABASE=your-database-name
   DB_USERNAME=your-database-username
   DB_PASSWORD=your-database-password
   APP_URL=http://your-local-domain
   LOGGER_TYPE=file
   LOGGER_EMAIL=admin@example.com
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run migrations:
   ```bash
   php artisan migrate
   ```

7. (Optional) Seed the database:
   ```bash
   php artisan db:seed
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

---

## API Endpoints

### 1. Log a message (default logger)
- **URL**: `/api/log`
- **Method**: POST
- **Body**:
  ```json
  {
      "message": "This is a default log message."
  }
  ```

### 2. Log a message to a specific logger
- **URL**: `/api/log/{type}`
- **Method**: POST
- **Parameters**:
    - `type`: `file`, `database`, `email`
- **Body**:
  ```json
  {
      "message": "This is a message for {type}."
  }
  ```

### 3. Log a message to all loggers
- **URL**: `/api/log-to-all`
- **Method**: POST
- **Body**:
  ```json
  {
      "message": "This message goes to all loggers."
  }
  ```
---



