# 始め方
1. docker-compose up -d
2. phpコンテナに入る
3. composer install
4. npm install
5. php artisan migrate
6. localhost:8080にアクセス

# 注意事項
- cssはtailwindを使います
- bootstrapは、ログイン画面を自前のものに置き換えた段階で除外します
- npm run watchをすると、自動でtailwindの変更を検知してapp.cssを更新できます
