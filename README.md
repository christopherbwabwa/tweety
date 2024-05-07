# Tweety (Based on Twitter)

A minimal X (Twitter) application with interesting functionalities.

# Usage

A simple twitter application where a user can:

- Sign in or Sign Up.
- Have friends (follow & unfollow others users).
- Post tweets or like them.
- Check profiles, update them and so on...

## How to install ?

To get started you need to clone the repo on your local machine.

```bash
git clone https://github.com/christopherbwabwa/tweety.git
composer install
cp .env.example .env
npm install && npm run dev
```
Don't forget about the database

```bash
php artisan db
create database tweety
```