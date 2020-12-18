<?php include "includes/head.inc.php";
include_once 'core/init.php';
?>
<?php
   $select_user = new Users();
   $select_user->selectUser();
?>
 <!--User login strart -->
 <form method="POST" action="#">
 <div id="test2" class="col s12">
	 
     <div class="container">
         <div class="row">
         <div class="section"></div>
        <main>
         <center>
          <div class="container">
             <div  class="z-depth-3 y-depth-3 x-depth-3 lighten-4 row" style="display: inline-block; width:65%; color:#ee6e73;font-size: 1.4rem;font-family: bold; background-color: rgb(6 1 1 / 7%) ; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
             <div class="section">LogIn</div>
     
         
           <div class="section"><i class="mdi-alert-error red-text"></i></div>
           
       
                 <div class='row'>
                   <div class='input-field col s12'>
                     <input class='validate' type="text" name='username' id='email' required />
                     <label for='email' style="color: #190808;font-size: 1.2rem;">Username</label>
                   </div>
                 </div>
                 <div class='row'>
                   <div class='input-field col m12'>
                     <input class='validate' type='password' name='password' id='password' required />
                     <label for='password' style="font-size: 1.2rem;color: #190808;">Password</label>
                   </div>
                   <label style='float: right;'>
                   <a><b style="color: #503535;">Forgot Password?</b></a>
                   </label>
                 </div>
                 <br/>
                 <center>
                   <div class='row'>
                     <button style="margin-left:65px;font-family:bold;"  type='submit' name='btn_login' class='col  s6 btn btn-small grey black-text  waves-effect z-depth-1 y-depth-1'>Login</button>
                   </div>
                 </center>
          
             </div>
            </div>
           </center>
           </main>
         
         </div>
     </div>
         </div> 
</form>
          <!--User login end -->
