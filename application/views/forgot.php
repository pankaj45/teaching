<?php
load_view("Template/top.php");
load_view("Template/navbar.php");
?>
  <main>
    <div class="container">
      <div class="container">
      <div class="card-panel">
        <div class="row">
          <div align='center' style='color:red;' ><p></p></div>
          <div class="col s12">
            <h4 class="teal-text text-darken-1 center" style="font-weight:bold; font-variant: small-caps;">Forgot Password?</h4>
            <p class="teal-text">You will receive the retrieval link shortly on your mail id.</p>
          </div>
        </div>
        <div class="row center">
          <form class="col s12 m12  l12 " method="post">
            <div class="row">
              <div class="input-field col s12 m12">
                <input id="email" name="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12">
                <button class="btn waves-effect waves-light" name="signup" type="submit">Submit
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
    </div>
  </main>
<?php
load_view("Template/footernew.php",$inp);
load_view("Template/bottom.php",$inp);
?>
