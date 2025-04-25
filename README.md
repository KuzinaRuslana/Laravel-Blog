### About Blog
This private Laravel blog will keep your thoughts and opinions as long as you wish.

### Requirements
+ PHP version >= 8.2
+ Composer
+ SQLite

### Installation and usage
1. Clone and install the project using Git and Composer:
```bash
git clone https://github.com/KuzinaRuslana/Laravel-Blog.git
cd Laravel-Blog
make install
```
2. Create `.env` file:
```bash
cp .env.example .env
```
3. Create `.sqlite` file to use SQLite:
```bash
touch database/database.sqlite
```
4. Run your local server:
```bash
make start
```
5. The project is available on http://localhost:8000! Now you can start writing your own articles.
