<?php
//displaying csv file in html table
class tabledisplay extends page {

  public static function get() {
//reading and printing the entire contents of csv file 
  $row = 1;
  if(($handle = fopen($_GET['filename'],"r")) !== false) {  //opening a file
    echo '<table border="3">';
    while(($getdata = fgetcsv($handle,0,",")) !== FALSE) {
      $number = count($getdata);
      
      echo ($row==1)? '<thead><tr>' : '<tr>';

      for($col=0;$col<$number;$col++) {
        $outputvalue = $getdata[$col];        
        echo ($row==1)? '<th>' . $outputvalue . '</th>' : '<td>' . $outputvalue . '</td>'; 
      }
      
      echo ($row==1)?'</tr></thead><tbody>':'</tr>';
      $row++;
    } 
    echo '</tbody></table>';
    fclose($handle);  //closing a file
  }
}
}