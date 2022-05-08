<!DOCTYPE html>
<html>
<body>


		
	<?php echo "<pre>";print_r(auth()->user());echo "</pre>";exit; ?>

	<?php 
	// Clear Cache
	php artisan config:cache 
	php artisan config:clear 
	php artisan cache:clear 

	?>
	
	<?php 
	// Virtual hosts
	127.0.0.1       sandbox.test
	<VirtualHost *:80>
	  ServerAdmin webmaster@dummy-host2.example.com
	  DocumentRoot "C:/xampp/htdocs/sandbox/sandbox.php"
	  ServerName sandbox.test
	  ErrorLog "logs/dummy-host2.example.com-error.log"
	  CustomLog "logs/d`enter code here`ummy-host2.example.com-access.log" common
	</VirtualHost>
	?>	
	
	<?php 
	// Print query in laravel
	use Illuminate\Support\Facades\DB;
	DB::enableQueryLog(); // Enable query log before query
	// Your Eloquent query executed by using get()
	dd(DB::getQueryLog()); // Show results of log
	?>
									

</body>
</html>
		