
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
              echo "<button id='modal_open'><a><i class=\"fas fa-2x fa-sign-in-alt\"></i></a></button>";
              }
              ?>
          </ul>
      </div>

  </div>



    </div>
</div>



<div id="modal_wrapper">
    <div id="modal_window">

        <div style="text-align: right;"><a id="modal_close" href="#"><b>X</b></a></div>



        <form id="modal_feedback" method="POST" action="autorize.php" accept-charset="UTF-8">
            <h2>Prijava</h2>
            <div class="floated-label-wrapper">
                <label for="userName">Ime</label>
                <input type="text"  name="userName" placeholder="admin">
            </div>
            <div class="floated-label-wrapper">
                <label for="pass">Lozinka</label>
                <input type="password" name="pass" placeholder="admin">


            <input class="button expanded" type="submit"  value="Prijavi se">
        </form>

    </div> <!-- #modal_window -->
</div> <!-- #modal_wrapper -->

<script type="text/javascript">

    // Original JavaScript code by Chirp Internet: www.chirp.com.au
    // Please acknowledge use of this code by including this header.

    var checkForm = function(e)
    {
        var form = (e.target) ? e.target : e.srcElement;
        if(form.name.value == "") {
            alert("Please enter your Name");
            form.name.focus();
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
            return;
        }
        if(form.email.value == "") {
            alert("Please enter a valid Email address");
            form.email.focus();
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
            return;
        }
        if(form.message.value == "") {
            alert("Please enter your comment or question in the Message box");
            form.message.focus();
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
            return;
        }
    };

</script>
<script type="text/javascript">

    // Original JavaScript code by Chirp Internet: www.chirp.com.au
    // Please acknowledge use of this code by including this header.

    var modal_init = function() {

        var modalWrapper = document.getElementById("modal_wrapper");
        var modalWindow  = document.getElementById("modal_window");

        var openModal = function(e)
        {
            modalWrapper.className = "overlay";
            var overflow = modalWindow.offsetHeight - document.documentElement.clientHeight;
            if(overflow > 0) {
                modalWindow.style.maxHeight = (parseInt(window.getComputedStyle(modalWindow).height) - overflow) + "px";
            }
            modalWindow.style.marginTop = (-modalWindow.offsetHeight)/2 + "px";
            modalWindow.style.marginLeft = (-modalWindow.offsetWidth)/2 + "px";
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        };

        var closeModal = function(e)
        {
            modalWrapper.className = "";
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        };

        var clickHandler = function(e) {
            if(!e.target) e.target = e.srcElement;
            if(e.target.tagName == "DIV") {
                if(e.target.id != "modal_window") closeModal(e);
            }
        };


        var keyHandler = function(e) {
            if(e.keyCode == 27) closeModal(e);
        };

        if(document.addEventListener) {
            document.getElementById("modal_open").addEventListener("click", openModal, false);
            document.getElementById("modal_close").addEventListener("click", closeModal, false);
            document.addEventListener("click", clickHandler, false);
            document.addEventListener("keydown", keyHandler, false);
        } else {
            document.getElementById("modal_open").attachEvent("onclick", openModal);
            document.getElementById("modal_close").attachEvent("onclick", closeModal);
            document.attachEvent("onclick", clickHandler);
            document.attachEvent("onkeydown", keyHandler);
        }

    };

</script>
<script type="text/javascript">

    if(document.addEventListener) {
        document.getElementById("modal_feedback").addEventListener("submit", checkForm, false);
        document.addEventListener("DOMContentLoaded", modal_init, false);
    } else {
        document.getElementById("modal_feedback").attachEvent("onsubmit", checkForm);
        window.attachEvent("onload", modal_init);
    }

</script>