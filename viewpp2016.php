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
<?php
	$conn = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die("mysql_connect(".DBHOST.", ...): ".mysql_error());
	mysql_select_db(DBDATABASE, $conn);

	# This is used for choosing which side images should go on.  The
	# preferred side is always the right side since it doesn't interfere
	# with the heading indentations that way.  But to avoid a "staircase"
	# effect, if two consecutive events have images then the second one
	# is left-aligned, and smaller.  This variable indicates how much
	# overlap there is; if >0 then the image must go on the left.
	$imageover = 0;
?>

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
	print "	<button onclick=\"window.location.replace('calform.php?form=pp')\">Add an Event</button>\n";
	print "	<button onclick=\"window.location.replace('view3week.php')\">Current Calendar</button>\n";
	print "	<button onclick=\"window.location.replace('viewsearch.php')\">Search</button>\n";
	print "	<br><button onclick=\"window.location.replace('mobilepp.php')\">Mobile Version</button>\n";
	print "	<button onclick=\"window.location.replace('viewmypp.php')\">Custom Pocket Reference</button>\n";
	if ($_COOKIE[ADMINCOOKIE] == "bikefun") {
	  print " <br><button onclick=\"window.location.replace('admin.php')\">Administration Menu</button>\n";
	}
	print "      </td>\n";
	print "    </tr>\n";
	print "    <tr>\n";
	print "      <td colspan=2>\n";

	# Get event counts
	$result = mysql_query("SELECT calevent.id FROM calevent, caldaily WHERE calevent.id = caldaily.id AND eventdate>=\"".PPSTART."\" AND eventdate<=\"".PPEND."\" AND eventstatus<>\"E\" AND eventstatus<>\"C\" AND eventstatus<>\"S\" AND review<>\"E\"", $conn) or die(mysql_error());
	$repeatcount = mysql_num_rows($result);
	for ($uniquecount = 0; $record = mysql_fetch_array($result); ) {
	    if (repeatfirstinstance($record) == NULL)
		$uniquecount++;
	}

	# Embed Zed's video
	#print "<div style=\"float:right;clear:none;\"><iframe width=\"426\" height=\"240\" src=\"http://www.youtube.com/embed/a13kfdb7K2g\" frameborder=\"0\" allowfullscreen></iframe></div>\n";
	#print "<div style=\"float:right;clear:none;\"><iframe width=\"560\" height=\"315\" src=\"http://www.youtube.com/embed/a13kfdb7K2g\" frameborder=\"0\" allowfullscreen></iframe></div>\n";


	if (TRUE) {
	    print "<strong>Pedalpalooza</strong> is 3+ weeks of bikey fun.\n";
	    print "With <strong title=\"$repeatcount if you include repeats, as previous Pedalpalooza calendars did.\">$uniquecount</strong> different events,\n";
	    print "most organized by individuals, bikers of all persuasions\n";
	    print "are likely to find many events of interest.\n";
	    print "Nearly all events are free.\n";
	    print "<p>";

	    print "Visiting from out of town?\n";
	    print "We've started a <a href=\"http://www.shift2bikes.org/allbike.php#Visitor_Info\">Visitor Info</a> page on our Wiki.\n";
	    print "<p>";

	    print "To add your event to this schedule, click\n";
	    print "<a href=\"calform.php?form=pp\">[Add&nbsp;an&nbsp;Event]</a>, above.\n";
	    print "If your event is already on the schedule and need to change\n";
	    print "or cancel your event, click the link in the confirmation\n";
	    print "email.  If that doesn't work, ";
	    print "<a href=\"/contacts/index.php?eCon=CalCrew\">contact the calendar crew.</a>\n";
	    print "<p>\n";
	    if (FALSE) { // FIXME should be date based check
		print "<scri"."pt type=\"text/javascript\">\n";
		print "document.write(\"The deadline for the printed calendar is <span style='color:#800000'>Midnight Saturday May 14</span>.\\n\");\n";
		print "document.write(\"Events added after that might not be in the printed calendar.\\n\");\n";
		print "document.write(\"That's just <span style='color:#800000;font-size:larger;white-space:nowrap'>\");";
		print "countdown(\"Sat May 14 2016 23:59:59 GMT-0700 (PDT)\");\n";
		print "document.write(\"</span> from now!.\\n\");\n";
		print "</scri"."pt>\n";
	    } else {

		print "The deadline for the print calendar has passed.\n";
		print "You can still add events!\n";
		print "They probably won't appear in the printed calendar, but the\n";
		print "online calendar sees a lot of traffic throughout Pedalpalooza.\n";
	    }
	} else {
	    print "<div style=\"font-size: x-large;\"><strong>Pedalpalooza 2016 is <em>over</em>...</strong>\n";
	    print "<p>But bikey fun continues forever on Shift's\n";
	    print "<a href=\"view3week.php\">year-round calendar</a> and\n";
	    print "<a href=\"https://lists.riseup.net/www/info/shift\">mailing list</a>.\n";
	    print "<p>If you had a great ride idea but didn't have time to lead\n";
	    print "it during Pedalpalooza, go ahead and add it now.  Promote it\n";
	    print "the mailing list.  Maybe hand out flyers at regular events such as\n";
	    print "<a href=\"http://shift2bikes.org/biki/bikefun:breakfast_on_the_bridges\">Breakfast on the Bridges</a> and\n";
	    print "the <a href=\"http://midnightmysteryride.wordpress.com/\">Midnight Mystery Ride</a>.\n";
	    print "<p>Bikey fun continues forever because we (including you) make it happen!\n";
	    print "</div>\n<p>";
	}

	#print "<p>";
	#print "<a href=\"http://portlandartmuseum.org/cyclepedia\">\n";
	#print "<img style=\"float:right;\" src=\"/images/home/PAM_cycle_216x180.jpg\" alt=\"Cyclepedia\">\n";
	#print "</a>\n";
	print "<p><p><i><a href=http://shift2bikes.org>Shift</a> facilitates pedalpalooza and is entirely volunteer run, but needs a little cash each year so we can pay our artists and keep the lights on.  Please consider making a donation to keep pedalpalooza and beyond happening!</i><br><center><form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\"><input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\"> <input type=\"hidden\" name=\"hosted_button_id\" value=\"YJYFXDPLSCW8U\"> <input type=\"image\" src=\"https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\"> <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\"></form></center>";

	#print "<p>\n";
	#print "<iframe width=399 height=138 frameborder=0 scrolling=\"no\"\n";
	#print "      src=\"../wnbr/smallhidden.html\">\n";
	#print "</iframe>\n";

	#print "A <a href=\"".PPURL."?p=y&i=n\">printer-friendly</a>\n";
	#print "version of this calendar is also available\n";
	#print "<p>\n";

	# For small results, always show all days; else it depends on an
	# "alldays" cookie.  Note that setting $_COOKIE['alldays'] here
	# doesn't actually set a cookie!  It just makes the test simpler
	# elsehwere in this PHP source.
	if (mysql_num_rows($result) <= 100)
	    $_COOKIE['alldays'] = 'Y';
	else {
	    print "<p>\n";
	    print "<input type=checkbox onclick=\"alldays(this);\"".($_COOKIE["alldays"] == "Y" ? "checked" : "").">";
	    print "<strong>Preload all days when checked.</strong>";
	    print "<span style=\"font-size: x-small;\">\n";
	    print "If you leave this box unchecked, then this calendar will\n";
	    print "initially show the long descriptions for only today's and\n";
	    print "tomorrow's events, which makes the page load faster.  Other\n";
	    print "days' events will be fetched as needed.  If you prefer to\n";
	    print "have all days' events be loaded at once, then check this box.\n";
	    print "</span>\n";
	}

	print "      </td>\n";
	print "    </tr>\n";
	print "  </table>\n";
    }
  ?>

  <a id="cal">&nbsp;</a>
  <table class="grid" border=2>
    <tr>
      <th class="weekends">Sunday</th>
      <th class="weeks">Monday</th>
      <th class="weeks">Tuesday</th>
      <th class="weeks">Wednesday</th>
      <th class="weeks">Thursday</th>
      <th class="weeks">Friday</th>
      <th class="weekends">Saturday</th>
    </tr>
    <tr valign=top>
      <td colspan=4 align=center valign=middle>
	<font size="+3">June 2016</font>
	<a href="explain/audience.html" target="_BLANK" onClick="window.open('explain/audience.html', 'audience', 'width=600, height=500, menubar=no, status=no, location=no, toolbar=no, scrollbars=yes'); return false;">
	  <div style="color:green;font-size: smaller;">Family Friendly events have <strong>green</strong> times</div>
	  <div style="color:red;font-size: smaller;">Adult Only (21+) events have <strong>red</strong> times</div>
	</a>
	<a href="explain/area.html" target="_BLANK" onClick="window.open('explain/area.html', 'audience', 'width=600, height=500, menubar=no, status=no, location=no, toolbar=no, scrollbars=yes'); return false;">
	  <div style="color:blue;font-size: smaller;">Vancouver events have titles listed in <strong>blue</strong></div>
	</a>
	<font size="-1">In all cases, you are encouraged to read the
	<br>detailed event descriptions below.  If you
	<br>still aren't sure whether an event is
	<br>appropriate for you, then contact the
	<br>event organizer.</font>
      </td>
