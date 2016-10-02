<?php
	# Database access constants
error_reporting(0);
	define("DBHOST", "localhost");
	define("DBUSER", "shift");
	define("DBPASSWORD", "shift");
	define("DBDATABASE", "shift");

	# Directory where SHIFT's standard header and footer are stored
	define("INCLUDES", "../includes");

	# URL of the Directory where the calendar resides
	define("CALURL", "http://www.shift2bikes.org/cal/");

	# cookie value for admin access
	define("ADMINCOOKIE", "yeehaw!");

	# The page to show when the user loads CALURL
	define("MAINPAGE", "view3week.php");

	# Timezone difference between the web host and Portland.
	define ("TZTWEAK", 0);

	# Email address for PP calendar crew.  This is used as the "From:"
	# address of confirmation messages, and is also CC'ed a copy of
	# all messages.
	define("SHIFTEMAIL", "bikefun@shift2bikes.org");
?>
