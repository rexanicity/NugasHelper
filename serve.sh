#!/bin/bash
chmod -R 755 .
php -S 0.0.0.0:${PORT:-8080} -t public