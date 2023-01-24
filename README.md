
# Mooviz

This is an example of a Laravel application using a MySQL database and dockerisation with Sail.

## VERSION
-   Laravel: 8.x ([https://laravel.com/docs/8.x](https://laravel.com/docs/8.x))
-   PHP: 8.2.1 ([https://windows.php.net/downloads/releases/php-8.2.1-nts-Win32-vc15-x64.zip](https://windows.php.net/downloads/releases/php-8.2.1-nts-Win32-vc15-x64.zip))
-   MySQL: 8.0 ([https://dev.mysql.com/downloads/mysql/](https://dev.mysql.com/downloads/mysql/))
-   Sail: 8.2 ([https://laravel.com/docs/9.x/sail](https://laravel.com/docs/9.x/sail))

## Prérequis

- Docker
- Sail (installation via npm `npm install -g sail`)

## Installation


1.  Clone the Git repository

git clone https://github.com/dedickerbenoit/Mooviz.git 

2.  Use Sail to build the Docker images

cd Mooviz
./vendor/bin/sail build` 

3.  Start the Docker containers

./vendor/bin/sail up 

4.  Access the application at `http://localhost:80` in your browser

## Configuration de la base de données

The database connection information is in the `.env` file.
You need to add your API key to make database queries to https://developers.themoviedb.org/3. Note "API_KEY_MOVIEDB = 'your_key' ".
Make sure you configure the appropriate settings before starting the Docker containers.

## Commandes utiles

- To shut down Docker Containers: `./vendor/bin/sail down`.
- To access a shell inside a Container: `./vendor/bin/sail exec [container-name] bash`
- To reset the database: `./vendor/bin/sail artisan migrate:fresh 

Note: Using Sail is optional, it is possible to run the containerisation commands directly with Docker or Docker Compose.

## Technology Stack

-   Laravel
-   MySQL (Database)

## Features

- You can see the films present and all the important information about them.
- On the admin side, you will be able to add films directly to your site from the themoviedb.org API. You will have the possibility to modify them and of course to delete them
- The management of the authentication is done with Breeze from LARAVEL.

## The MovieDB

The Movie DB (TMDB) provides a free API to access its database of movies and TV series. However, there are certain conditions of use that must be met when using this API:

1.  You must register on the TMDB website to obtain a personal API key.
    
2.  You must include a link to the TMDB website and mention "Powered by TMDB" in all places where you use the API data.
    
3.  You must respect the daily request limits set by TMDB. Currently these limits are 40,000 requests per day for unauthenticated users and 100,000 requests per day for authenticated users.
    
4.  You must use the API data only for legitimate purposes and in accordance with TMDB's privacy policy.
    
5.  You shall comply with all applicable laws and regulations when using the API data.
    
6.  You shall comply with TMDB's terms of use, which can be found on their website.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)

## Acknowledgments

-   This project was made by  Benoit.
