<div class="modal-dialog"  style="width:400px;">
      <div class="modal-content">
        <div class="box m-a-0">
          <div class="box-row">

<!--             <div class="box-cell col-md-5 bg-primary p-a-4">
              <div class="text-xs-center text-md-left">
                <a class="px-demo-brand px-demo-brand-lg" href="">
                  <span class="px-demo-logo bg-primary m-t-0">
                    <span class="px-demo-logo-1"></span>
                    <span class="px-demo-logo-2"></span>
                    <span class="px-demo-logo-3"></span>
                    <span class="px-demo-logo-4"></span>
                    <span class="px-demo-logo-5"></span>
                    <span class="px-demo-logo-6"></span>
                    <span class="px-demo-logo-7"></span>
                    <span class="px-demo-logo-8"></span>
                    <span class="px-demo-logo-9"></span>
                  </span>
                  <span class="font-size-20 line-height-1">Luan Learning</span></a>
                <div class="font-size-15 m-t-1 line-height-1">Try to best</div>
              </div>
              <ul class="list-group m-t-3 m-b-0 visible-md visible-lg visible-xl">
                <li class="list-group-item p-x-0 p-b-0 b-a-0"><i class="list-group-icon fa fa-sitemap text-white"></i> 1: Learning</li>
                <li class="list-group-item p-x-0 p-b-0 b-a-0"><i class="list-group-icon fa fa-file-text-o text-white"></i> 2. Playing</li>
                <li class="list-group-item p-x-0 p-b-0 b-a-0"><i class="list-group-icon fa fa-outdent text-white"></i> 3. Relaxing</li>
                <li class="list-group-item p-x-0 p-b-0 b-a-0"><i class="list-group-icon fa fa-heart text-white"></i> 4. Loving</li>
              </ul>
            </div> -->

            <div class="box-cell col-md-7">

              <!-- Sign In form -->

              <form action="db/login.php" class="p-a-4" id="page-signin-form" method="post">
                <h4 class="m-t-0 m-b-4 text-xs-center font-weight-semibold">Sign In to your Account</h4>

                <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-person"></i></div>
                  <input name="username" id="username" type="text" class="page-signin-form-control form-control" placeholder="Username or Email">
                </fieldset>

                <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-asterisk"></i></div>
                  <input name="password" id="password" type="password" class="page-signin-form-control form-control" placeholder="Password">
                </fieldset>

                <!--<div class="clearfix">
                  <label class="custom-control custom-checkbox pull-xs-left">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    Remember me
                  </label> 
                  <a href="?page=register" class="font-size-12 text-muted pull-xs-right" id="page-signin-forgot-link">Register</a> 
                </div>-->
                <a href="?page=register">Register</a> 

                <button type="submit" class="btn btn-block btn-lg btn-info2 m-t-3">Sign In</button>
				<div id="lblwrong"  style="margin-bottom:0px;">

            	</div>

              </form>

<!--               <div class="p-y-3 p-x-4 b-t-1 bg-white darken" id="page-signin-social">
                <a href="index.html" class="btn btn-block btn-lg btn-info font-size-13"><span class="btn-label-icon left fa fa-twitter"></span>Sign In with <strong>Twitter</strong></a>
              </div> -->

              <!-- / Sign In form -->

              <!-- Reset form -->

              <form action="index.html" class="p-a-4" id="page-signin-forgot-form">
                <h4 class="m-t-0 m-b-4 text-xs-center font-weight-semibold">Password reset</h4>

                <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-at"></i></div>
                  <input type="email" class="page-signin-form-control form-control" placeholder="Your Email">
                </fieldset>

                <button type="submit" class="btn btn-block btn-lg btn-primary m-t-3">Send password reset link</button>
                <div class="m-t-2 text-muted">
                  <a href="#" id="page-signin-forgot-back">← Back</a>
                </div>
              </form>

              <!-- / Reset form -->

            </div>
          </div>
        </div>
      </div>

<!--       <div class="text-xs-center m-t-2 font-weight-bold font-size-14 text-white" id="px-demo-signup-link">
        Not a member? <a href="pages-signup-v1.html" class="text-white"><u>Sign Up now</u></a>
      </div> -->
    </div>

<!-- <script>
	function login()
	{
		var user=document.getElementById("username").value;
		var pass=document.getElementById("password").value;

		var url="https://luanhuynh.herokuapp.com/db/account.php?id="+user+"&pass="+pass;
     	var Httpreq = new XMLHttpRequest(); 
     	Httpreq.open("GET",url,false);
     	Httpreq.send(null);
     	var obj= Httpreq.responseText;          
      	var json_obj = JSON.parse(obj);
      	if(json_obj.check=="failed" || json_obj.state=="0")
      	{
      		var lbl=document.getElementById("lblwrong");
			lbl.innerHTML="Wrong user or pass !";
			lbl.className="alert alert-danger";
      	}
      	else
      	{   
      		localStorage.setItem('username', json_obj.id);
      		/*var lbl=document.getElementById("lblwrong");
			lbl.innerHTML="id:"+ json_obj.id +" pass: "+ json_obj.pass +" email: "+ json_obj.email;
			lbl.className="alert alert-danger";*/
			window.location.href = 'https://luanhuynh.herokuapp.com?page=help_view';
      	}
	}
</script> -->

