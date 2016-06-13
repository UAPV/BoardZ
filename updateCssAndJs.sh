app/console assets:install web
chmod 777 -R app/cache
php app/console cache:clear
chmod 777 -R app/cache
chown -R fanny:www-data web
chmod 775 -R web
