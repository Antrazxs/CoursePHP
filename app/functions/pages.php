<?php
    function loadPages()
    {
        /**
        * ! This function will read the pages in the directory [ ./public/pages ]
        * 
        */
      $pages = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRIPPED);
      $pages = (!$pages) ? 'pages/home.php' : 'pages/'.$pages.'.php';
      if(!file_exists($pages))
          {
          throw new Exception('Oops, this page was not found.');
          }
      return $pages;
  }
?>