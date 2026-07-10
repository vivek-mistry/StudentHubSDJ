<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo"></a></p>

# StudentHub

StudentHub is a small Laravel application for managing student records — register, log in, list, edit, and delete students. This guide walks you through running it on your own machine, step by step.

## What you need before starting

Install these first:

- **PHP 8.3+** — check with `php -v`
- **Composer** — check with `composer -V`
- **Node.js 18+ and npm** — check with `node -v` and `npm -v`
- **MySQL 8+** — check with `mysql -V`

If any of these are missing, install them before continuing:
- PHP + Composer: [Laravel Herd](https://herd.laravel.com) (Mac/Windows, easiest option) or your OS package manager
- Node.js: [nodejs.org](https://nodejs.org)
- MySQL: [Laravel Herd](https://herd.laravel.com) (includes a MySQL service you can start with `herd services:start mysql`), [MySQL Community Server](https://dev.mysql.com/downloads/mysql/), or a GUI tool like [TablePlus](https://tableplus.com)/[MySQL Workbench](https://dev.mysql.com/downloads/workbench/)

## 1. Get the code

```bash
git clone https://github.com/vivek-mistry/StudentHubSDJ.git
```

## 2. Install dependencies

```bash
composer install
npm install
```

## 3. Set up your environment file

Copy the example environment file and generate an application key:

```bash
cp .env.example .env
php artisan key:generate
```

## 4. Create the database

Make sure MySQL is running, then create an empty database for the project:

```bash
mysql -u root -p -e "CREATE DATABASE studenthub"
```

Open `.env` and check the `DB_*` values match your local MySQL setup:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=studenthub
DB_USERNAME=root
DB_PASSWORD=
```

Update `DB_USERNAME` and `DB_PASSWORD` to match your MySQL credentials (a fresh Herd/local install often uses `root` with no password). Then run the migrations to create the tables:

```bash
php artisan migrate
```

## 5. Build the frontend assets

```bash
npm run build
```

## 6. Run the app

Start everything (server, queue worker, and Vite) with one command:

```bash
composer run dev
```

Then open the URL shown in your terminal (usually `http://localhost:8000`) in your browser.

> If you're using [Laravel Herd](https://herd.laravel.com), the site is already available at `http://studenthubsdj.test` — you don't need to run `composer run dev` to serve it, but you should still run `npm run dev` in a separate terminal while you're editing frontend files so your CSS/JS changes show up.

## Everyday commands

| Task | Command |
|---|---|
| Start the app for development | `composer run dev` |
| Run the test suite | `php artisan test` |
| Format PHP code | `vendor/bin/pint` |
| Rebuild frontend assets after edits (if not using `npm run dev`) | `npm run build` |

## Reading this guide in the browser

Once the app is running, you can view this README as a formatted page at [`/readme`](http://localhost:8000/readme) instead of reading raw Markdown.

## Troubleshooting

- **"Vite manifest not found" error** — run `npm run build`, or keep `npm run dev` running in a separate terminal.
- **`SQLSTATE[HY000] [1045] Access denied` or `[2002] Connection refused`** — MySQL isn't running or your `.env` credentials don't match. Start MySQL and double-check `DB_USERNAME`/`DB_PASSWORD`.
- **`SQLSTATE[HY000] [1049] Unknown database`** — the database hasn't been created yet; run the `CREATE DATABASE` command from step 4.
- **Blank page or 500 error** — make sure you ran `php artisan key:generate` and that your database exists and migrations have run.
- **Changes to `.env` not taking effect** — run `php artisan config:clear`.

## Learning Laravel

- [Official Laravel documentation](https://laravel.com/docs)
- [Laracasts](https://laracasts.com) — video tutorials on Laravel, PHP, and testing
