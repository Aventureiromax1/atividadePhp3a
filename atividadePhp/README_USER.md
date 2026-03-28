Projeto de exemplo: cadastro simples de usuários (Laravel)

Instruções rápidas para executar este exemplo localmente:

```bash
composer install
cp .env.example .env
php artisan key:generate
# configurar banco em .env (ex.: DB_CONNECTION=sqlite e DB_DATABASE=database/database.sqlite)
php artisan migrate
php artisan serve
```

Abra http://127.0.0.1:8000 e use o formulário para adicionar usuários (nome e telefone). Os usuários aparecem como cards na página inicial.
