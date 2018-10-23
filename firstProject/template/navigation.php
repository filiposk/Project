
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
        <li><img class="img-logo" src="<?php echo $pathAPP ?>template/logo.png" alt="Logo"></li>
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
              echo "<button id='signInBtn'><a><i class=\"fas fa-2x fa-sign-in-alt\"></i></a></button>";
              }
              ?>
          </ul>
      </div>

  </div>
</div>



<div id="signInModal" class="reveal small" data-reveal>

        <form method="POST" action="autorize.php" accept-charset="UTF-8">
            <h2>Prijava</h2>
            <div class="floated-label-wrapper">
                <label for="userName">Ime</label>
                <input type="text" name="userName" placeholder="admin"/>
            </div>
            <div class="floated-label-wrapper">
                <label for="pass">Lozinka</label>
                <input type="password" name="pass" placeholder="admin"/>

                <input class="button expanded" type="submit" value="Prijavi se">
            </div>
        </form>
    </div>
</div> <!-- #modal_wrapper -->


<script>
    $('.fa-sign-in-alt').click(function () {
        $('#signInModal').foundation("open");
        return false;
    });
</script>

<!--<script>-->
<!---->
<!--    document.addEventListener('DOMContentLoaded', function(){-->
<!--        var reg = document.getElementById('regForm');-->
<!--        button.onclick = reg.display;-->
<!--    }, false);-->
<!---->
<!--    document.addEventListener('DOMContentLoaded', function(){-->
<!--        var button = document.getElementById('btnRegister');-->
<!--        button.onclick = reg.display;-->
<!--    }, false);-->
<!---->
<!---->
<!---->
<!--</script>-->