#!/bin/sh
bin/console doctrine:database:create --if-not-exists
bin/console doctrine:schema:create
bin/console eccube:fixtures:load
bin/console doctrine:migrations:migrate
apache2-foreground