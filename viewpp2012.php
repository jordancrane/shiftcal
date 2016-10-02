<?php
	include("include/common.php");
	include(INCLUDES."/header.html");
?>
<style type="text/css">
  @media screen
  {
      div.content { background: #ffc969; }
      div.tiny { font-size: x-small; margin-left: 20px; text-indent: -20px;}
      div.tinier { font-size: x-small; letter-spacing:-1px; margin-left: 20px; text-indent: -20px;}
      th.weeks { border: none; background: url(images/oocorner.gif) no-repeat; padding-top: 3px; }
      th.weekends { border: none; background: url(images/oocorner.gif) no-repeat; padding-top: 3px; }
      h2 {margin: 0; padding-left: 3px; background: url(images/oocorner.gif) no-repeat; clear: left;}
      dl {margin: 5px; }
      dt {margin-top: 5px; font-weight: bold; clear: left; }
      dd {margin-bottom: 10px; margin-left: 50px; }
      div.hr {font-size: 1; height:3px; margin: 0; margin-top: 5px; width: 100%; background-color: #ff9a00;}
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
    <table>
    <tbody><tr>
      <td bgcolor="#FFFFFF" rowspan="2">
<a href="http://shift2bikes.org/cal/images/pp2012full.jpg" title="Click for full-size image"><img border="0" src="images/pp2012.jpg" alt="Pedalpalooza"></a>
      </td>
      <td>
	<h1 style="margin:0;">Pedalpalooza</h1>
	<h3 style="margin:0;">June 7-30, 2012</h3>
      </td>
      <td align="center">
	<button onclick="window.location.replace(&#39;view3week.php&#39;)">Current Calendar</button>
	<button onclick="window.location.replace(&#39;viewsearch.php&#39;)">Search</button>
      </td>
    </tr>
    <tr>
      <td colspan="2">
<strong>Pedalpalooza</strong> is 3+ weeks of bikey fun.
With <strong title="313 if you include repeats, as previous Pedalpalooza calendars did.">298</strong> different events,
most organized by individuals, bikers of all persuasions
are likely to find many events of interest.
Nearly all events are free.
<p>Visiting from out of town?
We've started a <a href="http://www.shift2bikes.org/wiki/visitor_info">Visitor Info</a> page on our Wiki.
</p>
</td>
    </tr>
  </tbody></table>

  <a id="cal">&nbsp;</a>
  <table class="grid" border="2">
    <tbody><tr>
      <th class="weekends">Sunday</th>
      <th class="weeks">Monday</th>
      <th class="weeks">Tuesday</th>
      <th class="weeks">Wednesday</th>
      <th class="weeks">Thursday</th>
      <th class="weeks">Friday</th>
      <th class="weekends">Saturday</th>
    </tr>
    <tr valign="top">
      <td colspan="4" align="center" valign="middle">
	<font size="+3">June 2012</font>
	<a href="http://shift2bikes.org/cal/explain/audience.html" target="_BLANK" onclick="window.open(&#39;explain/audience.html&#39;, &#39;audience&#39;, &#39;width=600, height=500, menubar=no, status=no, location=no, toolbar=no, scrollbars=yes&#39;); return false;">
	  <div style="color:green;font-size: smaller;">Family Friendly events have <strong>green</strong> times</div>
	  <div style="color:red;font-size: smaller;">Adult Only (21+) events have <strong>red</strong> times</div>
	</a>
	<a href="http://shift2bikes.org/cal/explain/area.html" target="_BLANK" onclick="window.open(&#39;explain/area.html&#39;, &#39;audience&#39;, &#39;width=600, height=500, menubar=no, status=no, location=no, toolbar=no, scrollbars=yes&#39;); return false;">
	  <div style="color:blue;font-size: smaller;">Vancouver events have titles listed in <strong>blue</strong></div>
	</a>
	<font size="-1">In all cases, you are encouraged to read the
	<br>detailed event descriptions below.  If you
	<br>still aren't sure whether an event is
	<br>appropriate for you, then contact the
	<br>event organizer.</font>
      </td>
      <td id="cal7">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June7" title="Jun 7, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 0); return false;">7</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-3157" title="Escape from Swan Island " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 3157); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Escape from Swan</a></div><div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-2774" title="Pedalpalooza Kickoff Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 2774); return false;"><strong style="color:green;">6:00pm</strong>&nbsp;Kickoff Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-2949" title="Open Shop Night at Bike Farm" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 2949); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Open Shop Night</a></div><div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-3145" title="Pedalpalooza Official Kickoff Party" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 3145); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Kickoff Party</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-2895" title="Music Box River Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 2895); return false;"><strong style="color:black;">7:30pm</strong>&nbsp;Music Box River Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-3024" title="Backdoor Ride Pedalpalooza Edition!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 3024); return false;"><strong style="color:black;">10:45pm</strong>&nbsp;Backdoor Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#07-2862" title="Midnight Madness 200 Pound Cargo Race" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-07&#39;, true, 2862); return false;"><strong style="color:red;">11:30pm</strong>&nbsp;Midnight Madness</a></div>      </td>
      <td id="cal8">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June8" title="Jun 8, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 0); return false;">8</a>
<div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-3028" title="Chillin&#39;n&#39;Swillin&#39;" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 3028); return false;"><strong style="color:black;">7:00am</strong>&nbsp;Chillin'n'Swillin'</a></div><div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-2787" title="Breakfast on the Bridges" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 2787); return false;"><strong style="color:green;">7:15am</strong>&nbsp;BonB</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-2996" title="Pop Til&#39; You Puke" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 2996); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Pop Til' You Puke</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-3047" title="Food Cart Lovers Ride! - Late Night Shootout!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 3047); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Late Night Shootout!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-3079" title="Skate Critical Mass!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 3079); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Skate Critical Mass!</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-3174" title="Fabiotastic!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 3174); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Fabiotastic!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-3118" title="Run DMC Vs. Beastie Boys " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 3118); return false;"><strong style="color:black;">8:00pm</strong>&nbsp;Run DMC Vs. Beasties</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-2800" title="Dingus Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 2800); return false;"><strong style="color:red;">9:00pm</strong>&nbsp;Dingus Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#08-2784" title="Midnight Mystery Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-08&#39;, true, 2784); return false;"><strong style="color:black;">11:59pm</strong>&nbsp;Midnight Mystery</a></div>      </td>
      <td id="cal9" style="background: url(images/bones.gif);"><a href="http://www.rosefestival.org/events/grandfloralparade/" title="Rose Festival Grand Floral Parade"><img align="right" border="0" src="images/rose.gif" alt="Rose Festival Grand Floral Parade"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June9" title="Jun 9, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 0); return false;">9</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3110" title="Bike Milwaukie rides to the Dragon Boat Races" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3110); return false;"><strong style="color:black;">9:00am</strong>&nbsp;Milwaukie to Dragon Boats</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2795" title="Beaverton Farmers Market Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2795); return false;"><strong style="color:black;">9:30am</strong>&nbsp;Beaverton Market</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2528" title="Bikes for Humanity Volunteer Repair Clinics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2528); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Bikes for Humanity</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2845" title="Alley Cat Bike Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2845); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Alley Cat Bike Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3132" title="Tour of Six East Portland Community Gardens" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3132); return false;"><strong style="color:green;">10:00am</strong>&nbsp;Community Garden Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3162" title="schwinn swap" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3162); return false;"><strong style="color:black;">10:00am</strong>&nbsp;bike swap</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3135" title="Sprockette Girls Camp!!!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3135); return false;"><strong style="color:green;">11:00am</strong>&nbsp;<strong>$$</strong>&nbsp;Sprockette Girls Camp</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3035" title="Taste of the Austro-Hungarian Empire" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3035); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;Austro-Hungary Food</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2925" title="SHOW ME SOME LEG!  The Short Shorts Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2925); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Short Shorts</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2950" title="Neighborhoods to Nature: Ride &amp; bluegrass picnic" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2950); return false;"><strong style="color:green;">2:00pm</strong>&nbsp;Neighborhoods to Nature</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3005" title="trust your gut gluten free ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3005); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Trust Your Gut</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3063" title="BikeCraft&#39;s Meet Yer Makers Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3063); return false;"><strong style="color:black;">2:30pm</strong>&nbsp;Meet Yer Makers</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2948" title="2012 Nekked SunnyDay Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2948); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;2012 Naked Day</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3060" title="Lumberyard Launch Party" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3060); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Lumberyard Launch</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2816" title="Doctor Who ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2816); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Doctor Who Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2820" title="Hott Sock 2012" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2820); return false;"><strong style="color:black;">5:15pm</strong>&nbsp;Hott Sock 2012</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3000" title="Cascade Locks Family Fun Ride and Campout: easyCLI" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3000); return false;"><strong style="color:green;">6:00pm</strong>&nbsp;Cascade Locks Campout</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2991" title="Fig Leif Naked 10K Off-Road Bike Ride and 5K Run " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2991); return false;"><strong style="color:black;">7:15pm</strong>&nbsp;Fig Leif Naked Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-2814" title="Morrissey Mobile Disco: Bike Ride &amp; Dance Party" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 2814); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;Morrissey Ride!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#09-3086" title="Seed Ball Pub Crawl" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-09&#39;, true, 3086); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;Seed Ball Pub Crawl</a></div>      </td>
    </tr><tr valign="top">
      <td id="cal10" style="background: url(images/bones.gif);">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June10" title="Jun 10, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 0); return false;">10</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2765" title="Ride4CAP " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2765); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Ride4CAP Training Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2769" title="Accessory Dwelling Tour (N/NE)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2769); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Accessory Dwellings</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2827" title="Wine Country Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2827); return false;"><strong style="color:red;">10:00am</strong>&nbsp;<strong>$$</strong>&nbsp;Wine Country Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3049" title="Food Cart Lovers Ride! - Food Carts &amp; Markets!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3049); return false;"><strong style="color:green;">11:00am</strong>&nbsp;<strong>$$</strong>&nbsp;Food Carts &amp; Markets</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3119" title="The Joy Of Sects" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3119); return false;"><strong style="color:black;">11:00am</strong>&nbsp;The Joy of Sects</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3011" title="Helvetia Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3011); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;Helvetia Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2900" title="Cross Party" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2900); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Cross Party</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2918" title="Sprockettes Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2918); return false;"><strong style="color:green;">1:00pm</strong>&nbsp;Sprockettes Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3015" title="Kamikaze Girls Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3015); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Bike-In Movie: Kamikaze Girls</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2942" title="Paddlepalooza!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2942); return false;"><strong style="color:green;">1:30pm</strong>&nbsp;Paddlepalooza!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-229" title="Bike Polo" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 229); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Bike Polo</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2943" title="Blessing of the Bikes" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2943); return false;"><strong style="color:green;">2:00pm</strong>&nbsp;Bike Blessing</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3158" title="Sauvie Island Dinner Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3158); return false;"><strong style="color:black;">2:30pm</strong>&nbsp;<strong>$$</strong>&nbsp;Sauvie Isle Dinner</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2879" title="G.I. Joe vs. Strawberry Shortcake" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2879); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;G.I. Joe vs. Strawberry Shortcake</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3156" title="Singing @ Lone Fir Cemetery" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3156); return false;"><strong style="color:black;">3:30pm</strong>&nbsp;Singing @ Lone Fir</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2984" title="Buns &amp; Beer! Barbeque &amp; Naked Ride For CAP" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2984); return false;"><strong style="color:red;">4:00pm</strong>&nbsp;Buns and Beer 4CAP</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2767" title="Wanderlust Men&#39;s Cycling Group " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2767); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;<strong>$$</strong>&nbsp;Wanderlust Men's Group</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2228" title="Open Wrench Night" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2228); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Open Wrench Night</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3023" title="Wheel Building Class" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3023); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Wheel Building Class</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3059" title="Sunset Mystery Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3059); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Sunset Mystery Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-2869" title="Badass Challenge II: Pedalpalooza Edition" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 2869); return false;"><strong style="color:black;">8:30pm</strong>&nbsp;Badass Challenge</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#10-3153" title="Zoobomb" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-10&#39;, true, 3153); return false;"><strong style="color:black;">8:30pm</strong>&nbsp;Zoobomb</a></div>      </td>
      <td id="cal11">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June11" title="Jun 11, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 0); return false;">11</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-2817" title="Cute Warm Fuzzy Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 2817); return false;"><strong style="color:green;">10:15am</strong>&nbsp;Cute Warm Fuzzy Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-2818" title="First Nations Bike Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 2818); return false;"><strong style="color:green;">12:15pm</strong>&nbsp;First Nations Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-3001" title="Medicine Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 3001); return false;"><strong style="color:green;">5:00pm</strong>&nbsp;Medicine Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-3099" title="Bicycle Touring Workshop" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 3099); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bicycle Touring</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-3166" title="Ride in Solidarity with Quebec Students!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 3166); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Ride in Solidarity</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-3176" title="BikeBOT: Radio Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 3176); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;BikeBOT: Radio Ride</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-2853" title="Heavy Bike Hill Climb Challenge" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 2853); return false;"><strong style="color:red;">7:00pm</strong>&nbsp;HeavyBikeHillClimb</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-3084" title="Parks to Parks Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 3084); return false;"><strong style="color:black;">7:30pm</strong>&nbsp;Parks to Parks Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#11-2896" title="Parks and Places Art Races" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-11&#39;, true, 2896); return false;"><strong style="color:black;">8:30pm</strong>&nbsp;Parks &amp; Places Art</a></div>      </td>
      <td id="cal12">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June12" title="Jun 12, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 0); return false;">12</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-3164" title="DD Form 1173 Renewal Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 3164); return false;"><strong style="color:black;">6:15am</strong>&nbsp;DD Form 1173</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-3067" title="Food Cart Lovers Ride! - QUICKIE 3rd STREET POD!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 3067); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Quickie 3rd St. Pod </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-3051" title="Ride &amp; Shoot: Bicycle Documentary Filmmaking" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 3051); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Ride &amp; Shoot Class</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-3102" title="Story-time &amp; kiddo ride with Olive and DINGO!!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 3102); return false;"><strong style="color:green;">3:00pm</strong>&nbsp;SE Story-time Ride!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-3123" title="Transport Your Activism" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 3123); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Transport Your Activism</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-2844" title="Pregnant Pedal" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 2844); return false;"><strong style="color:green;">5:45pm</strong>&nbsp;Pregnant Pedal</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-2944" title="Yehuda Moon and the Kickstand Cyclery Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 2944); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Yehuda Moon Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-2968" title="Future of News Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 2968); return false;"><strong style="color:green;">6:00pm</strong>&nbsp;Future of News Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-2229" title="Bikes for Humanity Volunteer Repair Clinics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 2229); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Bikes for Humanity</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-2887" title="Tall Girl Ride!" style="color:magenta; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 2887); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Tall Girl Ride!</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#12-2972" title="Candlelight Candlelight Vigil" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-12&#39;, true, 2972); return false;"><strong style="color:red;">9:00pm</strong>&nbsp;Candlelight Vigil</a></div>      </td>
      <td id="cal13">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June13" title="Jun 13, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 0); return false;">13</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-2906" title="wednesday morning breakfast ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 2906); return false;"><strong style="color:black;">6:30am</strong>&nbsp;WMBR</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-3097" title="Midweek Ride to the Columbia Gorge" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 3097); return false;"><strong style="color:black;">9:30am</strong>&nbsp;Columbia Gorge Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-2913" title="Broads with Babes " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 2913); return false;"><strong style="color:green;">11:00am</strong>&nbsp;Broads with Babes </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-2899" title="The Scrabble Dabble" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 2899); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;The Scrabble Dabble</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-3087" title="BTA Service Station" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 3087); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;BTA Service Station</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-2945" title="MAX to Market Ride: Connecting to Food in Washingt" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 2945); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;MAX Market Ride:</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-3074" title="Ladd&#39;s Addition Streets &amp; Alleys" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 3074); return false;"><strong style="color:green;">5:30pm</strong>&nbsp;Ladd's Bike Game</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-3139" title="Burnt Bridge Creek Trail Native Plant Ride" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 3139); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Native Plant Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-3159" title="Bike Commuting Basics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 3159); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bike Commute Basics</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-2821" title="Unicycles for Noobs" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 2821); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Unicycles for Noobs</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-3183" title="Jumptown Sound&#39;s &quot;why not?&quot; Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 3183); return false;"><strong style="color:red;">7:00pm</strong>&nbsp;Why not?</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#13-2863" title="GRIMM Ride (III) " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-13&#39;, true, 2863); return false;"><strong style="color:black;">9:00pm</strong>&nbsp;Grimm Ride</a></div>      </td>
      <td id="cal14"><a href="http://www.usflag.org/history/flagday.html" title="Flag Day"><img align="right" border="0" src="images/flag.gif" alt="Flag Day"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June14" title="Jun 14, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 0); return false;">14</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-2828" title="Safari to Estacada" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 2828); return false;"><strong style="color:black;">8:00am</strong>&nbsp;Safari to Estacada</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3090" title="Pedalpalooza Cat VI Commute" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3090); return false;"><strong style="color:black;">8:00am</strong>&nbsp;Cat VI Commute</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3116" title="Easy and Geeky" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3116); return false;"><strong style="color:green;">10:45am</strong>&nbsp;Easy and Geeky</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3131" title="Dying Freeways Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3131); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;Dying Freeways Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-2952" title="Splendid Cycles Year 3 Launch Celebration" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 2952); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Splendid Cycles Party</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-2897" title="BARBUR HIGH CRASH CORRIDOR Version 2.0" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 2897); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Barbur High Crash Corridor Ride</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3103" title="Darcelle&#39;s Parade of Glitz, Glitter, and Comedy" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3103); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Darcelle's Parade</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3068" title="Fake Mustache Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3068); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Fake Mustache Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3098" title="Ice Breaker Ride-the sleeper event of the week!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3098); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Ice Braker Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-2936" title="Unicycle Polo" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 2936); return false;"><strong style="color:red;">6:30pm</strong>&nbsp;Unicycle Polo</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-2812" title="Rocky Butte Sunset Dance Party Picnic" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 2812); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Rocky Butte Sunset</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-3177" title="BikeBOT: Robot Ride " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 3177); return false;"><strong style="color:red;">7:00pm</strong>&nbsp;BikeBOT: Robot Ride </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#14-2830" title="Unicorn Ride 3" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-14&#39;, true, 2830); return false;"><strong style="color:black;">9:00pm</strong>&nbsp;Unicorn Ride 3</a></div>      </td>
      <td id="cal15"><a href="http://familycrafts.about.com/od/holidays/p/flyakiteday.htm" title="Fly A Kite Day, commemorating Ben Franklin&#39;s experiment"><img align="right" border="0" src="images/kite.gif" alt="Fly A Kite Day, commemmorating Ben Franklin&#39;s experiment"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June15" title="Jun 15, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 0); return false;">15</a>
<div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-2788" title="Breakfast on the bridges" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 2788); return false;"><strong style="color:green;">7:15am</strong>&nbsp;BonB</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3071" title="Bob&#39;s Meme Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3071); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Bob's Meme Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3065" title="Ride to the Airport!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3065); return false;"><strong style="color:black;">12:45pm</strong>&nbsp;Airport Ride</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3136" title="Horseshoes and handgrenades" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3136); return false;"><strong style="color:black;">2:30pm</strong>&nbsp;Horseshoes!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3050" title="Food Cart Lovers Ride! - Food Carts &amp; Fun Ride!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3050); return false;"><strong style="color:green;">5:30pm</strong>&nbsp;<strong>$$</strong>&nbsp;Food Carts &amp;amp; Fun</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-2910" title="LGBTQ Pride Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 2910); return false;"><strong style="color:black;">5:45pm</strong>&nbsp;LGBTQ Pride Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3066" title="Get Lost!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3066); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Get Lost!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-2888" title="Ginger Ride IV" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 2888); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Ginger Ride IV</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-2921" title="Synesthesia Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 2921); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Synesthesia Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-2923" title="Foster Road Pub &amp; Scenery Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 2923); return false;"><strong style="color:red;">7:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Foster Rd Pub Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3115" title="Dirty Diablo&#39;s Wild Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3115); return false;"><strong style="color:red;">7:30pm</strong>&nbsp;Diablo's Wild Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3052" title="Onesies and Tall T&#39;s" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3052); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;Onesies and Tall T's</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3182" title="Get even loster! - The Epic Get Lost! Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3182); return false;"><strong style="color:black;">8:00pm</strong>&nbsp;Epic Get Lost!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-3134" title="bike-in movie: AMERICAN FLYERS (1985)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 3134); return false;"><strong style="color:red;">8:45pm</strong>&nbsp;Bike-In Movie: American Flyers</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#15-2872" title="Dropout Bike Club Prom ride w/Show me the Pink" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-15&#39;, true, 2872); return false;"><strong style="color:red;">9:00pm</strong>&nbsp;Dropout Ride</a></div>      </td>
      <td id="cal16" style="background: url(images/bones.gif);">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June16" title="Jun 16, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 0); return false;">16</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2528" title="Bikes for Humanity Volunteer Repair Clinics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2528); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Bikes for Humanity</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2960" title="Jeff and Jodi&#39;s North Portland Bike Move" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2960); return false;"><strong style="color:black;">10:30am</strong>&nbsp;Bike Move!!!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3173" title="Monkey Puzzle Tree Informative Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3173); return false;"><strong style="color:black;">11:00am</strong>&nbsp;Monkey Puzzle Tree</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2966" title="Bloomsday Lily of the Alleycat" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2966); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;Lily of the Alleycat</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3055" title="Kindergarten Games" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3055); return false;"><strong style="color:red;">12:00pm</strong>&nbsp;Kindergarten Games</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2819" title="Kidical Mass PDX: Circus Ride!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2819); return false;"><strong style="color:green;">1:00pm</strong>&nbsp;Kidical Mass PDX:</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2850" title="Pedal bilinque" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2850); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Pedal Bilinque</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3121" title="Sunny Naked Ride II" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3121); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Sunny Naked Ride II</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3169" title="Tram Anniversary Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3169); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Tram Annivsry Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2777" title="Star Wars vs Star Trek Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2777); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;Star Wars vs Star Trek</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3172" title="BikeBOT Yoga Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3172); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;BikeBOT Yoga Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2967" title="Music for 111 Bicycles" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2967); return false;"><strong style="color:black;">4:00pm</strong>&nbsp;Music for 111 Bicycles</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3141" title="FReAk Bike CROSS Race (2.5)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3141); return false;"><strong style="color:black;">4:00pm</strong>&nbsp;Freak Bike CROSS</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2894" title="Presidential Fitness Challenge Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2894); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;PFC Ride</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-2823" title="Bloomsday!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 2823); return false;"><strong style="color:red;">6:00pm</strong>&nbsp;Bloomsday!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#16-3167" title="WNBR Unofficial afterparty! Pants off Dance Off!!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-16&#39;, true, 3167); return false;"><strong style="color:black;">11:59pm</strong>&nbsp;Pants off Dance</a></div>      </td>
    </tr><tr valign="top">
      <td id="cal17" style="background: url(images/bones.gif);"><a href="http://www.fathersdaycelebration.com/" title="Fathers Day"><img align="right" border="0" src="images/father.gif" alt="Fathers Day"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June17" title="Jun 17, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 0); return false;">17</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-3006" title="trust your gut gluten free ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 3006); return false;"><strong style="color:black;">8:00am</strong>&nbsp;Trust Your Gut</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-3095" title="Portland Perimeter Permanent-Populaire" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 3095); return false;"><strong style="color:black;">9:30am</strong>&nbsp;100k Populaire</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2765" title="Ride4CAP " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2765); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Ride4CAP Training Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2849" title="Disaster Relief Trials (cargo bikes/100lbs/30Mi)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2849); return false;"><strong style="color:black;">10:00am</strong>&nbsp;<strong>$$</strong>&nbsp;Disaster Relief Trials</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2858" title="Zoobomb Century" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2858); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Zoobomb Century</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2856" title="Zombie Apocalypse Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2856); return false;"><strong style="color:black;">10:30am</strong>&nbsp;Zombie Apocalypse</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2997" title="Food cart tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2997); return false;"><strong style="color:black;">10:30am</strong>&nbsp;Food Cart Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2822" title="Ice Cream Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2822); return false;"><strong style="color:green;">1:00pm</strong>&nbsp;Ice Cream Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-229" title="Bike Polo" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 229); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Bike Polo</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2994" title="Grant Petersen Style Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2994); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Grant P Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-3038" title="Dinosaur Ride by BIKEASAURUS" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 3038); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Dinosaur Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-2953" title="Loud and Lit for Kids" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 2953); return false;"><strong style="color:green;">6:00pm</strong>&nbsp;Loud and Lit for Kids</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-3023" title="Wheel Building Class" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 3023); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Wheel Building Class</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#17-3154" title="Zoobomb" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-17&#39;, true, 3154); return false;"><strong style="color:black;">8:30pm</strong>&nbsp;Zoobomb</a></div>      </td>
      <td id="cal18">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June18" title="Jun 18, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 0); return false;">18</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-3133" title="Ride to the Goodwill &quot;bins&quot; to haul back treasure!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 3133); return false;"><strong style="color:black;">10:00am</strong>&nbsp;<strong>$$</strong>&nbsp;Bins Haul</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-3085" title="Goatlandia Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 3085); return false;"><strong style="color:green;">11:00am</strong>&nbsp;Goatlandia Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-2933" title="Mr. Mom Ride - Full-time dads unite!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 2933); return false;"><strong style="color:green;">3:30pm</strong>&nbsp;Mr. Mom Ride</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-3039" title="Co-opalooza Ride!!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 3039); return false;"><strong style="color:black;">4:15pm</strong>&nbsp;Co-opalooza Ride!!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-3106" title="S240 Midweek Bike Camping" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 3106); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;<strong>$$</strong>&nbsp;S240 Bike Camping</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-2864" title="Tim&#39;s Taco Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 2864); return false;"><strong style="color:red;">6:00pm</strong>&nbsp;Tim's Taco Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-3026" title="Tandem Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 3026); return false;"><strong style="color:black;">6:45pm</strong>&nbsp;Tandem Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-2941" title="Mobile Metamorphic Effigy Eradication Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 2941); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Effigy Eradication</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-3179" title="Trike Syndicate Ride #1" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 3179); return false;"><strong style="color:red;">7:30pm</strong>&nbsp;Trike Syndicate</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#18-2919" title="Mantionette&#39;s Powder Wig and Lace ride." style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-18&#39;, true, 2919); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;Mantoinette's</a></div>      </td>
      <td id="cal19"><a href="http://www.juneteenth.com/" title="Juneteenth, end of slavery in US, 1865"><img align="right" border="0" src="images/juneteenth.gif" alt="Juneteenth, end of slavery in US, 1865"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June19" title="Jun 19, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 0); return false;">19</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3200" title="Tea for Tuesday" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3200); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Tea for Tuesday</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3199" title="Tea for Tuesday" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3199); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Tea for Tuesday</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3127" title="Cool Chicks On Cycles" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3127); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Cool Chicks on Cycles</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3016" title="Mocktails off of the I-5 bridge" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3016); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;Mocktails off I-5</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3201" title="Ride Gregg To Work Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3201); return false;"><strong style="color:black;">3:00pm</strong>&nbsp;Ride Gregg To Work</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-2914" title="Bike Camping 101" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 2914); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bike Camping 101</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-2939" title="Cully Bar Crawl" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 2939); return false;"><strong style="color:red;">6:30pm</strong>&nbsp;Cully Bar Crawl</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3054" title="The Wild Whiskey Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3054); return false;"><strong style="color:red;">6:30pm</strong>&nbsp;The Whiskey Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-2971" title="Heal Hurt Baby Animals with Bubbles Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 2971); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Hurt Baby Animals</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-3062" title="Haunted Ride II - NoPo" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 3062); return false;"><strong style="color:red;">6:30pm</strong>&nbsp;Haunted Ride II</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#19-2229" title="Bikes for Humanity Volunteer Repair Clinics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-19&#39;, true, 2229); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Bikes for Humanity</a></div>      </td>
      <td id="cal20"><a href="http://en.wikipedia.org/wiki/Solstice" title="Solstice, 3:09pm"><img align="right" border="0" src="images/solstice.gif" alt="Solstice, 3:09pm"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June20" title="Jun 20, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 0); return false;">20</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3017" title="Vancouver Bike to Work Day" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3017); return false;"><strong style="color:black;">6:00am</strong>&nbsp;Bike to Work Day</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-2906" title="wednesday morning breakfast ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 2906); return false;"><strong style="color:black;">6:30am</strong>&nbsp;WMBR</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3190" title="Solstice Flash Mob Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3190); return false;"><strong style="color:black;">11:00am</strong>&nbsp;Solstice Flashmob Ri</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3188" title="Pedal-Balloonza" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3188); return false;"><strong style="color:green;">3:00pm</strong>&nbsp;PEDAL-BALLOONZA</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-2998" title="Calorie-Neutral Brewery Tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 2998); return false;"><strong style="color:red;">4:15pm</strong>&nbsp;No-Calorie Brew Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-2886" title="The Luddite Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 2886); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;The Luddite Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3138" title="Awesome Comic Book Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3138); return false;"><strong style="color:black;">5:45pm</strong>&nbsp;Comic Book Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3091" title="BTA Legal Clinic" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3091); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;BTA Legal Clinic</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3070" title="Portlandia Ride!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3070); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Portlandia Ride!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3117" title="Bike Touring for Women workshop" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3117); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Bike Touring for Women</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3150" title="Dead Poets Society Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3150); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Dead Poet's Society</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-3165" title="Slough Tour: CSO Bike Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 3165); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Slough Tour: CSO</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#20-2794" title="Solstice Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-20&#39;, true, 2794); return false;"><strong style="color:black;">8:30pm</strong>&nbsp;Solstice Ride</a></div>      </td>
      <td id="cal21">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June21" title="Jun 21, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 0); return false;">21</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3152" title="Bike Brown Bag - PBOT&#39;s Active Transportation Grp" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3152); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;Bike Brown Bag -</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3018" title="Bicycle Alliance of WA Hub and Spoke Event" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3018); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;Advocacy Workshops</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-2836" title="3rd Folding Bike Tea Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 2836); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Folding Bike Tea</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3019" title="Bicycle of WA Hub and Spoke Happy Hour Social" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3019); return false;"><strong style="color:red;">5:00pm</strong>&nbsp;Bike Alliance Happy Hour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3140" title="Zine Bike Tour!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3140); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Zine Bike Tour!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-2892" title="Skirts and Merkins Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 2892); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Skirts n' Merkins</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-2901" title="Heritage Tree Bike Ride" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 2901); return false;"><strong style="color:green;">6:00pm</strong>&nbsp;Trees by Bike</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3057" title="Bikey Trivia by Bike" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3057); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Bikey Trivia</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3147" title="Portland Society Happy Hour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3147); return false;"><strong style="color:red;">6:00pm</strong>&nbsp;Portland Society</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-2902" title="Polkadots and Pinwheels" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 2902); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Polkadots &amp;amp; Pinwheels</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-2778" title="Hogwarts Express" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 2778); return false;"><strong style="color:black;">8:00pm</strong>&nbsp;Hogwarts Express</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#21-3142" title="PZS Bike-In Movie - The Goonies" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-21&#39;, true, 3142); return false;"><strong style="color:green;">9:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Bike-In Movie: The Goonies</a></div>      </td>
      <td id="cal22">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June22" title="Jun 22, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 0); return false;">22</a>
<div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3029" title="Chillin&#39;n&#39;Swillin: Caffeine Marathon Edition" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3029); return false;"><strong style="color:black;">7:00am</strong>&nbsp;Chillin'n'Swillin'</a></div><div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-2789" title="Breakfast on the Bridges" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 2789); return false;"><strong style="color:green;">7:15am</strong>&nbsp;BonB</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3007" title="Rooster Rock Loop Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3007); return false;"><strong style="color:black;">11:30am</strong>&nbsp;Rooster Rock Loop</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3069" title="Food Cart Lovers Ride! - QUICKIE PSU POD!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3069); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Quickie PSU Pod Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3078" title="Hidden Portland: Weird Art Tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3078); return false;"><strong style="color:black;">12:45pm</strong>&nbsp;<strong>$$</strong>&nbsp;Weird Art</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3101" title="Food Cart Lovers Ride! - St Johns &amp; the Bluffs!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3101); return false;"><strong style="color:black;">4:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;St. John's Food Cart</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-2920" title="Central Eastside Industrial District Tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 2920); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Research Club CEID Tour</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3073" title="Cycling,cerveza,cornhole,catapult,croquet,cakewalk" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3073); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;CCCCC&amp;C Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3111" title="StumpTown Kilts 1st Annual Bar Crawl by Bike	" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3111); return false;"><strong style="color:red;">5:30pm</strong>&nbsp;Kilt Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-2954" title="M.I.L.F. Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 2954); return false;"><strong style="color:red;">6:00pm</strong>&nbsp;M.I.L.F. Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3031" title="Tour de Franzia" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3031); return false;"><strong style="color:red;">6:00pm</strong>&nbsp;Tour de Franzia</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-2903" title="Robot Storytime" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 2903); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Robot Storytime</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-3002" title="Breaking Away Screening at Magnetic North" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 3002); return false;"><strong style="color:black;">8:00pm</strong>&nbsp;Bike-In Movie: Breaking Away</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#22-2917" title="Loud and Lit" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-22&#39;, true, 2917); return false;"><strong style="color:red;">10:30pm</strong>&nbsp;Loud and Lit</a></div>
      <td id="cal23" style="background: url(images/bones.gif);">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June23" title="Jun 23, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 0); return false;">23</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3193" title="Bike portraits" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3193); return false;"><strong style="color:black;">9:15am</strong>&nbsp;Bike portraits</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-2959" title="Bike for Mt. Hood Rivers " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 2959); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Bike for Rivers</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3010" title="West Hills Architecture Tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3010); return false;"><strong style="color:black;">10:00am</strong>&nbsp;W.Hills Architour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3076" title="Bike Donation &amp; Adoption Drive - B4HPDX" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3076); return false;"><strong style="color:green;">10:00am</strong>&nbsp;BIke Donation Drive</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-2992" title="Bingo/Scavenger Hunt" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 2992); return false;"><strong style="color:black;">10:45am</strong>&nbsp;Bingo Scavenger Hunt</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3056" title="Tai Chi: tuning up your bike&#39;s engine" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3056); return false;"><strong style="color:black;">11:45am</strong>&nbsp;Tai Chi </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-2956" title="The Dream of the 1890s is Alive in NW Portland" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 2956); return false;"><strong style="color:green;">3:15pm</strong>&nbsp;The Dream 1890s is</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3032" title="Best Summer Ever Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3032); return false;"><strong style="color:red;">5:00pm</strong>&nbsp;Best Summer Ever</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3004" title="The Pet-l Palooza Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3004); return false;"><strong style="color:green;">6:00pm</strong>&nbsp;The Pet-L Palooza</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-3061" title="Biomimicry on Bikes" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 3061); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Biomimicry on Bikes</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-2927" title="Wild Zero!!!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 2927); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;Wild Zero!!!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#23-2797" title="Los Angelopes Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-23&#39;, true, 2797); return false;"><strong style="color:red;">9:00pm</strong>&nbsp;Los Angelopes Ride</a></div>      </td>
    </tr><tr valign="top">
      <td id="cal24" style="background: url(images/bones.gif);"><a href="http://en.wikipedia.org/wiki/Kenneth_Arnold_UFO_sighting" title="First &quot;UFO&quot; sighting, 1947"><img align="right" border="0" src="images/ufo.gif" alt="First &#39;UFO&#39; sighting, 1947"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June24" title="Jun 24, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 0); return false;">24</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3149" title="Mt. Tabor Downhill Challenge" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3149); return false;"><strong style="color:black;">9:00am</strong>&nbsp;Tabor Downhill</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2765" title="Ride4CAP " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2765); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Ride4CAP Training Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2771" title="Tiny Home Tour (N/NE)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2771); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Tiny Home Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3195" title="Going Green" style="color:blue; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3195); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Going Green</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3210" title="St. Johns Rides to Sunday Parkways North" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3210); return false;"><strong style="color:black;">10:30am</strong>&nbsp;St. Johns Rides</a></div><div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2776" title="Sunday Parkways" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2776); return false;"><strong style="color:black;">11:00am</strong>&nbsp;Sunday Parkways</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2796" title="Fanno Creek Sunday Trailways" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2796); return false;"><strong style="color:green;">11:00am</strong>&nbsp;Fanno Creek Trailways</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3105" title="Food Cart Lovers Ride! - SUNDAY PARKWAYS CARTS!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3105); return false;"><strong style="color:green;">11:00am</strong>&nbsp;<strong>$$</strong>&nbsp;Sunday Parkways Food</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2977" title="Swim Across Portland" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2977); return false;"><strong style="color:black;">12:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Swim Across Portland</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3146" title="Sunday Parkways Bike Polo Demonstration" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3146); return false;"><strong style="color:green;">12:00pm</strong>&nbsp;Bike Polo</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3126" title="Synth Dance Social with Poisonous Gases " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3126); return false;"><strong style="color:green;">12:00pm</strong>&nbsp;Synth Social </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3037" title="Shut Down the CRC" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3037); return false;"><strong style="color:green;">12:30pm</strong>&nbsp;Shut Down the CRC</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2861" title="Yogi Cycle!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2861); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;Yogi Cycle!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3051" title="Ride &amp; Shoot: Bicycle Documentary Filmmaking" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3051); return false;"><strong style="color:black;">2:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Ride &amp; Shoot Class</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3100" title="Three Speed Ride and Picnic" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3100); return false;"><strong style="color:black;">3:30pm</strong>&nbsp;Three Speed Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3108" title="Deutsche Radfahrt II" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3108); return false;"><strong style="color:green;">3:30pm</strong>&nbsp;Deutsche Radfahrt II</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3112" title="Skeptics in the Pub Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3112); return false;"><strong style="color:black;">4:00pm</strong>&nbsp;Skeptics Pub Ride</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-2767" title="Wanderlust Men&#39;s Cycling Group " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 2767); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;<strong>$$</strong>&nbsp;Wanderlust Men's Group</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3023" title="Wheel Building Class" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3023); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Wheel Building Class</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3058" title="2012 Hands-Free Olympics " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3058); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Hands-Free Olympics</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3168" title="Best Bike Book of June 2012" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3168); return false;"><strong style="color:green;">7:00pm</strong>&nbsp;Best Bike Book June</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3194" title="BATMAN Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3194); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;BATMAN Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#24-3155" title="Zoobomb" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-24&#39;, true, 3155); return false;"><strong style="color:black;">8:30pm</strong>&nbsp;Zoobomb</a></div>      </td>
      <td id="cal25">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June25" title="Jun 25, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 0); return false;">25</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#25-2993" title="Birds and Bees ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 2993); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Birds and Bees Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#25-3104" title="Dead Freeways Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 3104); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Dead Freeways Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#25-3125" title="Bottoms Up" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 3125); return false;"><strong style="color:black;">5:00pm</strong>&nbsp;Bottoms Up</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#25-3072" title="Intro to Family Biking Workshop" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 3072); return false;"><strong style="color:green;">5:30pm</strong>&nbsp;<strong>$$</strong>&nbsp;Family Biking Worksh</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#25-3144" title="Rolling Mural Tour (SE Edition)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 3144); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Rolling Mural Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#25-3034" title="Office Space Ride (Updated!)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-25&#39;, true, 3034); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Office Space Ride</a></div>      </td>
      <td id="cal26"><a href="http://americanhistory.si.edu/onthemove/themes/story_69_2.html" title="First US bicycle patent, 1819"><img align="right" border="0" src="images/bike.gif" alt="First US bicycle patent, 1819"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June26" title="Jun 26, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 0); return false;">26</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-3203" title="Ride to the Keep Nestle out of the Gorge Rally" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 3203); return false;"><strong style="color:green;">3:00pm</strong>&nbsp;Ride to the Rally</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-3114" title="Food Cart Lovers Ride! - Close in SE/NE!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 3114); return false;"><strong style="color:black;">4:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;SE/NE Food Carts Rid</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-2922" title="The Salty&#39;s Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 2922); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Salty's Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-3041" title="PDX&#39;s Water Reservoirs - Past, Present, &amp; Future" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 3041); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;PDX's H2O Reservoirs</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-3077" title="Sandlot Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 3077); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;Sandlot Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-2855" title="Pedal Potluck Picnic" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 2855); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Pedal Potluck Picnic</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-3161" title="Bike Farm Volunteer Orientation" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 3161); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Volunteer@ Bike Farm</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-2229" title="Bikes for Humanity Volunteer Repair Clinics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 2229); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Bikes for Humanity</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#26-3189" title="Ride of the Conchords" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-26&#39;, true, 3189); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Ride Conchords</a></div>      </td>
      <td id="cal27">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June27" title="Jun 27, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 0); return false;">27</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-2906" title="wednesday morning breakfast ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 2906); return false;"><strong style="color:black;">6:30am</strong>&nbsp;WMBR</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3205" title="Skateboard Ban City Council Meeting" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3205); return false;"><strong style="color:black;">9:00am</strong>&nbsp;Skateboard Ban City</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3122" title="Crappy Gift Exchange" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3122); return false;"><strong style="color:black;">4:00pm</strong>&nbsp;Crappy Gift Exchange</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3030" title="OMSI Pedals Science: Fire and Ice " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3030); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;OMSI Pedals Science </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3088" title="BTA Service Station" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3088); return false;"><strong style="color:black;">4:30pm</strong>&nbsp;BTA Service Station</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3160" title="No way! No coal! Let&#39;s ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3160); return false;"><strong style="color:black;">5:30pm</strong>&nbsp;No Way! No Coal! Let</a></div><div class="tinier"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3020" title="Hammercise Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3020); return false;"><strong style="color:black;">6:00pm</strong>&nbsp;Hammercise Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-2785" title="Epic Pizza Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 2785); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Epic Pizza Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3043" title="Invasion of the Bicycle Snatchers" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3043); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bike Play</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3180" title="Cute Warm Fuzzy (Night-time Edition)" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3180); return false;"><strong style="color:green;">8:15pm</strong>&nbsp;Cute Warm Fuzzy</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#27-3181" title="Furry Vengeance" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-27&#39;, true, 3181); return false;"><strong style="color:red;">10:15pm</strong>&nbsp;Furry Vengence</a></div>      </td>
      <td id="cal28"><a href="http://www.paulbunyantrail.com/talltale.html" title="Paul Bunyan Day"><img align="right" border="0" src="images/axe.gif" alt="Paul Bunyan Day"></a>
        <a href="http://shift2bikes.org/cal/viewpp2012.php#June28" title="Jun 28, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 0); return false;">28</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-2801" title="You know, a pretty good ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 2801); return false;"><strong style="color:black;">11:30am</strong>&nbsp;Nice Long Ride 2</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3128" title="Joel &amp; Geoff&#39;s Hill Climb Extravaganza" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3128); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Hill Climb Extravaganza</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3040" title="Aerinne Cubed III!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3040); return false;"><strong style="color:red;">6:00pm</strong>&nbsp;Aerinne Cubed 3!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3044" title="Invasion of the Bicycle Snatchers" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3044); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bike Play</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3218" title="Scofflaw Fundraiser Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3218); return false;"><strong style="color:red;">6:45pm</strong>&nbsp;Scofflaw Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-2955" title="c.c. band tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 2955); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;c.c. band tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3171" title="Reveal the Path movie premiere - Portland" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3171); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;Reveal Path movie</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3093" title="Recliner Bikes (and others) Lit Ramble" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3093); return false;"><strong style="color:red;">8:00pm</strong>&nbsp;Brightly Lit Ramble</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#28-3033" title="Rooftop Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-28&#39;, true, 3033); return false;"><strong style="color:black;">10:45pm</strong>&nbsp;Rooftop Ride</a></div>      </td>
      <td id="cal29">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June29" title="Jun 29, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 0); return false;">29</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3213" title="The North Commute!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3213); return false;"><strong style="color:black;">6:45am</strong>&nbsp;The North Commute!</a></div><div style="background-color: #ffd000;"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-2807" title="Breakfast on the Bridges" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 2807); return false;"><strong style="color:green;">7:15am</strong>&nbsp;BonB</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3184" title="Beer for Bike watching" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3184); return false;"><strong style="color:black;">11:45am</strong>&nbsp;Beer for Bikes</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3222" title="Food Cart Lovers Ride! - Downtown Roundabout!" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3222); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;Food Cart Lovers</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3223" title="writers to OLF at the last minute" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3223); return false;"><strong style="color:green;">2:30pm</strong>&nbsp;writers OLF last</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3075" title="Jefferson Smith Pedalpalooza Policy Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3075); return false;"><strong style="color:green;">5:30pm</strong>&nbsp;Jefferson Smith</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3045" title="Invasion of the Bicycle Snatchers" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3045); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bike Play</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-2974" title="EcoSex Symposium" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 2974); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;<strong>$$</strong>&nbsp;EcoSex Symposium</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-2835" title="Team Bowie " style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 2835); return false;"><strong style="color:black;">7:30pm</strong>&nbsp;Team Bowie </a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3107" title="Team Prince" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3107); return false;"><strong style="color:black;">7:30pm</strong>&nbsp;Team Prince</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3220" title="Bike-in Movie: Barbarella" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3220); return false;"><strong style="color:black;">8:00pm</strong>&nbsp;Movie: Barbarella!</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-2935" title="Bike Club Vest Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 2935); return false;"><strong style="color:red;">9:00pm</strong>&nbsp;Bike Club Vest Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3064" title="Flash Dance" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3064); return false;"><strong style="color:red;">9:00pm</strong>&nbsp;Flash Dance</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-2975" title="Bike Smut 6: TURNING TRIXXX" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 2975); return false;"><strong style="color:black;">9:15pm</strong>&nbsp;<strong>$$</strong>&nbsp;Bike Smut VI</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#29-3124" title="Bike Smut 6: TURNING TRIXXX" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-29&#39;, true, 3124); return false;"><strong style="color:black;">11:15pm</strong>&nbsp;<strong>$$</strong>&nbsp;Bike Smut VI</a></div>      </td>
      <td id="cal30" style="background: url(images/bones.gif);">        <a href="http://shift2bikes.org/cal/viewpp2012.php#June30" title="Jun 30, 2012" style="font-size: larger; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 0); return false;">30</a>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-2528" title="Bikes for Humanity Volunteer Repair Clinics" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 2528); return false;"><strong style="color:black;">10:00am</strong>&nbsp;Bikes for Humanity</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-3185" title="Beer for Bike watching day 2" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 3185); return false;"><strong style="color:black;">11:45am</strong>&nbsp;Beer for Bikes</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-3109" title="Ellie&#39;s Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 3109); return false;"><strong style="color:green;">12:30pm</strong>&nbsp;Ellie's Ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-3204" title="SE Depave Sites Tour" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 3204); return false;"><strong style="color:black;">12:30pm</strong>&nbsp;SE Depave Sites Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-2847" title="Buddhas by Bike" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 2847); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Buddhas by Bike</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-2877" title="Bike Love Fashion Show Ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 2877); return false;"><strong style="color:black;">1:00pm</strong>&nbsp;Bike Fashion Show</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-3219" title="Village Building Convergence Site Tour Potluck" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 3219); return false;"><strong style="color:green;">5:00pm</strong>&nbsp;VBC Potluck Tour</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-3046" title="Invasion of the Bicycle Snatchers" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 3046); return false;"><strong style="color:black;">6:30pm</strong>&nbsp;Bike Play</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-3221" title="post-MCBF naked ride" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 3221); return false;"><strong style="color:black;">7:00pm</strong>&nbsp;post-MCBF naked ride</a></div>
<div class="tiny"><a href="http://shift2bikes.org/cal/viewpp2012.php#30-2989" title="MCBF afterparty hosted by Tall Tour Crew" style="color:black; text-decoration: none;" onclick="loadday(&#39;2012-06-30&#39;, true, 2989); return false;"><strong style="color:black;">8:00pm</strong>&nbsp;Tall Tour Renegade</a></div>      </td>
    </tr>
  </tbody></table>

  <div class="hr"></div>
  <h2><a name="June7">Thursday June 7</a></h2>
  <div id="div2012-06-07"><dl>

<dt><a name="07-3157" style="">ESCAPE FROM SWAN ISLAND </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-3157"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=+4715+N+Lagoon+Ave+%23A" target="_BLANK">Anna's Island Cafe,  4715 N Lagoon Ave #A</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=+4715+N+Lagoon+Ave+%23A&by=5:00+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm<div style="">
<em>Gather by Anna's Island Cafe on Swan Island, ride at 5:15 to the Pedalpalooza kickoff ride. &nbsp;Or join up at the Going pedestrian bridge or north side of Overlook Park. &nbsp;Plan subject to change pending a trial run, so check for updates.</em>
<br>Jim Hawken, j<span>rhawken<img border="0" src="images/at.gif" alt=" at ">speakeasy<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3157" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2774.jpg" height="193.636363636" width="300" align="right" alt="">
<a name="07-2774" style="">PEDALPALOOZA KICKOFF RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-2774"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Park+Ave+and+Montgomery+St" target="_BLANK">South Park Blocks PSU, SW Park Ave and Montgomery St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Park+Ave+and+Montgomery+St&by=6:00+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Kitty-Corner from The Smith Memorial Student Union http://g.co/maps/vjce8)</div>
6:00pm<div style="">
<em>Word on the street is the PDX Bike Swarm plans to shut down Pedalpalooza. Do NOT let them take over free fun and bikes in the street. Bring your bike and show 'em how it is at the one and only PEDALPALOOZA KICKOFF RIDE! Okay, JUST KIDDING! The PDX Bike Swarm will be helping with the safe facilitation of said ride and so will YOU, right!?
<br>
<br>This is a street ride of about 5-miles, riding slow, stopping once and crossing the river (by bridge). All ages, balloons, freaks, fixies, spandex, skates, &amp; sound systems are welcome.
<br>
<br><a href="http://www.facebook.com/events/222987797804102/" class="smallhref">http://www.facebook.com/events/222987797804102/</a></em>
<br>Weastside Free Funists, <a href="http://pdxbikeswarm.org/">The truth about the PDX Bike Swarm </a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2774" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="07-2949" style="">OPEN SHOP NIGHT AT BIKE FARM</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-2949"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2949.png" height="125" width="98.125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=305+NE+Wygant+St" target="_BLANK">Bike Farm, 305 NE Wygant St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=305+NE+Wygant+St&by=6:30+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm - 9:30pm, First Thursday of every month<div style="">
<em>We have the tools, you have the bike! Come work on your steed for free at Bike Farm! &nbsp;Hourly stand fee waived and no membership required. &nbsp;You pay for any parts needed. &nbsp;Bike Farm's Open Shop Night occurs every first Thursday from 6:30pm-9:30pm. &nbsp;We are a 501(c)3 non-profit collective.</em>
<br>Bike Farm, b<span>ikefarm<img border="0" src="images/at.gif" alt=" at ">bikefarm<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.bikefarm.org/">www.bikefarm.org</a>, 971-533-7428&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2949" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3145.jpg" height="141" width="130" align="right" alt="">
<a name="07-3145" style="">PEDALPALOOZA OFFICIAL KICKOFF PARTY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-3145"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd" target="_BLANK">VeloCult, 1969 NE 42nd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd&by=7:00+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm, (the kickoff ride may arrive a little later)<div style="">
<em>Pedalpalooza's official kickoff party, sponsored by the Portland Mercury. Beer, food, live music from Pinehurst Kids!</em>
<br>Portland Mercury, <a href="http://portlandmercury.com/">PortlandMercury</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3145" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="07-2895" style="">MUSIC BOX RIVER RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-2895"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2895.jpg" height="125" width="179.078014184" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=7:30+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:30pm<div style="">
<em>The Music Box River Ride is back for Pedalpalooza! Come out for a sunset ride up to the Columbia River - followed by a dance party/bonfire on the beach. BYO - there won't be a beer stop. &nbsp;If you're going to the kickoff party and want to meet up later, we'll be a bit east of where the Marine Drive path crosses Marine Dr.</em>
<br>Alex Bigazzi, a<span>bigazzi<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2895" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="07-3024" style="">BACKDOOR RIDE PEDALPALOOZA EDITION!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-3024"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Stark+St+and+14th+Ave" target="_BLANK">Washington High, SE Stark St and 14th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Stark+St+and+14th+Ave&by=10:45+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (we meet in the field behind the school!)</div>
10:45pm, gather around 10:45 or 11. we leave at 11:11 sharp!<div style="">
<em>Urban Exploration! Every 1st THURS we gather to follow the leader on an unpredictable route to mysterious and unexplored parts of PDX! BYOB and wear good shoes!</em>
<br>Jaya, j<span>aya.jeptha<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://backdoorride.wordpress.com/">Backdoor Ride home page</a>, 503-380-2573&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3024" title="2 messages, newest 2012-06-02"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="07-2862" style="">MIDNIGHT MADNESS 200 POUND CARGO RACE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#07-2862"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/2862.jpg" height="79" width="106" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=11:30+p.m.&on=06/07/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:30pm, Until the end.<div style="">
<em>If you need Pabst, drink up buddy boy. Only cargo and trailers with a 200 pound or more capacity should attempt. 20 Miles, hills whenever. Fastest rider gets home-made belated king cake. Last rider gets a river dunk.</em>
<br>Jolly Dodger, j<span>ollydodger_23<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://realtimecourier.com/">realtimecourier.com/</a>, 503-863-6554&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2862" title="2 messages, newest 2012-06-08"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June8">Friday June 8</a></h2>
  <div id="div2012-06-08"><dl>

<dt><a name="08-3028" style="">CHILLIN'N'SWILLIN'</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-3028"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2031+NE+M+L+King+Blvd" target="_BLANK">Tiny's Coffee, 2031 NE M L King Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2031+NE+M+L+King+Blvd&by=7:00+a.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00am<div style="">
<em>A ride where the focus is on chillin' with your friends and swillin' good coffee! There'll be a ride of course- because, well, because we all love to ride! - but it will be short, easy, and casual. It's your chance to get together with other bike nerds, catch up with old friends, make new friends, talk about weekend plans, go for an easy ride (chillin') and drink some coffee (swillin'). It's also a good chance to get back on the bike if you haven't been riding for a while, or bring friends who you want to introduce to the bikey life (we'll try not to scare them off...).</em>
<br>Lapis Pezuli, a<span>gent.lapis<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3028" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="08-2787" style="">BREAKFAST ON THE BRIDGES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-2787"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=steel+bridge%2C+hawthorne+bridge" target="_BLANK">steel &amp; hawthorne bridges, steel bridge, hawthorne bridge</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=steel+bridge%2C+hawthorne+bridge&by=7:15+a.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (east end of steel, west end of westbound hawthorne)</div>
7:15am - 9:15am<div style="">
<em>free pastries and coffee for your commute!</em>
<br>Cap'n Pastry&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2787" title="2 messages, newest 2012-06-05"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2996.jpg" height="199.6875" width="300" align="right" alt="">
<a name="08-2996" style="">POP TIL' YOU PUKE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-2996"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+Klickitat+%26+NE+9th" target="_BLANK">Irving City Park, NE Klickitat &amp; NE 9th</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+Klickitat+%26+NE+9th&by=6:00+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 9:00pm<div style="">
<em>80s pop, dancing, multiple stops with food and drink... need we say more? &nbsp;The stops will have rain shelters. &nbsp;The ride ends at the start of another great ride. 
<br>
<br>Disco ball helmets, teased hair, parachute pants, and such are encouraged but not required.
<br>
<br>Please support our local establishments by bringing and using cash. &nbsp;Also, most of the stops will not take credit due to the large volume of people we will bring.
<br>
<br>Rain or Shine, we dance!</em>
<br>Lance, <a href="https://www.facebook.com/events/233855830052900/">Pedalpalooza: Pop Til' You Puke Ride</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2996" title="2 messages, newest 2012-06-08"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="08-3047" style="">FOOD CART LOVERS RIDE! - LATE NIGHT SHOOTOUT!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-3047"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3047.jpg" height="125" width="218.58974359" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=8145+SE+82nd+St.%2C+Portland%2C+OR" target="_BLANK">Cartlandia, 8145 SE 82nd St., Portland, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=8145+SE+82nd+St.%2C+OR&Dcty=PO&by=6:00+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (1230 NW 12th Avenue, Apt #424)</div>
6:00pm - 2:00am<div style="">
<em>PDX Food Cart Lovers is proud to announce our 1st Pedalpalooza Ride!
<br>
<br>Join us at Cartlandia at SE 82nd and Harney at 6PM for an Adventurous Style Food Cart Ride!
<br>
<br>Bring $ for your eats!
<br>
<br>After Cartlandia we will visit the carts at 52nd and Foster, Ala Carts at SE 50th and Ivon then on to Cartopia and over the Hawthorne Bridge into Downtown Portland along 3rd street where we will go our separate ways
<br>
<br>Check out our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for further info</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">PDX Food Cart Lovers</a>, f<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3047" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="08-3079" style="">SKATE CRITICAL MASS!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-3079"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Ankeny+%26+Naito" target="_BLANK">Saturday Market Fountain, Ankeny &amp; Naito</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Ankeny+%26+Naito&by=6:00+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>Skate in the street! Bring your roller skates, blades, scooters, and skateboards for a skate around town!</em>
<br>Saul T. Scrapper, p<span>ortlandpedals<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 360-510-1818&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3079" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="08-3174" style="">FABIOTASTIC!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-3174"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5736+NE+33rd+Avenue" target="_BLANK">Kennedy School, 5736 NE 33rd Avenue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5736+NE+33rd+Avenue&by=7:00+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (In front.  On 33rd by the Bike Racks)</div>
7:00pm<div style="">
<em>Get all Fabio'd out and ride to meet with Pop 'til You Puke!
<br>
<br>Ride leaves at 7:10pm.</em>
<br>Lapis Pezuli, a<span>gent.lapis<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3174" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3118.jpg" height="200" width="175.301204819" align="right" alt="">
<a name="08-3118" style="">RUN DMC VS. BEASTIE BOYS </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-3118"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5008+SE+Division+St" target="_BLANK">North Bar, 5008 SE Division St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5008+SE+Division+St&by=8:00+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Warm up at North Bar or look for the gang of bikes gathering in the nearby parking lots &amp; Listen for the Music!)</div>
8:00pm, Roll out about  8:30, Linking up the MMR<div style="">
<em>Calling all B-Boys &amp; Fly-Girls! 
<br>
<br>Slow rockin' ride while I BUMP my favorite Run DMC and Beastie Boys along with some Funky Fresh Old School cuts as we roll on our way to the Midnight Mystery Ride.
<br>
<br>SLOW pace with frequent dancing stops.
<br>
<br>R.I.P. <strong>Jam Master Jay</strong> (Jason Mizell) &amp; <strong>MCA</strong> (Adam Yauch)
<br>End of an era Baby . . .
<br>
<br>Break Dancers: BYO Cardboard
<br>
<br>Bring Lights! Rock your ADIDAS! Ride at own risk! 
<br>
<br>)'(</em>
<br>Dirty Diablo, d<span>irtydiablorides<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, T<span>weet <img border="0" src="images/at.gif" alt=" at ">DirtyDiabloRide for live ride details!</span>, 503-847-5564&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3118" title="2 messages, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="08-2800" style="">DINGUS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-2800"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Kerby+Ave+and+Failing+St" target="_BLANK">Unthank Park, N Kerby Ave and Failing St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Kerby+Ave+and+Failing+St&by=9:00+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Basketball court on the southeast corner)</div>
9:00pm<div style="">
<em>join us (JOIN US) for a delightfully cacophonous, boozy ride during which you will receive a free kazoo! &nbsp;we're the dingus gang. &nbsp;we blow kazoos on bikes.
<br>
<br>we'll meet up with the mmr just like last year. &nbsp;thanks for coming last year, can't wait to plan a BAD ASS route again for you this year too!</em>
<br>Rachel Kelly, r<span>achelkelly<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2800" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="08-2784" style="">MIDNIGHT MYSTERY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#08-2784"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=8218+North+Lombard+Street" target="_BLANK">The Fixin' To, 8218 North Lombard Street</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=8218+North+Lombard+Street&by=11:59+p.m.&on=06/08/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (http://www.thefixinto.com)</div>
11:59pm<div style="">
<em>Come to a bar between 11 and 12. Leave the bar at 12 precisely, and follow the leader to a mystery destination (typically outdoors, BYOB and anything else you need to be comfortable). Remember: be polite to neighbors while gathering (why not take your CASH and buy a drink inside the bar instead of blocking the street/sidewalk?) and pack your trash out with you.</em>
<br>Team Midnight, <a href="http://midnightmysteryride.wordpress.com/">midnightmysteryride.wordpress.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2784" title="4 messages, newest 2012-06-08"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June9">Saturday June 9</a></h2>
  <div id="div2012-06-09"><dl>

<dt>
<img src="pp12img/3110.jpg" height="200" width="138.408304498" align="right" alt="">
<a name="09-3110" style="">BIKE MILWAUKIE RIDES TO THE DRAGON BOAT RACES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3110"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=10722+Southeast+Main+Street+Milwaukie%2C+OR+97222" target="_BLANK">Milwaukie City Hall, 10722 Southeast Main Street Milwaukie, OR 97222</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=10722+Southeast+Main+Street+Milwaukie%2C+OR+97222&by=9:00+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00am<div style="">
<em>Join Bike Milwaukie for a ride to the Dragon Boat Races.
<br>We will casually ride from downtown Milwaukie up to the Hawthorne Bridge, via the Springwater Trail. We will take a break (bring a snack), catch a bit of the Dragon Boat Races in action, and then we will return back to Milwaukie the same way we came. &nbsp;Round trip distance will be approx 15miles. &nbsp;
<br>
<br>The ride starts and ends in front of Milwaukie City Hall. Rain or Shine.</em>
<br>Bike Milwaukie, <a href="https://www.facebook.com/BikeMilwaukie">https://www.facebook.com/BikeMilwaukie</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3110" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2795" style="">BEAVERTON FARMERS MARKET RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2795"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2795.jpg" height="125" width="99.2063492063" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4100+SW+Canyon+Rd" target="_BLANK">Washington Park MAX Station (Zoo station), 4100 SW Canyon Rd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4100+SW+Canyon+Rd&by=9:30+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (meet above ground)</div>
9:30am, Ride will leave at 10am<div style="">
<em>Ever wonder how to get to Beaverton by bike? Well now you will after going on this awesome ride to the famous Beaverton Farmers Market. From the zoo to the market it's only 6.4 miles and it's all mostly downhill. Bring cash for the market and big panniers for your goodies. The end of the ride is also really close to the Beaverton Max TC so if you don't want to ride back up the hill to Portland, you are covered! I will lead a ride back downtown afterwards with a stop at John's Marketplace in Multnomah Village. Get ready for an epic beer run!</em>
<br>Harmony Bliss, h<span>armonybliss26<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2795" title="2 messages, newest 2012-06-08"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2528" style="">BIKES FOR HUMANITY VOLUNTEER REPAIR CLINICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2528"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4038+SE+Brooklyn+St%2C+Portland" target="_BLANK">Community Exchange Bike School, 4038 SE Brooklyn St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4038+SE+Brooklyn+St&Dcty=PO&by=10:00+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 2:00pm, Every Saturday<div style="">
<em>Bikes For Humanity PDX(B4HPDX) is a community service project aimed at providing the public affordable refurbished bikes, repair classes &amp; workshop space. 
<br>We have 100+ donated used bikes &amp; need volunteers to catalog, clean and refurbish the bikes for bike adoption events.
<br>Shop space has been donated for volunteer training and bike repair. Weekly volunteer clinics every Tuesday &amp; Saturday. &nbsp;For full details see <a href="http://www.b4hpdx.org/" class="smallhref">www.b4hpdx.org</a></em>
<br>Susan, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity PDX</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2528" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2845" style="">ALLEY CAT BIKE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2845"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2921+NE+Killingsworth+St" target="_BLANK">Extracto Coffee House, 2921 NE Killingsworth St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2921+NE+Killingsworth+St&by=10:00+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am<div style="">
<em>Come ride the alleys of NE Portland, and discover the fun!</em>
<br>Gray Cat&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2845" title="1 message, newest 2012-05-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3132" style="">TOUR OF SIX EAST PORTLAND COMMUNITY GARDENS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3132"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+112th+Avenue+%26+Prescott+Street" target="_BLANK">Senn's Community Garden, NE 112th Avenue &amp; Prescott Street</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+112th+Avenue+%26+Prescott+Street&by=10:00+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 1:00pm<div style="">
<em>Join EPAPbike (the bike subcommittee of the East Portland Action Plan) on a tour of six East Portland community gardens, ending with a picnic at the Leach Botanical Garden.</em>
<br>Matteo Luccio, b<span>iking<img border="0" src="images/at.gif" alt=" at ">palebluedotllc<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://eastportlandactionplan.org/bike">EPAPbike</a>, 541-543-0525&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3132" title="1 message, newest 2012-06-04"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3162" style="">SCHWINN SWAP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3162"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5311+ne+10th" target="_BLANK">bellig clubhouse, 5311 ne 10th</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5311+ne+10th&by=10:00+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (10th and killingsworth)</div>
10:00am - 2:00pm, actually gonna try to do both sat n sun and will have food available<div style="">
<em>bike swap, mainly schwinn but all are welcome</em>
<br>Wheelie King, b<span>elligerante1996<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, l<span>ook us up on Facebook under organizations</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3162" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3135.jpg" height="199.335548173" width="300" align="right" alt="">
<a name="09-3135" style="">SPROCKETTE GIRLS CAMP!!!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3135"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=11:00+a.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (near the tennis courts)</div>
11:00am - 4:00pm<div style="">
<em>2 Days of fun filled bike dance for your little girls ages 5 to 12 with the Sprockettes! Cumulating in a dance collaboration on the Sprockettes ride on June 10th!
<br>pre-registration required
<br>$40-$100 sliding scale
<br>For more info and to register visit <a href="http://www.sprockettes.org/" class="smallhref">www.sprockettes.org</a></em>
<br>The Sprockettes, <a href="http://sprockettes.org/shows/2012-girls-camp/">Registration </a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3135" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3035" style="">TASTE OF THE AUSTRO-HUNGARIAN EMPIRE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3035"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Eastbank+Esplanade+by+the+Vera+Katz+statue" target="_BLANK">Eastbank Esplanade by the Vera Katz statue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Eastbank+Esplanade+by+the+Vera+Katz+statue&by=12:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
12:00pm - 3:00pm, Whenever we are done eating<div style="">
<em>We miss the Eastern European comfort food of our Midwest homes. &nbsp;Come explore the foods of Germany, Austria, Poland, Ukraine, Croatia, and Hungary with us. &nbsp; We'll start with pierogies in Sellwood and finish with chicken paprikas (and beer) at my house near Mt. Tabor.</em>
<br>Scott Sallay, s<span>allayb<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-975-1250&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3035" title="2 messages, newest 2012-06-01"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2925" style="">SHOW ME SOME LEG!  THE SHORT SHORTS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2925"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4040+NE+7th+Ave" target="_BLANK">Two Plum Park, 4040 NE 7th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4040+NE+7th+Ave&by=2:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm - 3:30pm<div style="">
<em>One thing about biking is that we all get some fantabulous leg muscles out of the deal. &nbsp;It's time to show them off! &nbsp;Come wearing the shortest shorts you're comfortable wearing.</em>
<br>Lapis Pezuli, a<span>gent.lapis<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2925" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2950.jpg" height="200" width="140" align="right" alt="">
<a name="09-2950" style="">NEIGHBORHOODS TO NATURE: RIDE &amp; BLUEGRASS PICNIC</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2950"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Concord+and+N+Going+Court" target="_BLANK">Pittman Addition HydroPark, N Concord and N Going Court</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Concord+and+N+Going+Court&by=2:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (at the north side of the Concord PedBike Bridge)</div>
2:00pm - 5:00pm, Ride from 2:00-5:00, picnic and music in Columbia Park after<div style="">
<em>Come on a fun tour! Ride new Neighborhood Greenways in North Portland that connect neighborhoods to lush natural areas at Smith and Bybee Lakes. Learn about creating nature in the city, connect with natural areas, and the vision for the Intertwine. Ends at Columbia Park for a picnic (bring food!) &amp; live bluegrass music from Stumbleweed. Sponsors: PBOT, BES, Water, Urban Greenspaces Institute, The Intertwine Alliance, Backyard Habitat Certification, Friends of Trees.</em>
<br>Greg Raisman, g<span>reg.raisman<img border="0" src="images/at.gif" alt=" at ">portlandoregon.gov</span>, <a href="http://www.gettingaroundportland.org/">www.gettingaroundportland.org</a>, 503-823-1052&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2950" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3005" style="">TRUST YOUR GUT GLUTEN FREE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3005"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4943+NE+MLK+Jr.+Blvd" target="_BLANK">tula gluten free bakery cafe, 4943 NE MLK Jr. Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4943+NE+MLK+Jr.+Blvd&by=2:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm - 3:00pm, after sufficiently caffeinated with Lone Pine Coffee<div style="">
<em>easy to moderate, scenic ride starting at tula gluten free bakery cafe. No fees. Instead, discounts on purchases at tula before and after the ride.</em>
<br>Tula Gluten Free Bakery, m<span>ieke<img border="0" src="images/at.gif" alt=" at ">tulabaking<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.honestpt.com/">www.honestpt.com</a>, m<span>ieke johnson</span>, 503-764-9727&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3005" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3063.png" height="200" width="173.97260274" align="right" alt="">
<a name="09-3063" style="">BIKECRAFT'S MEET YER MAKERS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3063"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Eastbank+Esplanade+and+Hawthrone+Blvd" target="_BLANK">Vera Katz Statue on the East Bank Esplinade, SE Eastbank Esplanade and Hawthrone Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Eastbank+Esplanade+and+Hawthrone+Blvd&by=2:30+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Just ask for Vera!)</div>
2:30pm - 5:00pm, Get there a little early to show off your Made-in-PDX gear!<div style="">
<em>BikeCraft has been bringing you awesome, made-in-PDX bike goodies for years. But where does it all come from?
<br>
<br>We'll visit some awesome local businesses who're keeping the PDX bikeconomy strong as hell! See where/how it's all made and meet folks who love to bike Portland-proud.
<br>
<br>Got a fave purchase from a BikeCraft show? Wear it, bring it, put in on your bike and show it off. Prizes for the folks with the most bike gear made in PDX!
<br>
<br>We'll end up back at Vera Kats for the Hott Sock ride.</em>
<br>Aaron Kaffen, Co-BikeCraft-guy, a<span>aron<img border="0" src="images/at.gif" alt=" at ">bikecraftonline<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.bikecraftonline.com/">www.bikecraftonline.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3063" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2948" style="">2012 NEKKED SUNNYDAY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2948"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2948.jpg" height="125" width="83.6092715232" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=39th+and+NE+Glisan" target="_BLANK">Golden Jeanne d'Arc, 39th and NE Glisan</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=39th+and+NE+Glisan&by=3:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (C&#65533;sar Ch&#65533;vez Blvd.)</div>
3:00pm - 6:00pm<div style="">
<em>If short shorts aren't your style or you like to drop trou sometimes . . . then ride buck with us around Portland. The Land of the Free and the Home of the Brave. 
<br>
<br>A Pedalpalooza 1st &nbsp;Saturday tradition, a unique and exhilarating, not to mention, brazen stroll through your beautiful city. &nbsp;The first of many naked rides to come and a day rally for the WNBR!
<br>
<br>Celebrate body freedom, legal precedent, our amazing culture, and each other's whole self. A non-erotic/all safe ride, harassment culture unwelcome.
<br>
<br>Practice Freedom.
<br>.
<br>.
<br>.</em>
<br>Kernel Moses, 3<span>speedsR4lovers<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2948" title="3 messages, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3060" style="">LUMBERYARD LAUNCH PARTY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3060"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2700+NE+82nd+Ave" target="_BLANK">Lumberyard Indoor Bike Park, 2700 NE 82nd Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2700+NE+82nd+Ave&by=3:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:00pm, 3:00pm to 9:00pm<div style="">
<em>Adult Rider: $29.95
<br>Kid Rider Under 12: $19.95
<br>Non- Rider: Free Entry
<br>Activities for all ages: Vendor tents, pro expos, kids ride, 
<br>bike equipment &amp; clothing showcase, food and drinks, raffle prizes, and of 
<br>course, a killer after party with DJ</em>
<br>Ride Hard At The 'Yard, <a href="http://www.lumberyardmtb.com/">www.lumberyardmtb.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3060" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2816.jpg" height="200" width="151.975683891" align="right" alt="">
<a name="09-2816" style="">DOCTOR WHO RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2816"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Holladay Park (NE 13th &amp; Multnomah) <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Holladay+Park+%28NE+13th+%26+Multnomah%29&by=5:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 7:30pm<div style="">
<em>Grow yourself a TARDIS to ride around the Space-Time Vortex of Portland with other Timelords and ladies. Casual ride to a few geeky/British places of interest (Yes, The Tardis Bar will be on the route). Costume contest with prizes and Doctor Who trivia. Not a loop but will end within two miles from start. More spoilers to follow.
<br>Evelyn Johnson</em>
<br>Evelyn Johnson, e<span>mjohnson.sc<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2816" title="3 messages, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2820" style="">HOTT SOCK 2012</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2820"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2820.jpg" height="125" width="83.25" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Vera+Katz+statue+on+the+Esplanade+%28Esplanade%2FSE+Salmon-ish%29" target="_BLANK">Vera Katz statue on the Esplanade (Esplanade/SE Salmon-ish)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Vera+Katz+statue+on+the+Esplanade+%28Esplanade%2FSE+Salmon-ish%29&by=5:15+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet me at Vera!)</div>
5:15pm, Roll-out at 5:30!<div style="">
<em>Deck your calves, throw on those over-the-knees, or bare your ankles as you dare and join the well-heeled calve-ry crew for a ride with great fashion, bad puns, and parties thanks to local bike-loving retailers. Bring sock-funds for sock-fun, pack a lock and some lights, and join us at Vera at 5:30. We'll revel with the fine crew of Sock Dreams in Sellwood and then pedal the party to Sock It To Me in inner SE. Leaving late? Meet us along the way: <a href="http://g.co/maps/nwqh2" class="smallhref">http://g.co/maps/nwqh2</a> Need post-ride [de]hydration? Fashionistas 21+ may choose to continue to Apex Bar. Ride is all ages.</em>
<br>Steph And KBott, Ladies Of The Sock, f<span>amouspotato<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2820" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3000" style="">CASCADE LOCKS FAMILY FUN RIDE AND CAMPOUT: EASYCLI</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3000"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=http%3A%2F%2Fnw-trail.org%2Fwiki%2Findex.php%3Ftitle%3DTrail%3ACascade_Locks_International_Mountain_Bike_%28CLIMB%29_Trail" target="_BLANK">easyCLMIB in Cascade Locks, http://nw-trail.org/wiki/index.php?title=Trail:Cascade_Locks_International_Mountain_Bike_(CLIMB)_Trail</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=http%3A%2F%2Fnw-trail.org%2Fwiki%2Findex.php%3Ftitle%3DTrail%3ACascade_Locks_International_Mountain_Bike_%28CLIMB%29_Trail&by=6:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 8:00pm<div style="">
<em>When: Saturday, June 9th, 6pm
<br>Dogs: Great place for dogs. 
<br>Camping: &nbsp;We will be camping at this event, but there are no campsites, water, or electricity. &nbsp;We will have a porta potty though. &nbsp;
<br> 
<br>Where: EasyCLIMB trail in Cascade Locks - &nbsp;
<br><a href="http://nw-trail.org/wiki/index.php?title=Trail:Cascade_Locks_International_Mountain_Bike_(CLIMB)_Trail" class="smallhref">http://nw-trail.org/wiki/index.php?title=Trail:Cascade_Locks_International_Mountain_Bike_(CLIMB)_Trail</a>
<br>
<br>RSVP: Not required, but appreciated.
<br> &nbsp;
<br>Andy Crump - andyc<img src="images/at.gif" alt="[at]">nw-trail.org</em>
<br>Northwest Trail Alliance: Dimwits WithBriteLites, a<span>ndyc<img border="0" src="images/at.gif" alt=" at ">nw-trail<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3000" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-2991" style="">FIG LEIF NAKED 10K OFF-ROAD BIKE RIDE AND 5K RUN </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2991"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">NW Leif Erickson Road (in Forest Park), 4250 NW Thurman St (take Trimet Bus 15) <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4250+NW+Thurman+St+%28take+Trimet+Bus+15%29&by=7:15+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (500 yards beyond theThurman Street Forest Park gate)</div>
7:15pm<div style="">
<em>The Fig Leif Naked 10K Off-Road Bike Ride and 5K Run meets at the paved section of NW Leif Erickson Road at 7:15pm on Saturday, June 9th. This is the wide area with a port-a-potty about 500 yards beyond the Forest Park entry gate at the top of NW Thurman St. Same unorganized run and unsupported ride as last year. &nbsp;We'll have someone to keep &nbsp;times and watch our stuff while we bike and run on Leif Erickson Road. Prizes for first bike and runner, male and female, to cross finish line. &nbsp;There is no entry fee and bring you own water.</em>
<br>Henry, h<span>enry5Km<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.clothesoptional5k.blogspot.com/">www.clothesoptional5k.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2991" title="1 message, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2814.jpg" height="200" width="201.587301587" align="right" alt="">
<a name="09-2814" style="">MORRISSEY MOBILE DISCO: BIKE RIDE &amp; DANCE PARTY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-2814"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1218+N.+Killingsworth+St." target="_BLANK">The Fish &amp; Chips Shop, 1218 N. Killingsworth St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1218+N.+Killingsworth+St.&by=8:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm - 2:00am<div style="">
<em>2nd Annual Morrissey Mobile Disco! Return, all ye Ringleaders and Tormentors! &nbsp;Come sporting Smiths shirts, pompadours &amp; glasses, your best-looking suit, or British attire of any era (NOTE: this ride + the Doctor Who ride are in cahoots to double our anglophilic pleasure!). Gladiolus and books on Oscar Wilde encouraged. 
<br>
<br>Meet at the Fish &amp; Chips shop around 7:45. We'll ride right at 8:30PM, but arrive on time for a special surprise. 
<br>
<br>Ride is NOT a loop &amp; will end in inner-SE. Quick stops for dancing &amp; imbibing (BYO encouraged), reasonable mileage, ends with an indoor Moz-Loving Dance Party.</em>
<br>Rhienna, r<span>hienna<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.twitter.com/djrhienna/">@djrhienna</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2814" title="6 messages, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="09-3086" style="">SEED BALL PUB CRAWL</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#09-3086"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=7421+N+Denver+Ave" target="_BLANK">The Farmer's Barn, 7421 N Denver Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=7421+N+Denver+Ave&by=8:00+p.m.&on=06/09/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm<div style="">
<em>Don&#65533;t feel like getting up early for the other seed ball rides? Or do you just like to throw stuff
<br>from your bike under the cover of darkness? Join us for the First Annual Seed Ball Pub Crawl!
<br>We&#65533;ll hit the best weedy out-of-the way bars while spreading our seeds all over N/NE Portland.
<br>Bring your own balls or RSVP so we know how many to bring.</em>
<br>Lori, p<span>dxbikergirl<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3086" title="1 message, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June10">Sunday June 10</a></h2>
  <div id="div2012-06-10"><dl>

<dt>
<img src="pp12img/2765.jpg" height="145.256270447" width="300" align="right" alt="">
<a name="10-2765" style="">RIDE4CAP </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2765"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+11th+and+Multnomah+St.+" target="_BLANK">training rides start at Holladay Park (meet at the fountain in the center), NE 11th and Multnomah St. </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+11th+and+Multnomah+St.+&by=10:00+a.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am, Every Sunday<div style="">
<em>Interested in challenging yourself to start training for the Seattle to Portland Bicycle Classic while supporting a great cause at the same time? &nbsp;Ride4CAP, a team formed to fight HIV/AIDS in our community through Cascade AIDS Project, is for you! &nbsp;For more information about Ride4CAP, please visit our webpage: <a href="http://www.ride4cap.org/r4c/default.asp" class="smallhref">http://www.ride4cap.org/r4c/default.asp</a>
<br>Registrations for the Ride4CAP team are limited. &nbsp;It is important to register soon online or by calling 503-223-9255.</em>
<br>Benjamin Gerritz (Ride4CAP Training Ride Coordinator), b<span>gerritz<img border="0" src="images/at.gif" alt=" at ">cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"> </span>, <a href="http://www.ride4cap.org/r4c/default.asp">www.ride4cap.org/r4c/default.asp</a>, f<span>or more information about Cascade AIDS Project (a 501.C3 non-profit), please visit http://cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee">/</span>, 503-223-9255&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2765" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2769" style="">ACCESSORY DWELLING TOUR (N/NE)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2769"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2726+NE+66th+Ave" target="_BLANK">Derin's Place, 2726 NE 66th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2726+NE+66th+Ave&by=10:00+a.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 1:00pm, Ride will end at Woodlawn Park<div style="">
<em>Back by popular demand... a bike tour of innovative granny flats and backyard cottages in NE Portland, all under 800sf. &nbsp;Learn the rules for building these little dwellings. Have fun. Live small. Get inspired!!</em>
<br>Lina Menard, m<span>enardla<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.orangesplot.net/">Orange Splot</a>, 206-859-1770&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2769" title="2 messages, newest 2012-06-08"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2827" style="">WINE COUNTRY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2827"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=102+E+Main+St%2C+Hillsboro%2C+OR" target="_BLANK">102 E Main St, Hillsboro, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=102+E+Main+St%2C+OR&Dcty=HI&by=10:00+a.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 6:00pm<div style="">
<em>A tour through Oregon's Wine Country (think about 60 miles of rolling hills). Bring some money for wine tastings, we'll be going on a long ride starting at the Starbucks by the end of the MAX Blue Line in Hillsboro (102 E Main St) and visiting a few wineries along the way (estimate about $40 for wine tastings, and perhaps some for lunch if the group wants to stop somewhere). Please RSVP to jim<img src="images/at.gif" alt="[at]">winecyclist.com</em>
<br>(Jimmy) The Wine Cyclist, j<span>im<img border="0" src="images/at.gif" alt=" at ">winecyclist<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2827" title="1 message, newest 2012-06-10"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3049.jpg" height="171.554252199" width="300" align="right" alt="">
<a name="10-3049" style="">FOOD CART LOVERS RIDE! - FOOD CARTS &amp; MARKETS!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3049"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=101+N+Stanton+St" target="_BLANK">Dawson Park, 101 N Stanton St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=101+N+Stanton+St&by=11:00+a.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:00am - 3:00pm<div style="">
<em>PDX Food Cart Lovers presents the Food Carts and Farmers Ride
<br>
<br>Have you ever wondered where Portland's Food Carts get all their great food?
<br>
<br>Then this ride is the ride for you!
<br>
<br>We will visit Mississippi Marketplace for lunch and a short Q&amp;A Session then head over to The King School Market to hear the Farmers side of this story then back to Dawson Park.
<br>
<br>Bring $ for food
<br>
<br>For more info go to our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a></em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3049" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-3119" style="">THE JOY OF SECTS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3119"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3119.jpg" height="125" width="93.125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=101+N+Stanton+St" target="_BLANK">Dawson Park, 101 N Stanton St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=101+N+Stanton+St&by=11:00+a.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Stanton and Williams, Meet at the Gazebo)</div>
11:00am - 1:30pm, Meet at 11:00, roll at 11:30<div style="">
<em>The Bike Temple takes you on a "speed dating" style tour of religion in Portland. &nbsp;A loop tour that visits a diverse and devout selections of houses of worship, giving a representative at each a chance to explain what they do and attempt to convert the group before it's time to take off.</em>
<br>Pasture Ted, t<span>ed101<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.biketemple.org/">www.biketemple.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3119" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-3011" style="">HELVETIA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3011"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+Orenco+Station+Parkway+and+Campus+Court%2C+Hillsboro" target="_BLANK">Orenco Station MAX Stop, Hillsboro, NE Orenco Station Parkway and Campus Court, Hillsboro</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+Orenco+Station+Parkway+and+Campus+Court&Dcty=HI&by=12:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (NW Corner of Park north of MAX Station)</div>
12:00pm - 4:00pm<div style="">
<em>This ride will meet-up at the Orenco Station Farmers Market in Hillsboro for a 10 mile ride through the rolling hills of Helvetia. We'll have a few stops to hear about Helvetia's rich history and struggle to protect its heritage, natural resources, and agriculture. Bring cash for a stop at the Helvetia Tavern for a beer and burger at the end of the ride!</em>
<br>Tara Sulzen, t<span>ara<img border="0" src="images/at.gif" alt=" at ">friends<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.friends.org/">1000 Friends of Oregon</a>, 503-497-1000 x137&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3011" title="2 messages, newest 2012-06-09"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2900.jpg" height="197" width="111" align="right" alt="">
<a name="10-2900" style="">CROSS PARTY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2900"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2225+SE+87th+Ave" target="_BLANK">Harrison Park, 2225 SE 87th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2225+SE+87th+Ave&by=1:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (listen for the music)</div>
1:00pm<div style="">
<em>Bring your cyclocross bikes and we'll cruise out to Powell Butte for an afternoon of friendly, all-levels-welcome races interspersed with grillin' and chillin'. &nbsp;Don't get too excited about the racing - there are no prizes, and kits are strongly discouraged. A grill and a stereo will accompany the ride on trailers. Grocery stop for brats and beers.</em>
<br>Alex Bigazzi, a<span>bigazzi<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2900" title="3 messages, newest 2012-06-10"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2918" style="">SPROCKETTES RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2918"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=1:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm<div style="">
<em>The annual Sprockettes Ride is back! In conjunction with our Summer Girls Camp this year, we will be performing at the end with our camp participants. Games to follow!</em>
<br>Agent Sweet Tooth, s<span>prockettes<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://sprockettes.org/">sprockettes.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2918" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3015.jpg" height="200" width="154" align="right" alt="">
<a name="10-3015" style="">KAMIKAZE GIRLS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3015"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2217+Northeast+Alberta+Street" target="_BLANK">Back to Eden, 2217 Northeast Alberta Street</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2217+Northeast+Alberta+Street&by=1:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm<div style="">
<em>Come dressed in your favorite Japanese fashion and join us for a short ride around NE Portland. We'll start at Back to Eden and grab a snack and possibly take some photos. Then we'll make our way over to a bar (minors are allowed) to watch the movie Kamikaze Girls. Any Japanese fashion inspired outfits are welcome but not required! Bring some cash (or card) if you want to get any food or drinks at our stops!
<br>
<br>This ride is not a loop but it starts and ends in NE
<br>
<br><a href="http://en.wikipedia.org/wiki/Kamikaze_Girls" class="smallhref">http://en.wikipedia.org/wiki/Kamikaze_Girls</a></em>
<br>Laura, s<span>trawberrycreamsodapopdaydream<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://twitter.com/laurabububun">@laurabububun</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3015" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2942" style="">PADDLEPALOOZA!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2942"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Naito+and+Glisan+Bike+path" target="_BLANK">West Side of Steel Bridge, Naito and Glisan Bike path</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Naito+and+Glisan+Bike+path&by=1:30+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet at roundabout sculpture on West end of Steel Bridge)</div>
1:30pm<div style="">
<em>Bring your boat by bike to the river! &nbsp;Calling all canoes, kayaks, dinghies, skiffs, rowboats, sailboats, prams, and dories! Pedal your vessel with us upstream through town and PADDLE back downstream with us! Put your boat on a bike trailer or other contraption. We meet at the West end of the Steel Bridge in Tom McCall Park and will pedal our armada of pedal pulled boats! Landlubbers of all ages welcome.</em>
<br>Saul T. Scrapper, p<span>ortlandpedals<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 360-510-1818&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2942" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/229.jpg" height="200" width="266.666666667" align="right" alt="">
<a name="10-229" style="">BIKE POLO</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-229"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+19th+Ave+and+Jarrett+St" target="_BLANK">Alberta Park, NE 19th Ave and Jarrett St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+19th+Ave+and+Jarrett+St&by=2:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (polo court)</div>
2:00pm, Every Sunday<div style="">
<em>Bike Polo has been played nearly every Sunday at Alberta Park for more than nine years.
<br>
<br>Great for spectators this bike polo is rated PG-13 for profanity, violence, sexuality and gratuitous fun.
<br>
<br>Mallets and heckling provided. Bring your own beater bike or ride one of ours.</em>
<br>Polo Haus, <a href="http://leagueofbikepolo.com/">Axles of Evil</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=229" title="14 messages, newest 2010-11-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2943" style="">BLESSING OF THE BIKES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2943"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1716+NW+Davis+St." target="_BLANK">St, Mary's Cathedral, 1716 NW Davis St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1716+NW+Davis+St.&by=2:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Corner of NW 18th and NWCouch)</div>
2:00pm - 2:30pm<div style="">
<em>5th Annnual Blessing of the Bikes: &nbsp;If you ride for pleasure, commute or race; if you ride an old or new bike; if you just started or have ridden a bike for years, you are invited to the Blessing of the Bikes. The blessing will be held at the Cathedral of the Immaculate Conception (St. Mary&#65533;s) NW 18th and Couch, Sunday, June 10, 2012 from 2 to 2:30 PM. (Rain or Shine). More information at 503-228-4397.</em>
<br>St. Mary's Cathedral, <a href="http://www.maryscathedral.com/">www.maryscathedral.com/</a>, 503-228-43967&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2943" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-3158" style="">SAUVIE ISLAND DINNER RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3158"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1716+NW+Davis+St." target="_BLANK">St Mary's Cathedral, 1716 NW Davis St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1716+NW+Davis+St.&by=2:30+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:30pm - 8:30pm<div style="">
<em>Join a 12 Mile ride to Sauvie Island for a farm-to-table style dinner! We&#65533;re having a three course dinner, with nearly all of the food coming directly from Able Farm! &nbsp;
<br>
<br>Tickets for this delicious fundraiser available at Linnton Feed &amp; Seed and the Olive &amp; Vine in St Johns (8711 N Lombard St)
<br>
<br>$40 gets you a 3 course meal with beer, wine and dessert
<br>
<br>PayPal via <a href="http://ablefarms.wordpress.com/" class="smallhref">http://ablefarms.wordpress.com/</a>
<br>Leisurely ride leaves from the Blessing of the Bikes at St Mary's Cathedral (1716 NW Davis) and should take about an hour <a href="http://goo.gl/maps/viRR" class="smallhref">http://goo.gl/maps/viRR</a></em>
<br>Megan Deton, <a href="http://ablefarms.wordpress.com/">ablefarms</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3158" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2879.jpg" height="156.097560976" width="300" align="right" alt="">
<a name="10-2879" style="">G.I. JOE VS. STRAWBERRY SHORTCAKE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2879"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=3:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:00pm - 5:00pm<div style="">
<em>Come and relive your youth dressed up as your favorite character from the 80's cartoons. From Roadblock to Plum Puddin' all are welcome. Let the epic battle begin! 
<br>
<br><a href="https://www.facebook.com/events/271985109564247/" class="smallhref">https://www.facebook.com/events/271985109564247/</a></em>
<br>Lance&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2879" title="1 message, newest 2012-06-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-3156" style="">SINGING @ LONE FIR CEMETERY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3156"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=638+SE+26th+Ave" target="_BLANK">Lone Fir Cemetery (26th Ave. entrance), 638 SE 26th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=638+SE+26th+Ave&by=3:30+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Entrance is across the street from "Dawg Terrace")</div>
3:30pm - 5:00pm, Optional 2-hour singing follows the 90-minute ride<div style="">
<em>Come celebrate the slumb'ring tenants of the ground with Shapenote Singing at Lone Fir Cemetery! We'll tour the cemetery, tell some of the departed's stories, and sing (song packets provided). Then we'll ride to People's Co-op for our second Sunday 5-7pm singing.</em>
<br>Tom, m<span>ctighe.tom<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://portlandsacredharp.org/">Portland Sacred Harp</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3156" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2984" style="">BUNS &amp; BEER! BARBEQUE &amp; NAKED RIDE FOR CAP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2984"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=925+NW+Hoyt+St.+Portland%2C+OR+97209" target="_BLANK">10th at Hoyt Rooftop Terrace, 925 NW Hoyt St. Portland, OR 97209</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=925+NW+Hoyt+St.+Portland%2C+OR+97209&by=4:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:00pm - 7:00pm<div style="">
<em>Looking for another sunny nekkid ride during Pedalpalooza? Want to support Cascade AIDS Project in the struggle against HIV/AIDS? How about a beer while you enjoy some wieners and buns? Join us for a (clothed!) rooftop BBQ followed by a NAKED ride to Scandals and back. Donations encouraged for the Ride4CAP fundraising event.
<br>
<br>Michael Sorensen (Director of Development), msorensen<img src="images/at.gif" alt="[at]">cascadeaids.org or Andrew Shayde (Events Coordinator), ashayde<img src="images/at.gif" alt="[at]">cascadeaids.org.</em>
<br>Andrew Shayde, a<span>shayde<img border="0" src="images/at.gif" alt=" at ">cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://ride4cap.org/">Ride4CAP.org</a>, 503-278-3854&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2984" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2767" style="">WANDERLUST MEN'S CYCLING GROUP </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2767"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2767.jpg" height="96" width="84" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+15th+Ave+and+Fremont+St" target="_BLANK">Meet at Whole Foods on NE 15th and Fremont , NE 15th Ave and Fremont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+15th+Ave+and+Fremont+St&by=4:30+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:30pm, Every Sunday<div style="">
<em>Wanderlust is a program offered by the men's wellness community Manifest. &nbsp;Learn more about Manifest at <a href="http://manifestpdx.org/" class="smallhref">http://manifestpdx.org</a>. &nbsp;
<br>
<br>Suggested donation of $3-15 to support Manifest programs 
<br>Free for Manifest members 
<br>No one excluded for inability to pay
<br>
<br>To RSVP, check us out on Facebook: <a href="http://www.facebook.com/Wanderlust#!/groups/131023506939788/" class="smallhref">http://www.facebook.com/Wanderlust#!/groups/131023506939788/</a>, <a href="http://www.manifestpdx.org/" class="smallhref">www.manifestpdx.org</a>, or call 503-223-8822x1.</em>
<br>Benjamin (Wanderlust Facilitator)&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2767" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2228" style="">OPEN WRENCH NIGHT</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2228"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=734+SE+Ankeny+St" target="_BLANK">Citybikes Cooperative, 734 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=734+SE+Ankeny+St&by=6:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 9:00pm, Second Sunday of every month<div style="">
<em>Community Drop-in Night
<br>
<br>from 6-9pm where you can fix your bike issues.
<br>
<br>Staff on hand to assist in the learning process!
<br>
<br>Love to wrench already? Come by and make use of the bench tools, we'll only interrupt if you need us. These workshops continue through the Summer.
<br>
<br>Second Sundays:
<br>
<br>May 8th
<br>
<br>June 12th
<br>
<br>July 10th
<br>
<br>August 14th
<br>
<br>September 11th
<br>
<br>You pay for parts and extra-special services (TBD by you and the mechanic on staff)
<br>
<br>Wrench Night at Citybikes is a free-of-charge event for our cycling community.
<br>
<br>Contact: Please mail adsoc<img src="images/at.gif" alt="[at]">citybikes.coop for questions.</em>
<br>SMASH, a<span>dsoc<img border="0" src="images/at.gif" alt=" at ">citybikes.coop</span>, <a href="http://citybikes.coop/">citybikes.coop</a>, 503-239-6951&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2228" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-3023" style="">WHEEL BUILDING CLASS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3023"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=734+SE+Ankeny+St" target="_BLANK">Citybikes Cooperative, 734 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=734+SE+Ankeny+St&by=6:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 8:00pm<div style="">
<em>Wheel Building Series -- Sundays, June 10th, 17th, 24th -- 6:00-8:00pm
<br>
<br>Tuition: $115, 10% off class materials only purchased from Citybikes.
<br>
<br>Registration and Advanced Payment Required: 503-239-6951. Space limited!
<br>
<br>In this class series you will learn how to build a wheel from start to finish. There should be time if your desire is to build a complete wheel set. We'll help you choose the right rim and hub, or you can provide your own. Spokes are calculated and cut on day one. Class covers some theory but is mostly hands on building focused on lacing and all wheel truing functions.</em>
<br>SMASH, a<span>dsoc<img border="0" src="images/at.gif" alt=" at ">citybikes.coop</span>, <a href="http://www.citybikes.coop/">www.citybikes.coop</a>, 503-239-6951&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3023" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-3059" style="">SUNSET MYSTERY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3059"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3059.jpg" height="91.7061611374" width="300" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=7:00+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (between the tennis courts and the playground)</div>
7:00pm<div style="">
<em>Meet up and ride to a Mystery Destination to watch the sunset.
<br>Be prepared to relax and hang out at our destination.</em>
<br>Mle&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3059" title="7 messages, newest 2012-06-11"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="10-2869" style="">BADASS CHALLENGE II: PEDALPALOOZA EDITION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-2869"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Zoobomb Pyle, SW 13th Ave &amp; W Burnside St <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+13th+Ave+%26+W+Burnside+St&by=8:30+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:30pm<div style="">
<em>Epic uphill battle to the top of Washington Park above the Oregon Zoo.
<br>
<br>Ride starts at the Zoobomb Pyle at 9pm
<br>SW 13th Ave and W Burnside 
<br>
<br>Must bring:
<br>Lights
<br>Helmet (preferably a Full-face)
<br>16" kid-size bike
<br>
<br>NO CLIPLESS PEDALS OR GEARS.
<br>SINGLE-SPEED 16" WHEEL KID-BIKES ONLY
<br>
<br>Prizes and Trophies for the first 3 people to the top.</em>
<br>Captain America, d<span>anamerica1906<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.zoobomb.net/">Zoobomb </a>, 503-421-2267&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2869" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3153.jpg" height="200" width="154.909090909" align="right" alt="">
<a name="10-3153" style="">ZOOBOMB</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#10-3153"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=13th+%26+SW+Burnside" target="_BLANK">13th &amp; SW Burnside</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=13th+%26+SW+Burnside&by=8:30+p.m.&on=06/10/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:30pm<div style="">
<em>Zoobomb is long running weekly bike event that meets every Sunday around 8:30PM near (13th &amp; SW Burnside) in Portland OR. Bring a bike, MAX fare, bike lights, and any safety gear you need.
<br>Its a good time and you WILL have fun!
<br>MINI BIKES ENCOURAGED - ALL BIKES WELCOME
<br>HELMETS ARE A GOOD IDEA
<br>* RIDE AT YOUR OWN RISK *
<br>LEAVE NO TRACE</em>
<br>Zoobomb, z<span>oobomb<img border="0" src="images/at.gif" alt=" at ">zoobomb<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>, <a href="http://zoobomb.net/">zoobomb.net</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3153" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June11">Monday June 11</a></h2>
  <div id="div2012-06-11"><dl>

<dt><a name="11-2817" style="">CUTE WARM FUZZY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-2817"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NW+10th+and+Johnson" target="_BLANK">Jamison Square, NW 10th and Johnson</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+10th+and+Johnson&by=10:15+a.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Pearl District)</div>
10:15am - 11:15am, Ride begins promptly at 10:15 AM and ends at 11:15 AM.<div style="">
<em>Monday, 11 June 2012, 10:15 AM
<br>Everyone (including well-behaved sloths) is welcome to ride together through the heart of the Pearl District in NW Portland. Helmets required, slow FUN pace, NO hills. Prizes will be given to ALL participants. We will merrily enjoy optional sweet treats at Ben &amp; Jerry's &amp; Cupcake Jones (bring change). Costumes highly encouraged (think: cute, warm &amp; fuzzy) along with decorated bikes, of course. Rain or shine. See you there! Heeheehoho! FREE/All ages ride.</em>
<br>Martha  Perez, Organizer, m<span>arthaoperez<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-954-8653&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2817" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="11-2818" style="">FIRST NATIONS BIKE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-2818"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NW+10th+and+Johnson" target="_BLANK">Jamison Square, NW 10th and Johnson</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+10th+and+Johnson&by=12:15+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Pearl District)</div>
12:15pm - 1:15pm, Ride begins promptly at 12:15PM.<div style="">
<em>First Nations Bike Ride
<br>Jamison Square Park, NW 10th and Johnson (Pearl District)
<br>12:15PM - 1:15PM, Ride begins promptly at 12:15 PM and ends at 1:15 PM.
<br>Monday, 11 June 2012, 12:15 PM
<br>Everyone is welcome to ride together through the heart of the Pearl District in NW Portland. Helmets required, slow FUN pace, NO hills. Native American regalia appropriate/safe for bike riding, is highly encouraged, and/or decorated bikes, of course. Rain or shine. See you there! Ya tay hey!</em>
<br>Martha  Perez, Organizer, m<span>arthaoperez<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-954-8653&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2818" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="11-3001" style="">MEDICINE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-3001"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3029+SE+21st+Ave" target="_BLANK">Peoples Coop, 3029 SE 21st Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3029+SE+21st+Ave&by=5:00+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 7:30pm<div style="">
<em>Food as medicine explored with small presentations by naturopathic doctors and healing chefs. &nbsp;This ride will have two starts (or a later start for folks just off work) and two lengths (which for the hardy might be 2-21/2 hours). &nbsp;Donations accepted but not needed.</em>
<br>Daniel Miller, D<span>aniel<img border="0" src="images/at.gif" alt=" at ">theopenkitchenpdx<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.theopenkitchenpdx.com/">www.theopenkitchenpdx.com</a>, 503-313-1888&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3001" title="2 messages, newest 2012-06-11"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3099.jpg" height="200" width="200" align="right" alt="">
<a name="11-3099" style="">BICYCLE TOURING WORKSHOP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-3099"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd+%28north+of+Sandy%29" target="_BLANK">Velo Cult, 1969 NE 42nd (north of Sandy)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd+%28north+of+Sandy%29&by=6:30+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm - 9:30pm, Yes, three hours. I don't know where people got the idea last time that it was an hour long?<div style="">
<em>Are you itching to hit the open road and explore nature in a way you haven't yet? Are you a regular bicycle rider but have never taken a bicycle tour? Then join us to learn more about Self-Supported Bicycle Touring, We'll be discussing equipment, planning, and cost as well as day-to-day life on the road. We'll also have a loaded touring rig or two to check out.
<br>
<br>Touring can be easy as an overnight camping expedition close to home, and can be as complicated as a cross-country or around-the-world expedition! &nbsp;But it will be fun!</em>
<br>Shawn, u<span>rbanadventureleague<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://urbanadventureleague.blogspot.com/">urbanadventureleague.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3099" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="11-3166" style="">RIDE IN SOLIDARITY WITH QUEBEC STUDENTS!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-3166"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2811+NE+Holman+St." target="_BLANK">Concordia University, Portland, 2811 NE Holman St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2811+NE+Holman+St.&by=6:30+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Holman St. Front Lawn)</div>
6:30pm - 7:00pm, We leave right at 6:30 so we can make it to the event on time!<div style="">
<em>We're going to swarm from North East Portland down to Pioneer Square and make lots of noise along the way.
<br>
<br><a href="https://www.facebook.com/events/124320451038851/?notif_t=plan_user_joined" class="smallhref">https://www.facebook.com/events/124320451038851/?notif_t=plan_user_joined</a></em>
<br>Nicholas Caleb, n<span>ick.caleb<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="https://www.facebook.com/events/124320451038851/?notif_t=plan_user_joined">https://www.facebook.com/events/124320451038851/?notif_t=plan_user_joined</a>, 541-861-6761&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3166" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3176.jpg" height="200" width="266.382978723" align="right" alt="">
<a name="11-3176" style="">BIKEBOT: RADIO RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-3176"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Meet up at the Vera Katz Statue , SE Water Ave and Hawthorne Blvd <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Water+Ave+and+Hawthorne+Blvd&by=6:30+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Under the Hawthorne bridge on the east side)</div>
6:30pm - 8:00pm, Meet at 6:30pm and ride out at 7pm<div style="">
<em>Calling all stereo cycles, boom box bikes, ghetto blastin' trailers, speaker slingin' Sam's and righteous radio riders! &nbsp;Roll out and end your mundane Monday in musical motion. &nbsp;Any and all music blastin' bikes are welcomed. &nbsp;Roll out and jam your tunes for all to enjoy or cruise through this social ride and sample the eclectic sounds of others. 
<br>**<strong>Please no explicit music</strong>**</em>
<br>BikeBOT, B<span>ikebot1<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/BikeBOT/">BikeBOT</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3176" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="11-2853" style="">HEAVY BIKE HILL CLIMB CHALLENGE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-2853"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=915+SE+Hawthorne" target="_BLANK">Lucky Lab, 915 SE Hawthorne</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=915+SE+Hawthorne&by=7:00+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm, Ride leaves at 8pm<div style="">
<em>Come ride that heavy bike (we'll define it as 40+ pounds) up to the Pittock Mansion. &nbsp;"Cheater weight" as ballast to achieve 40+ pounds is fine as long is it's beverages or snacks. &nbsp;Ride the heaviest bike you have, but remember that what ever bike you ride up the hill you will have to ride down the hill. &nbsp;Ride meets at SE Lucky Lab at 7pm and leaves at 8pm.
<br>All heavy bikes are welcome. . . ride your cargo bike, tall bike, big ass cruiser, keg carrier, chopper, tandem, but trikes discouraged because you have to ride down a steep ass hill. &nbsp;Bring helmets, lights, good brakes, and common sense.</em>
<br>Patrick, p<span>loftus12<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2853" title="5 messages, newest 2012-06-11"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="11-3084" style="">PARKS TO PARKS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-3084"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+3rd+Ave+%26+Clay+St" target="_BLANK">Keller Fountain, SW 3rd Ave &amp; Clay St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+3rd+Ave+%26+Clay+St&by=7:30+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:30pm, will go late<div style="">
<em>Mellow ride from park to park all night long. Discover under-appreciated parks with plenty of play time at each- different parks every year. In past years we've had 30 people in one tree, a team of pandas playing frisbee, a cuddle party in a miniature park, saxophone along the bluffs, skinny-dipping in a heated pool, among other adventures.
<br>
<br>This ride is not a loop, and it will go late. BYOB, hula hoops, blankets, and park gear.
<br>
<br>Douglas Adams says: Always remember your towel!</em>
<br>Magn0lia, n<span>ondeterministic<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, t<span>weet <img border="0" src="images/at.gif" alt=" at ">magn0lia for live ride details</span>, 503-396-3558&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3084" title="1 message, newest 2012-06-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2896.jpg" height="200" width="267" align="right" alt="">
<a name="11-2896" style="">PARKS AND PLACES ART RACES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#11-2896"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=8:30+p.m.&on=06/11/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (meet at the bleachers)</div>
8:30pm, race starts promptly at 9!<div style="">
<em>We're back with more art and more fun!
<br>
<br>Parks and Places Art Races is an alley cat race through SE Portland, with each stop having an artsy challenge you must complete. Collaborate with your competition to create public art! Completing each challenge earns you a spoke card. The first to cross the finish line with all five wins!
<br>
<br>Leaving from Monday Funday! Race starts at 9 sharp with normal and freak bike categories. Prizes for the winners at the finish line, with a casual ride through the course at 10, and a party spot at the end.
<br>
<br>Be prepared to get messy making art!</em>
<br>Ashley Costa And Silver Fox, p<span>arksandplacesartraces<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://facebook.com/parksandplaces">facebook.com/parksandplaces</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2896" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June12">Tuesday June 12</a></h2>
  <div id="div2012-06-12"><dl>

<dt><a name="12-3164" style="">DD FORM 1173 RENEWAL RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-3164"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3164.png" height="70" width="104" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1412+SE+12th+Ave%2C+Portland%2C+OR" target="_BLANK">Tiny's Coffee, 1412 SE 12th Ave, Portland, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1412+SE+12th+Ave%2C+OR&Dcty=PO&by=6:15+a.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:15am - 7:45am<div style="">
<em>It's time for me to renew my DD Form 1173. And it requires a bike ride! In this case, a reverse commute kind of thing from southeast to Swan Island. Join me!
<br>
<br>We'll depart Tiny's at 6:45am and arrive near the University of Portland at about 7:30am. This is a 7.5 mile one-way ride. <a href="http://goo.gl/maps/DDMo" class="smallhref">http://goo.gl/maps/DDMo</a>
<br>
<br>I'll get my picture snapped, new ID laminated, and then head into work in downtown. Come back with me or go in whichever direction you need to go to get your day started right!</em>
<br>Erin, e<span>rin_layna<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 971-212-6212&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3164" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3067.jpg" height="171.554252199" width="300" align="right" alt="">
<a name="12-3067" style="">FOOD CART LOVERS RIDE! - QUICKIE 3RD STREET POD!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-3067"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+3rd+and+Stark" target="_BLANK">3rd Street Food Cart Pod, SW 3rd and Stark</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+3rd+and+Stark&by=12:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet in the Parking Lot behind Sausage Shack)</div>
12:00pm - 1:30pm, Ride our bikes, Eat Delicious Food, back in 90 minutes or less!<div style="">
<em>Hey all you workers and people with only a little time for riding!
<br>
<br>PDX Food Cart Lovers presents the QUICKIE 3rd STREET POD Ride.
<br>
<br>The trick with this ride is we meet at a Food Cart Pod in this rides case we will be meeting at the SW 3rd Pod between Stark and Washington, grabbing our eats then taking a short ride to a park nearby to sample our bounty and returning within 90 minutes
<br>
<br>Bring $ for your eats!
<br>
<br>Make sure to check our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for more info</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">www.pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3067" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="12-3051" style="">RIDE &amp; SHOOT: BICYCLE DOCUMENTARY FILMMAKING</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-3051"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=115+SW+Ash+Street%2C+Suite+420" target="_BLANK">NW Documentary, 115 SW Ash Street, Suite 420</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=115+SW+Ash+Street%2C+Suite+420&by=2:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm, PLEASE NOTE THESE TIME DETAILS: 6/5 &amp; 6/12 from 6-8pm. 6/10 &amp; 6/17 from 2-5pm.<div style="">
<em>Camera, bikes, what's not to like? Join local non-profit NW Documentary for 4 classes to learn how to shoot a doc while riding your bike. We'll discuss various mounting techniques and provide tips on getting the smoothest shots possible, while keeping the story you're trying to tell in mind. We'll go for 2 rides during Pedalpalooza. We'll review footage, discuss editing &amp; more. $100 for NW Doc members, $200 for non-members. Meets 6/5 &amp; 6/12 from 6-8pm, 6/10 &amp; 6/17 from 2-5pm. All skill levels welcome!</em>
<br>NW Documentary, l<span>ilah<img border="0" src="images/at.gif" alt=" at ">nwdocumentary<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.nwdocumentary.org/">NW Documentary</a>, 503-227-8688&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3051" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3102.jpg" height="200" width="251.20593692" align="right" alt="">
<a name="12-3102" style="">STORY-TIME &amp; KIDDO RIDE WITH OLIVE AND DINGO!!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-3102"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3700+SE+Ankeny+St" target="_BLANK">Laurelhurst Park, 3700 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3700+SE+Ankeny+St&by=3:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (with the giant pond in the center)</div>
3:00pm - 4:00pm<div style="">
<em>Are you Ready For FUN cycling toddlers?? Storytime Kiddo ride with Olive Rootbeer and Diiiiinnngo Dizmal. Come to the pastoral Laurelhurst Park dressed as your favorite story character (costume optional). 
<br>We will parade our bikes and trikes to the delight of our fellow Portlander's; one lap (<img src="images/at.gif" alt="[at]"> a toddler's pace) and then plop down in the grass for some story books, songs and balloon creatures. Be sure to bring an snack, helmet, and a tip if you'd like a balloon :)</em>
<br>Miss Olive Rootbeer, o<span>livejean9<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3102" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="12-3123" style="">TRANSPORT YOUR ACTIVISM</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-3123"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3123.jpg" height="125" width="125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Eastbank+Esplanade+and+Main+St" target="_BLANK">Vera Katz Statue, SE Eastbank Esplanade and Main St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Eastbank+Esplanade+and+Main+St&by=5:30+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm - 7:30pm<div style="">
<em>Join AROW to ride Portland's bikeways to see what we want to change! &nbsp;We'll have maps &amp; plans, contact info for complaints &amp; suggestions.
<br>.
<br>This is a democratic ride, if there's some place you want to highlight and get letters out, contact me before the ride or just come and we can work it in. &nbsp;
<br>. 
<br>Bring tape measures, radar guns, graph paper, smart phones, iPads, etc. &nbsp;
<br>. 
<br>It'll be wonky. &nbsp;I'll bring toys, tools and documents.</em>
<br>Meet At 5:30, Roll At 6:00, t<span>ed101<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.activerightofway.org/">www.activerightofway.org</a>, 503-890-0510&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3123" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="12-2844" style="">PREGNANT PEDAL</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-2844"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=5:45+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet near the playground.)</div>
5:45pm, At 6 pm, we start pedaling toward Salt &amp; Straw ice cream shop.<div style="">
<em>When you're engorged with new life, it can be easier to roll than to walk. Join fellow knocked-up cyclists for a slow ride that will end at an ice cream shop. Riders can go a few more blocks and team up for a delightful trivia night at 7, geared to the 21+ set. Bring money for ice cream, and more for food and drink if you want to go to trivia. Non-pregnant people are welcome to stick a pillow under the shirt and come along, too.
<br>
<br>Wanted: Backup ride leader in case I pop early (due the following week). Please email if you're up for this grave responsibility.</em>
<br>Margaret, m<span>agseiler<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2844" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2944.jpg" height="200" width="200" align="right" alt="">
<a name="12-2944" style="">YEHUDA MOON AND THE KICKSTAND CYCLERY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-2944"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4001+N.+Mississippi+Ave." target="_BLANK">Fresh Pot, 4001 N. Mississippi Ave.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4001+N.+Mississippi+Ave.&by=6:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (the one in North Portland)</div>
6:00pm<div style="">
<em>Okay all you Joes, Thistles, Fizzes, Captain Dashboards, Yehudas, Bike Ninjas, Freds, Idles- come join us for the Yehuda Moon Ride! We'll ride around and do stuff that characters from the comic would enjoy, and have a character look-a-like contest. Don't know what the characters are like, or even what they look like? Check out the comic here: 
<br>
<br><a href="http://www.yehudamoon.com/" class="smallhref">www.yehudamoon.com</a>, 
<br>
<br>then dress up like your favorite character (optional) and come join us!</em>
<br>Ryan Good, g<span>oodsterman<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2944" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="12-2968" style="">FUTURE OF NEWS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-2968"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Ankeny+St+and+Naito+Pkwy" target="_BLANK">Waterfront Park, SW Ankeny St and Naito Pkwy</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Ankeny+St+and+Naito+Pkwy&by=6:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Japanese American Historical Plaza just southwest of the Steel Bridge)</div>
6:00pm - 7:30pm<div style="">
<em>What would Asa Lovejoy have made of Jonathan Maus? Against all odds, Portland's indie media are thriving in 2012. Join Oregon Humanities and Portland Afoot editor Michael Andersen on a conversational ride that will reveal the social forces continuing to shape our media, from the Portland Evening Journal to KBOO to the Mercury to Food Carts Portland, and ask where media is headed next. Family-friendly, easy ride. Meet at the Japanese American Historical Plaza just southwest of the Steel Bridge.</em>
<br>Annie Kaffen, a<span>.kaffen<img border="0" src="images/at.gif" alt=" at ">oregonhumanities<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://oregonhumanities.org/">oregonhumanities.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2968" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="12-2229" style="">BIKES FOR HUMANITY VOLUNTEER REPAIR CLINICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-2229"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4038+SE+Brooklyn+St%2C+Portland" target="_BLANK">Community Exchange Bike School, 4038 SE Brooklyn St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4038+SE+Brooklyn+St&Dcty=PO&by=7:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 10:00pm, Every Tuesday and Wednesday<div style="">
<em>Bikes For Humanity (B4H) is a community service project aimed at providing the public affordable refurbished bikes, repair classes &amp; workshop space.
<br>We have 100+ donated used bikes &amp; need volunteers to catalog, clean and refurbish the bikes for bike adoption events.
<br>Shop space has been donated for volunteer training and bike repair. For full details see <a href="http://www.b4hpdx.org/" class="smallhref">www.b4hpdx.org</a></em>
<br>Steven, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2229" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2887.jpeg" height="200" width="133.072407045" align="right" alt="">
<a name="12-2887" style="">TALL GIRL RIDE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-2887"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Interstate+Ave+and+Fremont+St" target="_BLANK">Overlook Park, N Interstate Ave and Fremont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Interstate+Ave+and+Fremont+St&by=7:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 8:00pm<div style="">
<em>It's back. The Tall Girl Ride! Second annual moment atop bike to remember with other skyscraper gals amidst you!
<br>
<br>Must be 5'10" still, just like last year. Our measuring stick hasn't worn out.</em>
<font color="magenta">M</font><br>Taya Jessica, <a href="http://tallgirls-thefilm.com/page/en/">tallgirls-thefilm.com/page/en</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2887" title="2 messages, newest 2012-04-27"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="12-2972" style="">CANDLELIGHT CANDLELIGHT VIGIL</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#12-2972"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/2972.jpg" height="125" width="125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1616+Northwest+23rd+Avenue" target="_BLANK">New Old Lompoc, Northwest, 1616 Northwest 23rd Avenue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1616+Northwest+23rd+Avenue&by=9:00+p.m.&on=06/12/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (It's closed, but that's the point.)</div>
9:00pm<div style="">
<em>Come take a tour of Portland's recently-closed bars, and join us in remembrance. We will provide opportunities for everyone to share their favorite memories at each stop. Is this where you met your boyfriend? Discovered your favorite microbrew? Found your stolen fixie? The ride will end at the hole-in-the-ground formerly known as the Candlelight Room, where we will hold a candlelight vigil. Candles provided. We'll then honor the fallen bars somewhere that still serves beer.</em>
<br>Adam, a<span>moore08<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2972" title="2 messages, newest 2012-06-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June13">Wednesday June 13</a></h2>
  <div id="div2012-06-13"><dl>

<dt><a name="13-2906" style="">WEDNESDAY MORNING BREAKFAST RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-2906"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1412+SE+12th+Ave%2C+Portland%2C+OR" target="_BLANK">Tiny's Coffee, 1412 SE 12th Ave, Portland, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1412+SE+12th+Ave%2C+OR&Dcty=PO&by=6:30+a.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30am - 8:30am, Wednesday September 5th<div style="">
<em>Ride for an hour or so Wednesday morning. &nbsp;Moderate paced no drop. &nbsp;We usually but not always find ourselves riding up hills in which case regroup at the top.
<br>
<br>Meet at Tiny's coffee around 6:30, ride leaves at 7:03 &nbsp;
<br>
<br>We try to get you to work on time if you work at 9am or so. &nbsp;If you're downtown 8am is do-able.
<br>
<br>Bring a bike map of portland. &nbsp;No cue sheets or maps provided.</em>
<br>Ed&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2906" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3097.jpg" height="200" width="200" align="right" alt="">
<a name="13-3097" style="">MIDWEEK RIDE TO THE COLUMBIA GORGE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-3097"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=19750+se+burnside%2C+gresham%2C+or" target="_BLANK">Ruby Junction MAX station, 19750 se burnside, gresham, or</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=19750+se+burnside%2C+gresham%2C+or&by=9:30+a.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet near the eastbound MAX platform)</div>
9:30am - 5:30pm, We depart at 10am sharp!<div style="">
<em>Riding to quiet country roads and spectacular scenery is easier than you think. The Columbia River Gorge is just a short bicycle ride away. And you can totally handle it if you are an everyday rider. Bring a snack, water, and Trimet fare. Geared bikes recommended. &nbsp;Approx 40 miles round trip. MORE INFO AND DETAILS FOUND IN FORUM ENTRY FOR THIS LISTING, PLEASE CHECK THERE IF YOU WANT TO KNOW MORE!</em>
<br>Shawn, u<span>rbanadventureleague<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://urbanadventureleague.blogspot.com/">urbanadventureleague.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3097" title="1 message, newest 2012-05-23"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-2913" style="">BROADS WITH BABES </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-2913"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><img src="pp12img/2913.jpg" height="125" width="203.056768559" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2950+NE+Oregon+St%2C+Portland" target="_BLANK">Oregon Park, 2950 NE Oregon St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2950+NE+Oregon+St&Dcty=PO&by=11:00+a.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet at the playground.)</div>
11:00am, Leave the first park at 11:30am<div style="">
<em>This is a ride to appreciate and meet other mothers who ride with their children. We ride because we want to be resourceful, get exercise, have fun , share the road and we feel safe doing it.
<br>
<br>Come to the park for some play-time, bring a lunch/snack for your family, toys for the kids, plenty of water, helmets and maybe even towels if the weather is sunny and the fountains are flowing.
<br>
<br>This ride is not a loop, but a fairly short tour of three of my favorite parks. It will be as slow or fast as we need to go, and last at least 2+ hours.
<br>*If it is pouring rain the ride will be cancelled!</em>
<br>Ocia Hartely, O<span>ciaHart<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2913" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-2899" style="">THE SCRABBLE DABBLE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-2899"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=4:30+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:30pm, Meet at 4:30, ride at 5:00   Ride will be approx. 1 1/2-2hrs.<div style="">
<em>Join us for a game of Scrabble by bike. &nbsp;Much like a "poker run" we will draw tiles a various stops along the route then play them on an oversized "board" at the final stop. &nbsp;Prizes &amp; camaraderie on a ride with a moderate pace &amp; distance (5-6 miles). &nbsp;Yep, this is going to be a fun ride for all!</em>
<br>Matthew, l<span>ikeherdingchickens<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2899" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-3087" style="">BTA SERVICE STATION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-3087"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Broadway+Brg+%26+Broadway+Brg" target="_BLANK">Broadway Bridge East w/ North Portland Bike Works, Broadway Brg &amp; Broadway Brg</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Broadway+Brg+%26+Broadway+Brg&by=4:30+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (At the stone and log sculpture.)</div>
4:30pm - 6:30pm<div style="">
<em>BTA Service Station's offer cyclists Service, a Snack and a Simple Act to make biking better in Portland Metro and your BTA membership can be purchased or renewed on the spot. 
<br>Thanks to our bike shop partners and volunteers for making these events possible!</em>
<br>Bicycle Transportation Alliance, t<span>om<img border="0" src="images/at.gif" alt=" at ">btaoregon<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://btaoregon.org/events/">BTA Events</a>, 503-226-0676 x20&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3087" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-2945" style="">MAX TO MARKET RIDE: CONNECTING TO FOOD IN WASHINGT</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-2945"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Hatfield Government Center MAX Stop in Hillsboro, 100 SW Adams Ave, Hillsboro <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=100+SW+Adams+Ave&Dcty=HI&by=5:30+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm - 8:30pm<div style="">
<em>1000 Friends is teaming up with Adelante Mujeres, the BTA, Westside Transportation Alliance and WPC for a ride to the Forest Grove Farmers Market, where we'll discuss how protecting the farms and food we all appreciate helps create vibrant communities. We'll meet at the last MAX Stop in Hillsboro, then bike along the edge of urban growth boundary through Hillsboro, Cornelius and Forest Grove to the Forest Grove Farmers Market to potluck, picnic and chat about active transportation and local food in Washington County.</em>
<br>Steph Routh, s<span>teph<img border="0" src="images/at.gif" alt=" at ">wpcwalks<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.friends.org/maxtomarket">1000 Friends, MAX to Market</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2945" title="1 message, newest 2012-06-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-3074" style="">LADD'S ADDITION STREETS &amp; ALLEYS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-3074"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+16th+Ave+%26+Harrison+St+" target="_BLANK">Ladd's Circle, SE 16th Ave &amp; Harrison St </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+16th+Ave+%26+Harrison+St+&by=5:30+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm - 6:30pm<div style="">
<em>Start from the center circle. With a team of 2-4 riders, weave through the streets and alleys of Ladd's Addition, covering as many blocks as possible in one hour without backtracking. The winning team gets ice cream sandwiches at Palio (or preferred gf/vegan/whatever goodie), my treat. Bring your own team or form one at the start!</em>
<br>Katie Proctor, k<span>atie.proctor<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://civilizedconveyance.blogspot.com/">civilizedconveyance.blogspot.com</a>, 607-262-0439&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3074" title="3 messages, newest 2012-06-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-3139" style="">BURNT BRIDGE CREEK TRAIL NATIVE PLANT RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-3139"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/washington.gif" alt="WA" title="Meet in/around Vancouver">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Devine+Rd+between+Mill+Plain+%26+18th+St.+" target="_BLANK">BBC trailhead at Devine Road , Devine Rd between Mill Plain &amp; 18th St. </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Devine+Rd+between+Mill+Plain+%26+18th+St.+&by=5:30+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm, An easy hour or so ride, with frequent 'plant' stops<div style="">
<em>Ride with a naturalist from Vancouver Parks and Recreation Department along Burnt Bridge Creek Trail with stops to learn about native plants along the trail. <strong>Helmets required</strong>
<br>
<br>Map of route: <a href="http://ridewithgps.com/routes/1247176" class="smallhref">http://ridewithgps.com/routes/1247176</a></em>
<br>Madeleine Von Laue, m<span>vonlaue<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3139" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3159.jpg" height="159" width="240" align="right" alt="">
<a name="13-3159" style="">BIKE COMMUTING BASICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-3159"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5441+SE+Belmont+St" target="_BLANK">Tabor Space, 5441 SE Belmont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5441+SE+Belmont+St&by=6:30+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Inside the Presbyterian Church, Muir Room)</div>
6:30pm - 8:00pm<div style="">
<em>Have you considered commuting by bike but you just aren't confident on how to prepare, stay comfortable &amp; safe, and find the best routes? Come join this interactive session as some veteran bike commuters share their experiences.
<br>The class is free and you do not need your bike to attend.
<br>
<br>For more information about Portland By Cycle visit: 
<br>
<br><a href="http://www.portlandonline.com/transportation/index.cfm?c=44099" class="smallhref">http://www.portlandonline.com/transportation/index.cfm?c=44099</a></em>
<br>Jeff Smith, j<span>eff.smith<img border="0" src="images/at.gif" alt=" at ">portlandoregon.gov</span>, <a href="http://www.portlandonline.com/transportation/index.cfm?c=44099">Portland By Cycle Rides and Classes</a>, 503-823-7083&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3159" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-2821" style="">UNICYCLES FOR NOOBS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-2821"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Salmon+St+and+Naito+Pkwy" target="_BLANK">Salmon Street Fountain, SW Salmon St and Naito Pkwy</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Salmon+St+and+Naito+Pkwy&by=7:00+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (You'll see us.)</div>
7:00pm<div style="">
<em>Are you uni-curious? &nbsp;
<br>Have you ever watched a unicycler pass by and wish you were as cool as they are? &nbsp;
<br>Did you ride a unicycle when you were a kid and want to try again? &nbsp;You very likely still can - it's just like falling off a bike but much easier.
<br>Do you fear clowns? (you should)
<br>
<br>If you answered yes to any of these questions and have nothing better to do with your Wednesday evening, come down to Salmon Street Fountain and join the Unicycle Bastards for free lessons, encouragement and some cajoling.
<br>
<br>We'll supply the unicycles. &nbsp;Helmets are encouraged, gloves are smart too</em>
<br>OneTireFlyer, <a href="http://www.unicyclebastards.com/">www.unicyclebastards.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2821" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="13-3183" style="">JUMPTOWN SOUND'S "WHY NOT?" RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-3183"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=7:00+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Top o' the Hill)</div>
7:00pm - 9:00pm, We ride at 7:30<div style="">
<em>It's Wednesday, the sun is (sort of) shining, and... Why Not?
<br>
<br>Let's posse up and ride. &nbsp;Music provided by Jumptown Sound. &nbsp;Tonight, it's mostly old-school hip-hop and funk. &nbsp;No "step" of any kind.
<br>
<br>Meet at the top of the hill next to the toilets by 7, we're leaving at 7:30. &nbsp;We'll head out the ridge to the East and then back West - most likely to a place where we can see the sun set and have an oat soda (or cider for you Gluters)
<br>
<br>Peace!</em>
<br>Jimbo!, h<span>ello<img border="0" src="images/at.gif" alt=" at ">ilovejimbo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.ilovejimbo.com/">www.ilovejimbo.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3183" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2863.jpg" height="198" width="300" align="right" alt="">
<a name="13-2863" style="">GRIMM RIDE (III) </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#13-2863"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3535+NE+7th+Ave" target="_BLANK">Irving City Park , 3535 NE 7th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3535+NE+7th+Ave&by=9:00+p.m.&on=06/13/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (atop the hill)</div>
9:00pm, Meet @ 9pm RIDE @ 10pm ,,ish<div style="">
<em>grimm ride 3
<br>a celebration of life &amp; death! 
<br>experience the love &amp; excitement of life on a bicycle &amp; pay respect to the dearly departed. 
<br>
<br>tour several of Portland's cemeteries, ghost bikes, and respectively grim places. 
<br>
<br>we will 
<br>re-paint/repair ghost bikes as needed. 
<br>play capture the beer, tire toss, dead ringer.
<br>dance THRILLER 
<br>
<br>Dia De Los Muertos influenced makeup/costumes 
<br>STRONGLY ENCOURAGED. 
<br>
<br>FREAKy FREAK BIKE FRIENDLY
<br>but ALL bikes/boards welcome.
<br>LIGHTS &amp; HELMETS please.
<br>
<br>"If time is a waste of life
<br>&amp; life is a waste of time,
<br>then lets all get wasted &amp; have the time of our lives."</em>
<br>Jakob Grimm &nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2863" title="6 messages, newest 2012-06-14"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June14">Thursday June 14</a></h2>
  <div id="div2012-06-14"><dl>

<dt><a name="14-2828" style="">SAFARI TO ESTACADA</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-2828"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4901+SE+Hawthorne+Blvd" target="_BLANK">Sewickly Addition, 4901 SE Hawthorne Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4901+SE+Hawthorne+Blvd&by=8:00+a.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00am, Meet for breakfast/coffee, ride leaves at 9<div style="">
<em>Don your best animal prints or safari wear and ride to the wilds of Estacada. &nbsp;There will be a "Cheetahs Never Win" start option to shave approx. 9 miles from the route (email for details). &nbsp;Bring money for a legendary lunch. &nbsp;Multiple return options, including a led ride back to Portland. &nbsp;We won't leave you to the animals!</em>
<br>Marina &amp; Carye, m<span>montros<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2828" title="10 messages, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-3090" style="">PEDALPALOOZA CAT VI COMMUTE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3090"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2035+SE+39th+Ave" target="_BLANK">Lyrik, 2035 SE 39th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2035+SE+39th+Ave&by=8:00+a.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Intersection of SE Lincoln and SE 39th Ave.)</div>
8:00am<div style="">
<em>Cat VI racing, the best part of the work day! Wear a shirt with buttons (polo shirts OK) and ride your commuter bike (the junkier, the better). Those showing up in spandex on carbon road bikes will be summarily mocked, promoted to Cat V.V, and given a head start so the real Cat VI riders can compete on an even playing field. 
<br>
<br>The course starts on the west side of SE 39th at SE Lincoln and ends in Waterfront Park underneath the Burnside Bridge. Participants are encouraged to yield the right of way to other road users and pedestrians as required by law.</em>
<br>Tyler Durden&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3090" title="2 messages, newest 2012-06-11"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-3116" style="">EASY AND GEEKY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3116"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1731+SE+10th+Ave%2C+Portland" target="_BLANK">Freegeek.org, 1731 SE 10th Ave, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1731+SE+10th+Ave&Dcty=PO&by=10:45+a.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:45am - 12:45pm<div style="">
<em>Come take a tour of the Freegeek reuse and recycling facility. &nbsp;Followed by a very easy and traffic free ride up the Springwater trail to Sellwood. You can learn about electronics recycling and how to rebuild a dead windows computer using the Ubuntu Linux Operating system. We will raffle off one free computer at the end.</em>
<br>Joe Rowe, <a href="http://www.teachchange.org/ewaste">E-waste and computers</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3116" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3131.jpg" height="200" width="200" align="right" alt="">
<a name="14-3131" style="">DYING FREEWAYS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3131"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=0+SW+Morrison+St" target="_BLANK">Morrison Bridge, 0 SW Morrison St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=0+SW+Morrison+St&by=3:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet at the "bus stop" on the top of the bridge, middle of the river)</div>
3:00pm - 5:00pm<div style="">
<em>You've heard of the "Dead Freeways Ride?" &nbsp;Well, while many freeways were stopped in the 20th Century, some were not. &nbsp;These monolithic megaroads still exist today, worn out and clogged with life-choking cars.
<br>.
<br>We'll check out these anachronistic relics from the Age of Motordom, and see how they're serving 21st Century needs. &nbsp;We'll mix historical snippets from the Robert Moses Plan of 1966 with contemporary observation, and discuss ways to repurpose the space and infrastructure to meet the needs of the 21st Century.
<br>.
<br>10 miles, 2 hours. &nbsp;Break midway, bring snacks &amp; water.</em>
<br>Robert Moses, Freeway Visionary, <a href="http://www.oregon.gov/ODOT/COMM/2012_ConstMap.shtml">www.oregon.gov/ODOT/COMM/2012_ConstMap.shtml</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3131" title="5 messages, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-2952" style="">SPLENDID CYCLES YEAR 3 LAUNCH CELEBRATION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-2952"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1407+SE+Belmont+St" target="_BLANK">Splendid Cycles, 1407 SE Belmont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1407+SE+Belmont+St&by=5:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 8:00pm<div style="">
<em>Cargo bikes are taking OFF we MUST celebrate. Join Splendid Cycles and help launch their 3rd year of Cargo Bikeology. Food, beverages, and fun for all during our Year #3 Launch Celebration.</em>
<br>Barb Grover, b<span>arb<img border="0" src="images/at.gif" alt=" at ">splendidcycles<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.splendidcycles.com/">www.splendidcycles.com</a>, 503-954-2620&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2952" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-2897" style="">BARBUR HIGH CRASH CORRIDOR VERSION 2.0</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-2897"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=The+Portland+Bldg%3A+1120+SW+5th+Ave+" target="_BLANK">2nd Annual Bike Tour of Barbur High Crash Corridor , The Portland Bldg: 1120 SW 5th Ave </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=The+Portland+Bldg%3A+1120+SW+5th+Ave+&by=5:30+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet at the Portland Bldg main entrance on SW 5th Ave)</div>
5:30pm - 8:00pm, This is an out and back ride, not a loop, you can bail anytime.<div style="">
<em>A commute outside your comfort zone! &nbsp;Join SW Portland Active Transportation advocates on a bike tour of Barbur Blvd, aka Hwy 99W. The tour will highlight bike lane and sidewalk gaps, especially the dreaded Barbur Bridges, broad expanses of commercial driveways with left turn conflicts, perilous unsignalized crossings, numerous freeway ramps and the auto centric West Portland crossroads. Tour stops will discuss active transportation improvements recently implemented and many more still needed.</em>
<br>Roger Averbeck, r<span>oger.averbeck<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2897" title="1 message, newest 2012-06-13"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3103.jpg" height="189" width="151" align="right" alt="">
<a name="14-3103" style="">DARCELLE'S PARADE OF GLITZ, GLITTER, AND COMEDY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3103"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=208+NW+3rd+Avenue" target="_BLANK">Darcelle XV Showplace, 208 NW 3rd Avenue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=208+NW+3rd+Avenue&by=5:30+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm - 7:30pm, Doors open at 5 if you want a drink!<div style="">
<em>Look, honey: Portland's favorite female impersonator wants to give you a tour of downtown. Do you know where your rhinestones are? (Post-parade ride to Show Me The Pink's reunion show at Plan B departs Darcelle's at 8.)</em>
<br>Huffy EasySpirit, <a href="http://on.fb.me/NzYNuE">on.fb.me/NzYNuE</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3103" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-3068" style="">FAKE MUSTACHE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3068"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3068.jpg" height="125" width="221.518987342" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=moody+and+gibbs+" target="_BLANK">bottom of the aerial tram , moody and gibbs </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=moody+and+gibbs+&by=6:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 7:00pm<div style="">
<em>Bring your best fake mustache and join us in a celebration of facial hair that you did not grow yourself.
<br>
<br>We will dawn our mustaches and ride casually through downtown and to overlook park where we will enjoy some Voodoo "Portland Doughnuts" with mustaches on them and possibly play a game of kickball. At seven I'll lead anyone interested to come to Earl Blumenhauer's big gala at the memorial coliseum.</em>
<br>Nietzsche, k<span>ielij<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 206-850-8084&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3068" title="2 messages, newest 2012-06-12"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3098.jpg" height="200" width="242.156862745" align="right" alt="">
<a name="14-3098" style="">ICE BREAKER RIDE-THE SLEEPER EVENT OF THE WEEK!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3098"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=6:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet just outside of the tennis courts at Irving Park)</div>
6:00pm - 8:00pm<div style="">
<em>Come play some get-to-know-ya games in some parks. Guaranteed to make you giggle, laugh, and meet everyone in the group. We will not be playing "The Human Knot" but we will be playing Pedalpalooza style group games. Bring your best fun self, an easy spirit, and the desire to smile. These will be Pedalpalooza themed games, with a heavy interacting of communicating on a deeper (And fun) level.</em>
<br>Gregg , w<span>oodlawntrees<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3098" title="1 message, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-2936" style="">UNICYCLE POLO</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-2936"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/2936.jpg" height="125" width="95.5882352941" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+20th+Ave+and+Killingsworth+St" target="_BLANK">Alberta Park Polo Court, NE 20th Ave and Killingsworth St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+20th+Ave+and+Killingsworth+St&by=6:30+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Look for a bunch of idiots riding one-wheeled death traps)</div>
6:30pm - 9:00pm, We play until we're sick of playing<div style="">
<em>Do you ride a unicycle? Would you like the chance to attack others, with a stick, while riding a unicycle? Well, this is your event!
<br>
<br>Where? When? 6:30pm at the Alberta Park bike polo court, just about EVERY Thursday of the month.
<br>
<br>Mallets, balls, and minor first aid are supplied by the Bastards. Bring your own unicycle - any unicycle will do. Bring your own discrete adult beverages and your own antibiotic ointment (heh, I said ointment).
<br>
<br>We also like attention - come and watch if you can't ride but are uni-curious.
<br>
<br>Prepare to sweat/swear like a Bastard. Also, unicycles - not bikes.</em>
<br>Mr. Beard, h<span>udsont<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.unicyclebastards.com/">www.unicyclebastards.com</a>, S<span>ubscribe to our Unicycle Bastards Google group (http://groups.google<img border="0" src="images/dotcom.gif" alt=" daht comm">/group/unicyclebastards)</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2936" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2812.jpg" height="200" width="298.507462687" align="right" alt="">
<a name="14-2812" style="">ROCKY BUTTE SUNSET DANCE PARTY PICNIC</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-2812"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=7:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm, we ride at 7:30, don't be late.<div style="">
<em>Follow the tunes from Irving Park (NE 11th &amp; Klickitat) to Rocky Butte for a potluck, sunset picnic and dance party. We'll have a professional DJ along, dance 'til you drop on the lawn or just eat and take in the sunset. Party-goers are encouraged to bring healthy food (if that is your thing) and list your ingredients for those with food allergies and preferences.</em>
<br>Rocky Butte Sunset, r<span>ockybuttesunset<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"> </span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2812" title="7 messages, newest 2012-06-16"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="14-3177" style="">BIKEBOT: ROBOT RIDE </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-3177"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3177.jpg" height="125" width="125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+Oregon+St+and+NE+Lloyd+Blvd" target="_BLANK">Meet up at Peace Park, NE Oregon St and NE Lloyd Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+Oregon+St+and+NE+Lloyd+Blvd&by=7:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet at the giant peace sign... Peace, Love &amp; Robots.)</div>
7:00pm, Meet at 7:00pm ride out at 7:30.  We will end at Velo Cult around 9:30pm.<div style="">
<em>Bots, Bling and Beats. &nbsp;Join BikeBOT for our bumpin' robot ride. &nbsp;This theme ride ends at Velo Cult for a bionic bike after party. &nbsp;Any or all of the following will grant you admission: 
<br>
<br>1. Dress like a robot. &nbsp;Theme out as C3PO, the terminator, Optimus Prime, Robo Cop or a strange cyborg creation of your own. &nbsp;All righteous robots welcome.
<br>
<br>2. Roll out with a radio. &nbsp;Whether you sport backpack speakers or a tune bumpin' trailer all music devices are appreciated. &nbsp;**robo-inspired beats encouraged**
<br>
<br>3. Light up the night. &nbsp;Be as visible as possible by blingin' out your bike and body.</em>
<br>BikeBOT, B<span>ikebot1<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/BikeBOT/">BikeBOT</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3177" title="1 message, newest 2012-06-14"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2830.jpg" height="200" width="259.972489684" align="right" alt="">
<a name="14-2830" style="">UNICORN RIDE 3</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#14-2830"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=9:00+p.m.&on=06/14/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00pm<div style="">
<em>It's the 3rd year of Portland's premier unicorn-themed ride! Come dressed like a unicorn and ride a whimsical bike. Or dress whimsically and ride a Unicorn. That'd be rad! As always, this ride will involve unicorn games and prizes!</em>
<br>Shiny The Unicorn&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2830" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June15">Friday June 15</a></h2>
  <div id="div2012-06-15"><dl>

<dt><a name="15-2788" style="">BREAKFAST ON THE BRIDGES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-2788"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=steel+bridge%2C+hawthorne+bridge" target="_BLANK">steel &amp; hawthorne bridges, steel bridge, hawthorne bridge</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=steel+bridge%2C+hawthorne+bridge&by=7:15+a.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (east end of steel, west end of eastbound hawthorne)</div>
7:15am - 9:15am<div style="">
<em>free coffee and pastries for your commute!</em>
<br>Cap'n Pastry&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2788" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-3071" style="">BOB'S MEME RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3071"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3071.jpg" height="125" width="187.659033079" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=10:00+a.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Near the playground)</div>
10:00am<div style="">
<em>Come for an educational ride around NE Portland to an arts garage, co-housing community and a permaculture ecovillage (all places I lived in pdx). Of course, dress up as your favorite meme. Bring money for lunch on Alberta Street!</em>
<br>Bob New, p<span>ortlandurbanfarmer<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3071" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-3065" style="">RIDE TO THE AIRPORT!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3065"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=7804+SE+Stark+St%2C+Portland" target="_BLANK">Flying Pie Pizzeria, 7804 SE Stark St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=7804+SE+Stark+St&Dcty=PO&by=12:45+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
12:45pm, We'll ride at 1pm sharp<div style="">
<em>The PDX airport welcomes cyclists, and it's easy to ride there -- so long as you can find the way. We'll ride there and back using two different routes and brainstorm ways to make them easier for other multi-modal travelers.</em>
<br>Elly, <a href="http://pdxbybike.com/">pdxbybike.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3065" title="1 message, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3136.jpg" height="200" width="279.72027972" align="right" alt="">
<a name="15-3136" style="">HORSESHOES AND HANDGRENADES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3136"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Peninsula+Park" target="_BLANK">Peninsula Park</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Peninsula+Park&by=2:30+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Horseshoe pits, NE end of park, near basketball hoops)</div>
2:30pm, This will be going for awhile, in different quadrants, so call me if you want to join.  <div style="">
<em>Giddyup Pardners! &nbsp;Did you know Portland has over 21 parks listed with horseshoe pits? &nbsp;We'll go on a casual-paced ride, touring a pit in a park in each quadrant in a rolling tournament. &nbsp;Winner takes some type of mediocre prize. &nbsp;Along the way, we'll pick up some food &amp; refreshments. &nbsp;Perhaps in the form of cold little grenades. &nbsp;
<br>
<br>Feel free to meet up along the way. &nbsp;We'll be starting in NE, going N, then NW, SW, and ending SE.
<br>I've got a set of shoes, please bring some if you have 'em, or pick up a set 'cause they're good times.
<br>
<br>Remember: Almost only counts in horseshoes and handgrenades.</em>
<br>Porter, e<span>porter123<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 315-317-37545&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3136" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-3050" style="">FOOD CART LOVERS RIDE! - FOOD CARTS &amp; FUN RIDE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3050"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><img src="pp12img/3050.jpg" height="125" width="218.58974359" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Ankeny+St+and+Naito+Pkwy" target="_BLANK">Waterfront Park, SW Ankeny St and Naito Pkwy</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Ankeny+St+and+Naito+Pkwy&by=5:30+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet by the Fountain)</div>
5:30pm - 8:30pm<div style="">
<em>PDX Food Cart Lovers presents a Food Carts &amp; Fun Ride through the Parks and Food Carts of NW Portland.
<br>
<br>We will be visiting the following parks - Wallace, Couch, Jamison and the North Park Blocks while visiting Food Carts for snacks and dinner.
<br>
<br>Dress up yourself and your bike and bring games that you like to play as well as $ for your eats.
<br>
<br>Check out our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for more info</em>
<br>Scott Batchelar, s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">PDX Food Cart Lovers</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3050" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2910.jpg" height="147" width="235" align="right" alt="">
<a name="15-2910" style="">LGBTQ PRIDE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-2910"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NW+10th+and+Johnson" target="_BLANK">Jamison Square, NW 10th and Johnson</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+10th+and+Johnson&by=5:45+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:45pm<div style="">
<em>Super groovyness.</em>
<br>James, l<span>gbtqprideride<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/LgbtqPrideRide">www.facebook.com/LgbtqPrideRide</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2910" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-3066" style="">GET LOST!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3066"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3066.jpg" height="125" width="220" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd+%28north+of+Sandy%29" target="_BLANK">Velo Cult, 1969 NE 42nd (north of Sandy)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd+%28north+of+Sandy%29&by=6:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm, 2 hours, give or take<div style="">
<em>A ride led entirely by chance. &nbsp;Dice are rolled to determine how many blocks to ride, and which direction to turn once we get there (Odd total =R, Even =L). 
<br>
<br>You never know what to expect. Since we won't be taking designated bike routes riders should be pretty comfortable in semi-hairy conditions, but dangerous or illegal routes will not be traveled. 
<br>
<br>Probably not a loop, but that's what we said the first year, and we (eerily) ended up in the exact place we started! Read about that year's ride here: <a href="http://bit.ly/eDaPZW" class="smallhref">http://bit.ly/eDaPZW</a></em>
<br>Amos, h<span>appyamosfun<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3066" title="3 messages, newest 2012-06-13"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2888.jpg" height="200" width="253.968253968" align="right" alt="">
<a name="15-2888" style="">GINGER RIDE IV</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-2888"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Williams+and+N+Stanton" target="_BLANK">Dawson Park, N Williams and N Stanton</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Williams+and+N+Stanton&by=7:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 9:00pm<div style="">
<em>Redheads unite! &nbsp;If you're not a redhead, but are a friend of redheads, you can come in disguise (wig, dye, fake red beard, etc).</em>
<br>Steve, Jessica, Ben, Bernard,,  <span>bernardthered<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/TheGingerRide">www.facebook.com/TheGingerRide </a>, 503-683-2733&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2888" title="1 message, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-2921" style="">SYNESTHESIA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-2921"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=West+end+of+the+Hawthorne+Bridge" target="_BLANK">West end of the Hawthorne Bridge</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=West+end+of+the+Hawthorne+Bridge&by=7:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet on the south side of the Hawthorne bridge on the West riverfront)</div>
7:00pm<div style="">
<em>Led by a visual &gt; auditory synesthete, this ride will stop at many locations where lights, manmade and natural, produce interesting "sounds." At each stop the host will describe the sensation, invite other participants to describe their experience, and pass out props or party favors that will add to the understanding of synesthetic experiences. Starts on the west end of the Hawthorne bridge and ends at the Hollywood MAX station.</em>
<br>N&#65533;m Wunnan, n<span>im<img border="0" src="images/at.gif" alt=" at ">wunnan<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wunnan.com/">wunnan.com</a>, 503-853-3721&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2921" title="2 messages, newest 2012-05-03"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2923.jpg" height="200" width="176.569037657" align="right" alt="">
<a name="15-2923" style="">FOSTER ROAD PUB &amp; SCENERY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-2923"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=9200+SE+Foster+Rd%2C+Portland%2C+OR" target="_BLANK">9200 SE Foster Rd, Portland, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=9200+SE+Foster+Rd%2C+OR&Dcty=PO&by=7:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Brick plaza, NW corner of intersection)</div>
7:00pm<div style="">
<em>Come experience SE Portland pub culture by plummeting head-first into the depths of it: Foster Road. &nbsp;Tour is flexible so RSVP your interests, such as historical information, up-and-comings of the area, any style of ride (live it up like Tonya Harding?), strip clubs, food carts/other grub or any combination. I will guide our itinerary based on group interest.
<br>7pm: Brick plaza, NW corner (2 blks from &nbsp;max/205 bike path).
<br>7ish pm-?: ride up Foster. Ride: flat, &lt;3mi, touring w/ many stops. End point: 52nd Ave (one way ride, will ride/guide back to start if interested). Bring lock, lights, $, ID.</em>
<br>Angela Cortal, a<span>ngelacortal<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2923" title="3 messages, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-3115" style="">DIRTY DIABLO'S WILD RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3115"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3115.gif" height="125" width="138.274336283" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5305+SE+Foster+Rd" target="_BLANK">Devil's Point, 5305 SE Foster Rd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5305+SE+Foster+Rd&by=7:30+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:30pm, Show up early 7PM or before to get the juices flowin'! We'll roll out close to 8 and crash the Bike Prom en route<div style="">
<em>Wild Devilish Delights! 
<br>Come Run with the Devil y'all! 
<br>
<br>FREAK OUT! Rockin' tunes, lights, dancing &amp; adult related stops. 
<br>
<br>Crashing the Bike Prom enroute then peeling off for more debauchery ;)
<br> 
<br>Bring Lights! Wear Protection! Ride at own risk! 
<br>
<br>Not a loop/will go late</em>
<br>Dirty Diablo, d<span>irtydiablorides<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bit.ly/L0eari">Five Conversation Points for Hooking Up With Integrity</a>, T<span>weet <img border="0" src="images/at.gif" alt=" at ">DirtyDiabloRide for live ride details!</span>, 503-847-5564&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3115" title="3 messages, newest 2012-06-16"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3052.png" height="200" width="110.160427807" align="right" alt="">
<a name="15-3052" style="">ONESIES AND TALL T'S</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3052"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=8:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm, Meet@8, Ride@9<div style="">
<em>What apparel is emblematic of childhood sleepwear &amp; general thuggery? Onesies &amp; Tall Ts. Choose what you rock best: footy pajamas, jumpsuits, leotards, or just an XXXL t-shirt, &amp; join a night of biking to bars, parks, &amp; corners. Meet<img src="images/at.gif" alt="[at]">8 &amp; ride<img src="images/at.gif" alt="[at]">9. A leisurely ride around much of the inner city. The possibilities are endless, drinking games, barrel races, house parties, and general big-kid debauchery, (send along your suggestions and help). We will eventually be tracking down the Dropout Prom Ride to join their party. Bring IDs, helmets, lights, cash, &amp; good spirits! Looking for speaker bikes!!</em>
<br>Andy McSquatch, t<span>alltride<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/events/442746602404267/permalink/442842062394721/?notif_t=like">Our Facebook Group, Join &amp; Invite!</a>, f<span>ind us during the ride: #TallT</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3052" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-3182" style="">GET EVEN LOSTER! - THE EPIC GET LOST! RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3182"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3182.png" height="125" width="93.75" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NA" target="_BLANK">No way to tell., NA</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NA&by=8:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Wherever "Get Lost!" ends.)</div>
8:00pm, Until the group decides to stop.<div style="">
<em>Take the Get Lost! ride (above) and multiply that by a factor of 10. Let's see just how lost we can get. Bring overnight gear, lights, and a bold sense of adventure. While the regular Get Lost! ride is suitable for all skill/experience levels, this epic version will depend on a bit of know how, equipment, and hardcorery.
<br>
<br>This ride begins immediately following the end of the Get Lost! ride. You'll need to be on the first ride in order to do the second.
<br>
<br>Ride is contingent on a few people showing up ready and willing.</em>
<br>Amos, h<span>appyamosfun<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3182" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3134.jpg" height="168.613138686" width="300" align="right" alt="">
<a name="15-3134" style="">BIKE-IN MOVIE: AMERICAN FLYERS (1985)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-3134"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd+%28north+of+Sandy%29" target="_BLANK">VELO CULT, 1969 NE 42nd (north of Sandy)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd+%28north+of+Sandy%29&by=8:45+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (VELO CULT BICYCLE SHOP)</div>
8:45pm - 10:45pm<div style="">
<em>AMERICAN FLYERS showing at Velo Cult
<br>Not a ride. A movie.
<br><a href="http://www.youtube.com/watch?v=QxNWzbM7BjA" class="smallhref">http://www.youtube.com/watch?v=QxNWzbM7BjA</a>
<br>Prize for best Kevin Costner mustache while wearing Lycra.</em>
<br>Der Aler&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3134" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="15-2872" style="">DROPOUT BIKE CLUB PROM RIDE W/SHOW ME THE PINK</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#15-2872"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/2872.jpg" height="125" width="186.335403727" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=9:00+p.m.&on=06/15/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (at pavilion)</div>
9:00pm - 3:00am, We ride at 10pm<div style="">
<em>Dropout Bike Club's monthly social ride. &nbsp;All bikes welcome. We have a blast with the Prom theme the past 2 years with 400+ riders and this year is going to be extra special with performance by SHOW ME THE PINK!,DMLH, Super Rocks, and others. Dress up, Theme is Pretty in Pink -vs- Teen Wolf. &nbsp;Will have photo booth again. &nbsp;Over the past 7 years, Dropout BC ride has become the place to show off yer newest bicycle oddities, and ride to outdoor location for outrageous party with Tall Tour crew sound system. Pace is set by the freak bikes and under 4 miles. &nbsp; No beer stop.</em>
<br>Sysfail, s<span>ysfail.dobc<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://dropoutbikeclub.blogspot.com/">dropoutbikeclub.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2872" title="4 messages, newest 2012-06-16"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June16">Saturday June 16</a></h2>
  <div id="div2012-06-16"><dl>

<dt><a name="16-2528" style="">BIKES FOR HUMANITY VOLUNTEER REPAIR CLINICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2528"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4038+SE+Brooklyn+St%2C+Portland" target="_BLANK">Community Exchange Bike School, 4038 SE Brooklyn St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4038+SE+Brooklyn+St&Dcty=PO&by=10:00+a.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 2:00pm, Every Saturday<div style="">
<em>Bikes For Humanity PDX(B4HPDX) is a community service project aimed at providing the public affordable refurbished bikes, repair classes &amp; workshop space. 
<br>We have 100+ donated used bikes &amp; need volunteers to catalog, clean and refurbish the bikes for bike adoption events.
<br>Shop space has been donated for volunteer training and bike repair. Weekly volunteer clinics every Tuesday &amp; Saturday. &nbsp;For full details see <a href="http://www.b4hpdx.org/" class="smallhref">www.b4hpdx.org</a></em>
<br>Susan, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity PDX</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2528" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2960" style="">JEFF AND JODI'S NORTH PORTLAND BIKE MOVE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2960"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N.+Vancouver+and+Killingsworth" target="_BLANK">N. Vancouver and Killingsworth</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N.+Vancouver+and+Killingsworth&by=10:30+a.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (In the alley by the KC Market on Killingsworth. Look for signs.)</div>
10:30am, We will definitely be done with plenty of time to spare before WNBR<div style="">
<em>Come help us move into our new house! We will start with Voodoo donuts, organic fruit and coffee at our apartment on Killingsworth and Vancouver at 10:30am. Gather in the alley next to the KC Market on Killingsworth. There will be signs, our apartment is hard to find.
<br>
<br>The ride is a little over 1 mile on a slightly downhill grade. At the end of the move we'll have vegan, veggie and meat pizza and a keg of good local beer. And we'll be done with plenty of time to spare before WNBR.
<br>
<br>Also, we have some friends who would love to help but don't have trailers so please feel free to bring extras.</em>
<br>Jodi, j<span>odilee1981<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 971-998-4328&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2960" title="2 messages, newest 2012-06-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-3173" style="">MONKEY PUZZLE TREE INFORMATIVE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3173"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Hickory+and+SE+Tamarack+-in+Ladd%27s" target="_BLANK">SE Hickory and SE Tamarack -in Ladd's</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Hickory+and+SE+Tamarack+-in+Ladd%27s&by=11:00+a.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Under the big monkey puzzle tree near the Catholic church)</div>
11:00am - 12:30pm<div style="">
<em>A fun informational ride to visit some of South East Portland's Monkey Puzzle trees and learn about this unique tree. This shouldn't be a very long or difficult ride. Anyone with actual expertise on this subject or a tree they would like to show off is encouraged to contact Steve at stevepappert<img src="images/at.gif" alt="[at]">gmail.com</em>
<br>Steve Pappert, s<span>tevepappert<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3173" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2966.jpg" height="198" width="64" align="right" alt="">
<a name="16-2966" style="">BLOOMSDAY LILY OF THE ALLEYCAT</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2966"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Mt+Tabor+park" target="_BLANK">Mt Tabor park, Mt Tabor park</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Mt+Tabor+park&by=12:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
12:00pm, registration @ 10am<div style="">
<em>$15. Registration <img src="images/at.gif" alt="[at]"> 10am. An Ulysses themed alleycat, but also set up for those who want to ride around leisurely and have a good time. Will be done in time for the 6pm Bloomsday ride. &nbsp;Cash and prizes. Come early for tea, eggs/tofu, toast.</em>
<br>Joyce Jams, l<span>ilyofthealleycat<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2966" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-3055" style="">KINDERGARTEN GAMES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3055"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+44th+and+Powell" target="_BLANK">Creston Park, SE 44th and Powell</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+44th+and+Powell&by=12:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Near the pool)</div>
12:00pm<div style="">
<em>How's that whole "grown up" thing working for you? &nbsp;Miss the days where you'd get a nap in the middle of the day? &nbsp;Return to those heady days with all the games you never get to play any more! &nbsp;We'll tour the parks of the east side, playing freeze tag, steal the bacon, sharks and minnows, and (of course!) duck duck goose. &nbsp;No soccer cleats. &nbsp;Ride will be postponed if it's raining, check online calendar for updates. &nbsp;First game will start promptly at noon.</em>
<br>Karl, k<span>langen<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3055" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2819" style="">KIDICAL MASS PDX: CIRCUS RIDE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2819"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Bryant+St+and+Delaware+Ave" target="_BLANK">Arbor Lodge Park, N Bryant St and Delaware Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Bryant+St+and+Delaware+Ave&by=1:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm - 3:00pm<div style="">
<em>Join Kidical Mass for a fun-filled circus-themed family ride! Put on your bearded lady getup or dust off your bear suit, brush up your juggling or tame a bakfiets of tiny lions. Surprises are in store! Kids must wear helmets. We ride slow enough for little ones; kids must be able to ride in a (reasonably) straight line and start &amp; stop as required. Come ride with us!</em>
<br>Katie Proctor, k<span>atie.proctor<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://kidicalmasspdx.org/">Kidical Mass PDX</a>, 607-262-0439&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2819" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2850" style="">PEDAL BILINQUE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2850"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=307+N.E.+Graham+St." target="_BLANK">307 N.E. Graham St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=307+N.E.+Graham+St.&by=1:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm<div style="">
<em>&iquest;Quieres practicar tu Ingles o Espanol? Ven a participar montando bicicleta,Bar-b-que y conversacion. Trae comida. &nbsp;
<br>&iexcl;Si no tienes bicicleta puedes disfrutar viniendo! Puedes
<br>llamar a Albertina 503-781-2820 or call Pete 503-954-3472</em>
<br>Pete, p<span>etermarfell<img border="0" src="images/at.gif" alt=" at ">comcast<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>, 503-954-3472&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2850" title="2 messages, newest 2012-05-18"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3121.jpg" height="200" width="200" align="right" alt="">
<a name="16-3121" style="">SUNNY NAKED RIDE II</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3121"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3900+NE+Glisan+St" target="_BLANK">Coe Circle, 3900 NE Glisan St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3900+NE+Glisan+St&by=1:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm - 3:30pm<div style="">
<em>Sunny Naked Ride II -- because one daytime naked ride isn't enough! &nbsp;
<br>. 
<br>We'll ride through all 5 quadrants of Portland, wave to trains, cruise the greenways, and have a great time. 
<br>. 
<br>Clothing optional. &nbsp;Bring bodypaint or other ways to express yourself</em>
<br>Past Tire T'd, <a href="http://en.wikipedia.org/wiki/World_Naked_Bike_Ride">en.wikipedia.org/wiki/World_Naked_Bike_Ride</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3121" title="2 messages, newest 2012-06-16"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-3169" style="">TRAM ANNIVERSARY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3169"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3169.jpg" height="125" width="132.978723404" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Moody+Ave+%26+Gibbs+St" target="_BLANK">Go By Bike shop, SW Moody Ave &amp; Gibbs St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Moody+Ave+%26+Gibbs+St&by=1:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (at the base of the Tram)</div>
1:00pm - 3:00pm<div style="">
<em>Celebrating the 5th Anniversary of the Portland Aerial Tram, this ride starts at the base of the Tram and shows off new transportation system improvements that make biking, walking and transit great choices for getting around.
<br>
<br>Tram, streetcar, pedestrian bridge, cycletrack - we'll see them all on this free bike tour led by Portland Bureau of Transportation staff.
<br>
<br>No registration needed but helmets are required.</em>
<br>Timo Forsberg, t<span>imo.forsberg<img border="0" src="images/at.gif" alt=" at ">portlandoregon.gov</span>, <a href="http://www.portlandonline.com/transportation/index.cfm?c=44298">Portland By Cycle rides and classes</a>, 503-823-7699&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3169" title="1 message, newest 2012-06-14"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2777" style="">STAR WARS VS STAR TREK RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2777"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Alder+St+and+14th+Ave" target="_BLANK">Washington High School grounds, SE Alder St and 14th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Alder+St+and+14th+Ave&by=3:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Southeast corner parking lot)</div>
3:00pm<div style="">
<em>Is it the Force? Or is it purely logical? Either way, it's another spacey ride. Crazy, impractical costumes and bike decorations are encouraged. There will be a contest at some point on the ride, so plan accordingly. Kids are welcome early on, but we end at a bar, usually.</em>
<br>Luke Kirk, s<span>tarwarsstartrek<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, t<span>witter <img border="0" src="images/at.gif" alt=" at ">starwarstartrek</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2777" title="3 messages, newest 2012-06-13"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-3172" style="">BIKEBOT YOGA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3172"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4225+SE+Division+St%2C+Portland" target="_BLANK">Stumptown Coffee Roasters on SE Division &amp; SE 45th, 4225 SE Division St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4225+SE+Division+St&Dcty=PO&by=3:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Ends at Yoga Union)</div>
3:00pm, Ride at 3pm, Yoga class at 4:30pm<div style="">
<em>Bicycles, Live Music, Complimentary Yoga Class
<br>Ride leaves Stumptown Coffee 45th &amp; Division <img src="images/at.gif" alt="[at]">3pm
<br>Ends in a complimentary live music yoga class at Yoga Union <img src="images/at.gif" alt="[at]">4:30pm
<br>
<br>Ride begins at 3pm at 4525 SE Division St.
<br>Ride ends at Yoga Union 2043 SE 50th Ave.
<br>Live Music GO W/ THE FLOW yoga class begins at 4:30pm.</em>
<br>BikeBOT &amp; GO W/ THE FLOW, B<span>ikebot1<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/bikebot">www.facebook.com/bikebot</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3172" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2967" style="">MUSIC FOR 111 BICYCLES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2967"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+60th+and+Salmon" target="_BLANK">Mt Tabor Park, SE 60th and Salmon</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+60th+and+Salmon&by=4:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (This will happen at the top of the bike/running path.)</div>
4:00pm<div style="">
<em>Fear No Music and Classical Revolution Pdx want you to join us for a performance of "A Breeze" for 111 Bicycles. &nbsp;This will be held at the top of Mt. Tabor. You can join in the music-making by riding your bike, or you can sit and listen to the music as the bikes go by. &nbsp;Further details are at the Fear No Music website: &nbsp;<a href="http://www.fearnomusic.org/" class="smallhref">www.fearnomusic.org</a>. &nbsp;This is not a race, helmets are required, and it's free for everyone.</em>
<br>Jeff Payne, s<span>endstuffhere<img border="0" src="images/at.gif" alt=" at ">comcast<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>, <a href="http://www.fearnomusic.org/">www.fearnomusic.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2967" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3141.jpg" height="200" width="248.062015504" align="right" alt="">
<a name="16-3141" style="">FREAK BIKE CROSS RACE (2.5)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3141"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+Ave+and+Belmont+St" target="_BLANK">Col. Summers City Park, SE 20th Ave and Belmont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+Ave+and+Belmont+St&by=4:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Near the Baseball Diamond)</div>
4:00pm - 8:00pm, meet at 4pm, ride to track at 5pm<div style="">
<em>Off-road bike race / obstacle course. 
<br>
<br>ALL BICYCLISTS welcome to join the ride &amp; view the event.
<br>hand-built "freak bikes" only for race. 
<br>This includes Tall-bikes, Small-bikes, Choppers, Swings, Side Hacks, Socials, Tandems &amp; Anything else that we think will give you a difficult time maneuvering through the coarse. Fruitboots, I'm talking to you. 
<br>
<br>Group Ride to World Naked Bike Ride later on.</em>
<br>Jakob Grimm , l<span>aneyjacob<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 951-775-9800&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3141" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2894" style="">PRESIDENTIAL FITNESS CHALLENGE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2894"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2894.jpg" height="125" width="167.5" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=6:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>2nd year of the PFC! Are you fit and nimble as a 17-year-old boy/girl? Come prove yourself as we complete the Presidential Fitness Challenge - that thing from high school. All 6 events at different locations. Inspirational music provided. This is the same night as the WNBR, so there will be a post-PFC booze and cruise in that direction. 
<br>Boys: 55 sit-ups in a minute, 6:06 mile, 8.7-sec shuttle run, 13 pull-ups, 53 push-ups, and +7" sit-and-reach
<br>Girls: 44 sit-ups, 8:15 mile, 10.0-sec shuttle run, 1 pull-up, 25 push-ups, and a +8" sit/reach</em>
<br>Alex Bigazzi, a<span>bigazzi<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2894" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2823.jpg" height="200" width="158" align="right" alt="">
<a name="16-2823" style="">BLOOMSDAY!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2823"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2809+NE+Sandy+Blvd%2C+Portland" target="_BLANK">Katie O'Briens, 2809 NE Sandy Blvd, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2809+NE+Sandy+Blvd&Dcty=PO&by=6:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>Bloomsday is a commemoration and celebration of the life of Irish writer James Joyce during which the events of his novel Ulysses (which is set on June 16th, 1904) are relived. It is observed annually on June 16th in Dublin and elsewhere. We will cycle around Portland at a moderate pace, visiting a few pubs, reading and celebrating.</em>
<br>Joey French, j<span>oeyfrench<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 803-467-3477&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2823" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-2773" style="">WORLD NAKED BIKE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-2773"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Salmon+St+and+Water+Ave" target="_BLANK">WNBR HQ, SE Salmon St and Water Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Salmon+St+and+Water+Ave&by=10:00+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Don't stand in the street!)</div>
10:00pm<div style="">
<em>Ride your bike naked with thousands of other people. Naked means "as bare as you dare." It's not illegal. It's fun.
<br>
<br>Meetup point opens at 9pm for disrobing and bodypainting.
<br>Ride departs at 10pm.
<br>
<br>Answers to your questions are probably here: pdxwnbr.org</em>
<br>Freaky Uppity Cycling Kids, <a href="http://pdxwnbr.org/">pdxwnbr.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2773" title="22 messages, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="16-3167" style="">WNBR UNOFFICIAL AFTERPARTY! PANTS OFF DANCE OFF!!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#16-3167"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Eastbank+Esplanade+and+Main+St" target="_BLANK">Vera Katz Statue, SE Eastbank Esplanade and Main St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Eastbank+Esplanade+and+Main+St&by=11:59+p.m.&on=06/16/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:59pm - 4:59am<div style="">
<em>Tall Tour Crew is going to lead the charge with our friend Dutch as MC.
<br>
<br>Meeting at 12:30am at the vera katz statue right next to the WNBR spot, we will go to a secluded location to throw an all night raging pants off dance off!
<br>
<br>there will likely be alot of new faces at this event, so it is up to YOU! to help keep things safe and fun for everyone. Lets show everyone how we do things around here! Don't litter and Don't be a jerk.</em>
<br>Sysfail And Dutch, s<span>ysfail.dobc<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.facebook.com/events/363439433710358/">www.facebook.com/events/363439433710358</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3167" title="5 messages, newest 2012-06-14"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June17">Sunday June 17</a></h2>
  <div id="div2012-06-17"><dl>

<dt><a name="17-3006" style="">TRUST YOUR GUT GLUTEN FREE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-3006"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4943+NE+MLK+Jr.+Blvd.+" target="_BLANK">trust your gut gluten free ride starting at tula., 4943 NE MLK Jr. Blvd. </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4943+NE+MLK+Jr.+Blvd.+&by=8:00+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00am<div style="">
<em>easy to moderate, scenic ride starting at tula gluten free bakery cafe. No fees. Instead, discounts on purchases at tula before and after the ride.</em>
<br>Tula Gluten Free Bakery, m<span>ieke<img border="0" src="images/at.gif" alt=" at ">tulabaking<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3006" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-3095" style="">PORTLAND PERIMETER PERMANENT-POPULAIRE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-3095"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd+%28north+of+Sandy%29" target="_BLANK">Velo Cult bike shop, 1969 NE 42nd (north of Sandy)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd+%28north+of+Sandy%29&by=9:30+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:30am, Ride starts at 10:00am exactly<div style="">
<em>In 1891 Corey Muhammad Audax was the first to cycle 1,200km from Paris to the Normandy coast and back in under 95 hours, creating the exciting and nerdy sport of randonneuring! (*)
<br>
<br>Join Team Slow and the Urban Adventure League on a 100km ride around Portland! 
<br>
<br>Bring a helmet, bike repair kit, pump, bike map, somewhere for a cue sheet, and a pencil to fill out your info card.
<br>
<br>There is no ride leader or SAG support but most of the area is well served by Tri-Met and food is available at mini-marts along the way.
<br>
<br>(*) <a href="http://en.wikipedia.org/wiki/Paris%E2%80%93Brest%E2%80%93Paris" class="smallhref">http://en.wikipedia.org/wiki/Paris%E2%80%93Brest%E2%80%93Paris</a></em>
<br>Audax Ed And Rando Shawn , e<span>dward.groth<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3095" title="4 messages, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-2765" style="">RIDE4CAP </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2765"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2765.jpg" height="125" width="258.164414414" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+11th+and+Multnomah+St.+" target="_BLANK">training rides start at Holladay Park (meet at the fountain in the center), NE 11th and Multnomah St. </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+11th+and+Multnomah+St.+&by=10:00+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am, Every Sunday<div style="">
<em>Interested in challenging yourself to start training for the Seattle to Portland Bicycle Classic while supporting a great cause at the same time? &nbsp;Ride4CAP, a team formed to fight HIV/AIDS in our community through Cascade AIDS Project, is for you! &nbsp;For more information about Ride4CAP, please visit our webpage: <a href="http://www.ride4cap.org/r4c/default.asp" class="smallhref">http://www.ride4cap.org/r4c/default.asp</a>
<br>Registrations for the Ride4CAP team are limited. &nbsp;It is important to register soon online or by calling 503-223-9255.</em>
<br>Benjamin Gerritz (Ride4CAP Training Ride Coordinator), b<span>gerritz<img border="0" src="images/at.gif" alt=" at ">cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"> </span>, <a href="http://www.ride4cap.org/r4c/default.asp">www.ride4cap.org/r4c/default.asp</a>, f<span>or more information about Cascade AIDS Project (a 501.C3 non-profit), please visit http://cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee">/</span>, 503-223-9255&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2765" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2849.png" height="200" width="150.943396226" align="right" alt="">
<a name="17-2849" style="">DISASTER RELIEF TRIALS (CARGO BIKES/100LBS/30MI)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2849"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd+%28north+of+Sandy%29" target="_BLANK">Velo Cult, 1969 NE 42nd (north of Sandy)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd+%28north+of+Sandy%29&by=10:00+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (We'll be overflowing onto the lots to the west and north of Velo Cult)</div>
10:00am - 6:00pm, Race will take 2.5-4 hours, then refreshment and multi-agency teach-in.<div style="">
<em>Cascadia Earthquake - Day 4: &nbsp;Recovery supplies are palleted and are ready for p/u. But....roads are badly broken, fuel is scarce, and some bridges are impassable. &nbsp;Lube that chain, grab those lash straps, and roll out to the supply depots. $25/rider includes/event shirt &amp; pint. Start/Finish fun and spectating is free.
<br>
<br>Cargo/Family Biking &amp; Preparedness demos, all morning at Start/Finish, bring the kids! 
<br>
<br>Real Roads, Real Loads. An alley-cat style cargo bike trial designed to display cargo bike capabilities. Cargo items donated to local non-profits and agencies.</em>
<br>Mike Cobb, a<span>ntload<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 360-823-9253&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2849" title="1 message, newest 2012-03-24"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-2858" style="">ZOOBOMB CENTURY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2858"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2858.png" height="125" width="107.421875" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Fairview+Blvd+%26+SW+Knights+Blvd" target="_BLANK">SW Fairview Blvd &amp; SW Knights Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Fairview+Blvd+%26+SW+Knights+Blvd&by=10:00+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am, Until you finish!<div style="">
<em>100 miles on a mini! Be at the starting line by ten to race. 16" wheels or smaller. See all the rules at zoobomb.net Spectators can BBQ and chill on the hill.</em>
<br>Cupcake, c<span>oreypdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2858" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2856.jpg" height="200" width="201.449275362" align="right" alt="">
<a name="17-2856" style="">ZOMBIE APOCALYPSE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2856"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd" target="_BLANK">VELOCULT, 1969 NE 42nd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd&by=10:30+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:30am - 12:00pm, Will plan to leave after the Disaster trials race begins.<div style="">
<em>The Zombie Apocalypse Ride is combining forces with the Disaster Relief Trials. &nbsp;For those that love zombies and disaster preparedness but aren't planning to race the trials, this ride is for you. &nbsp;This is a fun and social ride. &nbsp; Dress as either a Zombie or a Survivor (self-explanatory). &nbsp;Prizes for best Zombie and Survivor Bike. &nbsp;Easy paced ride with multiple stops where various facets of surviving the post-apocalyptic zombie world will be debated.</em>
<br>Russ Roca, r<span>ussroca<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 562-331-1705&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2856" title="4 messages, newest 2012-06-16"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-2997" style="">FOOD CART TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2997"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2997.jpg" height="125" width="187.5" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+10th+and+Alder+Street+%28downtown%29" target="_BLANK">SW 10th and Alder Street (downtown)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+10th+and+Alder+Street+%28downtown%29&by=10:30+a.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:30am<div style="">
<em>Discover why Portland is the food cart capital of the U.S. with Cartopia: Portland's Food Cart Revolution author, Kelly Rodgers. &nbsp;
<br>
<br>We'll talk about how the food carts established, how and why the pods have grown and evolved, and what the future holds for the carts, based on trends here and across the country.
<br>
<br>We'll start downtown at 10th and Alder, travel north along Vancouver to see some different varieties of carts and pods, and finish with lunch at Mississippi Marketplace. 
<br>
<br>Free ride, but bring money to buy lunch and snacks along the way.</em>
<br>Kelly Rodgers, <a href="http://portlandfoodcartsbook.com/">portlandfoodcartsbook.com</a>, 503-442-7165&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2997" title="1 message, newest 2012-05-24"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2822.jpg" height="200" width="266.666666667" align="right" alt="">
<a name="17-2822" style="">ICE CREAM RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2822"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=RSVP+to+find+out" target="_BLANK">RSVP to find out</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=RSVP+to+find+out&by=1:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm<div style="">
<em>Come join us for the third annual homemade ice creamery tour! This will be a leisurely paced ride with a coneful of stops where we will enjoy some of Portland's best homemade ice creameries. Those opposed to dairy are also welcome since many of our stops offer non-dairy options. The ride is 6-10 miles and is not a loop. Please bring cash for easy transactions and parents- please be sure your child is comfortable riding on city streets.
<br>Space is limited on this ride, so please email to RSVP and receive the meetup location.</em>
<br>Sarah And Brian, s<span>arahmmoody<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2822" title="4 messages, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-229" style="">BIKE POLO</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-229"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/229.jpg" height="125" width="166.666666667" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+19th+Ave+and+Jarrett+St" target="_BLANK">Alberta Park, NE 19th Ave and Jarrett St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+19th+Ave+and+Jarrett+St&by=2:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (polo court)</div>
2:00pm, Every Sunday<div style="">
<em>Bike Polo has been played nearly every Sunday at Alberta Park for more than nine years.
<br>
<br>Great for spectators this bike polo is rated PG-13 for profanity, violence, sexuality and gratuitous fun.
<br>
<br>Mallets and heckling provided. Bring your own beater bike or ride one of ours.</em>
<br>Polo Haus, <a href="http://leagueofbikepolo.com/">Axles of Evil</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=229" title="14 messages, newest 2010-11-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-2994" style="">GRANT PETERSEN STYLE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2994"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Albina+Ave+and+Ainsworth+St" target="_BLANK">Peninsula Park Rose Garden, N Albina Ave and Ainsworth St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Albina+Ave+and+Ainsworth+St&by=2:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm - 4:00pm<div style="">
<em>Equal parts Petersen-style Ride and Petersen Style-ride. Bring your lugged-steel, tweed, leather, and shellac... a rolling bike show with plenty of interesting discussion. Good natured curmudgeons gladly suffered. Grouchy know-it-alls dropped. 5 years running and still no lycra.</em>
<br>A. Homer Hilsen&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2994" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-3051" style="">RIDE &amp; SHOOT: BICYCLE DOCUMENTARY FILMMAKING</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-3051"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=115+SW+Ash+Street%2C+Suite+420" target="_BLANK">NW Documentary, 115 SW Ash Street, Suite 420</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=115+SW+Ash+Street%2C+Suite+420&by=2:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm, PLEASE NOTE THESE TIME DETAILS: 6/5 &amp; 6/12 from 6-8pm. 6/10 &amp; 6/17 from 2-5pm.<div style="">
<em>Camera, bikes, what's not to like? Join local non-profit NW Documentary for 4 classes to learn how to shoot a doc while riding your bike. We'll discuss various mounting techniques and provide tips on getting the smoothest shots possible, while keeping the story you're trying to tell in mind. We'll go for 2 rides during Pedalpalooza. We'll review footage, discuss editing &amp; more. $100 for NW Doc members, $200 for non-members. Meets 6/5 &amp; 6/12 from 6-8pm, 6/10 &amp; 6/17 from 2-5pm. All skill levels welcome!</em>
<br>NW Documentary, l<span>ilah<img border="0" src="images/at.gif" alt=" at ">nwdocumentary<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.nwdocumentary.org/">NW Documentary</a>, 503-227-8688&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3051" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2898.jpg" height="200" width="266.666666667" align="right" alt="">
<a name="17-2898" style="">UNIMPROVED ROAD RIDE NE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2898"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+33rd+Ave+and+Thompson+St" target="_BLANK">Grant Park , NE 33rd Ave and Thompson St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+33rd+Ave+and+Thompson+St&by=4:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet at the park entrance nearest the school on NE US Grant Place between 35th and 36th Avenues.)</div>
4:00pm - 5:30pm, Riding fast it takes 45 minutes; moderately paced about an hour or so; 90 minutes with pit stop.<div style="">
<em>Minimal exhaust fumes, maximum enjoyment! Come celebrate the joys of trail biking in the city as we traverse the unpaved roads, hidden paths and secret gardens of Northeast and North Portland. Meet at Grant Park. Knobby or 'cross tires recommended. Moderate pace with one hill; ride ends in No Po.</em>
<br>Lianagan&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2898" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-2767" style="">WANDERLUST MEN'S CYCLING GROUP </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2767"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2767.jpg" height="96" width="84" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+15th+Ave+and+Fremont+St" target="_BLANK">Meet at Whole Foods on NE 15th and Fremont , NE 15th Ave and Fremont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+15th+Ave+and+Fremont+St&by=4:30+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:30pm, Every Sunday<div style="">
<em>Wanderlust is a program offered by the men's wellness community Manifest. &nbsp;Learn more about Manifest at <a href="http://manifestpdx.org/" class="smallhref">http://manifestpdx.org</a>. &nbsp;
<br>
<br>Suggested donation of $3-15 to support Manifest programs 
<br>Free for Manifest members 
<br>No one excluded for inability to pay
<br>
<br>To RSVP, check us out on Facebook: <a href="http://www.facebook.com/Wanderlust#!/groups/131023506939788/" class="smallhref">http://www.facebook.com/Wanderlust#!/groups/131023506939788/</a>, <a href="http://www.manifestpdx.org/" class="smallhref">www.manifestpdx.org</a>, or call 503-223-8822x1.</em>
<br>Benjamin (Wanderlust Facilitator)&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2767" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3038.jpg" height="200" width="137" align="right" alt="">
<a name="17-3038" style="">DINOSAUR RIDE BY BIKEASAURUS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-3038"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Mount Tabor Park Tennis Courts, SE 60th and Main <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+60th+and+Main&by=5:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Mount Tabor Park Tennis Courts, just east of SE 60th &amp; Main)</div>
5:00pm<div style="">
<em>Put on your most awesome dinosaur costume and meet at the base of Portland's own extinct volcano, Mount Tabor!
<br>We'll ride and rawr together to BIKEASAURUS's new location on SE Hawthorne &amp; 17th. Prize for best dinosaur costume!
<br>At the end, we'll be greeted by a Grand Opening Party featuring: free raffle, buttonmaking, dino photo booth, blender bike, snacks &amp; drinks! Non-dinos welcome too!</em>
<br>Becky, b<span>ikeasauruspdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bikeasauruspdx.com/">bikeasauruspdx.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3038" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-2953" style="">LOUD AND LIT FOR KIDS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-2953"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Knights+Blvd.+at+SW+Zoo+Rd." target="_BLANK">Children's Museum at the Zoo, SW Knights Blvd. at SW Zoo Rd.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Knights+Blvd.+at+SW+Zoo+Rd.&by=6:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>Adults love this ride so much we decided to do a young people's edition. &nbsp;Shirley Temples at the bar, Sesame Street and Raffi on the sound system, bike jousting with training wheels, special appearance by spandex Barney the Dinosaur. &nbsp;It will be off the hook!!!</em>
<br>Dutch, c<span>aullie<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2953" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="17-3023" style="">WHEEL BUILDING CLASS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-3023"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=734+SE+Ankeny+St" target="_BLANK">Citybikes Cooperative, 734 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=734+SE+Ankeny+St&by=6:00+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 8:00pm<div style="">
<em>Wheel Building Series -- Sundays, June 10th, 17th, 24th -- 6:00-8:00pm
<br>
<br>Tuition: $115, 10% off class materials only purchased from Citybikes.
<br>
<br>Registration and Advanced Payment Required: 503-239-6951. Space limited!
<br>
<br>In this class series you will learn how to build a wheel from start to finish. There should be time if your desire is to build a complete wheel set. We'll help you choose the right rim and hub, or you can provide your own. Spokes are calculated and cut on day one. Class covers some theory but is mostly hands on building focused on lacing and all wheel truing functions.</em>
<br>SMASH, a<span>dsoc<img border="0" src="images/at.gif" alt=" at ">citybikes.coop</span>, <a href="http://www.citybikes.coop/">www.citybikes.coop</a>, 503-239-6951&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3023" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3154.jpg" height="200" width="154.909090909" align="right" alt="">
<a name="17-3154" style="">ZOOBOMB</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#17-3154"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=13th+%26+SW+Burnside" target="_BLANK">13th &amp; SW Burnside</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=13th+%26+SW+Burnside&by=8:30+p.m.&on=06/17/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:30pm<div style="">
<em>Zoobomb is long running weekly bike event that meets every Sunday around 8:30PM near (13th &amp; SW Burnside) in Portland OR. Bring a bike, MAX fare, bike lights, and any safety gear you need.
<br>Its a good time and you WILL have fun!
<br>MINI BIKES ENCOURAGED - ALL BIKES WELCOME
<br>HELMETS ARE A GOOD IDEA
<br>* RIDE AT YOUR OWN RISK *
<br>LEAVE NO TRACE</em>
<br>Zoobomb, z<span>oobomb<img border="0" src="images/at.gif" alt=" at ">zoobomb<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>, <a href="http://zoobomb.net/">zoobomb.net</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3154" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June18">Monday June 18</a></h2>
  <div id="div2012-06-18"><dl>

<dt><a name="18-3133" style="">RIDE TO THE GOODWILL "BINS" TO HAUL BACK TREASURE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-3133"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3133.jpg" height="125" width="166.5625" align="left" alt="">
<div style="">meet at the Vera Katz statue, 2 SE Main St <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2+SE+Main+St&by=10:00+a.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (at the end of SE Main St. on the Eastbank Esplanade)</div>
10:00am - 1:00pm<div style="">
<em>Bring some $$$ to buy your "treasure" by the pound! Leisurely ride down the Springwater Corridor along the Willamette River to the Goodwill "bins" in Milwaukie. Never been to the bins? Think of a pinata filled with treasure dumping out on the floor of a warehouse!!! Scoop up what you want, throw it on the scale, and buy it by the pound! Actual ride time should be under 45 minutes one way - about 5 miles. Cargo bikes / trailers welcome! Ride back to NE and hang out at Velo Cult in Hollywood fer sum cold beers and swap treasures after if ya want.</em>
<br>Der Aler&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3133" title="1 message, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3085.jpg" height="200" width="112.8125" align="right" alt="">
<a name="18-3085" style="">GOATLANDIA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-3085"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+19th+and+Skidmore" target="_BLANK">Sabin Community Gardens, NE 19th and Skidmore</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+19th+and+Skidmore&by=11:00+a.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:00am, 2 hours or so<div style="">
<em>Join Arif and Bob for a casual ride around inner-eastside Portland visiting the urban goats that live and work here. We will learn about different breeds, pet and feed them, &nbsp;and see their homes. We will even get to see newborn goats (less than one week old)! So, if you are prone to seizures when faced with overwhelming cuteness, please do not sign up for this ride.</em>
<br>Arif And Bob, g<span>oatlandia<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://goatlandia.com/">goatlandia.com</a>, 503-810-5247&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3085" title="1 message, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="18-2933" style="">MR. MOM RIDE - FULL-TIME DADS UNITE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-2933"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+Prescott+St+and+20th+Ave" target="_BLANK">Hydro Park, NE Prescott St and 20th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+Prescott+St+and+20th+Ave&by=3:30+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (under the giant water tanks)</div>
3:30pm - 6:00pm, You can probably expect to be enjoying a beer/juice/tots at Mash Tun by 6pm.<div style="">
<em>*
<br>Dads and their charges will enjoy a casual but manly tour of manly attractions.
<br>
<br>#1 CHILD-THROWING CONTEST at Hydro Park. The overhead 'catch &amp; release' is a dad's prerogative. Dads with kids still young enough to fly will aim for the heavens.
<br>
<br>#2 Bike trailer SKILLS COURSE. Test your trailer, kid seat or long-bike handling skills on the treacherous Concours de Obstacle (location TBD).
<br>
<br>#3 FIRE ENGINES! Guided tour of firefighting equipment.
<br>
<br>#4 GRILLED CHEESE SANDWICHES at Sassy's Bar and grill...parking lot (ooo, so close!).
<br>
<br>#5 BEER &amp; JUICE BOXES at Mash Tun Brewery. Moms permitted.
<br>*</em>
<br>That's MR. Mom To You!, M<span>rMom<img border="0" src="images/at.gif" alt=" at ">tassociates<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2933" title="1 message, newest 2012-06-11"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3039.jpg" height="199" width="254" align="right" alt="">
<a name="18-3039" style="">CO-OPALOOZA RIDE!!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-3039"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=4:15+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Co-op Fair Stage)</div>
4:15pm - 6:15pm<div style="">
<em>Portland is a veritable wonderland of cooperatives! What's so special about the cooperative business model? Find out as we tour some of Portland's grocery, cafe, coffee roasting, hardware, banking, and bike shop cooperatives on a 6-mile loop.
<br>
<br>This ride will end at an info forum with Co-cycle, a youth-led organization that's touring the country in order to raise awareness of the cooperative movement and its ability to create social change."</em>
<br>Mike Conners, Nathan Frost, C<span>oopalooza2012<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.co-cycle.coop/">www.co-cycle.coop</a>, h<span>ttp://www.2012.coop</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3039" title="1 message, newest 2012-05-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="18-3106" style="">S240 MIDWEEK BIKE CAMPING</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-3106"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3106.jpg" height="125" width="250" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2060+N+Marine+Dr" target="_BLANK">Expo Center MAX Station, 2060 N Marine Dr</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2060+N+Marine+Dr&by=4:30+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:30pm, Return to Portland sometime in AM/early PM Tuesday, depending on group wants/needs<div style="">
<em>Let's do a quick little bike camping overnight! Whether you're "funemployed" or can get off work a little early, a weekday camping excursion is a lot of fun. The destination: Battle Ground Lake State Park in Washington, a 25 mile ride with moderate traffic/terrain. Campsites $12/night, divvied up appropriately. Bring all the things you would need for an overnight camping trip. (Grocery stop in Battle Ground.) You can probably make it to work on time Tuesday! SEE FORUM FOR MORE INFO.</em>
<br>Shawn, u<span>rbanadventureleague<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://urbanadventureleague.blogspot.com/">urbanadventureleague.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3106" title="6 messages, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="18-2864" style="">TIM'S TACO RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-2864"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2137+E+Burnside+St" target="_BLANK">Ole Ole, 2137 E Burnside St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2137+E+Burnside+St&by=6:00+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>Begining at Ole Ole on ne burnside, we will ride throughout the southeast visting taquerias that have a bar close by. People should bring money for tacos, and if they choose to drink, money for beer. This is not a fast ride as many riders may want to drink abeer with their tacos. We will end at Los Gorditos at 12th and division. Please, no more than fifteen riders so we don't overwhelm the taquerias.RSVP Please, limited ride.</em>
<br>Tim, t<span>hkieltyka<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2864" title="4 messages, newest 2012-06-13"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3026.jpg" height="200" width="200" align="right" alt="">
<a name="18-3026" style="">TANDEM RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-3026"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fremont%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fremont, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fremont&Dcty=PO&by=6:45+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:45pm, We ride at 7 pm<div style="">
<em>Nothing beats a leisurely summertime ride on a tandem with your sweetie. Come join us for a mellow ride on tandem bicycles through the neighborhoods of northeast Portland. We'll start at Irving Park (NE Fremont and 7th), and wind our way over about five miles to Peninsula Park on N Ainsworth where we'll have a post-ride picnic. Bring food and drink for the picnic, if you'd like. Doesn't it all just sound so romantic?!? 
<br>
<br>All experience levels welcome, as well as solo (tandem curious) riders. 
<br>
<br>Bring helmets, and lights if you plan on staying out late.</em>
<br>Morgan And Dave, d<span>fmoserpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3026" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="18-2941" style="">MOBILE METAMORPHIC EFFIGY ERADICATION RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-2941"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2941.jpg" height="125" width="167.112299465" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=7:00+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (South side of park, by rose garden fountain)</div>
7:00pm<div style="">
<em>Gather together and gear up for the summer solstice! The solstice is a time for renewal, and we all know Pedalpalooza heralds the arrive of summer and a whole new outlook on life! Make an effigy of the old you, decorate it with those clothes and knick-knacks you usually can't bring yourself to part with, strap it to your bike and join us on a musical ride to beautiful spot where we'll say goodbye to our past and the winter, and hello to Summer 2012! This ride will be a little long, and we'll eradicate our effigies at sunset. Be prepared with extra layers for the nighttime!</em>
<br>Lil' Mama Bone Crusher&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2941" title="1 message, newest 2012-06-18"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="18-3179" style="">TRIKE SYNDICATE RIDE #1</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-3179"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=7:30+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:30pm<div style="">
<em>Trike Syndicate PDX ride #1. A 10-15 mile ride for trikes of all kinds, recumbent trike, cargo trike, granny trike, homebuilt, sound system trike, clunker, or freak. 
<br>
<br>Starts at Col Summers Park finishes at a mystery location for trike races and party.
<br>
<br>Anyone 18-100 years old pace is 9-13mph. We leave at 8:00pm sharp be their at 7:30.</em>
<br>Tryke, d<span>octryke<img border="0" src="images/at.gif" alt=" at ">comcast<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3179" title="5 messages, newest 2012-06-17"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2919.jpg" height="187.826086957" width="300" align="right" alt="">
<a name="18-2919" style="">MANTIONETTE'S POWDER WIG AND LACE RIDE.</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#18-2919"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=8:00+p.m.&on=06/18/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (dog park hill by bathrooms)</div>
8:00pm<div style="">
<em>Free ride, byow, wigs and lace. &nbsp;
<br>We will take a leisurely ride from Ne side, 
<br>Irving Park to be precise, 
<br>to a favorite hot spot where we will Have a pedalling, wine tasting, wig wearing, lace tying extravaganza. 
<br>This is a hate free ride and totes Queer friendly in case you could not tell by the name, cheers.
<br>
<br>Come drown your winter sorrows on a summer evening ride.</em>
<br>Dede Dedesperate, Austin Tatious, M<span>antionetteRide<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2919" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June19">Tuesday June 19</a></h2>
  <div id="div2012-06-19"><dl>

<dt><a name="19-3200" style="">TEA FOR TUESDAY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3200"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3200.jpg" height="125" width="166.666666667" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=510+NW+11th+Ave" target="_BLANK">Tea Zone, 510 NW 11th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=510+NW+11th+Ave&by=10:00+a.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am<div style="">
<em>A leisurely ride to start off your teaful Tuesday. We'll begin at Tea Zone in the NW and visit two more of our favorite teahouses, ending in the SE. Share a pot of tea, make new friends, and try some unfamiliar flavors.
<br>
<br>Meet at Tea Zone for tea. We'll stay for half an hour or so and then move on to the next spot. Spot us by our fancy hats (and feel free to wear your own!).
<br>
<br>Bring cash money for tea drinks.</em>
<br>Nathan And Diana, d<span>holla<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3200" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-3199" style="">TEA FOR TUESDAY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3199"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=510+NW+11th+Ave" target="_BLANK">Tea Zone, 510 NW 11th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=510+NW+11th+Ave&by=10:00+a.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am<div style="">
<em>A leisurely ride to start off your teaful Tuesday. We'll begin at Tea Zone in the NW and visit two more of our favorite teahouses, ending in the SE. Share a pot of tea, make new friends, and try some unfamiliar flavors.
<br>
<br>Meet at Tea Zone for tea. We'll stay for half an hour or so and then move on to the next spot. Spot us by our fancy hats (and feel free to wear your own!).
<br>
<br>Bring cash money for tea drinks.</em>
<br>Nathan And Diana, d<span>holla<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3199" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-3127" style="">COOL CHICKS ON CYCLES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3127"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1015+NW+17th+Ave" target="_BLANK">Western Bikeworks, 1015 NW 17th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1015+NW+17th+Ave&by=2:00+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (near Lovejoy)</div>
2:00pm - 4:00pm<div style="">
<em>Come join the ladies of Western Bikeworks for a two-hour fun-filled urban ride! &nbsp;All girls. &nbsp;All skill / experience levels welcome. &nbsp;Please wear a helmet. &nbsp;Chicks rule!</em>
<br>Linda Watts, l<span>inda<img border="0" src="images/at.gif" alt=" at ">velotech<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.westernbikeworks.com/">Western Bikeworks</a>, 5<span>03-342-9985</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3127" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-3016" style="">MOCKTAILS OFF OF THE I-5 BRIDGE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3016"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/washington.gif" alt="WA" title="Meet in/around Vancouver">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Columbia+Way+and+Columbia+Street" target="_BLANK">Vancouver side I-5 bridge west side path, SE Columbia Way and Columbia Street</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Columbia+Way+and+Columbia+Street&by=3:00+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:00pm - 6:00pm<div style="">
<em>Come enjoy food and drinks on your way home off of the west side I-5 bridge path in Vancouver. &nbsp;We will have tire patch kits, tire levers, and reflective items along with prize drawsings for Fun in the 'Couv packages.</em>
<br>Jennifer Campos, j<span>ennifer.campos<img border="0" src="images/at.gif" alt=" at ">cityofvancouver<img border="0" src="images/dotus.gif" alt=" daht you ess"></span>, <a href="http://mydestinationdowntown.com/">Destination Downtown</a>, 360-487-7728&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3016" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3201.jpg" height="200" width="190.476190476" align="right" alt="">
<a name="19-3201" style="">RIDE GREGG TO WORK RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3201"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NW+Quimby+%26+NW+13th+" target="_BLANK">NW Quimby &amp; NW 13th </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+Quimby+%26+NW+13th+&by=3:00+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:00pm - 5:00pm<div style="">
<em>A scenic ride through Washington Park, past the Rose Garden, up past Hoyt Arb. and up to Skyline Blvd, through the beautiful smooth streets of Beaverton and back into town on the MAX (without Gregg, unless you wait for his 3-hour shift to end). Total length: 18 miles, gentle climb over the west hills with a nice downhill.</em>
<br>Ian&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3201" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-2914" style="">BIKE CAMPING 101</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-2914"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=6:30+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Near the brick shelter)</div>
6:30pm - 9:00pm<div style="">
<em>Do you love camping? &nbsp;Do you love bicycles? &nbsp;Ever thought about camping by bike? &nbsp;YOU CAN! Come to this free workshop and learn the basics about camping without a car. &nbsp;Gear needed, where you can camp, how to find people to camp with - totally FREE! &nbsp;Join us at Colonel Summers park to learn how!</em>
<br>Matt Picio, m<span>att.picio<img border="0" src="images/at.gif" alt=" at ">cyclewild<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.cyclewild.org/">Cycle Wild</a>, 503-781-5095&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2914" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2939.gif" height="161" width="160" align="right" alt="">
<a name="19-2939" style="">CULLY BAR CRAWL</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-2939"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5015+N.E.+Fremont" target="_BLANK">Bottles, 5015 N.E. Fremont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5015+N.E.+Fremont&by=6:30+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm<div style="">
<em>Hitting up some of the awesome bars in the Cully neighborhood for the 3rd year!</em>
<br>Sara Sparkle, a<span>llsparklemail<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2939" title="2 messages, newest 2012-06-19"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-3054" style="">THE WILD WHISKEY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3054"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3054.jpg" height="125" width="99.609375" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=6635+N.+Baltimore" target="_BLANK">Cathedral Park, 6635 N. Baltimore</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=6635+N.+Baltimore&by=6:30+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet somewhere under the bridge. Bring picnic blankets!)</div>
6:30pm, Meet @ 6:30, leave at 7!<div style="">
<em>Have a passion for whiskey? We will ride from park to park to park, 'covertly' sharing different whiskeys with each other at each stop.
<br>
<br>Rules:
<br>- Bring a flask or similar device filled with whiskey.
<br>- Bring a shot glass.
<br>- Share with others.
<br>- Drink other people's whiskey.
<br>- Be happy, smile, and retain the ability to ride your bike to the next park.
<br>
<br>Ride will focus on N PDX, taking advantage of the tranquility. Pace will be casual, approximately 16 miles. Ride will END near a MAX station in N PDX. Not a loop!
<br>
<br>21+ ONLY and PLEASE be responsible. We want EVERYONE to finish the ride!</em>
<br>Kirk, k<span>irk.paulsen<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="https://www.facebook.com/events/316099218465567/">Facebook Event Page</a>, 503-858-2042&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3054" title="2 messages, newest 2012-06-20"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2971.jpg" height="200" width="133.333333333" align="right" alt="">
<a name="19-2971" style="">HEAL HURT BABY ANIMALS WITH BUBBLES RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-2971"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+28th+between+SE+Division+%26+Clinton" target="_BLANK">Piccolo Park, SE 28th between SE Division &amp; Clinton</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+28th+between+SE+Division+%26+Clinton&by=6:30+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm, We will be leaving at 7.  This ride is not a loop, it is a bubble.  It will end mysteriously.  Adult beverages may be involved.<div style="">
<em>Come out and support baby animals of every species with healing bubbles. &nbsp;Blow healing bubbles at parks. &nbsp;Do you like bubbles? &nbsp;Or hurt baby animals? &nbsp;Blow bubbles or don't but the bubbles will be blown anyway, so just blow them and help the babies. &nbsp;Only you can do it. &nbsp;Babies can't blow the bubbles. &nbsp;You have to. &nbsp;Come to parks and be a part of something about bubbles and baby earth creatures. &nbsp;Bring bubble stuff and hydrating liquids so you are not hurt like the hurt babies. &nbsp;You may be interviewed by our team. &nbsp;Bubble solution provided. &nbsp;Bring interesting wands and happy faces.</em>
<br>Wayne Schmidt, t<span>hisisalp<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 623-628-2841&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2971" title="2 messages, newest 2012-06-19"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-3062" style="">HAUNTED RIDE II - NOPO</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-3062"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3062.jpg" height="125" width="116.525423729" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=836+N.+Russell+St" target="_BLANK">White Eagle, 836 N. Russell St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=836+N.+Russell+St&by=6:30+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm<div style="">
<em>North Portland hosts an inordinate number of haunted locales. &nbsp;Come check them out! &nbsp;From haunted pubs to park spectres to a library ghost, NoPo has it all.</em>
<br>Karl, k<span>langen<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3062" title="5 messages, newest 2012-06-19"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="19-2229" style="">BIKES FOR HUMANITY VOLUNTEER REPAIR CLINICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#19-2229"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4038+SE+Brooklyn+St%2C+Portland" target="_BLANK">Community Exchange Bike School, 4038 SE Brooklyn St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4038+SE+Brooklyn+St&Dcty=PO&by=7:00+p.m.&on=06/19/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 10:00pm, Every Tuesday and Wednesday<div style="">
<em>Bikes For Humanity (B4H) is a community service project aimed at providing the public affordable refurbished bikes, repair classes &amp; workshop space.
<br>We have 100+ donated used bikes &amp; need volunteers to catalog, clean and refurbish the bikes for bike adoption events.
<br>Shop space has been donated for volunteer training and bike repair. For full details see <a href="http://www.b4hpdx.org/" class="smallhref">www.b4hpdx.org</a></em>
<br>Steven, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2229" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June20">Wednesday June 20</a></h2>
  <div id="div2012-06-20"><dl>

<dt><a name="20-3017" style="">VANCOUVER BIKE TO WORK DAY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3017"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/washington.gif" alt="WA" title="Meet in/around Vancouver">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=600+SW+Columbia+St" target="_BLANK">Ester Short Park, 600 SW Columbia St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=600+SW+Columbia+St&by=6:00+a.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (near the clock tower)</div>
6:00am - 8:00am<div style="">
<em>Stop by Esther Short Park near the clock tower on your way to work to enjoy breakfast and drinks. &nbsp;We will have tire patch kits, tire levers, and reflective items along with prize drawings for Fun in the 'Couv packages.</em>
<br>Jennifer Campos, j<span>ennifer.campos<img border="0" src="images/at.gif" alt=" at ">cityofvancouver<img border="0" src="images/dotus.gif" alt=" daht you ess"></span>, <a href="http://www.clarkcommute.org/">Clark County CTR program</a>, 360-487-7728&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3017" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-2906" style="">WEDNESDAY MORNING BREAKFAST RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-2906"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1412+SE+12th+Ave%2C+Portland%2C+OR" target="_BLANK">Tiny's Coffee, 1412 SE 12th Ave, Portland, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1412+SE+12th+Ave%2C+OR&Dcty=PO&by=6:30+a.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30am - 8:30am, Wednesday September 5th<div style="">
<em>Ride for an hour or so Wednesday morning. &nbsp;Moderate paced no drop. &nbsp;We usually but not always find ourselves riding up hills in which case regroup at the top.
<br>
<br>Meet at Tiny's coffee around 6:30, ride leaves at 7:03 &nbsp;
<br>
<br>We try to get you to work on time if you work at 9am or so. &nbsp;If you're downtown 8am is do-able.
<br>
<br>Bring a bike map of portland. &nbsp;No cue sheets or maps provided.</em>
<br>Ed&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2906" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-3190" style="">SOLSTICE FLASH MOB RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3190"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+20th+and+Belmont" target="_BLANK">Col. Summers Park, SE 20th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+20th+and+Belmont&by=11:00+a.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:00am, We'll leave at exactly 11:15am. Meet us at Pioneer Sq. if you miss us!<div style="">
<em>Join us as we ride from Colonel Summers to take part in the Solstice Flashmob and Decentralized Dance Party happening in Pioneer Courthouse Square at 12:30. Bring Boomboxes, friends, and desire to get to know your community!</em>
<br>Sam, s<span>am<img border="0" src="images/at.gif" alt=" at ">thesymbiosisproject<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.thesymbiosisproject.org/">www.TheSymbiosisProject.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3190" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3188.jpeg" height="183" width="276" align="right" alt="">
<a name="20-3188" style="">PEDAL-BALLOONZA</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3188"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=50+SE+Yamhill+St.+%40+Water+Ave." target="_BLANK">Lippman CO., 50 SE Yamhill St. @ Water Ave.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=50+SE+Yamhill+St.+%40+Water+Ave.&by=3:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:00pm - 4:30pm, Decoating begins at 3...ride will take off as soon as everyone's ready<div style="">
<em>Lippman CO. presents...Pedal-Balloonza &nbsp;IV ! 
<br>
<br>What&#65533;s a Pedal-Balloonza? &nbsp;As part of Portland&#65533;s Pedalpalooza, come decorate and celebrate your bike with twisty balloons. Our in-house twisters will show you how. Decorating starts at 3 PM and the all-ages family ride begins at about 3:30. We will ride up the Esplanade and back, from about the Hawthorne to the Steel Bridge. We will be finished by 4:30 PM. 
<br>
<br>Some balloons will be provided and we will also be selling pumps and balloons if you want to bring your new skills home with you. &nbsp;Parents please accompany children under 12.</em>
<br>Matt Deegan, m<span>att<img border="0" src="images/at.gif" alt=" at ">lippmancompany<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.lippmancompany.com/">www.lippmancompany.com</a>, h<span>ttp://www.lippmancompany<img border="0" src="images/dotcom.gif" alt=" daht comm">/pedalballoonza.html</span>, 503-239-7007&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3188" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-2998" style="">CALORIE-NEUTRAL BREWERY TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-2998"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/2998.jpg" height="125" width="125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=4:15+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (@ the Gazebo)</div>
4:15pm - 8:15pm<div style="">
<em>Love biking? Love beer? Trying to lose some pounds? Yup, this is a great ~15 mile ride to 5 breweries all over the city, so when you wash down that 5th and final pint, you'll feel none of the guilt. 
<br>
<br>Notes: 
<br>1. Bring cash so the bartender isn't bogged down running your card. &nbsp;
<br>2. This is not a loop ride. It ends in SE. You're welcome to ride back up north with me, though. &nbsp;
<br>3. Pace is average 12-14mph.
<br>
<br>FUN!</em>
<br>Nicholas, t<span>henicholasj<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2998" title="8 messages, newest 2012-06-19"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2886.png" height="120" width="120" align="right" alt="">
<a name="20-2886" style="">THE LUDDITE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-2886"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Stark+St+and+14th+Ave" target="_BLANK">Washington High School (west side in the field), SE Stark St and 14th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Stark+St+and+14th+Ave&by=5:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm<div style="">
<em>no use of cellphones, computers, gps, lights, social media promotion, ipods or stereos allowed! &nbsp;
<br>journals, maps, candles, word of mouth and music instruments strongly encouraged... 
<br>connect by disconnecting! &nbsp;Members of this ride will eventually meet up with the Solstice Ride.</em>
<br>Oryan And Chris&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2886" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-3138" style="">AWESOME COMIC BOOK RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3138"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3138.jpeg" height="125" width="160" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=921+SW+Oak" target="_BLANK">Reading Frenzy, 921 SW Oak</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=921+SW+Oak&by=5:45+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:45pm - 9:45pm, Ride is two hours + 2 hours of secret lair cartoon viewing<div style="">
<em>Whattup nerds. We'll make jam comics together while we drop in on four comics shops for antics and prizes, then publish our comic and retire to a bike-in screening of early '90s animated TV shows at an inner southeast secret lair. So great! Bring a pen, beer, and positive attitude.</em>
<br>S.mirk, m<span>irk.sarah<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.mirkwork.com/">www.mirkwork.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3138" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-3091" style="">BTA LEGAL CLINIC</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3091"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=618+NW+Glisan%2C+Suite+401%2C+Portland.++" target="_BLANK">BTA World Headquarters, 618 NW Glisan, Suite 401, Portland.  </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=618+NW+Glisan%2C+Suite+401.++&Dcty=PO&by=6:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 7:00pm<div style="">
<em>The free clinic with attorney, Ray Thomas, covers Oregon bicycle and pedestrian laws, insurance information, and what to do if you&#65533;re in a crash. Includes a lively question and answer session, and a free copy of &#65533;Pedal Power, a Legal Guide for Oregon Cyclists.&#65533;</em>
<br>BTA, s<span>tephanie<img border="0" src="images/at.gif" alt=" at ">btaoregon<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://btaoregon.org/">btaoregon.org</a>, 503-226-0676 x23&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3091" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3070.jpg" height="184.615384615" width="300" align="right" alt="">
<a name="20-3070" style="">PORTLANDIA RIDE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3070"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1221+SW+4th+Ave" target="_BLANK">City Hall, 1221 SW 4th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1221+SW+4th+Ave&by=6:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (by the vegetable garden)</div>
6:00pm<div style="">
<em>Join us on a tour of some of the locations from your favorite Portlandia scenes. We will shout, "Whole Foods is corporate!", assert our bicycle rights, play hide and go seek tag, and more. You never know which special guests might show up.
<br>
<br>Here is a tentative map of the places I want to hit up. 
<br><a href="http://goo.gl/maps/eOfV" class="smallhref">http://goo.gl/maps/eOfV</a></em>
<br>Fred And Carrie, k<span>ielij<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://goo.gl/maps/eOfV">map of route</a>, 206-850-8084&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3070" title="7 messages, newest 2012-06-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-3117" style="">BIKE TOURING FOR WOMEN WORKSHOP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3117"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3031+SE+Hawthorne+Blvd" target="_BLANK">Hawthorne Hostel, 3031 SE Hawthorne Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3031+SE+Hawthorne+Blvd&by=6:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>Esther Harlow and Erinne Goodell from Cycle Wild will host this informal workshop about the ins and outs of bike touring. They will hold a discussion focusing on what people are interested in learning about, as well as chatting about previous bike touring experiences. They will go over the basics of gear, planning, preparedness, and they will have their bikes with gear usually used for camping/touring for further illustration. The upcoming Cycle Wild camping calendar will also be presented.</em>
<br>Erinne, e<span>rinne.goodell<img border="0" src="images/at.gif" alt=" at ">cyclewild<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.cyclewild.org/">Cycle Wild</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3117" title="1 message, newest 2012-06-20"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-3150" style="">DEAD POETS SOCIETY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3150"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Harvey+Scott+Cir.+" target="_BLANK">Mount Tabor Park, SE Harvey Scott Cir. </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Harvey+Scott+Cir.+&by=6:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Grass area in the middle of the circle.)</div>
6:00pm - 8:30pm, The ride will end at People's Food Coop for the start of the Solstice Ride.<div style="">
<em>Let's pay homage to our favorite Poets and kick-off the Solstice Ride with some poetry reading and music to stir up our hearts and souls to live deeply and suck the marrow out of life during the Summer months.
<br>
<br>We'll meet in the grass area at the center of SE Harvey Scott Circle. Read some poetry of your choosing then go find some poetry boxes in SE. <a href="http://poetrybox.info/" class="smallhref">http://poetrybox.info/</a>. I'd like it if the route was dynamic as folks took the group to a poetry box they know about to read from. :-)
<br>
<br>The ride will end at People's Food Coop for the start of the Solstice Ride.</em>
<br>O Captain! My Captain!&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3150" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-3165" style="">SLOUGH TOUR: CSO BIKE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-3165"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5001+N+Columbia+Blvd%2C+Portland+OR+97203" target="_BLANK">Columbia Blvd Wastewater Treatment Plant, 5001 N Columbia Blvd, Portland OR 97203</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5001+N+Columbia+Blvd+OR+97203&Dcty=PO&by=7:00+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 8:30pm<div style="">
<em>Bring your bike and join the Columbia Slough Watershed Council and experts from the City of Portland to learn about water flow, water treatment, and the 99% elimination of Combined Sewer Overflows in the Lower Slough. Discuss the history of the Big Pipe Project and Portland's water treatment facilities as you bike along the scenic Columbia Slough Trail and Smith &amp; Bybee Wetlands. Bring your bike, helmet (required), and a camera! Suitable for adults and kids 10+; pre-registration requested at <a href="http://www.columbiaslough.org/" class="smallhref">www.columbiaslough.org</a></em>
<br>Melissa Sandoz, m<span>elissa.sandoz<img border="0" src="images/at.gif" alt=" at ">columbiaslough<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.columbiaslough.org/calendar_detail.aspx?calendar_id=214">www.columbiaslough.org/</a>, 503-281-1132&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3165" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="20-2794" style="">SOLSTICE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#20-2794"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3029+SE+21st+Ave" target="_BLANK">People's Food Co-op, 3029 SE 21st Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3029+SE+21st+Ave&by=8:30+p.m.&on=06/20/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:30pm, Ride leaves at 9:03pm<div style="">
<em>After the longest day of the year, comes the shortest night of the year. Let's spend it on our bikes!
<br>We leave when the sun sets at 9:03pm, and arrive at a mystery location by 5:22am to see the sunrise.
<br>There will be rest stops, and there will be hills, so bring a comfortable bike that you can climb with. This is not a fast-paced ride. We will stay within city limits (no, we won't abandon you in Troutdale :) )
<br>Come early at 8:30pm to gather snacks and drinks at People's Food Co-op, and please don't litter.</em>
<br>Nate, y<span>ourheartmaystop<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://twitter.com/#!/imcoma/">twitter.com/#!/imcoma</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2794" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June21">Thursday June 21</a></h2>
  <div id="div2012-06-21"><dl>

<dt><a name="21-3152" style="">BIKE BROWN BAG - PBOT'S ACTIVE TRANSPORTATION GRP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3152"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3152.jpg" height="125" width="130" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1221+SW+4th+Ave" target="_BLANK">City Hall, 1221 SW 4th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1221+SW+4th+Ave&by=12:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Lovejoy Room, 2d floor)</div>
12:00pm - 1:00pm, Bring your lunch!<div style="">
<em>Introducing the Active Transportation Group:
<br>Goodbye Transportation Options, hello Active Transportation.
<br>
<br>Internal reorganization within the City's Bureau of Transportation will bring together staff from several divisions with expertise in planning, designing, promoting and managing systems for human-powered travel. Come hear about how these changes will affect Portland's progress toward being the nation's most livable city.
<br>Sponsored by Portland Pedal Power.</em>
<br>Timo Forsberg, t<span>imo.forsberg<img border="0" src="images/at.gif" alt=" at ">portlandoregon.gov</span>, <a href="http://www.portlandonline.com/transportation/index.cfm?c=34816&a=144945">PBOT Bicycle Brown Bag series</a>, 503-823-7699&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3152" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-3018" style="">BICYCLE ALLIANCE OF WA HUB AND SPOKE EVENT</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3018"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/washington.gif" alt="WA" title="Meet in/around Vancouver">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1300+Franklin+St.%2C+Ste+600" target="_BLANK">Clark County Public Service Center, 1300 Franklin St., Ste 600</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1300+Franklin+St.%2C+Ste+600&by=12:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (6th Floor Hearing Room)</div>
12:00pm - 5:00pm<div style="">
<em>Join practitioners, business people, advocates, and interested individuals together to discuss techniques and opportunities to grow bicycling in Vancouver and Clark County. Participants will learn from examples around the state and nationally, discuss opportunities to promote safety and economic development locally, and develop tools for engaging with local and state governments to make riding a bike easier in their community.</em>
<br>Jennifer Campos, j<span>ennifer.campos<img border="0" src="images/at.gif" alt=" at ">cityofvancouver<img border="0" src="images/dotus.gif" alt=" daht you ess"></span>, <a href="http://www.bicyclealliance.org/">Bicycle Alliance of Washington</a>, 360-487-7728&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3018" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-2836" style="">3RD FOLDING BIKE TEA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-2836"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=908+SE+Hawthorne+Blvd" target="_BLANK">Clever Cycles, 908 SE Hawthorne Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=908+SE+Hawthorne+Blvd&by=5:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 7:00pm, Tea at 5:00, Ride at 6:00<div style="">
<em>Join us for our 3rd annual Folding Bike Tea Ride. &nbsp;Sip a cup of tea and gaze upon the 2-wheeled origami before you. We'll take a leisurely ride through Portland streets, riding through a few city parks and then end up at the Rose and Thistle for a pint... We'll provide Tea and finger sandwiches at 5:00, upon which a folding competition will take place with the ride departing at 6:00pm. Appropriate Tea attire is requested!</em>
<br>Martina Fahrner, i<span>nfo<img border="0" src="images/at.gif" alt=" at ">clevercycles<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://clevercycles.com/">clevercycles.com</a>, 503-334-1560&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2836" title="1 message, newest 2012-06-15"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-3019" style="">BICYCLE OF WA HUB AND SPOKE HAPPY HOUR SOCIAL</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3019"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beerwa.gif" alt="21+,WA" title="Adult Only (21+), Meet in/around Vancouver">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1013+Main+Street%2C+Vancouver%2C+WA+98660" target="_BLANK">Niche Wine Bar, 1013 Main Street, Vancouver, WA 98660</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1013+Main+Street%2C+Vancouver%2C+WA+98660&by=5:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm<div style="">
<em>Join us at Niche Wine Bar to talk about what work is being done in Vancouver and Clark County to improve bicycling conditions.</em>
<br>Jennifer Campos, j<span>ennifer.campos<img border="0" src="images/at.gif" alt=" at ">cityofvancouver<img border="0" src="images/dotus.gif" alt=" daht you ess"></span>, <a href="http://www.bicyclealliance.org/">Bicycle Alliance of Washington</a>, 360-487-7728&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3019" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-3140" style="">ZINE BIKE TOUR!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3140"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1332+N+Killingsworth" target="_BLANK">PDX Button Works, 1332 N Killingsworth</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1332+N+Killingsworth&by=5:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 9:00pm<div style="">
<em>The Portland Zine Symposium and the Independent Publishing Resource Center present a Zine Bike Ride stopping at Zine-ish places! Starting at the brand new PDX Button Works, 1332 N Killingsworth! Arrive at 5:00pm ride at 5:15pm, catch the ride at Reading Frenzy at 6:30pm if you want to meet us later!
<br>
<br>We will be heading to In Other Words, traveling downtown to Reading Frenzy and the old IPRC buliding, visiting PSU (host of many Portland Zine Symposiums), and ending at the brand new IPRC! 
<br>
<br>This will be a relaxed ride and we will be doing zine readings at some of the stops, zine readers TBA!</em>
<br>Blue, <a href="http://pdxzines.com/">pdxzines.com</a>, p<span>dxzines<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3140" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2892.jpg" height="120" width="120" align="right" alt="">
<a name="21-2892" style="">SKIRTS AND MERKINS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-2892"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3700+SE+Ankeny+St" target="_BLANK">Laurelhurst Park, 3700 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3700+SE+Ankeny+St&by=5:30+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (West of pond at picnic tables)</div>
5:30pm - 7:00pm<div style="">
<em>Merkins are a vivacious way to celebrate period undergarments! 
<br>Join us for a ride in the sun, celebrating the wind in our skirts. We will stop for tea and crumpets at several parks on this afternoon ride.
<br>
<br>What is a Merkin? A Merkin is a pubic wig. Merkins were frequently worn in the 1700's by prostitutes after shaving their genitalia due to lice or Mercury treatments, and are now used as decorative items by both men and women.
<br>
<br>There will be 25 locally made, thong style merkins provided as gifts at the ride start. They can be worn a la carte or over your current undergarments.</em>
<br>Skye Blue, s<span>kyeblue669<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.skyebluecansew.com/">Skye Blue Can Sew</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2892" title="8 messages, newest 2012-06-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2901.jpg" height="200" width="266.478873239" align="right" alt="">
<a name="21-2901" style="">HERITAGE TREE BIKE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-2901"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ffwa.gif" alt="FF,WA" title="Family Friendly, Meet in/around Vancouver">
</dt><dd><div style="">Esther Short Park, 600 SW Columbia St <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=600+SW+Columbia+St&by=6:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (under the clock tower)</div>
6:00pm - 8:00pm<div style="">
<em>Visit some of Vancouver's most celebrated Heritage Trees on an enjoyable 4-mile guided bicycle ride. This flat, easy bicycle route begins and ends at Esther Short Park in downtown Vancouver. Admire trees whose legacies connect us to the proud past of our region. Participants on the ride must respect private property, wear helmets, and obey all traffic laws. This event is FREE and FUN.</em>
<br>Tree Folks, j<span>essica.antoine<img border="0" src="images/at.gif" alt=" at ">cityofvancouver<img border="0" src="images/dotus.gif" alt=" daht you ess"></span>, <a href="http://www.cityofvancouver.us/urbanforestry/">www.cityofvancouver.us/urbanforestry</a>, 360-487-8308&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2901" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-3057" style="">BIKEY TRIVIA BY BIKE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3057"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3947+N.+Williams" target="_BLANK">Hopworks Bikebar, 3947 N. Williams</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3947+N.+Williams&by=6:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (best bike parking is in the back)</div>
6:00pm<div style="">
<em>If you like trivia, and you like bikes (and you KNOW you do!), then this ride is for you! 
<br>We'll meet at Bikebar at 6 (come early for happy hour if you like), then at 6:30, we'll go for a short, easy ride to an awesome surprise location where we'll have a bike-themed trivia night, which will be run by the Quizzical Empire Empress herself! <a href="http://quizzicalempire.com/" class="smallhref">http://quizzicalempire.com/</a></em>
<br>Ryan Good, g<span>oodsterman<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3057" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-3147" style="">PORTLAND SOCIETY HAPPY HOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3147"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2105+N+Killingsworth" target="_BLANK">Old Gold, 2105 N Killingsworth</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2105+N+Killingsworth&by=6:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 8:00pm<div style="">
<em>Are you a professional woman who is passionate about bicycling? Come network, have fun, and learn about the Portland Society. We're a nonprofit business alliance with monthly events focused on encouragement, networking, mentoring, and professional development. This informal event is a great chance to meet rad women who are involved on many different kinds of career path and involved in all kinds of bicycling.</em>
<br>Portland Society, i<span>nfo<img border="0" src="images/at.gif" alt=" at ">portlandsociety<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://portlandsociety.org/">portlandsociety.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3147" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-2902" style="">POLKADOTS AND PINWHEELS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-2902"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+28th+between+SE+Division+%26+Clinton" target="_BLANK">Piccolo Park, SE 28th between SE Division &amp; Clinton</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+28th+between+SE+Division+%26+Clinton&by=6:30+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm<div style="">
<em>P is for Pedalpalooza! A Participant Pedal -- come with P-themed ideas and wear your polka-dots! First up, a Potluck Picnic in Piccolo Park followed by making pinwheels to pretty our favorite pedal-machine then on to other P adventures! Plan is to pedal off after 7. In bad weather, we'll go to plan-P, check calendar.</em>
<br>Carye Bye, b<span>ikebat<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2902" title="1 message, newest 2012-06-19"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-2778" style="">HOGWARTS EXPRESS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-2778"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Platform 9 and 3/4, NW 10th and Irving <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+10th+and+Irving&by=8:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Ecotrust Building Parking Lot)</div>
8:00pm<div style="">
<em>Gather your broomsticks and iron your best robes for this magical journey through Portland. &nbsp;All houses are welcome.</em>
<br>Professor R.J. Lupin, H<span>ogwartsExpressRide<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2778" title="6 messages, newest 2012-06-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="21-3142" style="">PZS BIKE-IN MOVIE - THE GOONIES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#21-3142"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1001+SE+Division+St." target="_BLANK">IPRC, 1001 SE Division St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1001+SE+Division+St.&by=9:00+p.m.&on=06/21/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Independent Publishing Resource Center's new home!)</div>
9:00pm - 11:00pm<div style="">
<em>Zines are awesome and July is International Zine Month! Help us celebrate and support the 12th Annual Portland Zine Symposium while enjoying a nice movie in the new IPRC space, 1001 SE Division St.
<br>
<br>We will be showing The Goonies! June 21st, arrive at 9pm, movie starts at 9:15... Bring chairs, pillows, and blankets to get cozy!
<br>
<br>To help support PZS, we'll be asking a $1-5 donation, but no one will be turned away due to lack of funds. There will also be beverages and popcorn for purchase and a PZS raffle, so bringing cash if ya got it is definitely a good idea!</em>
<br>Blue, <a href="http://pdxzines.com/">pdxzines.com</a>, p<span>dxzines<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-453-5839&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3142" title="2 messages, newest 2012-06-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June22">Friday June 22</a></h2>
  <div id="div2012-06-22"><dl>

<dt><a name="22-3029" style="">CHILLIN'N'SWILLIN: CAFFEINE MARATHON EDITION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3029"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2031+NE+M+L+King+Blvd" target="_BLANK">Tiny's Coffee, 2031 NE M L King Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2031+NE+M+L+King+Blvd&by=7:00+a.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00am, June 1 - 30<div style="">
<em>A ride where the focus is on chillin' with your friends and swillin' good coffee!
<br>This time around, rather than biking from Tiny's to another coffee joint and ending from there, we'll keep chillin' as long as you keep swillin'. &nbsp;The last person still seeking coffee will win a pound of the stuff courtesy of the ride leader.</em>
<br>Lapis Pezuli, a<span>gent.lapis<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3029" title="1 message, newest 2012-06-13"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-2789" style="">BREAKFAST ON THE BRIDGES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-2789"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=steel+bridge%2C+hawthorne+bridge" target="_BLANK">Steel &amp; Hawthorne bridges, steel bridge, hawthorne bridge</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=steel+bridge%2C+hawthorne+bridge&by=7:15+a.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (east end of the steel, west end of the eastbound Hawthorne)</div>
7:15am - 9:15am<div style="">
<em>free coffee and pastries for your commute!</em>
<br>Cap'n Pastry&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2789" title="1 message, newest 2012-06-13"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3007.jpg" height="182.926829268" width="300" align="right" alt="">
<a name="22-3007" style="">ROOSTER ROCK LOOP RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3007"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Springwater where it crosses under I-205, Springwater Corridor Trail &amp; I-205 Multi Use Path <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Springwater+Corridor+Trail+%26+I-205+Multi+Use+Path&by=11:30+a.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Half mile South of MAX Green Line Lents Station - Stop 13128)</div>
11:30am<div style="">
<em>Ride to the country's first officially-recognized nude beach! The last 7 miles are along I-84, but it's legal and safe on the wide shoulder.
<br>
<br>Over half of the 45 mile ride is a loop using the nicely-paved Springwater Corridor, Gresham-Fairview, I-84, and I-205 Multi Use Paths. Can be shortened to 35 miles by catching the MAX Line from Gresham. About an hour spent at Rooster Rock.
<br>
<br>Bike admission is free!
<br>.</em>
<br>Madison, m<span>adison7719<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3007" title="2 messages, newest 2012-06-10"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-3069" style="">FOOD CART LOVERS RIDE! - QUICKIE PSU POD!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3069"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3069.jpg" height="125" width="218.58974359" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+4th+and+Hall" target="_BLANK">PSU FOOD CART POD, SW 4th and Hall</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+4th+and+Hall&by=12:00+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
12:00pm - 1:30pm, Ride our bikes, Eat Delicious Food, back in 90 minutes or less!<div style="">
<em>Hey all you workers and people with only a little time for riding! 
<br>
<br>PDX Food Cart Lovers presents the QUICKIE PSU POD Ride. 
<br>
<br>The trick with this ride is we meet at a Food Cart Pod in this rides case we will be meeting at the SW 4th and Mill Pod by PSU, grabbing our eats then taking a short ride to a park nearby to sample our bounty and returning within 90 minutes 
<br>
<br>Bring $ for your eats! 
<br>
<br>Make sure to check our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for more info</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">www.pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3069" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-3078" style="">HIDDEN PORTLAND: WEIRD ART TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3078"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Floyds+Coffee+" target="_BLANK">Floyds Coffee </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Floyds+Coffee+&by=12:45+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (118 Northwest Couch)</div>
12:45pm - 4:45pm<div style="">
<em>Take a tour with the Museum Lady of Portland's Weird Art spots in downtown and NW Portland. This includes the much anticipated and newly reopened Faux Museum plus other visual weird meccas. This bike tour is brought to you by Hidden Portland.
<br>
<br>Bring $5-10, and of course quarters.</em>
<br>Museum Lady, Carye Bye, b<span>ikebat<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.hiddenportland.com/">www.hiddenportland.com</a>, 503-248-4454&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3078" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3101.jpg" height="171.554252199" width="300" align="right" alt="">
<a name="22-3101" style="">FOOD CART LOVERS RIDE! - ST JOHNS &amp; THE BLUFFS!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3101"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Charleston+and+Ivanhoe" target="_BLANK">Baowry St Johns, N Charleston and Ivanhoe</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Charleston+and+Ivanhoe&by=4:00+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:00pm - 8:00pm<div style="">
<em>Join PDX Food Cart Lovers on a Ride through the Food Carts of St Johns and North Portland.
<br>
<br>Bring $ for your eats!
<br>
<br>We will meet at the Baowry of St Johns - formerly a Food Cart and now a Full Restaurant!
<br>
<br>We will also visit Captured by Porches and Velas, ride along the Willamette Bluffs and end up over at the North Station Food Cart Pod.
<br>
<br>Make sure to check out our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for more info</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">www.pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3101" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-2920" style="">CENTRAL EASTSIDE INDUSTRIAL DISTRICT TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-2920"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2920.png" height="125" width="125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1127+SE+10th+Avenue" target="_BLANK">1127 SE 10th Avenue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1127+SE+10th+Avenue&by=5:30+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Recess Gallery)</div>
5:30pm - 6:30pm<div style="">
<em>Members of Research Club lead a tour of their favorite neighborhood, the bustling and fascinating Central Eastside Industrial District. This neighborhood's got it all: art galleries and studios, fabricators, hidden museums, OMSI, abandoned bridges, award-winning restaurants, and so much more! Stay after for a special Research Club event TBA.</em>
<br>Research Club, i<span>nfo<img border="0" src="images/at.gif" alt=" at ">research-club<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://research-club.org/">research-club.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2920" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3073.png" height="200" width="200" align="right" alt="">
<a name="22-3073" style="">CYCLING,CERVEZA,CORNHOLE,CATAPULT,CROQUET,CAKEWALK</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3073"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+19th+and+Belmont" target="_BLANK">Col. Summers Park, SE 19th and Belmont</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+19th+and+Belmont&by=5:30+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (near tennis courts)</div>
5:30pm - 8:30pm<div style="">
<em>The sequel to last year's widely not-hated BBBBBB ride! An epic roving 2-person team tourney of C-ness, with prizes of unimaginable (sentimental) value. &nbsp;Spots may be limited - please RSVP as a team or individual.</em>
<br>Ulrich Von Lichtenstein, c<span>ccccc_ride<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3073" title="1 message, newest 2012-05-29"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-3111" style="">STUMPTOWN KILTS 1ST ANNUAL BAR CRAWL BY BIKE	</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3111"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3111.jpg" height="125" width="167.5" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=930+SE+Taylor+St.+Portland%2C+OR+97214" target="_BLANK">STK HeadQuarters, 930 SE Taylor St. Portland, OR 97214</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=930+SE+Taylor+St.+Portland%2C+OR+97214&by=5:30+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm<div style="">
<em>StumpTown Kilts 1ST Annual Bar Crawl by Bike. &nbsp;Wear your kilt and join us at STK headquarters for a PBR on us! &nbsp;We will also have kilts available for purchase at a special discounted rate for participants. &nbsp;
<br>
<br>At 6 PM we will mount up and head to several bars in the SE, eventually ending back at STK headquarters for more beer, music, and camaraderie. &nbsp;
<br>
<br>Ride at your own pace, we will spend some quality time at each bar- do not worry. &nbsp;
<br>
<br>Do not forget your ID and bike lights!</em>
<br>Todd Michael Altstadt, t<span>odd.michael.altstadt<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.stumptownkilts.com/">www.stumptownkilts.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3111" title="6 messages, newest 2012-06-22"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2954.jpg" height="200" width="266.838046272" align="right" alt="">
<a name="22-2954" style="">M.I.L.F. RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-2954"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1937+SE+11th+Ave" target="_BLANK">The Firkin Tavern, 1937 SE 11th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1937+SE+11th+Ave&by=6:00+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>...maybe your mother is a MILF and she loves to ride a bicycle?
<br>
<br>Hot mamas and their supporters should put on whatever brings out their inner beauty and outer sparkle and come for a drink, an eat and a bike ride to the sunset across town.
<br>
<br>This will be fun and relaxing and we will respect each others bodies and minds. Talking about your children and families or just talk about the weather and how nice it is to feel the wind in your hair. Compliments encouraged!
<br>
<br>Please bring your ID and a little money or BYOB for the sunset after the ride.
<br>Lights and helmets please.</em>
<br>Ocia, O<span>ciaHart<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2954" title="3 messages, newest 2012-06-28"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-3031" style="">TOUR DE FRANZIA</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3031"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3031.jpg" height="125" width="187.5" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2950+NE+Oregon+St%2C+Portland" target="_BLANK">Oregon Park, 2950 NE Oregon St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2950+NE+Oregon+St&Dcty=PO&by=6:00+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 7:30pm<div style="">
<em>Box wine happens. We're here to help you build the safe and effective riding skills you need to bring your box win with you wherever you go, whether that be an external or an internal load.
<br>
<br>Please do bring your favorite color of grape in a box to enjoy and share. Picnic snacks welcome, too.
<br>
<br>Our first two TdF stages will both be at Oregon Park, so no worries if you're running a little leisurely.</em>
<br>Ernest &amp; Julio Gallo&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3031" title="3 messages, newest 2012-06-22"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2903.jpg" height="200" width="265" align="right" alt="">
<a name="22-2903" style="">ROBOT STORYTIME</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-2903"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=13th+%26+Sandy+%26+Burnside" target="_BLANK">13th &amp; Sandy &amp; Burnside</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=13th+%26+Sandy+%26+Burnside&by=7:00+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 9:00pm<div style="">
<em>Robots rise up! &nbsp;Come with us to explore the ruins of pre-robotic Portland. &nbsp;Help us install new robot overlords in key positions of the city! Explore the post-futuristic architecture in which the last humans lived, and listen to robot love stories.
<br>NOTE: This ride is a robot-safe environment. &nbsp;Please, no can openers or electromagnets.</em>
<br>Crushatron 6000&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2903" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-3002" style="">BREAKING AWAY SCREENING AT MAGNETIC NORTH</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-3002"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3002.jpg" height="125" width="215" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=8:00+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm, We Ride at 8:30!<div style="">
<em>Follow us and our sound system from Peninsula Park to Portlands freshest new gallery/ art making space, <strong>Magnetic North</strong>, where we will have free beer, original art, a camp fire and a screening of the 1979 bikey film "Breaking Away" on our outdoor screen. Please bring a <strong>tee</strong>-<strong>shirt</strong>, bandana or hoodie, because we will be printing them during the event!
<br>
<br>If you miss the ride, please feel free to come watch the movie with us!</em>
<br>Magnetic North, <a href="http://magneticnorthpdx.tumblr.com/">Magnetic North</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3002" title="4 messages, newest 2012-06-22"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="22-2917" style="">LOUD AND LIT</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#22-2917"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Irving+Park" target="_BLANK">Irving Park</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Irving+Park&by=10:30+p.m.&on=06/22/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:30pm<div style="">
<em>North Freak's 3rd annual loud and lit ride! Closing out Pedalpalooza with a bang fo sho. Last year had 1000+ people, flaming tall bike jousting tourney, fire performances, DJ's till the sun came up, and just in general more fun the anyone could shake a stick at. Get up in your loudest craziest costumes, bikes, bring your noise makers, get ready to raise some hell!</em>
<br>Dutch, c<span>aullie<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2917" title="8 messages, newest 2012-06-28"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3193" style="">BIKE PORTRAITS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3193"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N.e.+16th+and+killingsworth+" target="_BLANK">pourpour coffee , N.e. 16th and killingsworth </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N.e.+16th+and+killingsworth+&by=9:15+a.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Across from podnah's)</div>
9:15am - 2:15pm<div style="">
<em>Come by the bike cart (pourpour coffee) and have your pic taken with your bike. &nbsp;Your pic will be posted on &nbsp;pourpourcoffee.com and &nbsp;if it gets the most "likes" you win coffee from pourpour coffee. N.e. 16th and killingsworth. &nbsp;In beautiful n.e. Portland! &nbsp;Saturday the 23rd</em>
<br>Jake, p<span>ourpourcoffee<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.pourpourcoffee.com/">www.pourpourcoffee.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3193" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-2959" style="">BIKE FOR MT. HOOD RIVERS </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-2959"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Gateway+Transit+Center" target="_BLANK">Gateway Transit Center</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Gateway+Transit+Center&by=10:00+a.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 3:00pm<div style="">
<em>Bike along Marine Drive, from the 205 bike path to the Sandy River. Wear an optional bike sign to protest the Nestle corporation's attempt to build a bottling plant in the gorge and basically steal our Mt. Hood water. Find out more about this proposed project and Bark's work to stop it. It'll be a beautiful and fun ride.. almost 25 miles in total.. with optional swimming at Lewis and Clark State Park. Wear helmets.</em>
<br>Lola, e<span>arth.strive<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bark-out.org/">Bark</a>, 971-212-6791&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2959" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3010.jpg" height="200" width="280.936454849" align="right" alt="">
<a name="23-3010" style="">WEST HILLS ARCHITECTURE TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3010"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1200+SW+Park+Avenue" target="_BLANK">Oregon Historical Society, 1200 SW Park Avenue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1200+SW+Park+Avenue&by=10:00+a.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 2:00pm, Visit museum at 10 (optional). Ride at 11.<div style="">
<em>Architect Rick Potestio leads those not afraid of hills on a tour of great modern homes by Yeon, Zaik, and Belluschi.</em>
<br>Carl Larson&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3010" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3076" style="">BIKE DONATION &amp; ADOPTION DRIVE - B4HPDX</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3076"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><img src="pp12img/3076.jpg" height="125" width="151.25" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2800+SE+Harrison+St%2C+Portland" target="_BLANK">St. David of Wales Episcopal Church, 2800 SE Harrison St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2800+SE+Harrison+St&Dcty=PO&by=10:00+a.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Parish Hall)</div>
10:00am, 10AM - 5PM<div style="">
<em>Volunteers will be on hand to receive bike donations, refurbish bikes, and help people find a bike that meets their economic and transportation needs. &nbsp; &nbsp; 
<br>
<br>Bicycles available for adoption include road, mountain, commuter, cruisers, kid's and BMX bikes. Donated bicycles (tax receipts given) are also being accepted, many of which will be refurbished during the event. &nbsp;Financial assistance is available to meet a wide range of bicycle adopter needs.</em>
<br>Susan, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity PDX</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3076" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2992.jpg" height="200" width="156.875" align="right" alt="">
<a name="23-2992" style="">BINGO/SCAVENGER HUNT</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-2992"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3700+SE+Ankeny+St" target="_BLANK">Laurelhurst Park, 3700 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3700+SE+Ankeny+St&by=10:45+a.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Flag Pole by restrooms)</div>
10:45am - 1:15pm<div style="">
<em>So this is the second year for Portland Bingo/Scavenger hunt because it was so much fun last year!
<br>The ride meets at 10:45 a.m. at the Flag Pole at Laurelhurst Park just off Ankeny. &nbsp;The ride starts at 11.
<br>Teams of 2 or 3 will be finding the Portland Bingo items to make as many bingos as possible to win. &nbsp;Yes, there are prizes provided by Free Box the Magazine. Each team member will win a bingo stamper and Free Box the Magazine issues 1-10. &nbsp;You will have 2 hours. &nbsp;
<br>If you don't have a team, come along anyway. &nbsp;I'm sure you can join one.</em>
<br>Bece Kidder Aka Pink Princess, f<span>reeboxthezine<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://freeboxthezine.blogspot.com/2012/05/pedalpalooza-bingo-scavenger-hunt-2012.html">freeboxthezine.blogspot.com/2012/05/pedalpalooza-bingo-scavenger-hunt-2012.html</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2992" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3056" style="">TAI CHI: TUNING UP YOUR BIKE'S ENGINE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3056"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=11:45+a.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Circle of oaks plus a douglas fir next to the octagonal picnic shelter)</div>
11:45am, 11:45 gather 12:15 ride. <div style="">
<em>Tai Chi is a powerful daily practice to keep your bike's engine running smooth. Muscle powered transportation is great, but it takes a bit of complimentary exercise to keep your body tuned to ride. Tai chi also cultivates better presence and mindfulness making crashes less likely to occur. This ride will have multiple stops where I'll talk about and lead exercises that introduce the basic foundations of Tai Chi and how it applies to cycling. At the last stop I'll demonstrate a version of Sun Tai Chi form. Feel free to follow along.</em>
<br>Kung Fu Jazz Cat, s<span>ingedelart<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-893-5602&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3056" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3197.jpg" height="200" width="134.105960265" align="right" alt="">
<a name="23-3197" style="">SUNNY DAY NAKED RIDE III</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3197"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3900+NE+Glisan+St" target="_BLANK">coe circle, 3900 NE Glisan St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3900+NE+Glisan+St&by=1:00+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (The Golden Loan of Arc statue.)</div>
1:00pm<div style="">
<em>Sunny Naked Ride III -- because just two daytime naked rides aren't enough! &nbsp;For fun lovers, sun lovers and newly inspired WNBRers! A unique, exhilarating, and brazen stroll through our beautiful city. Celebrate body freedom, legal precedent, our amazing culture, and each other's full beauty. 
<br>Ride buck around all 5 quadrants of Portland: the city of the Free, home of the Brave. 
<br>. 
<br>Clothing optional. Bring bodypaint or other ways to express yourself A non-erotic/all safe ride. (Harassment culture unwelcome.) 
<br>. 
<br>Practice Freedom!
<br>.</em>
<br>Past Tire T'd &amp; The Kernel, 3<span>speedsR4lovers<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://en.wikipedia.org/wiki/World_Naked_Bike_Ride%EF%BF%BD%EF%BF%BD/">en.wikipedia.org/wiki/World_Naked_Bike_Ride&#65533;&#65533;</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3197" title="2 messages, newest 2012-06-23"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2956.jpg" height="197.292069632" width="300" align="right" alt="">
<a name="23-2956" style="">THE DREAM OF THE 1890S IS ALIVE IN NW PORTLAND</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-2956"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1819+NW+Everett+Street%2C+Portland+OR" target="_BLANK">NW Cultural Center, 1819 NW Everett Street, Portland OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1819+NW+Everett+Street+OR&Dcty=PO&by=3:15+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Bike racks outside, tour starts inside main lobby)</div>
3:15pm - 5:15pm<div style="">
<em>Explore the historical sites of NW Portland and Old Town on a bike tour designed by the <strong>Historical Preservation League of Oregon</strong>. &nbsp;Local historians will guide us to remnants of the Lewis &amp; Clark Exposition, weird public works projects, Croatian-Irish churches, and architectural quirks of the NW. &nbsp;We'll even stop in to a few buildings to check out their awesome from the inside out. &nbsp;Ride will be a mostly-flat 6 miles at a cruising pace. &nbsp;
<br>
<br>Period costumes <strong>strongly</strong> encouraged - get yer bloomers on!
<br>
<br>BONUS! &nbsp;Ride-goers will be given a souvenir bound tour booklet featuring historical photos a</em>
<br>Rebecca, k<span>iwimunki<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="https://www.facebook.com/events/187609124701410/">Facebook Page</a>, 503-970-6283&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2956" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3042" style="">VINTAGE MTB RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3042"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1969+NE+42nd" target="_BLANK">Velocult, 1969 NE 42nd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1969+NE+42nd&by=3:30+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:30pm, Mill around for a bit, head out around 4:00 or so.<div style="">
<em>Whether you've got a sweet fillet-brazed Ritchey, an old Ross, or a 3D-violet-bedecked 90's Xizang, drag that thing out, pump up those tires, and come out for an on-and-off road ride starting and ending at Velocult in Hollywood. The ride will head over to Forest Park, out Leif Ericson, and back through North Portland -- around 25-30 miles.
<br>
<br>We'll meet around 3:30, mill about for a bit, and ride out around 4:00, getting back to Velocult about 7:00. &nbsp;We'll have beers, check out Sky's unrivaled collection of handbuilt old mountain bikes, watch a screening of Klunkers, and geek out.</em>
<br>Jeff Ong, b<span>ike<img border="0" src="images/at.gif" alt=" at ">chowswap<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3042" title="2 messages, newest 2012-06-24"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3208" style="">PEDALPOCALYPSE 2012: THE SKY IS FALLING!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3208"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=928+SE+9th+Ave" target="_BLANK">Green Dragon, 928 SE 9th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=928+SE+9th+Ave&by=3:30+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:30pm<div style="">
<em>If some of the predictions are correct, Quetzalcoatl is coming back later this year to jazz up reality. Just in case they&#65533;re right, we should get in another bike ride and a couple pints before it all ends.
<br>
<br>Come out on June 23rd for a ride from the Green Dragon up to Bridgetown Beerhouse for the Falling Sky Brewing tasting and Meet-the-Brewer event.
<br>
<br>Gather at Green Dragon starting at 3:30pm, roll to Bridgetown Beerhouse at 5:00pm. Falling Sky&#65533;s event at Bridgetown runs from 6:00pm &#65533; 8:00pm. We're trusting you can get home, safely, on your own from there.</em>
<br>Will, v<span>anlue<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3208" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3032" style="">BEST SUMMER EVER RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3032"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1216+SE+Division" target="_BLANK">Apex, 1216 SE Division</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1216+SE+Division&by=5:00+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (it's a bar, we'll be outside, wearing denim vests)</div>
5:00pm, til we're done killing it!... or around sundown.<div style="">
<em>Back by popular demand, it's the Best Summer Ever Ride!!! &nbsp;There will be beers, there will be music, there will be water gun fights, there will be as many offerings as we can make to the Gods of Summer to ensure that this summer is like none other that has come before! &nbsp;
<br>We'll start at Apex in SE, make our way at a pleasant clip to various locations for funtime stops and end at the end sight of so many warm weather bike rides, the Skidmore Bluffs. &nbsp;We're gonna mount up as close to 5 as possible, so show up early and have a beer!</em>
<br>Amelia Pillow, a<span>mpillow<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3032" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3004.jpg" height="200" width="246.6367713" align="right" alt="">
<a name="23-3004" style="">THE PET-L PALOOZA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3004"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3700+SE+Ankeny+St" target="_BLANK">Laurelhurst Park, 3700 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3700+SE+Ankeny+St&by=6:00+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Dog Park Area)</div>
6:00pm, Our route is flexible, we'll go to as many parks as the group wants.<div style="">
<em>Who doesn't LOVE to see a little dog in a &nbsp;bike basket? Or an old dog in a bike trailer? Or a cat, chameleon, chicken, goat and really ANY other animal that can ride on a bike?
<br>
<br>Calling all well behaved pets to join us for a casual tour around Portland.
<br>
<br>Humans (with or without pets) are encouraged to dress as animals!!!
<br>
<br>We will visit (depending on how the group feels) 3-5 dog parks (10-20 minutes at each), where the energetic dogs can play with each other, and the remaining pets will hang out with the humans off to the side.
<br>
<br>Don't forget the poop bags!</em>
<br>Pam Johnson, p<span>cj<img border="0" src="images/at.gif" alt=" at ">pdx<img border="0" src="images/dotedu.gif" alt=" daht eedee you"></span>, <a href="https://www.facebook.com/events/215926515193715/">Facebook Event Page</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3004" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="23-3061" style="">BIOMIMICRY ON BIKES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-3061"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3061.jpg" height="125" width="124.495967742" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=721+NW+Ninth+Ave" target="_BLANK">Starts at Ecotrust, ends in South Waterfront Neighborhood, 721 NW Ninth Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=721+NW+Ninth+Ave&by=6:00+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (between Hot Lips and Laughing Planet)</div>
6:00pm - 8:00pm, optional 7-mile continuation until dusk along waterfront to a mystery location<div style="">
<em>A guided, 3-mile tour of building designs inspired by nature with participants of the national Biomimicry Education Summit (<a href="http://edsummit.biomimicry.net/" class="smallhref">http://edsummit.biomimicry.net/</a>) &nbsp;led by Biomimicry Oregon, the City of Portland and Portland Bike Tours.</em>
<br>Vinh Mason, v<span>inh.mason<img border="0" src="images/at.gif" alt=" at ">portlandoregon.gov</span>, <a href="http://www.portlandoregon.gov/bps/">Portland Bureau of Planning and Sustainability</a>, 503-442-4520&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3061" title="2 messages, newest 2012-06-21"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2927.jpg" height="200" width="141.025641026" align="right" alt="">
<a name="23-2927" style="">WILD ZERO!!!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-2927"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1216+SE+Division" target="_BLANK">Apex, 1216 SE Division</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1216+SE+Division&by=8:00+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm, 8 we meet, 9 we ride (on time!)<div style="">
<em>Dust off your leather, pull out your jett shades and get ready to ride with Guitar Wolf (the music) to our end location where we will enjoy the madness and mayhem of Wild Zero, Guitar Wolf's infamous movie.
<br>Costumes encouraged: &nbsp;leather, shades, flames on bicycles, short shorts, wolf costume, pompadours, zombie, etc.
<br>The movie does come with an optional drinking game that has 3 easy rules that we'll share.
<br>Bring dollars for a beer at Apex and end location where we will watch the movie.
<br>Ride leaves promptly at 9.</em>
<br>Bicycle Wolves:  Bece, Jacobo, Cory, d<span>ropout74<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2927" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2797.jpeg" height="178" width="181" align="right" alt="">
<a name="23-2797" style="">LOS ANGELOPES RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#23-2797"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=To+Be+Announced" target="_BLANK">To Be Announced</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=To+Be+Announced&by=9:00+p.m.&on=06/23/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00pm, Til the sun comes up. Breakfast at the Hotcake House<div style="">
<em>Los Angelopes Fire Bus is coming back to town. &nbsp;Hold on to your butts and get on your bikes. &nbsp;Be prepared to get freaky, get dirty, get hurt, and dance your brains out.</em>
<br>Angie Lopez, d<span>onate<img border="0" src="images/at.gif" alt=" at ">angelopes<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.angelopes.com/">www.angelopes.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2797" title="4 messages, newest 2012-06-23"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June24">Sunday June 24</a></h2>
  <div id="div2012-06-24"><dl>

<dt><a name="24-3149" style="">MT. TABOR DOWNHILL CHALLENGE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3149"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Mount+Tabor+Park" target="_BLANK">Mount Tabor Park</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Mount+Tabor+Park&by=9:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00am - 7:00pm, Afterparty at Mt. Tabor Theater<div style="">
<em>Beginning in 2011, the Mount Tabor Downhill Challenge is Portland's only sanctioned skateboard race. After a successful first year we've decided to step it up and try and make the event bigger and better. The first year had two events consisting of a downhill and slalom skateboard race. This year we are adding a Mini-bike, Buttboard and Junior's class to the race. After a full day of racing we will celebrate with an awards ceremony and after party at the Mt. Tabor Theater where there will be a screening of early 80's downhill skateboard racing.</em>
<br>Pavement Princess, <a href="http://tabordh.com/">tabordh.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3149" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2765.jpg" height="145.256270447" width="300" align="right" alt="">
<a name="24-2765" style="">RIDE4CAP </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2765"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+11th+and+Multnomah+St.+" target="_BLANK">training rides start at Holladay Park (meet at the fountain in the center), NE 11th and Multnomah St. </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+11th+and+Multnomah+St.+&by=10:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am, Every Sunday<div style="">
<em>Interested in challenging yourself to start training for the Seattle to Portland Bicycle Classic while supporting a great cause at the same time? &nbsp;Ride4CAP, a team formed to fight HIV/AIDS in our community through Cascade AIDS Project, is for you! &nbsp;For more information about Ride4CAP, please visit our webpage: <a href="http://www.ride4cap.org/r4c/default.asp" class="smallhref">http://www.ride4cap.org/r4c/default.asp</a>
<br>Registrations for the Ride4CAP team are limited. &nbsp;It is important to register soon online or by calling 503-223-9255.</em>
<br>Benjamin Gerritz (Ride4CAP Training Ride Coordinator), b<span>gerritz<img border="0" src="images/at.gif" alt=" at ">cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"> </span>, <a href="http://www.ride4cap.org/r4c/default.asp">www.ride4cap.org/r4c/default.asp</a>, f<span>or more information about Cascade AIDS Project (a 501.C3 non-profit), please visit http://cascadeaids<img border="0" src="images/dotorg.gif" alt=" daht oh are gee">/</span>, 503-223-9255&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2765" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-2771" style="">TINY HOME TOUR (N/NE)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2771"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5401+NE+Prescott+St" target="_BLANK">Rigler School, 5401 NE Prescott St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5401+NE+Prescott+St&by=10:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 2:00pm<div style="">
<em>Bike tour of cute, innovative, tiny homes in N/NE Portland, all under 400sf. &nbsp;Have fun. &nbsp;Live small. Get inspired!!</em>
<br>Lina Menard, m<span>enardla<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://thisisthelittlelife.com/">Little Life</a>, 206-859-1770&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2771" title="11 messages, newest 2012-06-24"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3195.jpg" height="200" width="150" align="right" alt="">
<a name="24-3195" style="">GOING GREEN</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3195"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/washington.gif" alt="WA" title="Meet in/around Vancouver">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=602+N+Devine" target="_BLANK">River Maiden Coffee, 602 N Devine</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=602+N+Devine&by=10:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Park in the school parking lot across the street if driving to the ride.)</div>
10:00am<div style="">
<em>2 options (17mi/24mi) visiting gardens around town. &nbsp;We won't linger long in each garden, just enough. &nbsp;Each is different: funkyfunctional, historic, old walnut tree, foliagefocusfengshuiorwhateveritis, exotic hideaway, city-hip, xeriscape-y, master gardener, &amp; then...off the main drag to the secret spot where the WEIRD PLANT grows! &nbsp;If you choose the shorter route, you'll visit all the gardens and the secret plant except the master gardener one.
<br>This is a Vancouver Bicycle Club ride, HELMETS REQUIRED. &nbsp;Our pace will be be 12-14mph. Bring snack &amp; water.</em>
<br>Jan Verrinder, j<span>anowa85<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://vbc-usa.com/site/cal-rides.php?id=2209">Vancouver Bicycle Club</a>, M<span>ore info and approx. cue sheet available on the VBC calendar link.</span>, 360-607-3271&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3195" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3210" style="">ST. JOHNS RIDES TO SUNDAY PARKWAYS NORTH</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3210"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=8539+N.+Lombard" target="_BLANK">St.Johns Square. (Plaza), 8539 N. Lombard</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=8539+N.+Lombard&by=10:30+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:30am<div style="">
<em>The slowest free ride ever. Helmets are a good thing. Our end point is McCoy Park. You are free to go or ride with me when we git there. I will bring my Sound System. We will not return to the Plaza. Riding to N. Central, to Lombard, L at Westanna, Hudson L at Hodge R to park. Depart at 10:45am.</em>
<br>Paul, c<span>lownwestman<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3210" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-2776" style="">SUNDAY PARKWAYS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2776"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2776.jpg" height="98" width="208" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=North+Portland" target="_BLANK">Peninsula/Arbor Lodge/Kenton/McCoy Parks, plus the Willamette Bluff, North Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=North+Portland&by=11:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (See webpage for route map)</div>
11:00am - 4:00pm<div style="">
<em>Get out and be active right in your neighborhood. Walk, bike, run, roll, meet your neighbors and enjoy entertainment in parks and along the route.</em>
<br>PortlandSundayParkways.org, <a href="http://www.portlandonline.com/transportation/index.cfm?c=51515&a=385331">PortlandSundayParkways.org</a>, 503-823-7699&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2776" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-2796" style="">FANNO CREEK SUNDAY TRAILWAYS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2796"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=11000+SW+Denney+Rd%2C+Beaverton%2C+OR+97008" target="_BLANK">Fanno Creek Park, 11000 SW Denney Rd, Beaverton, OR 97008</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=11000+SW+Denney+Rd%2C+OR+97008&Dcty=BE&by=11:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (This is the start of the trail)</div>
11:00am - 3:00pm<div style="">
<em>This event will showcase the Fanno Creek Regional Trail to neighbors and outdoor enthusiasts of all ages and activity levels. Participants will be able to walk, run or bike and enjoy more than four miles of fun, activities, environmental education and recreation. This first-year event will celebrate a popular urban trail that connects neighbors, promotes healthy living and provides a safe, natural roadway for non-motorized travelers.</em>
<br>A Beaverton Citizen&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2796" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3105.jpg" height="171.554252199" width="300" align="right" alt="">
<a name="24-3105" style="">FOOD CART LOVERS RIDE! - SUNDAY PARKWAYS CARTS!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3105"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=700+N+Rosa+Parks+Way" target="_BLANK">Peninsula Park, 700 N Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=700+N+Rosa+Parks+Way&by=11:00+a.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet by the Peninsula Park Fountain)</div>
11:00am<div style="">
<em>Join PDX Food Cart Lovers as we ride and visit the many Food Carts at the North Portland Sunday Parkways.
<br>
<br>This is a big, fun, family friendly ride to the Food Carts that are at the North Portland Sunday Parkways, bring a fun and frolicsome attitude, $ for any eats you want to purchase and above all a spirit of adventure!
<br>
<br>Make sure to check out our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for more info!</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">www.pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3105" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-2977" style="">SWIM ACROSS PORTLAND</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2977"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1028+SE+Water" target="_BLANK">Water Avenue Coffee, 1028 SE Water</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1028+SE+Water&by=12:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
12:00pm - 8:00pm<div style="">
<em>Finally - a pool hopping bike ride! &nbsp;Show up on your bike in your swimsuit. Bring a lock and a towel.
<br>We'll ride to three public outdoor pools. &nbsp;
<br>Admission is $4 at each pool - so you'll need $12 cash.
<br>Plus cash or plastic for beer after.</em>
<br>Maria Schur, b<span>icyclekitty<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bicyclekitty.blogspot.com/">bicyclekitty.blogspot.com</a>, 503-516-3034&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2977" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3146.jpg" height="200" width="266.666666667" align="right" alt="">
<a name="24-3146" style="">SUNDAY PARKWAYS BIKE POLO DEMONSTRATION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3146"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Bryant+St+and+Delaware+Ave" target="_BLANK">Arbor Lodge Park, N Bryant St and Delaware Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Bryant+St+and+Delaware+Ave&by=12:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (tennis court)</div>
12:00pm - 5:00pm<div style="">
<em>Curious about how bike polo is played? Here's the perfect time to learn, and maybe even give it a try! Watch the pros, then try it yourself.</em>
<br>Universal Cycles, <a href="http://leagueofbikepolo.com/">leagueofbikepolo.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3146" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3126" style="">SYNTH DANCE SOCIAL WITH POISONOUS GASES </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3126"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><img src="pp12img/3126.jpeg" height="55.3846153846" width="300" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Interstate+and+Rosa+Parks" target="_BLANK">New Seasons, N Interstate and Rosa Parks</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Interstate+and+Rosa+Parks&by=12:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (outside)</div>
12:00pm - 3:00pm<div style="">
<em>Poisonous Gases Record Label laying down some skweee f&oslash;nk outside New Seasons Arbor Lodge during NoPo Sunday Parkways. Performers include: Lazercrotch (Poisonous Gases) Michael Bruce (Sonic Lozenge) and Gulls (Boomarm Nation).</em>
<br>Ausland Schlage, <a href="http://www.poisonousgases.com/">Poisonous Gases</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3126" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3037.jpg" height="200" width="298.507462687" align="right" alt="">
<a name="24-3037" style="">SHUT DOWN THE CRC</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3037"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=8417+N+Brandon+Ave" target="_BLANK">Kenton Park, 8417 N Brandon Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=8417+N+Brandon+Ave&by=12:30+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
12:30pm<div style="">
<em>The Columbia River Crossing is a 12 lane, 9 mile long freeway expansion from Portland to Vancouver projected to cost anywhere from 4-10 BILLION dollars. &nbsp;Portland is a place worth caring about because of our proud history of stopping and tearing down nightmare freeways that destroy livable communities. &nbsp;Come ride in solidarity against this disaster, meetup point is Kenton Park as part of the Sunday Parkways route. <a href="http://www.facebook.com/events/208117899308961/" class="smallhref">http://www.facebook.com/events/208117899308961/</a></em>
<br>Hart Noecker, n<span>yxfilm<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3037" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3163" style="">SUMMER DRESSES RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3163"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Peninsula+Park" target="_BLANK">Women on Wheels Booth, Peninsula Park</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Peninsula+Park&by=1:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (corner NAlbina and NRosa Parks)</div>
1:00pm - 2:30pm, We'll do the loop and flop on the grass afterward<div style="">
<em>This ride begins at 1:00 p.m. at the Women on Wheels booth at Peninsula Park and will follow the Sunday Parkways loop.
<br>Wear your Sunday best, or your prettiest summer dress. Skirts good, too. Utilikilts welcome.</em>
<br>April, a<span>pril.streeter<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.girlsonbikes.org/">www.girlsonbikes.org</a>, w<span>ww.meetup<img border="0" src="images/dotcom.gif" alt=" daht comm">/womenonwheels</span>, 503-539-8128&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3163" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-2861" style="">YOGI CYCLE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2861"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3016+NE+Killingsworth+St" target="_BLANK">The People's Yoga NE, 3016 NE Killingsworth St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3016+NE+Killingsworth+St&by=2:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm<div style="">
<em>We will begin the fun at the NE People's Yoga location and stretch it out with some tasty teas. After that, we will hop on our bikes a head on the easy, lopey ride towards the new SE People's location. There, our own Alix Northup will lead a yoga practice especially suited to the needs of biking aficionados. After satisfying mind and body, yogis can fill their bellies with the tasty treats offered at the Good Food Here Belmont food carts while enjoying the company of the other cool cats from the People's Yoga community. Yoga free, Food for purchase.</em>
<br>Beth Thompson, b<span>eth<img border="0" src="images/at.gif" alt=" at ">thepeoplesyoga<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.thepeoplesyoga.org/">www.thepeoplesyoga.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2861" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3051" style="">RIDE &amp; SHOOT: BICYCLE DOCUMENTARY FILMMAKING</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3051"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=115+SW+Ash+Street%2C+Suite+420" target="_BLANK">NW Documentary, 115 SW Ash Street, Suite 420</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=115+SW+Ash+Street%2C+Suite+420&by=2:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm, PLEASE NOTE THESE TIME DETAILS: 6/5 &amp; 6/12 from 6-8pm. 6/10 &amp; 6/17 from 2-5pm.<div style="">
<em>Camera, bikes, what's not to like? Join local non-profit NW Documentary for 4 classes to learn how to shoot a doc while riding your bike. We'll discuss various mounting techniques and provide tips on getting the smoothest shots possible, while keeping the story you're trying to tell in mind. We'll go for 2 rides during Pedalpalooza. We'll review footage, discuss editing &amp; more. $100 for NW Doc members, $200 for non-members. Meets 6/5 &amp; 6/12 from 6-8pm, 6/10 &amp; 6/17 from 2-5pm. All skill levels welcome!</em>
<br>NW Documentary, l<span>ilah<img border="0" src="images/at.gif" alt=" at ">nwdocumentary<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://www.nwdocumentary.org/">NW Documentary</a>, 503-227-8688&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3051" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3100.jpg" height="200" width="200" align="right" alt="">
<a name="24-3100" style="">THREE SPEED RIDE AND PICNIC</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3100"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Buffalo+St+at+N+Wilbur+Ave" target="_BLANK">Gammans Park, N Buffalo St at N Wilbur Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Buffalo+St+at+N+Wilbur+Ave&by=3:30+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Small park one block off of Sunday Parkways Route, near Arbor Lodge Park)</div>
3:30pm - 6:30pm, leaving shortly after 4pm<div style="">
<em>What better way to finish Sunday Parkways than ramble around North and Northeast on your humble internally geared three speed bicycle? Bring your trusty three speed bicycle of British, American, Japanese, Dutch, etc vintage. &nbsp;(Three speeds preferred but come along if you don't have one.) Casual paced ramble of approx. 8-10 miles, fairly flat. We'll have a picnic and tea brew up towards the end, bring all the necessities like food, a teakettle and a camping stove. Check forum for more info.</em>
<br>Shawn, u<span>rbanadventureleague<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://urbanadventureleague.blogspot.com/">urbanadventureleague.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3100" title="1 message, newest 2012-05-23"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3108" style="">DEUTSCHE RADFAHRT II</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3108"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><img src="pp12img/3108.jpg" height="125" width="185.873605948" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Naito+Pkwy+%26+Salmon+St" target="_BLANK">Salmon Street Springs Fountain, SW Naito Pkwy &amp; Salmon St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Naito+Pkwy+%26+Salmon+St&by=3:30+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:30pm<div style="">
<em>Wir fahren den Willamette entlang durch Downtown Portland und das ganze auf deutsch! Wir werden dazu etwas &uuml;ber deutschsprachigen Leute der Geschichte Portlands und der Gegenwart h&ouml;ren. Wir schauen u.a. die eingemei&szlig;elten Namen an der Zentralbibliothek und einigen Kirchenecksteinen an, lesen etwas historisches, und nachher genie&szlig;en wir etwas zum Knabbern bei Fressen (eine B&auml;ckerei im NE). Brezeln und Pasteten bei Fressen, Getr&auml;nke bitte mitbringen, aber etwas Wasser/Bier wird's auch dort geben. &nbsp;Deutschsprachigen aus A/CH/USA/LI/BENELUX/IT/RU usw, sind nat&uuml;rlich auch herzlich willkommen!</em>
<br>Der Elefantfahrstuhlf&#65533;hrer Aufzugsleiter, s<span>oundofharmony<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://pdx.edu/wll/profile/aaron-choate">my profile</a>, 503-725-5226&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3108" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3112.jpeg" height="180" width="165" align="right" alt="">
<a name="24-3112" style="">SKEPTICS IN THE PUB RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3112"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1600+SE+Harrison+St" target="_BLANK">Ladd's Addition, 1600 SE Harrison St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1600+SE+Harrison+St&by=4:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Big center circle/park)</div>
4:00pm, 4pm meet @park, 4:30 ride to Kells, 5-7pm Kell's irish pub<div style="">
<em>Skepticism is simply using critical thinking and the best available information to dispel myths and guide our own thoughts and decisions. The last Sunday of every month, we mix that with booze, which everyone knows comes from magical, surly little booze elves. We meet at Kell's Irish Pub at 5pm, but this month join me <img src="images/at.gif" alt="[at]"> 4pm <img src="images/at.gif" alt="[at]"> Ladd's addition's big inner circle and we'll relax for a bit before we go for a short bike ride over the bridge and to Kells.</em>
<br>Eric Tergerson, c<span>loudkap1<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, I<span> check email for questions</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3112" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-2767" style="">WANDERLUST MEN'S CYCLING GROUP </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-2767"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2767.jpg" height="96" width="84" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+15th+Ave+and+Fremont+St" target="_BLANK">Meet at Whole Foods on NE 15th and Fremont , NE 15th Ave and Fremont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+15th+Ave+and+Fremont+St&by=4:30+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:30pm, Every Sunday<div style="">
<em>Wanderlust is a program offered by the men's wellness community Manifest. &nbsp;Learn more about Manifest at <a href="http://manifestpdx.org/" class="smallhref">http://manifestpdx.org</a>. &nbsp;
<br>
<br>Suggested donation of $3-15 to support Manifest programs 
<br>Free for Manifest members 
<br>No one excluded for inability to pay
<br>
<br>To RSVP, check us out on Facebook: <a href="http://www.facebook.com/Wanderlust#!/groups/131023506939788/" class="smallhref">http://www.facebook.com/Wanderlust#!/groups/131023506939788/</a>, <a href="http://www.manifestpdx.org/" class="smallhref">www.manifestpdx.org</a>, or call 503-223-8822x1.</em>
<br>Benjamin (Wanderlust Facilitator)&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2767" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3023" style="">WHEEL BUILDING CLASS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3023"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=734+SE+Ankeny+St" target="_BLANK">Citybikes Cooperative, 734 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=734+SE+Ankeny+St&by=6:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm - 8:00pm<div style="">
<em>Wheel Building Series -- Sundays, June 10th, 17th, 24th -- 6:00-8:00pm
<br>
<br>Tuition: $115, 10% off class materials only purchased from Citybikes.
<br>
<br>Registration and Advanced Payment Required: 503-239-6951. Space limited!
<br>
<br>In this class series you will learn how to build a wheel from start to finish. There should be time if your desire is to build a complete wheel set. We'll help you choose the right rim and hub, or you can provide your own. Spokes are calculated and cut on day one. Class covers some theory but is mostly hands on building focused on lacing and all wheel truing functions.</em>
<br>SMASH, a<span>dsoc<img border="0" src="images/at.gif" alt=" at ">citybikes.coop</span>, <a href="http://www.citybikes.coop/">www.citybikes.coop</a>, 503-239-6951&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3023" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3058.jpg" height="180" width="300" align="right" alt="">
<a name="24-3058" style="">2012 HANDS-FREE OLYMPICS </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3058"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3500+N+Interstate" target="_BLANK">Overlook Park, 3500 N Interstate</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3500+N+Interstate&by=7:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm, arrive early to practice!<div style="">
<em>Do you love riding hands-free? think you're hot shit? come out and test your mettle. Beer! Prizes! and Music! 
<br>Four Events
<br>Speed - Once around the playground! 
<br>Last Bike Standing - How long can you go?
<br>Speed/Distance- How many laps in 5 minutes.
<br>Cross-Country &nbsp; Group start and once around the park on the chip path. 
<br>Spectators encouraged--bring beer and a blanket, there will be plenty of unsafe seating near the course if you're trusting</em>
<br>Karl D, k<span>arlcd<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3058" title="1 message, newest 2012-06-25"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3168" style="">BEST BIKE BOOK OF JUNE 2012</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3168"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=6651+Southwest+Capital+Highway" target="_BLANK">Mittleman Jewish Community Center, 6651 Southwest Capital Highway</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=6651+Southwest+Capital+Highway&by=7:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 8:00pm<div style="">
<em>According to Joe Kurmaskie, "'The Bar Mitzvah and The Beast: One Family's Cross-Country Rite of Passage by Bike' is an honest family celebration. And like any good party it's populated by colorful characters, whistles, bells, hopes, laughs, and stuff breaking all over the place." Hear Matt Biers-Ariel read, give a powerpoint show, and answers questions from the X-Games equivalent of a family vacation.</em>
<br>Matt Biers-Ariel, a<span>riel<img border="0" src="images/at.gif" alt=" at ">dcn<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://mattbiers-ariel.com/">mattbiers-ariel.com/</a>, 530-902-0399&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3168" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3194" style="">BATMAN RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3194"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Water+Ave+%26+Hawthrone+Blvd+Portland%26%238206%3B+OR%26%238206%3B+97239+United+States" target="_BLANK">Vera Katz statue under the west side of Hawthorne Bridge, SE Water Ave &amp; Hawthrone Blvd Portland&amp;#8206; OR&amp;#8206; 97239 United States</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Water+Ave+%26+Hawthrone+Blvd+Portland%26%238206%3B+OR%26%238206%3B+97239+United+States&by=8:00+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm<div style="">
<em>Batman rises again tonight for a caped crusade through downtown and inner Gotham City. Make your own Batman shirt or cheat with a printed one. Bring Mary Jane and other Bat-friendly accessories for your belt. This ride is 21+ and may stop at a bar towards the end. The Dark Knight Rides Again!&nbsp;</em>
<br>Alex Francis, a<span>lexdigital0<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://heaventotouch.tumblr.com/">Heaven to Touch</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3194" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="24-3155" style="">ZOOBOMB</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#24-3155"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=13th+%26+SW+Burnside" target="_BLANK">13th &amp; SW Burnside</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=13th+%26+SW+Burnside&by=8:30+p.m.&on=06/24/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:30pm<div style="">
<em>Zoobomb is long running weekly bike event that meets every Sunday around 8:30PM near (13th &amp; SW Burnside) in Portland OR. Bring a bike, MAX fare, bike lights, and any safety gear you need.
<br>Its a good time and you WILL have fun!
<br>MINI BIKES ENCOURAGED - ALL BIKES WELCOME
<br>HELMETS ARE A GOOD IDEA
<br>* RIDE AT YOUR OWN RISK *
<br>LEAVE NO TRACE</em>
<br>Zoobomb, z<span>oobomb<img border="0" src="images/at.gif" alt=" at ">zoobomb<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>, <a href="http://zoobomb.net/">z00bl0g</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3155" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June25">Monday June 25</a></h2>
  <div id="div2012-06-25"><dl>

<dt><a name="25-2993" style="">BIRDS AND BEES RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#25-2993"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+Eastbank+Esplanade+and+Main+St" target="_BLANK">Vera Katz statue, SE Eastbank Esplanade and Main St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+Eastbank+Esplanade+and+Main+St&by=1:00+p.m.&on=06/25/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm<div style="">
<em>Start at the Vera Katz statue on the Esplanade, head down the Springwater Trail, enjoy some birdwatching at the Oaks refuge, and ride to Leach Botanical Garden (near 122nd) to admire the flowers and the insects buzzing around them. Admission to the garden is free. <a href="http://www.leachgarden.org/plan-your-visit/" class="smallhref">http://www.leachgarden.org/plan-your-visit/</a></em>
<br>Shelley Sheridan, s<span>helley.sheridan.dc<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2993" title="2 messages, newest 2012-06-25"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3104.jpg" height="200" width="184" align="right" alt="">
<a name="25-3104" style="">DEAD FREEWAYS RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#25-3104"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=900+SW+Market+St" target="_BLANK">South Park Blocks in front of Lincoln Hall (PSU), 900 SW Market St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=900+SW+Market+St&by=5:00+p.m.&on=06/25/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 9:00pm, depart from Park Blocks at 5:30pm<div style="">
<em>What if...Portland built all the freeways it planned? This ride follows the routes of several highways that never made it off the drawing board, such as the fabled Mt. Hood Freeway, some that did but were later removed, like Harbor Drive, and also as a reference some freeways that currently exist. We'll see the parallels of the past freeway fights with what's going on with the current Columbia River Crossing project. Approx 13 miles of riding through moderate traffic.</em>
<br>Shawn, u<span>rbanadventureleague<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://urbanadventureleague.blogspot.com/">urbanadventureleague.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3104" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="25-3125" style="">BOTTOMS UP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#25-3125"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=792+NE+Holladay+St" target="_BLANK">Oregon Square Park, 792 NE Holladay St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=792+NE+Holladay+St&by=5:00+p.m.&on=06/25/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:00pm - 7:00pm, We ride at 5:15!<div style="">
<em>Start the week off right by riding out of the bowels of Portland (Lloyd District) and head off to the joys of Mt. Tabor. &nbsp;Bring some snacks for the park. &nbsp;I may be bringing a bottle of champagne to share so bring your own glass or cup. &nbsp;
<br>
<br>Ride will be about 5 miles one way with a small extinct volcano at the end. &nbsp;Depending on the group we either head back to the Bowel District for the "Office Space Ride" or we head to the "Battle of the Greasy Grass" in Buckman.</em>
<br>Lance, <a href="https://www.facebook.com/events/296047043817865/">https://www.facebook.com/events/296047043817865/</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3125" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="25-3072" style="">INTRO TO FAMILY BIKING WORKSHOP</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#25-3072"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2323+SE+Tamarack+Ave" target="_BLANK">2323 SE Tamarack Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2323+SE+Tamarack+Ave&by=5:30+p.m.&on=06/25/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm - 7:30pm<div style="">
<em>You love your bikes. You love your kids. This two-hour workshop will give you the knowledge and confidence you need to enjoy them together. We'll discuss equipment, rules of the road, route selection, and strategies for successful trips. Biking with kids is a great way to get more exercise, see your neighbors, reduce your gas budget, and bring more joy into your life. Whether you're hoping to take weekend rides or give up a family car, this workshop will give you the information you need to get started. Your kids are welcome to hang out with mine but childcare NOT provided. $2 for handouts.</em>
<br>Katie Proctor, k<span>atie.proctor<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://civilizedconveyance.blogspot.com/">A Most Civilized Conveyance (blog)</a>, 607-262-0439&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3072" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="25-3144" style="">ROLLING MURAL TOUR (SE EDITION)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#25-3144"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=734+Southeast+Ankeny+Street" target="_BLANK">City Bikes Annex, 734 Southeast Ankeny Street</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=734+Southeast+Ankeny+Street&by=6:00+p.m.&on=06/25/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm<div style="">
<em>This is a tour of the best murals in SE Portland. &nbsp;It is an hour+ loop ranging from 10th to 35th, and Ankeny to Division. Come look at and learn about some great PDX street art!</em>
<br>Jay And Tre, j<span>essamyndrae<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3144" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3034.jpg" height="150" width="227" align="right" alt="">
<a name="25-3034" style="">OFFICE SPACE RIDE (UPDATED!)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#25-3034"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+11th+Ave+and+Holladay+St" target="_BLANK">Holladay Park, NE 11th Ave and Holladay St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+11th+Ave+and+Holladay+St&by=7:00+p.m.&on=06/25/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm<div style="">
<em>Come help us get over our case of the Mondays. &nbsp;We'll relive some scenes from the classic Mike Judge film; it's not just about us and our dream of doing nothing. &nbsp;It's a casual ride, so feel free to go ahead and wear a hawaiian shirt or some flair.
<br>
<br>There will be 4 or 5 stops; final destination will be a bar; ride is not a loop, will end up somewhere on the inner east side.
<br>-------------------------------------------
<br>A bit more info:
<br>
<br>* Bring a beverage for Tom's bbq if you like
<br>* Opportunity to make your own jump-to-conclusions mat!
<br>* Practice your O-face
<br>* Printer-related madness</em>
<br>Michael Bolton, c<span>hris<img border="0" src="images/at.gif" alt=" at ">digitalnotions<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3034" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June26">Tuesday June 26</a></h2>
  <div id="div2012-06-26"><dl>

<dt><a name="26-3203" style="">RIDE TO THE KEEP NESTLE OUT OF THE GORGE RALLY</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-3203"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=705+N+Killingsworth+St+%28Borthwick+Mall%29" target="_BLANK">PCC Cascade, 705 N Killingsworth St (Borthwick Mall)</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=705+N+Killingsworth+St+%28Borthwick+Mall%29&by=3:00+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
3:00pm<div style="">
<em>This is a fun community ride from North Portland to Downtown. We start at PCC Cascade Campus (Borthwick Mall) and ride down to the Keep Nestle Out of the Gorge! Rally in Terry Shrunk Plaza. We will gather at 3:00 PM at PCC and take off at 3:30. The ride will head downtown to the Keep Nestle Out of the Gorge Rally, arriving around 4:00. This is a fun, safe, family friendly event. Everyone is welcome to attend. Ride to the Rally to learn more about the proposed Nestle bottling plant in the Columbia Gorge.</em>
<br>Esther Forbyn, e<span>sther.forbyn<img border="0" src="images/at.gif" alt=" at ">pcc<img border="0" src="images/dotedu.gif" alt=" daht eedee you"></span>, <a href="http://www.pcc.edu/resources/aspcc/cascade/">ASPCC Cascade</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3203" title="1 message, newest 2012-06-26"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3114.jpg" height="171.554252199" width="300" align="right" alt="">
<a name="26-3114" style="">FOOD CART LOVERS RIDE! - CLOSE IN SE/NE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-3114"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+12th+Ave+and+Hawthorne+Blvd" target="_BLANK">Cartopia, SE 12th Ave and Hawthorne Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+12th+Ave+and+Hawthorne+Blvd&by=4:00+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:00pm - 9:00pm<div style="">
<em>And one last Ride for all you PDX Food Cart Lovers out there!
<br>
<br>We will meet at Cartopia at 4PM and make our way to D-Street Noshery, Good Food Here and Green Castle for our final splendiferous eating adventure during Pedalpalooza
<br>
<br>Bring $ for your eats.</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://wp.me/pSKeL-4T">www.pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3114" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="26-2922" style="">THE SALTY'S RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-2922"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2922.jpg" height="125" width="83.1818181818" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=N+Interstate+Ave+and+Fremont+St" target="_BLANK">Overlook Park, N Interstate Ave and Fremont St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Interstate+Ave+and+Fremont+St&by=5:30+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (by 1st base)</div>
5:30pm, Raising anchor at 6<div style="">
<em>Dress salty and set sail from the Willamette to the Columbia on the first annual Salty's ride. &nbsp;Views of the water is what this bike ride is all about. &nbsp;Thought Salty's was too fancy for all of this? &nbsp;So did we. &nbsp;But don't worry; they know who we are and are actually okay with us coming (even dressed as a mermaid/sailor/barnacle). We'll have the patio reserved for ultimate sunset viewing. Pedalpalooza food and drink specials available. &nbsp;Awards for saltiest nautical attire.</em>
<br>Naomi C., Kristen B., And Hawaii Molly, n<span>aomieliz<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, k<span>ristenbilous<img border="0" src="images/at.gif" alt=" at ">hotmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2922" title="2 messages, newest 2012-06-25"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3041.jpg" height="195.789473684" width="300" align="right" alt="">
<a name="26-3041" style="">PDX'S WATER RESERVOIRS - PAST, PRESENT, &amp; FUTURE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-3041"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Zoo+Rd+and+SW+Knights+Blvd" target="_BLANK">Washington Park MAX Station (Zoo station), SW Zoo Rd and SW Knights Blvd</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Zoo+Rd+and+SW+Knights+Blvd&by=5:30+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (At the TOP of the Washington Park MAX Station elevators.)</div>
5:30pm - 9:30pm, Meet @ 5:30 pm, leave @ 6pm sharp.<div style="">
<em>Do you know that Portland has some of the best drinking water in the world? Do you appreciate how the system sustains us year round? If yes, or if not, join us for an informational guided tour of ALL of Portland's 9 water reservoirs.
<br>
<br>We will gather at the Washington Park MAX Station at 5:30pm, head out at 6pm sharp to the Washington Park reservoirs, continuing towards Mt. Tabor to spend a good chunk of the evening there, and provide an optional finish at Powell Butte for those that want the complete tour.
<br>
<br>Ride is a tad hilly, and medium paced.</em>
<br>Kate Petak, k<span>ate.petak<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="https://www.facebook.com/events/334745899929420/">Facebook Event Page</a>, 503-705-9560&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3041" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="26-3077" style="">SANDLOT RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-3077"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4637+N.+Albina+Ave" target="_BLANK">Albina Press, 4637 N. Albina Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4637+N.+Albina+Ave&by=5:30+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
5:30pm - 8:30pm<div style="">
<em>Join us for a short pedal to a sandlot to play some pickup baseball. Bring a glove and that little league spirit. All skill levels encouraged.
<br>
<br>We will have a few extra mitts and we will have bats, batting helmets, and baseballs. We're pretty laid-back and we like newcomers and players of all skill levels. Used to play little league? You'll hang.</em>
<br>Johnny Pesky, n<span>olan<img border="0" src="images/at.gif" alt=" at ">riseup<img border="0" src="images/dotnet.gif" alt=" daht nett"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3077" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2855.jpg" height="200" width="93" align="right" alt="">
<a name="26-2855" style="">PEDAL POTLUCK PICNIC</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-2855"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3029+SE+21st+Ave" target="_BLANK">Peoples Coop, 3029 SE 21st Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3029+SE+21st+Ave&by=6:30+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm - 8:30pm, Last Tuesday in May - August<div style="">
<em>After a year off, the PPP returns for its SEVENTH season! &nbsp;A casual bicycle ride traversing approx. 3-5 miles (5-8km) with a different route/end each time. The end destination is a mystery "park" or park-like destination. (Expect the unexpected!) At the endpoint we'll enjoy a picnic dinner. Eating will be potluck style, so please bring interesting food and drink to share (preferably vegetarian/vegan). Bring lights! Please bring your own silverware, plate, and cup. If it looks like it'll rain we'll end up at a COVERED destination.</em>
<br>Shawn, u<span>rbanadventureleague<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://urbanadventureleague.blogspot.com/">urbanadventureleague.blogspot.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2855" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="26-3161" style="">BIKE FARM VOLUNTEER ORIENTATION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-3161"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=305+NE+Wygant+St" target="_BLANK">Bike Farm, 305 NE Wygant St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=305+NE+Wygant+St&by=6:30+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm - 7:00pm<div style="">
<em>Monthly volunteer orientation at Bike Farm! New to the shop? Want to get acquainted or learn more? Interested in volunteering regularly or just curious? Please stop by! General meetings to follow immediately after (7pm) and all are welcome.</em>
<br>Holla, d<span>holla<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bikefarm.org/">bikefarm.org</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3161" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="26-2229" style="">BIKES FOR HUMANITY VOLUNTEER REPAIR CLINICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-2229"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4038+SE+Brooklyn+St%2C+Portland" target="_BLANK">Community Exchange Bike School, 4038 SE Brooklyn St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4038+SE+Brooklyn+St&Dcty=PO&by=7:00+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 10:00pm, Every Tuesday and Wednesday<div style="">
<em>Bikes For Humanity (B4H) is a community service project aimed at providing the public affordable refurbished bikes, repair classes &amp; workshop space.
<br>We have 100+ donated used bikes &amp; need volunteers to catalog, clean and refurbish the bikes for bike adoption events.
<br>Shop space has been donated for volunteer training and bike repair. For full details see <a href="http://www.b4hpdx.org/" class="smallhref">www.b4hpdx.org</a></em>
<br>Steven, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2229" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3189.jpeg" height="200" width="144.574780059" align="right" alt="">
<a name="26-3189" style="">RIDE OF THE CONCHORDS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#26-3189"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=3700+SE+Ankeny+St" target="_BLANK">Laurelhurst Park, 3700 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=3700+SE+Ankeny+St&by=7:00+p.m.&on=06/26/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (restrooms at the north end of the park - look for sign)</div>
7:00pm<div style="">
<em>Celebrate the greatest Kiwi neo-folk-hop-novelty band ever, Flight of the Conchords! Come dressed as your favorite character, or just come along for the ride! We'll meet in Laurelhurst Park by the bathrooms in the north center of the park. Look for a sign there because we will be moving to an as-yet-to-be-determined picnic area. We'll learn the moves to a FotC song, and perform this dance publicly! You are encouraged to bring a food item that you can name in French, for a picnic at the start. Please bring your own reusable utensils. Some 21+ stops at the end, including... karaoke!</em>
<br>Lyle Kopnicky, l<span>yle<img border="0" src="images/at.gif" alt=" at ">kopnicky<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://tiny.cc/conchords-ride">tiny.cc/conchords-ride</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3189" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June27">Wednesday June 27</a></h2>
  <div id="div2012-06-27"><dl>

<dt><a name="27-2906" style="">WEDNESDAY MORNING BREAKFAST RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-2906"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1412+SE+12th+Ave%2C+Portland%2C+OR" target="_BLANK">Tiny's Coffee, 1412 SE 12th Ave, Portland, OR</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1412+SE+12th+Ave%2C+OR&Dcty=PO&by=6:30+a.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30am - 8:30am, Wednesday September 5th<div style="">
<em>Ride for an hour or so Wednesday morning. &nbsp;Moderate paced no drop. &nbsp;We usually but not always find ourselves riding up hills in which case regroup at the top.
<br>
<br>Meet at Tiny's coffee around 6:30, ride leaves at 7:03 &nbsp;
<br>
<br>We try to get you to work on time if you work at 9am or so. &nbsp;If you're downtown 8am is do-able.
<br>
<br>Bring a bike map of portland. &nbsp;No cue sheets or maps provided.</em>
<br>Ed&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2906" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3205.jpg" height="200" width="137.333333333" align="right" alt="">
<a name="27-3205" style="">SKATEBOARD BAN CITY COUNCIL MEETING</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3205"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1221+SW+4th+Ave" target="_BLANK">City Hall, 1221 SW 4th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1221+SW+4th+Ave&by=9:00+a.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00am - 10:30am<div style="">
<em>West Hills resident Eric Nagle is attempting to ban skateboarding on 10 streets in SW Portland. While it may sound trivial, this ban could seriously impact the precedent for banning a form of transportation on a public street at the behest of an individual's urging. Let's show up and urge our council members to vote no on the ban.
<br>
<br>Want to testify? Please keep it concise. Your testimony must be under 3 minutes. You may want to focus on the fact that individuals are responsible for their own safety and the roads are public space for all. 
<br>More info via BikePortland: <a href="http://bit.ly/KzJjY2" class="smallhref">http://bit.ly/KzJjY2</a></em>
<br>Reverend Phil, r<span>evphil<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://zoobomb.net/">zoobomb</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3205" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="27-3122" style="">CRAPPY GIFT EXCHANGE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3122"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3122.jpg" height="125" width="125" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5+SE+Madison+St%2C+Portland" target="_BLANK">Eastbank Esplanade, 5 SE Madison St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5+SE+Madison+St&Dcty=PO&by=4:00+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (right where SE Madison runs into the Esplanade)</div>
4:00pm - 4:30pm<div style="">
<em>Stop by your local 7-11, thrift store, or that one weird novelty/antique shop you always wanted to visit. Get some cheap crappy gifts and we'll trade 'em. This 'ride' doesnt really go anywhere but it's close to the OMSI ride <img src="images/at.gif" alt="[at]"> 4:30 so come along for that afterwards. Prizes awarded for the BEST and WORST cheap crappy gifts! Prizes may be scary, but mostly harmless.
<br>Bonus points for helping me welcome and surprise my friend who is visiting and is awesome =)</em>
<br>Eric Tergerson, c<span>loudkap1<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3122" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3030.jpg" height="100.840336134" width="300" align="right" alt="">
<a name="27-3030" style="">OMSI PEDALS SCIENCE: FIRE AND ICE </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3030"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1945+SE+Water+Ave%2C+Portland" target="_BLANK">OMSI, 1945 SE Water Ave, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1945+SE+Water+Ave&Dcty=PO&by=4:30+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (North end of the North parking lot next to the river)</div>
4:30pm, 30 minutes of science fun,  we ride at 5:00<div style="">
<em>Come join us for the third annual OMSI science ride! We will kick off the ride with our roof-busting ping-pong ball explosion and there will be plenty of tantalizing fire and ice demos including the ever-popular liquid nitrogen ice cream.
<br>
<br>The ride will be a loop and will end back at OMSI around the time OMSI After Dark begins. &nbsp;We'll have a few tickets to give away at the ride, but otherwise entry to OMSI After Dark is 18 bucks and is for 21+ with IDs only. &nbsp;Visit <a href="http://www.omsi.edu/afterdark" class="smallhref">http://www.omsi.edu/afterdark</a> for more information.</em>
<br>Amanda, a<span>fisher<img border="0" src="images/at.gif" alt=" at ">omsi<img border="0" src="images/dotedu.gif" alt=" daht eedee you"></span>, 503-797-4635&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3030" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="27-3088" style="">BTA SERVICE STATION</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3088"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3088.jpg" height="125" width="125" align="left" alt="">
<div style="">N Denver and N Bryant w/ Revolver Bikes, N Denver and N bryant <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=N+Denver+and+N+bryant&by=4:30+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (On the corner)</div>
4:30pm - 6:30pm<div style="">
<em>BTA Service Station's offer cyclists Service, a Snack and a Simple Act to make biking better in Portland Metro and your BTA membership can be purchased or renewed on the spot. 
<br>Thanks to our bike shop partners and volunteers for making these events possible!</em>
<br>Bicycle Transportation Alliance, t<span>om<img border="0" src="images/at.gif" alt=" at ">btaoregon<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://btaoregon.org/events/">BTA Events</a>, 503-226-0676 x20&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3088" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3160.jpg" height="150" width="193" align="right" alt="">
<a name="27-3160" style="">NO WAY! NO COAL! LET'S RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3160"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1821+SE+Ankeny+St" target="_BLANK">Sierra Club , 1821 SE Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1821+SE+Ankeny+St&by=5:30+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (ride ends at 8324 N. Central in St. Johns)</div>
5:30pm - 7:00pm, Coal forum at  ending location will begin at 7:30pm<div style="">
<em>Ride and learn how coal export threatens PDX specifically and the NW overall. Community forum about coal exports will follow at the ride's destination in St. Johns. 
<br>"No Coal" spoke cards for all riders! 
<br><strong>MEET</strong> 5:30pm Sierra Club, 1821 SE Ankeny St. Snacks!
<br><strong>RIDE</strong> To St. Johns, we'll make a few stops at key areas impacted by the proposals including rail lines that could see as many as 16 coal trains per day. 8 miles, one way, moderate ride at commuter pace. Bus or MAX option avail for return. Music sound system accompaniment included!
<br><strong>END</strong> at 8325 N. Central; forum about coal at 7:30</em>
<br>Jasmine Zimmer-Stucky, j<span>asmine<img border="0" src="images/at.gif" alt=" at ">columbiariverkeeper<img border="0" src="images/dotorg.gif" alt=" daht oh are gee"></span>, <a href="http://columbiariverkeeper.org/category/events/">Columbia Riverkeeper</a>, 503-929-5950&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3160" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="27-3020" style="">HAMMERCISE RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3020"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3020.jpg" height="125" width="147.321428571" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=705+N+Killingsworth+St" target="_BLANK">PCC Cascade Campus, 705 N Killingsworth St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=705+N+Killingsworth+St&by=6:00+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet in front of the Student Center on Borthwick on campus.)</div>
6:00pm, meet, learn dance moves, @ 6:45pm  we ride!<div style="">
<em>Hammercise = MC Hammer + Exercise. Hammercise Instructors will teach cyclists dance &amp; aerobics moves then we will hit the city to do flash mob public performances. Then, ride leads to the end location for an aerobics obstacle course, dance party, fitness awards, &amp; prizes. Come dressed in 90's gear, workout clothes, spandex, &amp; neon. Bring your fitness props for an epic workout of limitless awesomeness! (Photo credit &copy; Ty Chance)</em>
<br>GiGi Malibu, h<span>ammercise<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3020" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="27-2785" style="">EPIC PIZZA RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-2785"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=sorry%2C+missed+your+chance." target="_BLANK">sorry, missed your chance, sorry, missed your chance.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=sorry%2C+missed+your+chance.&by=6:30+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm - 11:30pm<div style="">
<em>Like pizza? &nbsp;Bet you haven't been to all the places we're going. &nbsp;Join our group of 50 as we do Tour du 'Za all over portland (no vancouver this year =)).
<br>
<br>The ride's full, unfortunately. &nbsp;If I've slept with you, you have a free in and should email me anyway. &nbsp;If you wanna be on the waiting list, feel free to drop me a line too--I'll know tuesday night (and let you know, too) if you're in.
<br>
<br>You bring 15 bucks. &nbsp;You get 5 slices of pizza from 5 different pizzerias if you stick with the ride til the end. &nbsp;No refunds, no whining. &nbsp;BYOB or purchase beverages at our stops.</em>
<br>Fool, g<span>ently<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2785" title="1 message, newest 2012-06-06"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3043.jpg" height="200" width="129.496402878" align="right" alt="">
<a name="27-3043" style="">INVASION OF THE BICYCLE SNATCHERS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3043"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+16th+Ave+%26+Harrison+St+" target="_BLANK">Ladds Circle, SE 16th Ave &amp; Harrison St </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+16th+Ave+%26+Harrison+St+&by=6:30+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (SE 16th Ave &amp; Harrison St)</div>
6:30pm - 8:30pm<div style="">
<em>Set in the distant present, Invasion of the Bicycle Snatchers transports you to a time when men were beautiful and women were strong. The fourth installment of the Working Theatre Collectives wildly popular Pedalpalooza ride, re-imagines 1950's science fiction through a Portland inspired lens, complete with alien invasions, government conspiracies and (gasp!) sentient cycles. Pedal down the side streets of Stumptown as this shocking sci-fi thriller unfolds. Audiences will ride to, through, and alongside this summer-evening adventure as it tells its story across a series of locations. FREE</em>
<br>The Working Theatre Collective, t<span>heworkingtheatrecollective<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://theworkingtheatrecollective.wordpress.com/">theworkingtheatrecollective.wordpress.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3043" title="1 message, newest 2012-06-25"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="27-3180" style="">CUTE WARM FUZZY (NIGHT-TIME EDITION)</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3180"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NW+10th+and+Johnson" target="_BLANK">Jamison Square, NW 10th and Johnson</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+10th+and+Johnson&by=8:15+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (In the heart of the Pearl District)</div>
8:15pm - 9:15pm, We will wait until 8:30pm for stragglers or late arrivals<div style="">
<em>Jamison Square Park, NW 10th and Johnson &nbsp;(Pearl District)
<br>8:15pm - 9:15pm, Ride begins promptly at 8:15 PM and ends at 9:15PM.
<br>Wednesday, 27 June 2012
<br>Everyone (including well-behaved sloths) is welcome to ride together through the heart of the Pearl District in NW Portland. Helmets required, slow FUN pace, NO hills. Prizes will be given to ALL participants. We will merrily enjoy optional sweet treats at Ben &amp; Jerry's &amp; Cupcake Jones (bring change). Costumes highly encouraged (think: cute, warm &amp; fuzzy) along with decorated bikes, of course. FREE. No drugs, please. Rain or shine.</em>
<br>Martha  Perez, Organizer, m<span>arthaoperez<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-954-8653&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3180" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="27-3181" style="">FURRY VENGEANCE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#27-3181"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NW+10th+and+Johnson" target="_BLANK">Jamison Square, NW 10th and Johnson</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NW+10th+and+Johnson&by=10:15+p.m.&on=06/27/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:15pm<div style="">
<em> Jamison Square, NW 10th and Johnson &nbsp;(Pearl District)
<br>10:15pm - 11:15pm, Ride begins approximately at 10:15 PM and ends at 11:15 PM.
<br>Wednesday, 27 June 2012, 10:15 PM
<br>Everyone (including horny sloths) is welcome to ride together through the heart of the Pearl District in NW Portland. Helmets required, slow FUN pace, NO hills, screaming encouraged! Prizes will be given to ALL participants. We will merrily enjoy optional evil Scooby snacks at a rooftop bar (bring change). Costumes highly encouraged (think: cute, warm &amp; fuzzy) along with decorated bikes, of course. Rain or shine. Drug-free.</em>
<br>Martha  Perez, Organizer, m<span>arthaoperez<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3181" title="4 messages, newest 2012-06-27"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June28">Thursday June 28</a></h2>
  <div id="div2012-06-28"><dl>

<dt>
<img src="pp12img/2801.jpg" height="124" width="150" align="right" alt="">
<a name="28-2801" style="">YOU KNOW, A PRETTY GOOD RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-2801"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+8th+Ave+and+Ankeny+St" target="_BLANK">Citybikes Annex, SE 8th Ave and Ankeny St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+8th+Ave+and+Ankeny+St&by=11:30+a.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:30am - 2:30pm, duration is wiggly.<div style="">
<em>Remember "A Nice Long Ride" from last year? &nbsp;We left a little too early, but I promise you (Roger!) that we won't leave early this year. &nbsp;Starts from the delightful CityBikes at their Annex location (SE 8th and SE Ankeny), and will end somewhere else. &nbsp;Essentially a loop. &nbsp;Probably around 30 miles.
<br>
<br>Just like last year, it's not about the speed and it's not about hills, "epic" or otherwise. The pace will be semi-moderate but when someone has an issue, we all stop, take care of it, and then thank our lobster overlords for not annihilating us yet. You know.
<br>
<br>let's all be this guy! &nbsp;aaahahahaha</em>
<br>Rachel Kelly, r<span>achelkelly<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2801" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="28-3128" style="">JOEL &amp; GEOFF'S HILL CLIMB EXTRAVAGANZA</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3128"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1015+NW+17th+Ave" target="_BLANK">Western Bikeworks, 1015 NW 17th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1015+NW+17th+Ave&by=1:00+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (at Lovejoy)</div>
1:00pm - 3:00pm<div style="">
<em>Like climbing hills? &nbsp;Here's your chance! &nbsp;Join Joel and Geoff for a skyline adventure of pain and fun. &nbsp;Please wear a helmet.</em>
<br>Joel Thompson, j<span>oelt<img border="0" src="images/at.gif" alt=" at ">velotech<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.westernbikeworks.com/">Western Bikeworks</a>, 5<span>03-342-9985</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3128" title="1 message, newest 2012-06-06"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="28-3040" style="">AERINNE CUBED III!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3040"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><img src="pp12img/3040.jpg" height="125" width="175.097276265" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=6000+NE+Glisan+St" target="_BLANK">Biddy McGraw's, 6000 NE Glisan St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=6000+NE+Glisan+St&by=6:00+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:00pm, Depart at 7pm<div style="">
<em>Are you an Aaron, Arron, Aron, Aryn, Erin, Erinne, or some other variation on the name? Have friends, family members, or (former and future) lovers who are? Then join us for community, camraderie, and our 3rd kick-ass ride! New lead Aaron this year -- come to see who! There will be hills &amp; the ride will end in time to get to the rooftop ride.</em>
<br>Erin, e<span>rin_layna<img border="0" src="images/at.gif" alt=" at ">yahoo<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 971-212-6212&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3040" title="2 messages, newest 2012-06-27"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3044.jpg" height="200" width="129.496402878" align="right" alt="">
<a name="28-3044" style="">INVASION OF THE BICYCLE SNATCHERS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3044"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+16th+Ave+%26+Harrison+St+" target="_BLANK">Ladds Circle, SE 16th Ave &amp; Harrison St </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+16th+Ave+%26+Harrison+St+&by=6:30+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (SE 16th Ave &amp; Harrison St)</div>
6:30pm - 8:30pm<div style="">
<em>Set in the distant present, Invasion of the Bicycle Snatchers transports you to a time when men were beautiful and women were strong. The fourth installment of the Working Theatre Collectives wildly popular Pedalpalooza ride, re-imagines 1950&#65533;s science fiction through a Portland inspired lense, complete with alien invasions, government conspiracies and (gasp!) sentient cycles. Pedal down the side streets of Stumptown as this shocking sci-fi thriller unfolds. Audiences will ride to, through, and alongside this summer-evening adventure as it tells it&#65533;s story across a series of locations. FREE</em>
<br>The Working Theatre Collective, t<span>heworkingtheatrecollective<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://theworkingtheatrecollective.wordpress.com/">theworkingtheatrecollective.wordpress.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3044" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="28-3218" style="">SCOFFLAW FUNDRAISER RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3218"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=6:45+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Top of the hill, near the bathrooms.)</div>
6:45pm - 8:45pm, We will leave the park 7ish for a mellow ride of about an hour in duration. We will end the ride at a bar. Informal discussion of bicycle laws and safety is encouraged.<div style="">
<em> I was charged with a violation for Impeding Traffic while "corking" on a Pedalpalooza ride early this month. I've received enough inquiries about donating toward any eventual fines that I have decided to hold a fundraising ride. Any funds not turned over to the court will be donated to the Bicycle Transportation Alliance.
<br>
<br>All joking aside, participants are encouraged to both follow the law and do their best to ensure their safety as well as those around them.</em>
<br>Kevin Stone, k<span>evin.cascadia<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 541-554-5773&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3218" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2955.png" height="145.161290323" width="300" align="right" alt="">
<a name="28-2955" style="">C.C. BAND TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-2955"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+7th+Ave+and+Fargo+St%2C+Portland" target="_BLANK">Irving Park, NE 7th Ave and Fargo St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+7th+Ave+and+Fargo+St&Dcty=PO&by=7:00+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (SW entrance near tennis courts)</div>
7:00pm - 10:00pm<div style="">
<em>Crash Course Band Tour
<br>
<br>Ever wanted to join a band and go on tour? Now is your chance! Safety in numbers. We'll run through a few songs first before hitting the road to play at our line up of venues. 
<br>
<br>Grab your instrument of choice. Style points if it needs a trailer or you can play en route. Songs will be easy, but plenty of room for instrumentals. No instrument? Be a vocalist or a hot groupie. 
<br>
<br>Ride will pause at select bars for jams and refueling opportunities. &nbsp;Bring a song or sign up for open mic before your bike friendly audience.
<br>
<br>Traffic jams ahoy!</em>
<br>C.c. Rider, <a href="http://www.facebook.com/#!/events/240543979381167/">www.facebook.com/#!/events/240543979381167</a>, 503-679-5836&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2955" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="28-3171" style="">REVEAL THE PATH MOVIE PREMIERE - PORTLAND</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3171"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2522+SE+Clinton+St%2C+Portland%2C+Oregon+97202" target="_BLANK">Clinton Street Theatre, 2522 SE Clinton St, Portland, Oregon 97202</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2522+SE+Clinton+St%2C+Oregon+97202&Dcty=PO&by=7:00+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 8:30pm, Two shows:  7:00 pm &amp; 9:00 pm<div style="">
<em>Reveal The Path - Movie Premiere - Portland, Oregon
<br>
<br>Join in as the creators of Ride the Divide take you on an adventure that will leave you with an eager desire to chart your own course to far away lands or simply to discover with eyes wide open what's right around the bend.
<br>
<br>Presented by Salsa Cycles
<br>
<br>Clinton Street Theater
<br>2522 SE Clinton Street &nbsp;| &nbsp;Portland, OR &nbsp;| &nbsp;503-238-5588
<br>2 Screenings June 28
<br>7:00 PM &amp; 9:00 PM</em>
<br>Pedal Nation Events, a<span>aron<img border="0" src="images/at.gif" alt=" at ">pedalnationevents<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://rtp-portland-efbevent.eventbrite.com/">rtp-portland-efbevent.eventbrite.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3171" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3093.jpg" height="167" width="200" align="right" alt="">
<a name="28-3093" style="">RECLINER BIKES (AND OTHERS) LIT RAMBLE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3093"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2025+SE+Hawthorne+Blvd.%2C+PDX" target="_BLANK">Coventry Cycle Works, 2025 SE Hawthorne Blvd., PDX</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2025+SE+Hawthorne+Blvd.%2C+PDX&by=8:00+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Hawthorne at 20th)</div>
8:00pm, Rolling at Dark O'Clock for best light display!<div style="">
<em>Holy Electric Socket, Bat Man! It's those Wild and Wooley Recumbent Riders, tuning up for their major annual light show at Fort Stevens in August. ALL bikes, trikes, unicycles...tall, small, geared, fixed, weird, mixed... 'bent or not-so are welcomed. Gather at Coventry Cycle Works by 8:00 p.m. Moderate pace. We'll head NE via Eastbank Esplanade and loop back in via Willamette Drive, Knit our way through the Pearl then cruise the river banks downtown, around towards OMSI back through Ladd's and end at the food carts on 12th/Madison.. Helmets should be worn. Free. Law-abiding manners a MUST.</em>
<br>The Old Chick On A 'bent, <a href="http://www.coventrycycleworks.com/">www.coventrycycleworks.com/</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3093" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="28-3033" style="">ROOFTOP RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#28-3033"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=NE+11th+Ave+and+Holladay+St" target="_BLANK">holladay park, NE 11th Ave and Holladay St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=NE+11th+Ave+and+Holladay+St&by=10:45+p.m.&on=06/28/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (meet in the center circle!)</div>
10:45pm, meet at 10:45, ride at 11 sharp!<div style="">
<em>Ever drawn to the heights of the city around you? Join us for a mystery-ride style adventure! ROOFTOP!</em>
<br>Jaya, j<span>aya.jeptha<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-380-2573&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3033" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June29">Friday June 29</a></h2>
  <div id="div2012-06-29"><dl>

<dt><a name="29-3213" style="">THE NORTH COMMUTE!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3213"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1507+North+Rosa+Parks+Way" target="_BLANK">The Arbor Lodge, 1507 North Rosa Parks Way</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1507+North+Rosa+Parks+Way&by=6:45+a.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:45am, Ride leaves at 7am sharp!<div style="">
<em>Hey all you fellow North Portland commuters that I either pass, or get passed by on N Greeley or Interstate on the journey to central. Why don't we meet up and combine forces for once!? We'll do a moderate paced ride to breakfast on the bridges where we can go our separate ways from there.</em>
<br>Daniel&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3213" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-2807" style="">BREAKFAST ON THE BRIDGES</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-2807"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=steel+bridge%2C+hawthorne+bridge" target="_BLANK">steel &amp; hawthorne bridges, steel bridge, hawthorne bridge</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=steel+bridge%2C+hawthorne+bridge&by=7:15+a.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (east end of Steel; west end of westbound Hawthorne)</div>
7:15am - 9:15am<div style="">
<em>Thanks for biking! &nbsp;Free breakfast for morning commuters by foot and wheel on the Hawthorne and the Steel (bridges, that is)</em>
<br>Cap'n Pastry&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2807" title="2 messages, newest 2012-07-03"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-3184" style="">BEER FOR BIKE WATCHING</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3184"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Overlook+Park%2C+Portland" target="_BLANK">North American Organic Brewers Festival, Overlook Park, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Overlook+Park&Dcty=PO&by=11:45+a.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:45am, 2 hour shifts per day, throughout the festival.<div style="">
<em>For 2 hours of vigilance, watching over some of the nearly 2000 2-wheeled steeds of those who enjoy some of the finest organic brews in North America, you can earn a mug and 8 tokens (enough for 2 full beers or 8 samples).
<br>Now in its 25th year, the North American Organic Brewers Festival is one of the largest of its kind on the continent.
<br>Proceeds benefit the Rotary Club of Portland-Westside Family Food Basket program.
<br>The festival continues through Sunday, 7/1/12
<br>Click here for the festival site - <a href="http://www.naobf.org/" class="smallhref">http://www.naobf.org</a></em>
<br>Hal Ballard, b<span>alhallard<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.signupgenius.com/go/30E0C4DA4A723AB9-beer">Organic Beer for Bikes</a>, 503-984-1761&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3184" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3222.jpg" height="171.554252199" width="300" align="right" alt="">
<a name="29-3222" style="">FOOD CART LOVERS RIDE! - DOWNTOWN ROUNDABOUT!</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3222"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SW+Stark+St+and+9th+Ave" target="_BLANK">O'Bryant Park, SW Stark St and 9th Ave</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SW+Stark+St+and+9th+Ave&by=1:00+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
1:00pm - 3:00pm<div style="">
<em>PDX Food Cart Lovers presents the Downtown Roundabout Ride!
<br>
<br>We will meet at 1PM at O'Bryant Square and ride around the Pods in Downtown Portland finishing up in 2 hours
<br>
<br>We will visit the 10th &amp; Alder Pod, 5th Street, 3rd Street and the PSU Pod on a meandering ride taking in all the pods in Downtown Portland.
<br>
<br>Bring $ for your eats!
<br>
<br>Make sure to check our blog at <a href="http://www.pdxfoodcartlover.com/" class="smallhref">www.pdxfoodcartlover.com</a> for more info</em>
<br>Scott Batchelar , s<span>cottbs<img border="0" src="images/at.gif" alt=" at ">me<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.pdxfoodcartlover.com/">www.pdxfoodcartlover.com</a>, F<span>ollow our twitter <img border="0" src="images/at.gif" alt=" at ">pdxfoodcartlove</span>, 971-207-5523&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3222" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-3223" style="">WRITERS TO OLF AT THE LAST MINUTE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3223"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2600+SE+Division" target="_BLANK">Little T American Bakery, 2600 SE Division</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2600+SE+Division&by=2:30+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:30pm - 4:00pm<div style="">
<em>In the great tradition of last-minuteness, I am taking my application for an Oregon Literary Foundation writer's grant to drop off as close to the last minute as feasible. I am also posting this as late as possible! We'll start at Little T American Bakery (for coffee fuel!), 2600 SE Division; move out to make three copies of our applications at Office Depot, 323 SE MLK Jr Blvd; and then ride across the bridge to Oregon Literary Arts, 925 SW Washington St. -- hopefully amply before 5 p.m.!</em>
<br>Sarah Gilbert, s<span>arahgilbert<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://stealingtimemag.com/">Stealing Time, a literary magazine for parents</a>, 503-774-5934&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3223" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3075.jpg" height="200" width="241.025641026" align="right" alt="">
<a name="29-3075" style="">JEFFERSON SMITH PEDALPALOOZA POLICY RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3075"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=5+SE+Madison+St." target="_BLANK">Portland Fire &amp; Rescue Station, 5 SE Madison St.</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=5+SE+Madison+St.&by=5:30+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (On the Esplanade under the Hawthorne Bridge)</div>
5:30pm<div style="">
<em>Jefferson Smith, endorsed by Bike Walk Vote to be Portland's next mayor, invites you to join him on policy ride through the heart of the city. Let's ride a few miles together and enjoy some wonky and candid conversations about how we get around, and how the city can help support active transportation, as well as any other topic you'd like to discuss that can help make Portland a better place for us all. Our FB event page is here: <a href="http://on.fb.me/Lmu4yX" class="smallhref">http://on.fb.me/Lmu4yX</a></em>
<br>Jefferson Smith &amp; Bike Walk Vote, <a href="http://jeffersonsmith.com/issues/transportation-priorities/">jeffersonsmith.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3075" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-3045" style="">INVASION OF THE BICYCLE SNATCHERS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3045"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3045.jpg" height="125" width="80.9352517986" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+16th+Ave+%26+Harrison+St+" target="_BLANK">Ladds Circle, SE 16th Ave &amp; Harrison St </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+16th+Ave+%26+Harrison+St+&by=6:30+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (SE 16th Ave &amp; Harrison St)</div>
6:30pm - 8:30pm<div style="">
<em>Set in the distant present, Invasion of the Bicycle Snatchers transports you to a time when men were beautiful and women were strong. The fourth installment of the Working Theatre Collectives wildly popular Pedalpalooza ride, re-imagines 1950&#65533;s science fiction through a Portland inspired lense, complete with alien invasions, government conspiracies and (gasp!) sentient cycles. Pedal down the side streets of Stumptown as this shocking sci-fi thriller unfolds. Audiences will ride to, through, and alongside this summer-evening adventure as it tells it&#65533;s story across a series of locations. FREE</em>
<br>The Working Theatre Collective, t<span>heworkingtheatrecollective<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://theworkingtheatrecollective.wordpress.com/">theworkingtheatrecollective.wordpress.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3045" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2974.jpg" height="200" width="300" align="right" alt="">
<a name="29-2974" style="">ECOSEX SYMPOSIUM</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-2974"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2522+SE+Clinton" target="_BLANK">Clinton Street Theater, 2522 SE Clinton</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2522+SE+Clinton&by=7:00+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:00pm - 9:00pm<div style="">
<em>Presentations from the front lines of sexuality.
<br>
<br>EcoSexuals want to live in a world where:
<br>
<br>--Sex is viewed as natural, healthy, and good for us
<br>--We live closer to nature 
<br>--We have authentic, fulfilling relationships with our bodies, lovers, &amp; communities
<br>
<br>$10 - final 30 min are free
<br>
<br>KEYNOTE SPEAKERS
<br>Dr. Deborah Taj Anapol, <a href="http://www.lovewithoutlimits.com/" class="smallhref">www.lovewithoutlimits.com</a> AND Serena Anderlini-D'Onofrio, &nbsp;<a href="http://polyplanet.blogspot.com/" class="smallhref">http://polyplanet.blogspot.com</a></em>
<br>Gasper Johnson, b<span>ikesmut<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.ecosex.org/">EcoSex Symposium</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2974" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-2835" style="">TEAM BOWIE </a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-2835"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2835.gif" height="125" width="156.90376569" align="left" alt="">
<div style="">Seawallcrest Park, SE 31st Ave &amp; Market St <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+31st+Ave+%26+Market+St&by=7:30+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
7:30pm<div style="">
<em>The bowie leg of the fifth annual Bowie Vs. Prince ride. 
<br>
<br>Pick you popstar allegiance and we'll meet up for the battle of Team Bowie and Team Prince. Bicycle dance party on wheels. Loud stereo system and 80's dance music.
<br>
<br> Come dressed as your favorite 80's Pop star and we'll cruise and dance at locations all over town. Slow pace with frequent dancin' stops. Bring lights. 
<br>
<br>This ride is not a loop and will probably go very late.</em>
<br>Lilymonster &amp; Dirty Diablo, r<span>ideabicycle<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.anomalily.net/">www.anomalily.net</a>, t<span>weet <img border="0" src="images/at.gif" alt=" at ">anomalily or <img border="0" src="images/at.gif" alt=" at ">DirtyDiabloRide for live ride details</span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2835" title="1 message, newest 2012-05-10"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3107.jpg" height="187.372013652" width="300" align="right" alt="">
<a name="29-3107" style="">TEAM PRINCE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3107"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+50th+Ave+and+Division+St" target="_BLANK">SE 50th Ave and Division St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+50th+Ave+and+Division+St&by=7:30+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Warm up at North Bar or look for the gang of bikes gathering in the nearby parking lots &amp; Listen for the Music!)</div>
7:30pm, We'll roll around 8<div style="">
<em>
<br>Your Substitute Ride Leader (<strong>Diablo</strong>) for the past two years is teaming up with Originator (<strong>Lilymonster</strong>) for the 5th (and final?!?) Bowie Vs. Prince Ride!
<br>
<br>This is the <strong>PRINCE</strong> Leg of the Classic Pedalpalooza Ride!
<br>
<br>Come run with the Devil dressed as any favorite 80's pop star to rendezvous with <strong>Team BOWIE</strong> then off to a fabulous dance party!
<br>
<br>I'll be rocking my Disco Trike &amp; the best "The Artist" &amp; "The Thin White Duke" have to offer along with my favorite 80's cuts! 
<br>
<br>SLOW pace with frequent dancing stops-Not a loop!
<br>
<br>Bring Lights! <strong>Wear PURPLE!</strong> Ride at Own Risk!
<br>
<br>)'(</em>
<br>Dirty Diablo &amp; Lilymonster, d<span>irtydiablorides<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, T<span>weet <img border="0" src="images/at.gif" alt=" at ">DirtyDiabloRide or <img border="0" src="images/at.gif" alt=" at ">anomalily for live ride details!</span>, 503-847-5564&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3107" title="3 messages, newest 2012-06-30"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-3220" style="">BIKE-IN MOVIE: BARBARELLA</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3220"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3220.jpg" height="125" width="73.2421875" align="left" alt="">
<div style="">64th and Foster <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=64th+and+Foster&by=8:00+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
8:00pm<div style="">
<em>Come check out this 1960's space age sex romp on the big wall of Red Castle Games. Come check out where Burning Man got its style. Where did the band Duran Duran get its name? Who can survive the orgasmatron?
<br>
<br>Plus there's a furry costume contest! 
<br>
<br>Bring sittables and snackables.</em>
<br>Joshua Klyber, J<span>oshuaKlyber<img border="0" src="images/at.gif" alt=" at ">Gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3220" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-2935" style="">BIKE CLUB VEST RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-2935"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=East+Side+Esplanade+North+of+Morrison+Bridge" target="_BLANK">Pirate Island, East Side Esplanade North of Morrison Bridge</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=East+Side+Esplanade+North+of+Morrison+Bridge&by=9:00+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00pm, Meet at 9:00 ride at 10:00<div style="">
<em>Bike Club Vest rides every fifth Friday. &nbsp;Everyone's a member of our club! &nbsp;Just make your own BCV vest. &nbsp;Pedalpalooza Edition includes prizes for best vests.</em>
<br>Rudy Z Bomb, r<span>andyzpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2935" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3064.jpg" height="200" width="200" align="right" alt="">
<a name="29-3064" style="">FLASH DANCE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3064"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/beer.gif" alt="21+" title="Adult Only (21+)">
</dt><dd><div style="">Eastbank Esplanade &amp; Hawthorne Bridge <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Eastbank+Esplanade+%26+Hawthorne+Bridge&by=9:00+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:00pm<div style="">
<em>We provide the dance party, you provide the lighting--by wearing your bike lights. Ride begins at 9pm &amp; culminates in a 21+ dance party at a mystery location. Updates at gobybikepdx.com. Suggested fashion: red &amp; white. Accepting volunteers.</em>
<br>John Landolfe, g<span>obybikeevents<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.gobybikepdx.com/">www.gobybikepdx.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3064" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-2975" style="">BIKE SMUT 6: TURNING TRIXXX</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-2975"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/2975.jpg" height="125" width="83.3333333333" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2522+SE+Clinton" target="_BLANK">Clinton Street Theater, 2522 SE Clinton</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2522+SE+Clinton&by=9:15+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
9:15pm<div style="">
<em>The 6th annual WORLD PREMIERE of the only touring festival of erotic bike movies. $7
<br>
<br>This year we have movies from Seattle, San Francisco, London, Berlin, Milan, and beyond. There are no DVDs for sale and it wont be available online. This is the most ethical pornography on earth and it is ONE NIGHT ONLY!</em>
<br>Gasper Johnson, b<span>ikesmut<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bikeporntour.blogspot.com/">Bike Smut</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2975" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="29-3124" style="">BIKE SMUT 6: TURNING TRIXXX</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#29-3124"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2522+SE+Clinton" target="_BLANK">Clinton Street Theater, 2522 SE Clinton</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2522+SE+Clinton&by=11:15+p.m.&on=06/29/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:15pm - 1:15am<div style="">
<em>The 6th annual WORLD PREMIERE of the only touring festival of erotic bike movies. $7
<br>
<br>After doing 118 shows in 23 countries last year we have touched a whole lot of bike perverts! This year we have movies from Seattle, San Francisco, London, Berlin, Milan, and beyond. There are no DVDs for sale and it wont be available online. This is the most ethical pornography on earth and it is ONE NIGHT ONLY!</em>
<br>Gasper Johnson, b<span>ikesmut<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://bikeporntour.blogspot.com/">Bike Smut</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3124" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
<span></span>
</div>
  <div class="hr"></div>
  <h2><a name="June30">Saturday June 30</a></h2>
  <div id="div2012-06-30"><dl>

<dt><a name="30-2528" style="">BIKES FOR HUMANITY VOLUNTEER REPAIR CLINICS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-2528"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4038+SE+Brooklyn+St%2C+Portland" target="_BLANK">Community Exchange Bike School, 4038 SE Brooklyn St, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4038+SE+Brooklyn+St&Dcty=PO&by=10:00+a.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
10:00am - 2:00pm, Every Saturday<div style="">
<em>Bikes For Humanity PDX(B4HPDX) is a community service project aimed at providing the public affordable refurbished bikes, repair classes &amp; workshop space. 
<br>We have 100+ donated used bikes &amp; need volunteers to catalog, clean and refurbish the bikes for bike adoption events.
<br>Shop space has been donated for volunteer training and bike repair. Weekly volunteer clinics every Tuesday &amp; Saturday. &nbsp;For full details see <a href="http://www.b4hpdx.org/" class="smallhref">www.b4hpdx.org</a></em>
<br>Susan, b<span>4hpdx<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.b4hpdx.org/">Bikes For Humanity PDX</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2528" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-3185" style="">BEER FOR BIKE WATCHING DAY 2</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3185"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Overlook+Park%2C+PortlandOverlook+Park%2C+Portland++" target="_BLANK">North American Organic Brewers Festival, Overlook Park, PortlandOverlook Park, Portland  </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Overlook+ParkOverlook+Park++&Dcty=PO&by=11:45+a.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
11:45am, 2 hour shifts per day, throughout the festival.<div style="">
<em>For 2 hours of vigilance, watching over some of the nearly 2000 2-wheeled steeds of those who enjoy some of the finest organic brews in North America, you can earn a mug and 8 tokens (enough for 2 full beers or 8 samples). 
<br>Now in its 25th year, the North American Organic Brewers Festival is one of the largest of its kind on the continent. 
<br>Proceeds benefit the Rotary Club of Portland-Westside Family Food Basket program. 
<br>The festival continues through Sunday, 7/1/12 
<br>Cli</em>
<br>Hal Ballard, b<span>alhallard<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3185" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3109.jpg" height="200" width="200.584795322" align="right" alt="">
<a name="30-3109" style="">ELLIE'S RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3109"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=1945+SE+Water+Ave%2C+Portland" target="_BLANK">OMSI, 1945 SE Water Ave, Portland</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=1945+SE+Water+Ave&Dcty=PO&by=12:30+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Near submarine on Esplanade)</div>
12:30pm, Rolling North about 1pm<div style="">
<em>Fun, slow-paced family ride with kid friendly music &amp; BIG BUBBLES!
<br>
<br>OMSI to a random fountain or 2 downtown for a splashy good time!
<br>
<br>Bring your SWIMSUITS &amp; TOWELS!
<br>
<br>We'll stop briefly for refreshment at some point (Maybe Cool Moon or Sat. Market-Don't forget Cash)
<br>
<br>Not a loop :)
<br>
<br>Note to parents: Please use EXTREME caution if looping back later on your own to OMSI via the Hawthorne Bridge. 
<br>Please ride between your child and the auto lane, better yet double back across the Steel Bridge's lower-deck bikeway.
<br>
<br>Eventually ending <img src="images/at.gif" alt="[at]">MCBF
<br>
<br><strong>Wear Helmets</strong> &amp; <strong>Ride at Own Risk!</strong>
<br>
<br>)'(</em>
<br>Tim, d<span>irtydiablorides<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, 503-847-5564&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3109" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-3204" style="">SE DEPAVE SITES TOUR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3204"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=4311+SE+37th+Avenue" target="_BLANK">4311 SE 37th Avenue</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=4311+SE+37th+Avenue&by=12:30+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Kailash EcoVillage)</div>
12:30pm - 2:00pm<div style="">
<em>Tour recently depaved sites in SE Portland. 5.5 miles of flat terrain, easy pace. Stop at 5 sites and learn about the local movement to re-green our city! Lead by Depave leader Ted Labbe. Ends at MultCo Bike Fair at ~2p.</em>
<br>Ted Labbe, <a href="http://www.depave.org/">Depave</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3204" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-2847" style="">BUDDHAS BY BIKE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-2847"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2539+SE+Madison+St" target="_BLANK">Dharma Rain Zen Center, 2539 SE Madison St</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2539+SE+Madison+St&by=1:00+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (big yellow building- looks like a church)</div>
1:00pm, Talk starts at 1pm. Ride goes until "dinnertime".<div style="">
<em>For cyclists of most levels, and people with any level of interest in Buddhism-from the idly curious to Zen Monk!
<br>
<br>We'll meet, have a quick discussion of the history and sects of Buddhism, then visit a number of active Buddhist groups, centers, and temples in SE Portland.
<br>
<br>The first 5 stops are within 6 blocks, followed by longer rides and dinner at a Buddhist restaurant. Riders may leave according to their ability/time constraints/ interest. 
<br>
<br>No fees, but please bring small bills to donate (all temples are nonprofits), and 12 or so bucks if you'd like dinner.</em>
<br>Koken Mackin, k<span>eidokoken<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2847" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-2877" style="">BIKE LOVE FASHION SHOW RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-2877"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=Southeast+Stark+and+Cesar+Chavez" target="_BLANK">Laurelhurst Park, Southeast Stark and Cesar Chavez</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Southeast+Stark+and+Cesar+Chavez&by=1:00+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Basketball courts)</div>
1:00pm<div style="">
<em>Bike Love Documentary Project will be hosting a bike fashion show at this year's Multnomah County Bike Fair (MCBF). Sport your favorite bike fashion and end your ride at the MCBF for the start of show.</em>
<br>Kara Minnehan, B<span>ikelovedocumentary<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://www.bike-love.org/">Bike Love Documentary</a>, 857-753-6218&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2877" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2775.jpg" height="200" width="143.137254902" align="right" alt="">
<a name="30-2775" style="">MULTNOMAH COUNTY BIKE FAIR</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-2775"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+12th+and+Alder" target="_BLANK">SE Portland, SE 12th and Alder</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+12th+and+Alder&by=2:00+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
2:00pm - 8:00pm<div style="">
<em>Multnomah County Bike Fair! &nbsp;
<br>
<br>Location will be announced in the Pedalpalooza calender.
<br>
<br>MCBF is the Grand ending to Pedalpalooza! &nbsp; 
<br>
<br>Expect the same over the top fun with the Sprockettes performing, Tall Tour Crew mobile performance stage with DMLH, Pedal Home, Team Angst!, Prick Scumbags, Years &amp; Years, and Super Rocks. performing during bike events.
<br>
<br>Did we mention fun &amp; bikes. &nbsp;Bike Jousting, Derby, Relay, Egg and Spoon race, Dropout tractor pull, Bunny hop contest, and more.
<br>
<br>8pm ride to fun After party with Tall Tour crew's mobile sound system.</em>
<br>Freaky Uppity Cycling Kids, s<span>ysfail.dobc<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2775" title="6 messages, newest 2012-06-27"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-3113" style="">BIKE MILWAUKIE: CARTLANDIA DINNER RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3113"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><img src="pp12img/3113.jpg" height="125" width="86.5051903114" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=10722+Southeast+Main+Street+Milwaukie%2C+OR+97222" target="_BLANK">Milwaukie City Hall, 10722 Southeast Main Street Milwaukie, OR 97222</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=10722+Southeast+Main+Street+Milwaukie%2C+OR+97222&by=4:30+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
4:30pm<div style="">
<em>Join Bike Milwaukie for a Cartlandia Dinner Ride
<br>We'll take a casual evening ride out to the Cartlandia food carts for dinner (near 82nd), via the Springwater Trail. &nbsp;After partaking in the various food options we may head a bit farther out the Springwater trail before turning around and heading back to downtown Milwaukie.
<br>The ride starts and ends in front of Milwaukie City Hall. Rain or Shine. &nbsp;This ride is open to all. &nbsp;Bring money to buy yourself dinner.</em>
<br>Bike Milwaukie, <a href="https://www.facebook.com/BikeMilwaukie">https://www.facebook.com/BikeMilwaukie</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3113" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/3219.jpg" height="200" width="266.666666667" align="right" alt="">
<a name="30-3219" style="">VILLAGE BUILDING CONVERGENCE SITE TOUR POTLUCK</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3219"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
<img align="left" src="images/ff.gif" alt="FF" title="Family Friendly">
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=2800+SE+Harrison" target="_BLANK">St. David of Wales Church, 2800 SE Harrison</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=2800+SE+Harrison&by=5:00+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (Meet out front)</div>
5:00pm - 8:00pm<div style="">
<em>Join us in touring 5 Village Building Convergence sites from this past year, sharing food potluck-style along the way! Three of the sites will rally their neighborhood activists and builders to join us in the festivities to talk about their experiences.
<br>Bring a bowl &amp; utensils, as well as anything edible that you'd like to share. There will be food prepared at three main sites, see approximate schedule below:
<br>5pm- Appetizers &amp; salad at VBC Venue - 2800 SE Harrison, St. David of Wales Church
<br>6pm- Main dishes at 16th &amp; Brooklyn Intersection Painting
<br>7:30- Dessert at Buckman Compost</em>
<br>Mikaela Schey, m<span>ikaelashewrote<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://vbc.cityrepair.org/">Village Building Convergence</a>, 608-852-6878&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3219" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-3046" style="">INVASION OF THE BICYCLE SNATCHERS</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3046"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><img src="pp12img/3046.jpg" height="125" width="80.9352517986" align="left" alt="">
<div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=SE+16th+Ave+%26+Harrison+St+" target="_BLANK">Ladds Circle, SE 16th Ave &amp; Harrison St </a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=SE+16th+Ave+%26+Harrison+St+&by=6:30+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a></div>
6:30pm - 8:30pm<div style="">
<em>Set in the distant present, Invasion of the Bicycle Snatchers transports you to a time when men were beautiful and women were strong. The fourth installment of the Working Theatre Collectives wildly popular Pedalpalooza ride, re-imagines 1950&#65533;s science fiction through a Portland inspired lense, complete with alien invasions, government conspiracies and (gasp!) sentient cycles. Pedal down the side streets of Stumptown as this shocking sci-fi thriller unfolds. Audiences will ride to, through, and alongside this summer-evening adventure as it tells it&#65533;s story across a series of locations. FREE</em>
<br>The Working Theatre Collective, t<span>heworkingtheatrecollective<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>, <a href="http://theworkingtheatrecollective.wordpress.com/">theworkingtheatrecollective.wordpress.com</a>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3046" title="0 messages"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt><a name="30-3221" style="">POST-MCBF NAKED RIDE</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-3221"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style=""><a href="http://maps.google.com/?bounds=45.389771,-122.829208|45.659647,-122.404175&q=se+12th+and+alder" target="_BLANK">se 12th and alder</a> <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=se+12th+and+alder&by=7:00+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (in the grass)</div>
7:00pm - 7:30pm<div style="">
<em>one last naked pedalpalooza huzzah! &nbsp;we'll do a brief 30 minute loop and get back to the site in time to latch onto the dropout afterparty ride.
<br>
<br>This was really fun the last 2 times i did it (back when MCBF was at colonel summers) and i missed every single damn daytime naked ride this year so here's a last huzzah to cap off pedalpalooza. &nbsp;no need to rsvp, just show up--we'll be meeting on the grass around 7, rolling by 7:15, back by 7:45</em>
<br>Fool, g<span>ently<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=3221" title="1 message, newest 2012-07-01"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>

<dt>
<img src="pp12img/2989.jpg" height="168.421052632" width="300" align="right" alt="">
<a name="30-2989" style="">MCBF AFTERPARTY HOSTED BY TALL TOUR CREW</a>
<a href="http://shift2bikes.org/cal/viewpp2012.php#30-2989"><img border="0" src="images/chain.gif" alt="Link" title="Link to this event"></a>
</dt><dd><div style="">Eastside Esplanade near Hawthorne , Eastside Esplanade near Hawthorne  <a href="http://trimet.org/go/cgi-bin/plantrip.cgi?to=Eastside+Esplanade+near+Hawthorne+&by=8:00+p.m.&on=06/30/12" target="_BLANK" title="TriMet trip planner"><img alt="Take Trimet" src="images/trimetrose.gif" border="0"></a> (We will ride out at 9pm.)</div>
8:00pm - 2:00am<div style="">
<em>Who wants a rad party and Bar-BQ to end MCBF and Pedalpalooza, well we are going to bring the dance party crew out in full force and a grill. &nbsp; Some might have sound systems and few blinky lights, but our crew of dance party instigators will rattle yr bones plus full on dance party lighting with lazers and disco balls. &nbsp; Riding leaving MCBF at 8pm, meeting on Esplanade from there a short ride at 9 to end spot.</em>
<br>Tall Tour Crew, s<span>ysfail.dobc<img border="0" src="images/at.gif" alt=" at ">gmail<img border="0" src="images/dotcom.gif" alt=" daht comm"></span>&nbsp;&nbsp;<a href="http://shift2bikes.org/cal/calforum.php?id=2989" title="2 messages, newest 2012-06-29"><img border="0" src="images/forum.gif" alt="[forum]"></a>
</div></dd>
</dl>
</div>
<script language="JavaScript" type="text/JavaScript">
      /* fix the title */
      document.title = "Pedalpalooza 2012";
</script>
</div>
<?php
	include(INCLUDES."/footer.html");
?>
