
    <?php
            require_once(PATH_TEMPLATES."include/header.html.php"); 
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
    ?> 
            <!-- zone de connexion -->
            <form id="form1" action="<?=PATH_POST?>" method="POST">
                <input type="hidden" name="controlleurs" value="securite">
                <input type="hidden" name="action" value="conxion">

               

                <div class="div-h1" id="div-h1">
                <h1>Login Form</h1>
                <img  src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."crois.png"?> ">

                </div>
                
                <div class="div-inpu ">
                <?php if (isset($errors['connexion'])):?> 
                        <p style="color:red"  > <?=$errors['connexion'];?></p>
                       <?php endif?> 
                <div class="form-Control" id="div1">
                        <input type="email" placeholder="Login" name="email" id="email" >
                        <img class="im2" src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-login.png"?> ">
                        <small>Error message</small>
                        <?php if (isset($errors['login'])):?> 
                        <p style="color:red"><?=$errors['login'];?></p>
                       <?php endif?> 
                </div>
                     
                <div class="form-Control" id="div2">
                        <input type="password" placeholder="Password" name="password" id="password" >
                        <img class="im2" src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-password.png"?> ">
                        <small>Error message</small>
                        <?php if (isset($errors['password'])):?> 
                        <p style="color:red"><?=$errors['password'];?></p>
                       <?php endif?> 

               </div>
                </div>
                
                <div class="div-submit">
                    <input type="submit" name="submit" id='submit' value='connexion' >
                   <a href="<?= PATH_POST."?controlleurs=securite&action=inscription" ?>">S'inscrir pour jouer</a>
                </div
            </form>
    
    <?php
            require_once(PATH_TEMPLATES."include/footer.html.php"); 
    
   ?> 
   