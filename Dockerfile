FROM php:8.2-cli

# Install Node.js (for Tailwind build)
RUN apt-get update && apt-get install -y curl \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Install PHP dependencies
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies and build Tailwind
COPY package.json package-lock.json ./
RUN npm install
COPY . .
RUN npm run build

EXPOSE 10000
CMD php -S 0.0.0.0:$PORT -t public