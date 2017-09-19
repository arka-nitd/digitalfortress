# DIGITAL FORTRESS

## About the Game 

***Digital Fortress*** is an Online Detective cum Quizzing game which was live in MUKTI 2016, the annual foss symposium  where an user is presented with a set of questions based on a theme and a main question which he/she needs to solve to proceed to the next round. On solving each preliminary question of a round a latitude-longitude position is unlocked which gets plotted on a Google Map. This points on the map, shaped formed with multiple points on the map, etc are hints for solving the main question of that round. 

----------


## Live Website

To view Digital Fortress in action please visit the following website [Digital Fortress](http://dfbeta.herokuapp.com/)

----------

## Installation and Requirements
- Create a database and set the database configuration in .env file
- Create your facebook app and add the following details in .env file

```
DB_DATABASE=digitalfortress
DB_USERNAME=<username>
DB_PASSWORD=<password>
FB_ID='facebook_app_id';
FB_SECRET='facebook_app_secret'
FB_REDIRECT= 'siteurl/login/fb/callback'
where siteurl = http://localhost:8000 for local development assuming default port 8000
```

- Then follow the below steps to get digital fortress up and running

1. `git clone https://github.com/arka-nitd/digitalfortress.git`
2. `sudo chmod 777 -R digitalfortress`
3. `composer install`
4. `php artisan migrate`
5. `php artisan panel:install`

## Accessing the Admin Panel and setting up the game
- To access the admin panel follow the steps:
- Goto http://localhost:8000/panel/login and login with credentials 
```
Email Id : admin@change.me
Password : 12345
```
- Edit your profile and change password accordingly
- Goto the links table and add the following models in it 

Display  			| Model
------------		|---------
Question 		| question
Round    	| round
Solved Questions	| solved
Leaderboard 		| leaderboard
Users		   		| users
Hints		   		| hints

- Now you can add utilise all the admin features of the game.

## Screenshots

![Login](https://github.com/arka-nitd/digitalfortress/raw/master/public/assets/screens/1.png)
![Round 1](https://github.com/arka-nitd/digitalfortress/raw/master/public/assets/screens/2.png)
![Question](https://github.com/arka-nitd/digitalfortress/raw/master/public/assets/screens/3.png)
![Answer Response](https://github.com/arka-nitd/digitalfortress/raw/master/public/assets/screens/4.png)

![Admin Dashboard](https://lh3.googleusercontent.com/rxN-whq244tHTxcfVlm3CfxUBfA7LDp5PyOI8H3PSnzsbuwWeYn62gRL_1E0rHKM62w=s600 "")

## Credits

Admin Panel by Serverfireteam
Socialite Package



