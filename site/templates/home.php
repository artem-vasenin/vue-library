<?php
   class PageClass {
    public $title = "HomePageMain";
    public $content = "Description homepage";
   };

   $fish  =  new PageClass();

   echo json_encode($fish);
