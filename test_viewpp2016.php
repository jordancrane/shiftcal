<?php
# This is the Pedalpalooza 2016 view of the calendar.
# It accepts the following parameters:
#
#	p=...		p=y for "printer friendly" format.

    include("include/common.php");
    if ($_REQUEST["p"] == "")
    {
	    #include(INCLUDES."/header.html");
	    include("include/header.html");
    }
    else
    {
	    print "<html>";
	    print "<head><title>Pedalpalooza 2016</title></head>";
	    print "<body style=\"margin: 0; padding: 0;\">";
    }
    include("include/view.php");
    include("include/repeat.php");
?>

<?php
    foreach ($_SERVER as $name => $value) {
	print "<!-- $name='$value' -->\n";
    }
?>
<style type="text/css">
  @media screen
  {
      div.content { background: #e3daa4; }
      table.grid { background: #e2c484; border-collapse: collapse; }
      div.tiny { font-size: x-small; margin-left: 20px; text-indent: -20px;}
      div.tinier { font-size: x-small; letter-spacing:-1px; margin-left: 20px; text-indent: -20px;}
      th.weeks { border: none; color: #04370c; background: url(images/green2corner.gif) no-repeat; padding-top: 3px; }
      th.weekends { border: none; color: #04370c; background: url(images/green2corner.gif) no-repeat; padding-top: 3px; }
      h2 {margin: 0; padding-left: 3px; color: #04370c; background: url(images/green2corner.gif) no-repeat; clear: left;}
      dl {margin: 5px; }
      dt {margin-top: 5px; font-weight: bold; clear: left; }
      dd {margin-bottom: 10px; margin-left: 50px; }
      div.hr {font-size: 1; height:3px; margin: 0; margin-top: 5px; width: 100%; background-color: #7cca7f;}
      span.loadday { text-decoration: underline; cursor: pointer; margin-left: 50px; }
  }
  @media print
  {
      div.content { background: white; font-size: 9pt; }
      div.tiny { font-size: 6pt; margin-left: 10pt; text-indent: -10pt;}
      div.tinier { font-size: 6pt; letter-spacing:-0.5pt; margin-left: 10pt; text-indent: -10pt;}
      th.weeks { background: #e6e6e6; font-size: 10pt; }
      th.weekends { background: #e6e6e6; font-size: 10pt; }
      dl {margin: 5pt; page-break-before: avoid; page-break-after: auto; }
      dt {margin-top: 5pt; font-weight: bold; clear: left; page-break-inside: avoid; page-break-after: avoid;}
      dd {margin-bottom: 10pt; margin-left: 40pt; page-break-before: avoid; page-break-inside: avoid;}
      table.grid { border-collapse: collapse; border: thin solid black; empty-cells: show; }
  }
</style>


<div id="content" class="content">
  <?php
    if ($_REQUEST["p"] == "") {
	print "  <table>\n";
	print "    <tr>\n";
	print "      <td rowspan=2 style=\"padding-right:20px\">\n";
	if (TRUE) {
	    print "<a href=\"".PPLARGE."\" title=\"Click for full-size image\"><img style=\"border: 2px solid white;\" src=\"".PPSMALL."\" alt=\"Pedalpalooza\"></a>\n";
	} else {
	    print "<img style=\"border: 2px solid white;\" src=\"images/pedalpalooza_low.jpg\" alt=\"Pedalpalooza\"></a>\n";
	}
	print "      </td>\n";
	print "      <td>\n";
	print "	<h1 style=\"margin:0;\">Pedalpalooza</h1>\n";
	print "	<h3 style=\"margin:0;\">".PPDATES.", 2016</h3>\n";
	print "      </td>\n";
	print "      <td align=center>\n";
  ?>
  
  <h1 style="color:red;">PHP-generated Links:</h1>
  
  <?php
	print "	<button onclick=\"window.location.replace('calform.php?form=pp')\">Add an Event</button>\n";
	print "	<button onclick=\"window.location.replace('view3week.php')\">Current Calendar</button>\n";
	print "	<button onclick=\"window.location.replace('viewsearch.php')\">Search</button>\n";
	print "	<br><button onclick=\"window.location.replace('mobilepp.php')\">Mobile Version</button>\n";
	print "	<button onclick=\"window.location.replace('viewmypp.php')\">Custom Pocket Reference</button>\n";
	if ($_COOKIE[ADMINCOOKIE] == "bikefun") {
	  print " <br><button onclick=\"window.location.replace('admin.php')\">Administration Menu</button>\n";
	}
  ?>
  <p>&nbsp;</p>
  <h1 style="color:red;">Traditional Links<br>in HTML:</h1>
  <a href="calform.php?form=pp">Add an Event</a><br>
  <a href="mobilepp.php">Mobile Version</a><br>
  <a href="viewmypp.php">Custom Pocket Reference</a><br>
  
  <?php
	print "      </td>\n";
	print "    </tr>\n";
	print "    <tr>\n";
	print "      <td colspan=2>\n";

	print "      </td>\n";
	print "    </tr>\n";
	print "  </table>\n";
    }
  ?>




</div>
<?php
    if ($_REQUEST["p"] == "")
    {
	include(INCLUDES."/footer.html");
    }
    else
    {
	print "</body>";
	print "</html>";
    }
    #ex:set sw=4 it=s:
?>
