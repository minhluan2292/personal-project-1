<div class="modal-dialog">
      <div class="modal-content">
        <div class="box m-a-0">
          <div class="box-row">

            <div class="box-cell col-md-5 bg-primary p-a-4">
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
            </div>

            <div class="box-cell col-md-7">

              <!-- Sign In form -->

              <form action="index.html" class="p-a-4" id="page-signin-form">
                <h4 class="m-t-0 m-b-4 text-xs-center font-weight-semibold">Sign Up new Account</h4>

                <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-person"></i></div>
                  <input type="text" id="username" class="page-signin-form-control form-control" placeholder="Username">
                </fieldset>

                <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-asterisk"></i></div>
                  <input type="password" id="pass" class="page-signin-form-control form-control" placeholder="Password">
                </fieldset>

                 <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-email"></i></div>
                  <input type="email" id="email" class="page-signin-form-control form-control" placeholder="Email">
                </fieldset>


                <button onclick="register()" type="button" class="btn btn-block btn-lg btn-info2 m-t-3">Register</button>
              </form>

<!--               <div class="p-y-3 p-x-4 b-t-1 bg-white darken" id="page-signin-social">
                <a href="index.html" class="btn btn-block btn-lg btn-info font-size-13"><span class="btn-label-icon left fa fa-twitter"></span>Sign In with <strong>Twitter</strong></a>
              </div> -->

              <!-- / Sign In form -->

              <!-- Reset form -->

  <!--            <form action="index.html" class="p-a-4" id="page-signin-forgot-form">
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
              
    -->

              <!-- / Reset form -->

            </div>
          </div>
        </div>
      </div>

<!--       <div class="text-xs-center m-t-2 font-weight-bold font-size-14 text-white" id="px-demo-signup-link">
        Not a member? <a href="pages-signup-v1.html" class="text-white"><u>Sign Up now</u></a>
      </div> -->
    </div>
  <script>
	function register()
	{
		/*var a= document.getElementsByClassName("capchar")[0].innerHTML.trim();
		var b= document.getElementById("cap").value.trim();

		if(a==b)
		{*/
			var user=document.getElementById("username").value;
			var pass=document.getElementById("pass").value;
			var email=document.getElementById("email").value;
			if(user =="" || pass=="" || email =="")
			{
				alert("Khong de trong bat cu cot nao");
			}
			else
			{
				var url="http://l-geniushcmus.rhcloud.com/workspace/hcmus/db/register.php?user="+user+"&pass="+pass+"&email="+email;
	     		var Httpreq = new XMLHttpRequest(); 
	     		Httpreq.open("GET",url,false);
	     		Httpreq.send(null);
	
				window.location.href = 'http://l-geniushcmus.rhcloud.com/workspace/hcmus/?page=contactregister';
			}
	
	}

</script>