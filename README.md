


## 環境構築
git clone git@github.com:coachtech-material/laravel-docker-template.git
docker-compose up -d --build
composer install
docker-compose exec php bash
composer install
cp .env.example .env




DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass