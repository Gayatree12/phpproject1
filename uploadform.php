<?php

class uploadform extends page {
  public function get() {
    $this -> myFile .= '<h1>Web Systems Development: IS601</h1>';
    $this -> myFile .= '<h2>Project 1</h2>';
    $this -> myFile .= '<p><b>Select a file to upload:</b></p>';
    $form = '<form method = "post" enctype = "multipart/form-data">';
    $form .= '<input type = "file" name = "uploadfile" id="uploadfile">';
    $form .= '<input type = "submit" name = "submit" value = "Upload File">';
    $form .= '</form>';
    $this -> myFile .= $form;
  }
  
}