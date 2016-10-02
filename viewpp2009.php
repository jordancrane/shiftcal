<?php
# This is the Pedalpalooza 2009 view of the calendar.
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
	    print "<head><title>Pedalpalooza 2009</title></head>";
	    print "<body style=\"margin: 0; padding: 0;\">";
    }
    include("include/view.php");
?>
<script type="text/javascript" src="include/countdown.js">
</script>
<script type="text/javascript" src="include/xmlextras.js">
</script>
<script type="text/javascript" src="include/loadday.js">
</script>
<script type="text/javascript">
function alldays(checkbox)
{
    // Choose a new value for the "alldays" cookie
    var value;
    if (checkbox.checked)
	value = "Y";
    else
	value = "N";

    // Set the cookie, with a 30-day expiration date
    var date = new Date();
    date.setTime(date.getTime()+(30*24*60*60*1000));
    var expires = date.toGMTString();
    document.cookie = "alldays="+value+"; expires="+expires+"; path=/"

    // Reload the page, using the new cookie
    window.location.reload();
}
</script>
<?php
    foreach ($_SERVER as $name => $value) {
	print "<!-- $name='$value' -->\n";
    }
    print "<style type=\"text/css\">\n";
    print "h2 {margin: 0; padding-left: 3px; background: url(".IMAGES."/purplecorner.gif) no-repeat; clear: left;}\n";
    print "</style>\n";
