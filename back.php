<?php
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location: index.php/".$queryString);
        die();
      ?>