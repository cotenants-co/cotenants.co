## Setting up for Development

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

If you do not have Laravel setup in your development environment, visit [Laravel Installation Guide](https://laravel.com/docs/7.x) for instructions on installation before jumping to the next steps below.

**If you have Laravel Setup**
- Navigate to the repository you want your source files to be in
- Git clone the cotenants.co repository by running ```git clone https://github.com/cotenants-co/cotenants.co.git```
- Git add remote access to the repository by running ```git remote add development git@github.com:cotenants-co/cotenants.co.git```
- Copy the ```.env.example``` file to main directory and rename the copied file to ```.env`
- Run ```php artisan migrate``` to migrate database tables
- Run ```php artisan db:seed``` to load faker data into database using migrations table
- Run ```php artisan serve``` to boot the server

## Front-end Development
The Front end development shall be mainly done using 
- [Laravel Blade](https://laravel.com/docs/7.x/blade)
- [Laravel Collective](https://laravelcollective.com/docs/6.0/html)
- [Laravel Mix](https://laravel.com/docs/7.x/mix)
- [Node.js](https://nodejs.org/en/) using ```npm```

Other tutorials on required services for the frontend may be referred to from [Laravel Installation Guide](https://laravel.com/docs/7.x)

All ```git push``` shall be done to the master branch by running ```git push -u development master```
