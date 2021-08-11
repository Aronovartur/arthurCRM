CRM implementation in laravel with basic learning integration and some extras. 


<a href="arthurCRM.ddns.net">link to arthurCRM demo</a>

=== PHP === 
the app runs on laravel (php)
the front end admin panel is primarily coded in VUEjs. source is in /resources/adminapp/js folder

=== CSS ===

i am using material UI 

=== troubleshooting ===

PHP version errors. 
this code can run on php 8 and the most recent release of php 7. it is currently set for php 8.  if you are running php7, please edit 
composer.json's php section from ^8.0 to ^7.3 

=== step by step guide (linux/windows console) ===

once the repo is cloned to your webroot run the following:
1. cp .env.example .env
2. edit .env file with your DB info
3. run composer install 
4. run npm install && npm run dev
5. run php artisan key:generate
6. run php artisan migrate:fresh --seed
7. run php artisan serve
8. visit the link provided by your console
