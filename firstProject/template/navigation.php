<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
        <?php
        itemNavigation($pathAPP,"index.php","<i class=\"fas fa-2x fa-home\"></i>");
        itemNavigation($pathAPP,"aboutUs.php","<i class=\"fas fa-2x fa-info\"></i>");
        itemNavigation($pathAPP,"contact.php","<i class=\"fas fa-2x fa-phone\"></i>");

        if(isset($_SESSION["o"])):
            itemNavigation($pathAPP,"Private/controlBoard.php","<i class=\"fas fa-2x fa-clipboard-list\"></i>");
        ?>
            <li>
                <a href="#"><i class="fas fa-2x fa-edit"></i></a>
                <ul class="menu vertical">
                    <li><a href="<?php echo $pathAPP.'Private/appUser/index.php'?>">Korisnik</a></li>
                    <li><a href="<?php echo $pathAPP.'Private/Ingredient/index.php'?>">Namirnica</a></li>
                    <li><a href="<?php echo $pathAPP.'Private/Recipe/index.php'?>">Recept</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>

  </div>
  <div  class="top-bar-right">
     <div class="top-bar-right">
          <ul  class="menu">
              <?php
              if(isset($_SESSION["o"]))
              {
                  echo "<li><a href='$pathAPP/logout.php'><i class=\"fas fa-2x fa-sign-out-alt\"></i></a></li>";
              }
              else
              {
              echo "<li><a href='$pathAPP/login.php'><i class=\"fas fa-2x fa-sign-in-alt\"></i></a></li>";
              }
              ?>
          </ul>
      </div>

  </div>
</div>
