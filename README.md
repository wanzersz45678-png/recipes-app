cat > README.md <<'EOF'
# Recipes App

Веб-приложение «Книга рецептов»: nginx + PHP-FPM + MySQL 8 в Docker.

## Запуск
1. Клонировать репозиторий и перейти в папку проекта.
2. Создать `.env` из примера:
   cp .env.example .env
3. Запустить:
   docker compose up -d --build
4. Открыть http://localhost:8080

## Проверка
docker compose ps
docker compose logs mysql
docker compose logs php
docker compose logs nginx

## Подключение к БД (DBeaver)
Host `localhost`, порт `3307`, остальное из `.env`.

## Остановка
docker compose down
EOF