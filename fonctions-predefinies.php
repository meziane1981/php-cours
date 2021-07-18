<?php
  echo date("d/m/Y")."<br>";

  $d = array("Fri, 04 Oct 2019 07:43:11 GMT", "Thu, 03 Oct 2019 16:25:36 GMT", 
  "Thu, 03 Oct 2019 07:10:01 GMT", "Fri, 04 Oct 2019 14:11:12 GMT", 
  "Tue, 01 Oct 2019 15:15:15 GMT", "Thu, 03 Oct 2019 22:05:06 GMT", 
  "Sun, 29 Sep 2019 08:44:18 GMT", "Fri, 04 Oct 2019 14:06:00 GMT", 
  "Thu, 26 Sep 2019 07:38:43 GMT", "Mon, 30 Sep 2019 08:07:05 GMT", 
  "Mon, 30 Sep 2019 22:02:25 GMT", "Wed, 02 Oct 2019 20:00:55 GMT", 
  "Tue, 01 Oct 2019 09:20:48 GMT", "Fri, 04 Oct 2019 08:20:00 GMT", 
  "Tue, 24 Sep 2019 07:00:00 GMT", "Tue, 01 Oct 2019 22:11:36 GMT", 
  "Thu, 03 Oct 2019 08:05:34 GMT", "Fri, 06 Sep 2019 07:00:00 GMT", 
  "Wed, 25 Sep 2019 07:00:00 GMT", "Tue, 01 Oct 2019 14:15:12 GMT");

  foreach($d as $uneDate) {
      echo strtotime($uneDate)."<br>";
  }

  foreach($d as $uneDate) {
    echo date("d/m/Y",strtotime($uneDate))."<br>";
  }


?>