#!/usr/bin/env bash
set -euo pipefail
cd "$(dirname "$0")/.."
echo 'Preparing PHP OOP semester classroom environment...'
php -v | head -1
composer --version
php -r 'foreach (["pdo_sqlite", "mbstring"] as $extension) { if (!extension_loaded($extension)) { fwrite(STDERR, "Missing PHP extension: ".$extension.PHP_EOL); exit(1); } }'
if [ ! -f .env ]; then cp .env.example .env; fi
mkdir -p bootstrap/cache storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs database
: > /dev/null
touch database/database.sqlite
# Composer dependencies are installed inside GitHub Codespaces, not the old school PC.
composer install --no-interaction --prefer-dist --no-progress
if ! grep -q '^APP_KEY=base64:' .env; then
    php artisan key:generate --force --no-interaction
fi
php artisan optimize:clear --no-interaction
php artisan route:list --path=weeks
echo 'Ready. Run: php artisan oop:demo, php artisan oop:pdo-demo, php artisan test'
echo 'To preview: php artisan serve --host=0.0.0.0 --port=8000'