?>
<style type="text/css">
  @media screen
  {
      div.content { background: #d8c8d8; }
      div.tiny { font-size: x-small; margin-left: 20px; text-indent: -20px;}
      div.tinier { font-size: x-small; letter-spacing:-1px; margin-left: 20px; text-indent: -20px;}
      th.weeks { background: #a890b8;}
      dl {margin: 5px; page-break-before: avoid; page-break-after: auto; }
      dt {margin-top: 5px; font-weight: bold; clear: left; page-break-inside: avoid; page-break-after: avoid;}
      dd {margin-bottom: 10px; margin-left: 50px; page-break-before: avoid; page-break-inside: avoid;}
      div.hr {font-size: 1; height:3px; margin: 0; margin-top: 5px; width: 100%; background-color: #a890b8;}
      span.loadday { text-decoration: underline; cursor: pointer; margin-left: 50px; }
  }
  @media print
  {
      div.content { background: white; font-size: 9pt; }
      div.tiny { font-size: 6pt; margin-left: 10pt; text-indent: -10pt;}
      div.tinier { font-size: 6pt; letter-spacing:-0.5pt; margin-left: 10pt; text-indent: -10pt;}
      th.weeks { background: #e6e6e6; font-size: 10pt; }
      dl {margin: 5pt; page-break-before: avoid; page-break-after: auto; }
      dt {margin-top: 5pt; font-weight: bold; clear: left; page-break-inside: avoid; page-break-after: avoid;}
      dd {margin-bottom: 10pt; margin-left: 40pt; page-break-before: avoid; page-break-inside: avoid;}
      table.grid { border-collapse: collapse; border: thin solid black; empty-cells: show; }
  }
</style>
<?php
	$conn = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die(mysql_error());
	mysql_select_db(DBDATABASE, $conn);

	# This is used for choosing which side images should go on.  The
	# preferred side is always the right side since it doesn't interfere
	# with the heading indentations that way.  But to avoid a "staircase"
	# effect, if two consecutive events have images then the second one
	# is left-aligned, and smaller.  This variable indicates how much
	# overlap there is; if >0 then the image must go on the left.
	$imageover = 0;
?>

<!-- colors from logo image:
    Orange #df9034
    Red    #d32024
    Gray   #b6bec0
-->
<div id="content" class="content">
  <?php
    if ($_REQUEST["p"] == "") {
	print "  <table>\n";
	print "    <tr>\n";
	print "      <td bgcolor=\"#FFFFFF\" rowspan=2>\n";
	print "<a href=\"".IMAGES."/pp2009full.jpg\" title=\"Click for full-size image\"><img border=\"0\" src=\"".IMAGES."/pp09logo.jpg\" alt=\"Pedalpalooza\"></a>\n";
	print "      </td>\n";
	print "      <td>\n";
	print "	<h1 style=\"margin:0;\">Pedalpalooza</h1>\n";
	print "	<h3 style=\"margin:0;\">June 11 - June 27, 2009</h3>\n";
	print "      </td>\n";
	print "      <td align=center>\n";
	print "	<button onclick=\"window.location.replace('calform.php?form=pp')\">Add an Event</button>\n";
	print "	<button onclick=\"window.location.replace('view3week.php')\">Current Calendar</button>\n";
	print "	<button onclick=\"window.location.replace('viewsearch.php')\">Search</button>\n";
	print "	<br><button onclick=\"window.location.replace('viewmy09.php')\">Custom Pocket Reference</button>\n";
	if ($_COOKIE[ADMINCOOKIE] == "bikefun") {
	  print " <button onclick=\"window.location.replace('admin.php')\">Administration Menu</button>\n";
	}
	print "      </td>\n";
	print "    </tr>\n";
	print "    <tr>\n";
	print "      <td colspan=2>\n";

	print "Pedalpalooza is 2+ weeks of bikey fun.\n";
	$result = mysql_query("SELECT calevent.id FROM calevent, caldaily WHERE calevent.id = caldaily.id AND eventdate>=\"2009-06-11\" AND eventdate<=\"2009-06-27\" AND eventstatus<>\"E\" AND eventstatus<>\"C\" AND eventstatus<>\"S\" AND review<>\"E\"", $conn) or die(mysql_error());
	print "With <strong>".mysql_num_rows($result)."</strong> events,\n";
	print "most organized by individuals, bikers of all persuasions\n";
	print "are likely to find many events of interest.\n";
	print "Nearly all events are free.\n";
	print "<p>";

	print "To add your event to this schedule, click\n";
	print "<a href=\"calform.php?form=pp\">[Add&nbsp;an&nbsp;Event]</a>, above.\n";
	print "If your event is already on the schedule and need to change\n";
	print "or cancel your event, click the link in the confirmation\n";
	print "email.  If that doesn't work, ";
	print "<a href=\"/contacts/index.php?eCon=CalCrew\">contact the calendar crew.</a>\n";
	print "<p>";

	print "<script type=\"text/javascript\">\n";
	print "document.write(\"The kickoff ride is in \");\n";
	print "countdown(\"Thu Jun 11 2009 18:15:00 GMT-0700 (PDT)\");\n";
	print "document.write(\".\\n<p>\");\n";
	print "</script>\n";

	#print "<iframe width=399 height=138 frameborder=0 scrolling=\"no\"\n";
	#print "      src=\"../wnbr/smallhidden.html\">\n";
	#print "</iframe>\n";

	#print "A <a href=\"viewpp2009.php?p=y&i=n\">printer-friendly</a>\n";
	#print "version of this calendar is also available\n";
	#print "<p>\n";

	print "<input type=checkbox onclick=\"alldays(this);\"".($_COOKIE["alldays"] == "Y" ? "checked" : "").">";
	print "<strong>Preload all days</strong> when checked.";
	print "<span style=\"font-size: x-small;\">\n";
	print "If you leave this box unchecked, then this calendar will\n";
	print "initially show the long descriptions for only today's and\n";
	print "tomorrow's events, which makes the page load faster.  Other\n";
	print "days' events will be fetched as needed.  If you prefer to\n";
	print "have all days' events be loaded at once, then check this box.\n";
	print "</span>\n";
	print "      </td>\n";
	print "    </tr>\n";
	print "  </table>\n";
    }
  ?>

  <a id="cal">&nbsp;</a>
  <table class="grid" border=2>
    <tr>
      <th class="weeks">Sunday</th>
      <th class="weeks">Monday</th>
      <th class="weeks">Tuesday</th>
      <th class="weeks">Wednesday</th>
      <th class="weeks">Thursday</th>
      <th class="weeks">Friday</th>
      <th class="weeks">Saturday</th>
    </tr>
    <tr valign=top>
      <td colspan=4 align=center valign=middle>
	<font size="+3">June 2009</font>
	<a href="explain/audience.html" target="_BLANK" onClick="window.open('explain/audience.html', 'audience', 'width=600, height=500, menubar=no, status=no, location=no, toolbar=no, scrollbars=yes'); return false;">
	  <div style="color:green;">Family Friendly events have <strong>green</strong> times</div>
	  <div style="color:red;">Adult Only (21+) events have <strong>red</strong> times</div>
	</a>
	<a href="explain/area.html" target="_BLANK" onClick="window.open('explain/area.html', 'audience', 'width=600, height=500, menubar=no, status=no, location=no, toolbar=no, scrollbars=yes'); return false;">
	  <div style="color:blue;">Vancouver events have titles listed in <strong>blue</strong></div>
	</a>
	<font size="-1">In all cases, you are encouraged to read the detailed event
	<br>descriptions below.  If you still aren't sure whether an event
	<br>is appropriate for you, then contact the event organizer.</font>
	<br>
      </td>
<?php
    # For each day...
    $enddate = strtotime("2009-06-27");
    for ($thisdate = strtotime("2009-06-11"); $thisdate <= $enddate; $thisdate += 86400) {
	# Start new row each Sunday
	if (date("D", $thisdate) == "Sun")
	    print "    </tr><tr valign=top>\n";

	# Output the day's tinytitles.
	$dayofmonth = date("j",$thisdate);
	if ($dayofmonth == 27)
	    print "      <td id=\"cal$dayofmonth\" style=\"background: url(".IMAGES."/mcbf_bg.gif) no-repeat;\">";
	else
	    print "      <td id=\"cal$dayofmonth\">";
	switch ($dayofmonth) {
	    case "14":
		print "<a href=\"http://www.usflag.org/history/flagday.html\" title=\"Flag Day\"><img align=right border=0 src=\"".IMAGES."/flag.gif\" alt=\"Flag Day\"></a>\n";
		break;
	    case "20":
		print "<a href=\"http://en.wikipedia.org/wiki/Solstice\" title=\"Solstice, 9:45pm\"><img align=right border=0 src=\"".IMAGES."/solstice.gif\" alt=\"Solstice\"></a>\n";
		break;
	    case "21":
		print "<a href=\"http://www.fathersdaycelebration.com/\" title=\"Fathers Day\"><img align=right border=0 src=\"".IMAGES."/father.gif\" alt=\"Fathers Day\"></a>\n";
		break;

	}
	$sqldate = date("Y-m-d", $thisdate);
	print "        <a href=\"#".date("Fj",$thisdate)."\" title=\"".date("M j, Y", $thisdate)."\" style=\"font-size: larger; text-decoration: none;\" onclick=\"loadday('$sqldate', true, 0); return false;\">".date("j", $thisdate)."</a>\n";
	tinyentries($sqldate, TRUE, ($_COOKIE["alldays"] == "Y") ? FALSE : TRUE);
	print "      </td>\n";
    }
?>
    </tr>
  </table>

<?php
    # for each day...
    $today = strtotime(date("Y-m-d"));
    $tomorrow = $today + 86400;
    $enddate = strtotime("2009-06-27");
    for ($thisdate = strtotime("2009-06-11"); $thisdate <= $enddate; $thisdate += 86400) {
	#output the day
	if ($_REQUEST["p"] == "")
	    print "  <div class=hr></div>\n";
	else
	    print "  <hr>\n";
	print "  <h2><a name=\"".date("Fj",$thisdate)."\">".date("l F j", $thisdate)."</a></h2>\n";
	$ymd = date("Y-m-d", $thisdate);
	print "  <div id='div$ymd'>\n";
	if ($thisdate == $today || $thisdate == $tomorrow || $_REQUEST["p"] || $_COOKIE['alldays'] == "Y")
	    fullentries(date("Y-m-d", $thisdate), TRUE);
	else
	    print "<span class=\"loadday\" onClick=\"loadday('$ymd', true);\">Click here to load this day's events</span>\n";
	print "</div>\n";
    }
?>

  <script language="JavaScript" type="text/JavaScript">
    <!--
      /* Highlight today in the calendar table */
      var now = new Date();
      var day = now.getDate();
      var year = now.getYear();
      if (year < 1970)
	  year += 1900;
      if (year==2009 && now.getMonth()==5 && 11 <= day && day <= 27)
      {
	  var cal = "cal" + day;
	  if (cal == "cal27")    
              document.getElementById(cal).style.background = "#96f1b4 url(images/mcbf_bg-green.gif) no-repeat";
	  else
	      document.getElementById(cal).style.background = "#96f1b4";
      }

      /* fix the title */
      document.title = "Pedalpalooza 2009";

      // If an anchor was given, and the anchor's date isn't loaded already,
      // then load it.  This is important because some people might publish
      // an external link to their event.
      var anchor = location.hash;
      if (anchor != "" && anchor != "#") {
	  var dayofmonth, eventid;
	  if (anchor.substr(1, 4) == "June") {
	      dayofmonth = anchor.substr(5, 2);
	      eventid = 0;
	  } else {
	      dayofmonth = anchor.substr(1, 2);
	      eventid = anchor.substr(4);
	  }
	  loadday('2009-06-'+dayofmonth, true, eventid);
      }
    //-->
  </script>
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
