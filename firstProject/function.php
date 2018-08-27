<?php

function l($variable){
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
}
/* 3 param string, no return value, active color */
function itemNavigation($pathAPP, $page, $label){
    ?>
    <li<?php
    if ($pathAPP . $page == $_SERVER["PHP_SELF"]){
        echo " class=\"active\"";
    }
    ?>><a href="<?php echo $pathAPP . $page; ?>"><?php echo $label;  ?></i></a></li>
    <?php
}