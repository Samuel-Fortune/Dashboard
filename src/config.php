<?php

   /*$host = "localhost";
   $username = "root";
   $bdname = "Dashboard";
   $password = "";*/


   if( !defined('DB_HOST') )
   {
      define('DB_HOST', 'localhost');
   }


   if( !defined('DB_USERNAME') )
   {
      define('DB_USERNAME', 'root');
   }


   if( !defined('DB_PASSWORD') )
   {
      define('DB_PASSWORD', '');
   }

   if( !defined('DB_NAME') )
   {
      define('DB_NAME', 'Dashboard');
   }

   /*$mysqli = new mysqli(hostname: $host,
                        username: $username,
                        password: $password,
                        database: $bdname
   );*/
   
   /*if ($mysqli ->connect_errno) {
      die("Connection error: " . $mysqli ->connect_error);

   }

   return $mysqli;*/

?>