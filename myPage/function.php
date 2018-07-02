<?php

function navigationItem($pathAPP, $page, $label){
        ?>
        <li<?php 
        if ($pathAPP . $page == $_SERVER["PHP_SELF"]){
          echo " class=\"active nav-item\"";
        } else {
            echo " class=\"nav-item\"";
        }
        ?>><a href="<?php echo $pathAPP . $page; ?>"><?php echo $label;  ?></i></a></li>
        <?php
}