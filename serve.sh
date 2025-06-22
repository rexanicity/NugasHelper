#!/bin/bash
chmod -R 755 .
php artisan serve --host 0.0.0.0 --port $PORT
