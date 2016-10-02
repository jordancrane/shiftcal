<?php
include("include/common.php");
include(INCLUDES."/header.html");

$uptime = shell_exec("uptime");
print "[ $uptime ]\n";

$fp = fopen("/proc/loadavg", "r");
$loadavg = fread($fp, 8192);
print "<br>Load avg: $loadavg\n";
fclose($fp);

include(INCLUDES."/footer.html");
?>
