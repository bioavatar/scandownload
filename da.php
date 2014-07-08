<?php
$dir = $_POST['link'];//from the form
// Create DOM from URL or file

require_once 'library/simple_html_dom.php'; //library to be used 

$html = file_get_html($dir);

foreach($html->find('img') as $element){
      
      $image = $element->src;
      $imglink = $dir . $image;
      $host = parse_url($imglink, PHP_URL_HOST); //get the hostname
      $value = explode(".", $image);
      $ext = strtolower(array_pop($value));
      $rand = rand(1000,9999);
      $filenameOut = __DIR__ . "/images/" . $host . "_" . $rand . "." . $ext;
      $filenameOut2 = fopen($filenameOut, "wb");
        $pos = strpos($image, 'data:image');
   		if ($pos===false){
		 $parsing = parse_url($image, PHP_URL_HOST);
 
 			if ($parsing != NULL){
			     $image2 = fopen($image,"rb");
			      fwrite($filenameOut2,fread($image2, 1024 * 8),1024 * 8);
				}
			else{
			      $imglink2 = fopen($imglink, "rb");
			      fwrite($filenameOut2,fread($imglink2, 1024 * 8), 1024 * 8);
				}
  		 }
      
		}


//made by F Pedro Jr.
?>