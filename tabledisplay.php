<?php
//displaying csv file in html table
class tabledisplay extends page {

  public static function get() {
//reading and printing the entire contents of csv file  
  $row = 1;
  if(($handle = fopen($_GET['filename'],"r")) !== false) {
    echo '<table border="1">';
    while(($getdata = fgetcsv($handle,0,",")) !== FALSE) {
      $number = count($getdata);
      if($row == 1) {
        echo '<thead><tr>';
      }
        else {
          echo '<tr>';
        }
      for($col=0;$col<$number;$col++) {
        $outputvalue = $getdata[$col];
        
        if($row==1) {
          echo '<th>' . $outputvalue . '</th>';
        }
          else {
              echo '<td>' . $outputvalue . '</td>';
          }
      }
      if($row==1) {
        echo '</tr></thead><tbody>';
      }
      else {
        echo '</tr>';
      }
      $row++;
    } 
    echo '</tbody></table>';
    fclose($handle);
  }
}
}