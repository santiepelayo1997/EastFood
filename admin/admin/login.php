<?php
  include "../header.php";
?>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
        </div>
        <div class="card">
              <div class="header bg-blue">
               <center> <img style="width:120px; height:100px;" src="../../images/Logo1.png" alt="logo">
                <br><br><center><b><h4>East Food City Libis Food Park</h4></b></center><br> 
                <h2>Login your account.</h2></center>
              </div>
            <div class="body">
              <br>
                <div class="tab-content">
                 <div role="tabpanel" class="tab-pane animated flipInX active"> 
              <form id="sign_in_student" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control disabletype" name="studentid" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control disabletype" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                      <br>
                      <div class="col-xs-8">
                           <button  style="margin-left:62px;" class="btn btn-block btn-lg bg-blue waves-effect disabletype" type="submit" name="login_student">SIGN IN</button>
                        </div>
                    </div>
              </form>
             </div>
             </div>
         </div>
    </div>
</div>
<?php
  include "../footer.php";
?>
