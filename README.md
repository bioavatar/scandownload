scandownload
============
This is a PHP application that scans a webpage for images and download them to the server.

What it does is it gets the link from the form and scans for every <img> tags that are in the code. When the app found a 
  <img> tag, it automatically extracts the source and use it to read the file. For the filename, ive used a the URL Host then   a random number, then i took the file type of the image and write it to the server.
