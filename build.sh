#!/bin/bash

# Enable corepack for PNPM
corepack enable
corepack prepare pnpm@latest --activate

# Install PHP dependencies
composer install --optimize-autoloader --no-dev

# Install Node dependencies
pnpm install
pnpm run prod

# Laravel setup
php artisan key:generate --force
php artisan storage:link
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
