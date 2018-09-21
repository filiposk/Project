
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
              echo "<button id=\"myBtn\"><i class=\"fas fa-2x fa-sign-in-alt\"></i></button>";
              }
              ?>
          </ul>
      </div>

  </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <form id="myForm" class="callout text-center"  class="small-4 cell" action="autorize.php" method="post">
                <h2>Prijavi se</h2>
                <div class="floated-label-wrapper">
                    <label for="userName">Full name</label>
                    <input type="text" id="userName" name="userName" placeholder="admin">
                </div>

                <div class="floated-label-wrapper">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="pass" placeholder="admin">
                </div>
                <input class="button expanded" type="submit" value="Sign up">
            </form>
            <script>
                function validateForm() {
                    var x = document.forms["myForm"]["fname"].value;
                    if (x == "") {
                        alert("Name must be filled out");
                        return false;
                    }
                }
            </script>
        </div>

    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