<?php
    # For each day...
    $enddate = strtotime(PPEND);
    for ($thisdate = strtotime(PPSTART); $thisdate <= $enddate; $thisdate += 86400) {
	# Start new row each Sunday
	$dayofweek = date("D", $thisdate);
	if ($dayofweek == "Sun")
	    print "    </tr><tr valign=top>\n";

	# Output the day's tinytitles.
	$dayofmonth = date("j",$thisdate);
	#if ($dayofmonth == 25)
	#    print "      <td id=\"cal$dayofmonth\" style=\"background: url(".IMAGES."/mcbf_bg-green.gif) no-repeat;\">";
	#else
	if ($thisdate == $enddate)
	    print "      <td id=\"cal$dayofmonth\" style=\"background: url(".IMAGES."/mcbf_bg-yellow.gif);\">";
	else if ($dayofweek == "Sat" || $dayofweek == "Sun")
	    print "      <td id=\"cal$dayofmonth\" style=\"background: url(".IMAGES."/bones.gif);\">";
	else
	    print "      <td id=\"cal$dayofmonth\">";
	switch ($dayofmonth) {
	    case "11":
		print "<a href=\"http://www.rosefestival.org/events/grandfloralparade/\" title=\"Rose Festival Grand Floral Parade\"><img align=right border=0 src=\"".IMAGES."/rose.gif\" alt=\"Rose Festival Grand Floral Parade\"></a>\n";
#		print "<a href=\"http://www.pbase.com/image/94486778\" title=\"Silas Christopherson flew from Multnomah Hotel, 1912\"><img align=right border=0 src=\"".IMAGES."/biplane.gif\" alt=\"Silas Christopherson\"></a>\n";
		break;
	    case "14":
#		print "<a href=\"http://www.usflag.org/history/flagday.html\" title=\"Flag Day\"><img align=right border=0 src=\"".IMAGES."/flag.gif\" alt=\"Flag Day\"></a>\n";
		break;
//	    case "15":
//		#print "<a href=\"http://familycrafts.about.com/od/holidays/p/flyakiteday.htm\" title=\"Fly A Kite Day, commemorating Ben Franklin's experiment\"><img align=right border=0 src=\"".IMAGES."/kite.gif\" alt=\"Fly A Kite Day, commemmorating Ben Franklin's experiment\"></a>\n";
//		break;
	    case "18":
		print "<a href=\"https://pridenw.org/event/portland-pride-festival-at-tom-mccall-waterfront-park\" title=\"Pride Festival\"><img align=right border=0 src=\"".IMAGES."/rainbow.gif\" alt=\"Pride Parade\"></a>\n";
		break;
	    case "19": # third sunday in June
		print "<a href=\"http://www.fathersdaycelebration.com/\" title=\"Fathers Day\"><img align=right border=0 src=\"".IMAGES."/father.gif\" alt=\"Fathers Day\"></a>\n";
		break;
	    case "20":
		print "<a href=\"http://en.wikipedia.org/wiki/Solstice\" title=\"Solstice, 3:34pm\"><img align=right border=0 src=\"".IMAGES."/solstice.gif\" alt=\"Solstice, 3:34pm\"></a>\n";
		break;
	    case "23":
#		print "<a href=\"http://en.wikipedia.org/wiki/Joss_Whedon\" title=\"Joss Whedon's Birthday\"><img align=right border=0 src=\"".IMAGES."/birthday.gif\" alt=\"Joss Wheden's birthday\"></a>\n";
		break;
	    case "24":
#		print "<a href=\"http://en.wikipedia.org/wiki/Kenneth_Arnold_UFO_sighting\" title=\"First &quot;UFO&quot; sighting, 1947\"><img align=right border=0 src=\"".IMAGES."/ufo.gif\" alt=\"First 'UFO' sighting, 1947\"></a>\n";
		print "<a href=\"https://en.wikipedia.org/wiki/Take_Your_Dog_to_Work_Day\" title=\"Take Your Dog to Work Day\"><img align=right border=0 src=\"".IMAGES."/smalldog.gif\" alt=\"Take Your Dog to Work Day\"></a>\n";
		break;
	    case "26":
		print "<a href=\"http://americanhistory.si.edu/onthemove/themes/story_69_2.html\" title=\"First US bicycle patent, 1819\"><img align=right border=0 src=\"".IMAGES."/bike.gif\" alt=\"First US bicycle patent, 1819\"></a>\n";
		break;
	    case "28":
		print "<a href=\"http://www.paulbunyantrail.com/talltale.html\" title=\"Paul Bunyan Day\"><img align=right border=0 src=\"".IMAGES."/axe.gif\" alt=\"Paul Bunyan Day\"></a>\n";
		break;
	    case "4":
#		print "<a href=\"http://www.imdb.com/title/tt0116629/\" title=\"Independence Day\"><img align=right border=0 src=\"".IMAGES."/flag.gif\" alt=\"Independence Day\"></a>\n";
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
    $enddate = strtotime(PPEND);
    for ($thisdate = strtotime(PPSTART); $thisdate <= $enddate; $thisdate += 86400) {
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
// FIXME need to adjust & verify when bike fair picks a date.
      if (year==2016 && now.getMonth()==5 && 9 <= day && day <= 30)
      {
	  var cal = "cal" + day;
	  if (cal == "cal30")
              document.getElementById(cal).style.background = "#f0d884 url(images/mcbf_bg-yellow.gif) no-repeat";
	  else
	      document.getElementById(cal).style.background = "#f0d884";
      }

      /* fix the title */
      document.title = "Pedalpalooza 2016";

      // If an anchor was given, and the anchor's date isn't loaded already,
      // then load it.  This is important because some people might publish
      // an external link to their event.
      //FIXME doesn't handle july dates
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
	  loadday('2016-06-'+dayofmonth, true, eventid);
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
