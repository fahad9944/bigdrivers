<?php
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location: contactform/".$queryString);
        die();
      ?>

