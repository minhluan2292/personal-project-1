<?php
/*session_start();

$_SESSION['captcha'] = mt_rand(0, 10);*/

	/*session_start();

	if (isset($_SESSION['user']))
	{
	
	 	echo $_SESSION['user'];
	
	} 
 	else 
 	{
  		header("Location:?page=login");  
 	}*/
?> 
<div class="modal-dialog" style="width:60%;">
      <div class="modal-content">
        <div class="box m-a-0">
          <div class="box-row">


            <div class="box-cell col-md-7">

              <!-- Sign In form -->

              <form action="index.html" class="p-a-4" id="page-signin-form">
                <h4 class="m-t-0 m-b-4 text-xs-center font-weight-semibold">Add linkedin help find mail</h4>

                <fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="fa fa-linkedin fa-lg"></i></div>
                  <input type="text" id="linkedin" class="page-signin-form-control form-control" placeholder="Linkedin cua nguoi can tim">
                </fieldset>

                <!--<fieldset class="page-signin-form-group form-group form-group-lg">
                  <div class="page-signin-icon text-muted"><i class="ion-asterisk"></i></div>
                  <input type="text" id="name" class="page-signin-form-control form-control" placeholder="Name of you (ten cua ban)">
                </fieldset> -->


				<!--Enter this number:<span class="capchar" style="font-weight:bold;color:red;font-size:18px;"> <?php /*echo $_SESSION['captcha'];echo "   ";*/ ?></span><input id="cap" type="text" name="code" />
 -->               <button type="button"  onclick="addfind()" class="btn btn-block btn-lg btn-info m-t-3">Add</button> 
              </form>


            </div>
          </div>
        </div>
      </div>

 </div>

 <script>
	function addfind()
	{
		/*var a= document.getElementsByClassName("capchar")[0].innerHTML.trim();
		var b= document.getElementById("cap").value.trim();

		if(a==b)
		{*/
			var lk=document.getElementById("linkedin").value;

			var url="https://luanhuynh.herokuapp.com/db/add_find.php?lk="+lk+"&name="+localStorage.username;
     		var Httpreq = new XMLHttpRequest(); 
     		Httpreq.open("GET",url,false);
     		Httpreq.send(null);

			window.location.href = 'https://luanhuynh.herokuapp.com?page=view';
	/*	}
		else
		{
			window.location.href = 'http://l-geniushcmus.rhcloud.com/workspace/hcmus/?page=help_view';
		}*/
	}

</script>