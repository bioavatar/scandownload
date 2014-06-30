<?php
$dir = $_POST['link'];
// Create DOM from URL or file

require_once 'library/simple_html_dom.php';

$html = file_get_html($dir);
// Find all images 
foreach($html->find('img') as $element){ //every image found is declared as $element
       echo $element->src . '<br>';
       $image = $element->src;
      $imglink = $dir . $image;
      $filename = $element->src;
      $parsed_url = parse_url($filename, PHP_URL_PATH);
       //$root = realpath($_SERVER["DOCUMENT_ROOT"]);
       //define ('SITE_ROOT', realpath(dirname(__FILE__)));
       $str = strpos(parse_url($filename, PHP_URL_HOST),NULL) ;
       //$path = SITE_ROOT.$parsed_url;
       if ($str==true) {
	file_put_contents($filename, file_get_contents($imglink));
       }
       else {
	file_put_contents(getcwd(), file_get_contents($image), FILE_USE_INCLUDE_PATH);
	//echo parse_url($filename,PHP_URL_PATH);
       }
      
     
      
}
?>