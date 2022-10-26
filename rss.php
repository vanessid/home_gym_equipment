<?php
include_once("database/connect.php");
$sql = "SELECT * FROM rss_info ORDER BY id DESC LIMIT 3";
 $query = mysqli_query($conn,$sql);
 
 header( "Content-type: text/xml;");
 
 $base_url = "http://localhost/hgm/";

 echo "<?xml version='1.0' encoding='UTF-8'?>". PHP_EOL;
 echo "<rss version='2.0'>" .PHP_EOL;
 echo "<channel>".PHP_EOL;
 echo "<title>Gallery| RSS</title>" .PHP_EOL;
 echo "<link>".$base_url."controllers/rss.php</link>".PHP_EOL;
 echo "<description>Cloud RSS</description>".PHP_EOL;
 echo "<language>en-us</language>" .PHP_EOL;
 
 while($row = mysqli_fetch_array($query)){
  $image_size_array = get_headers($base_url. "images/".$row["image"],1);
  $image_size = $image_size_array["Content-Length"];

  $image_mime_array = getimagesize($base_url. "images/".$row["image"]);

  $image_mime = $image_mime_array["mime"];

   echo "<item xmlns:dc='ns:1'>". PHP_EOL; 
   echo "<title>".htmlspecialchars($row["title"])."</title>".PHP_EOL;
   echo "<link>".$base_url."".htmlspecialchars($row["link"])."</link>" . PHP_EOL;
   echo"<guid>".md5( $row["id"])."</guid>".PHP_EOL;
   echo"<description>".htmlspecialchars($row['description'])."</description>".PHP_EOL;
   echo "<enclosure url='images/".$row["image"]."' length='".$image_size."' type='".$image_mime."'/>". PHP_EOL;
  echo "</item>". PHP_EOL;
  }
 echo "</channel>" . PHP_EOL;
 echo "</rss>" .PHP_EOL;
