<?php
load_view("Template/top.php",$inp);
load_view("Template/navbarnew.php",$inp);
?>

 <main>
    <div class="container">
      <div class="card-panel">
        <div class="row">
          <div align='center' style='color:red;' ><p><?php echo $loginmsg; ?></p></div>
          <div class="col s12">
            <h3 class="teal-text text-darken-1 center">LogIn</h3>
          </div>
        </div>
        <div class="row center">
          <form class="col s12 m6 offset-m3" method="post"  >
            <div class="row">
              <div class="input-field col s12 m12">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email Id</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12">
                <input id="password" name="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12">
                <button class="btn waves-effect waves-light" type="submit">LOGIN
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>

          <div class="container" style='display:none;' >
            <div class="row">
              <a href="<?php echo BASE."signup" ; ?>" >New User? Create Account</a><br><br>
              <a href="<?php echo BASE."forgotpassword"; ?>" >Forgot Password</a>
            </div>
          </div>
        
      </div>
    </div>
  </main>
<?php
load_view("Template/footernew.php",$inp);
load_view("Template/bottom.php",$inp);
?>
