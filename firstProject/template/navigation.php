
<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
        <img  src="template/logo.png" style="width:70px;height:60px;">
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
              echo "<button><a><i class=\"fas fa-2x fa-sign-in-alt\"></i></a></button>";
              }
              ?>
          </ul>
      </div>

  </div>



    </div>
</div>

