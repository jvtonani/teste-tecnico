Laravel framework web application with login, user registration and Github API consumption functions. 

The user should first register and then login. Navigation is placed and done using a bar on the top that directs users to a page that then shows all API searched users. Furthermore, adding and/or removing users from the list is possible as well as obtaining further in formation about each user.

###INSTALLATION###

* `git clone https://github.com/jvtonani/teste-tecnico.git name`
* `composer install`
* `php artisan key:generate`
* Edit `.env`
    *Set your database
* `php artisan migrate:fresh`
* `php artisan serve` to start the app on http://localhost:8000/


![Login](https://github.com/jvtonani/teste-tecnico/blob/main/images/login.png?raw=true)
![Home](https://github.com/jvtonani/teste-tecnico/blob/main/images/home.png?raw=true)
![Listing User](https://github.com/jvtonani/teste-tecnico/blob/main/images/listuser.png?raw=true)
![User Detail](https://github.com/jvtonani/teste-tecnico/blob/main/images/userdetail.png?raw=true)
