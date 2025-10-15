# Food_restruk's (Secure_restruks)

A Laravel + Blade + Tailwind POS-like system with Spatie Permission (RBAC).

## Tech
- Laravel 11/12
- Blade + Tailwind
- Spatie/laravel-permission
- Breeze auth

## Local setup
```bash
git clone git@github.com:<your-username>/food_restruks.git
cd food_restruks
copy .env.example .env  # Windows
php artisan key:generate
composer install
npm install
php artisan migrate --seed
npm run dev
php artisan serve

```

## Contributing

### Create a branch from main
```bash
1 ) git checkout -b feat/<short-name>


2 ) Commit following Conventional Commits.

3 ) Open a Pull Request to main.
```




**File:** `LICENSE` (MIT is common)
```text
MIT License

Copyright (c) 2025 <Your Name>

Permission is hereby granted, free of charge, to any person obtaining a copy...
