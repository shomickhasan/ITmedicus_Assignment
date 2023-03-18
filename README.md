

#setup instructio

	1. downlod or clone project link -> https://github.com/shomickhasan/ITmedicus_Assignment
	
	2. Run cmd or Terminal 
	
	3. install composer by using command on terminal-> composer install

	4. open .env.example file and copy all code & create .env file and past all code
	
	5. open .env file Configure database name ITmedicus (DB_DATABASE=ITmedicus)
	
	6. open your local server Apache and MySql and create a database (database name should be ITmedicus )

	7. import ITmedicus.sql file (that provide on sql folder)

	8. run command on cmd-> php artisan key:generate 

	9. run command on cmd for cache optimize-> php artisan optimize

	10. run this project by using cmd (then project url return your terminal) -> php artisan ser

##NOT
  if you have fatch error for insert company with logo (error GD Library extension not available with this PHP installation)
  open your php.ini file and uncomment(extension=gd).

		





