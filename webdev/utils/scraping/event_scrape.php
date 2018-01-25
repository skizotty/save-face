<?php
   $link = "http://showlistaustin.com/cgi/genpage.cgi?venue=barracuda";
   $linkcontents = file_get_contents($link);
   $delimiters = 'tyle="color:maroon;">';
   $events = array();
   $events = explode($delimiters, $linkcontents);
   $length = count($events);
   echo "<table>";
   for ($i = 1; $i < $length; $i++) {
    echo "<tr><td>".$i."</td><td> ".$events[$i]."</td></tr>";
   }
   echo "</table>";

?>