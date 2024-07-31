#!/bin/bash

# Exit on error
set -e

# Install composer dependencies
composer install --optimize-autoloader --no-dev

# Install npm dependencies and build assets
npm install
npm run production

# Optionally, run migrations if needed
# php artisan migrate --force
