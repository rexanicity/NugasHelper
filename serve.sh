#!/bin/bash
php -d variables_order=EGPCS artisan serve --host=0.0.0.0 --port=${PORT:-8080}