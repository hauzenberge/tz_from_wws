Виконання для студії Web World studio

Для розгортання виконайте наступне:

git clone https://github.com/hauzenberge/tz_from_wws.git && cd ./tz_from_wws && composer install && php artisan key:generate

Далі в конфігах пропишіть Ваші данні підключення до бази данних та пошти і запустіть команду php artisan migrate:refresh --seed

Адреса адмін панелі <your_domain>/admin login: admin password: admin
