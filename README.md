# Gif Dictionary
This is a dictionary, but instead of words, you get gifs.

# Running Docker
To run the application, do the following

TODO - .env info

Create an sqlite database inside of the `./src/database` directory
```
touch ./src/database/database.sqlite
```

Run migrations
```
php artisan migrate
```

Start docker
```
docker-compose up -d
```