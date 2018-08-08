<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
        <?php
        itemNavigation($pathAPP,"index.php","Index");
        if(isset($_SESSION["o"])):
            itemNavigation($pathAPP,"private/controlBoard.php","Nadzorna ploča");
        endif;
        itemNavigation($pathAPP,"aboutUs.php","O nama");
        itemNavigation($pathAPP,"contact.php","Kontakt");

        ?>

    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
        <a <input class="button"  href="<?php echo $pathAPP; ?>login.php" type="submit" > Prijava </a>
    </ul>

      <div class="top-bar-right">
          <ul class="menu">
              <?php if(isset($_SESSION["o"])): ?>
                  <li style="width:100%; text-align: center;"><a href="<?php echo $pathAPP; ?>logout.php">Odjava</a></li>

              <?php endif?>
          </ul>
      </div>

  </div>
</div>
