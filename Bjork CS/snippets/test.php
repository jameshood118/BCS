<?php

$host = "10.6.171.192" ;
$user = "bjorkcs" ;
$pass = "Kotorsw1" ;
$db = "bjorkcs" ;
$table = "test" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$columntext = $row["text"]."";
}


function text2columns ($columntext, $columns, $column_spacing) {
  $coloutput =  "<table border=\"0\" cellpadding=\"$column_spacing\"><tr>\n";
  $bodytext = array("$columntext");
  $text = implode(",", $bodytext); //prepare bodytext
  $length = strlen($text); //determine the length of the text
  $length = ceil($length/$columns); //divide length by number of columns
  $words = explode(" ",$text); // prepare text for word count and split the body into columns
  $c = count($words);
  $l = 0;
  for($i=1;$i<=$columns;$i++) {
    $new_string = "";
    $coloutput .= "<td style=\"text-align:justify\" valign=\"top\">\n";
  for($g=$l;$g<=$c;$g++) {
    if(strlen($new_string) <= $length || $i == $columns)
    $new_string.=$words[$g]." ";
    else {
      $l = $g;
    break;
      }
    }
    $coloutput .= $new_string;
    $coloutput .= "</td>\n";
  }
  $coloutput .= "</tr></table>\n";
  return $coloutput;
}

$textstory = $columntext;

$columns = 4;
$column_spacing = 15;
// magazine cols end
?>


<?php
print text2columns($textstory, $columns, $column_spacing);
?>
