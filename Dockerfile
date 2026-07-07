FROM php:8.2-cli

# Instalar dependencias del sistema requeridas para PHP y Node.js
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# Limpiar caché de apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP necesarias para Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Establecer el directorio de trabajo
WORKDIR /app

# Copiar los archivos del proyecto
COPY . /app

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar dependencias de PHP (Laravel)
RUN composer install --no-dev --optimize-autoloader

# Instalar dependencias de Node.js y compilar el frontend (Vite/Tailwind)
RUN npm install && npm run build

# Dar permisos a las carpetas de almacenamiento y caché de Laravel
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache
RUN chmod -R 775 /app/storage /app/bootstrap/cache

# Exponer el puerto
EXPOSE 8000

# Comando para iniciar el servidor de Laravel
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
