<!DOCTYPE html>
<html>
<head>
	<title>Login|Apss</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apss login</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="l1.css">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">
		<div class="formbox1">
			<div class="logo" align="center">
				<a href="index.html"><img src="apsslogo.png" width="135px"></a>
			</div>
			<div class="toggle" align="center">
				<button onclick="reg()">Register</button>
				<button onclick="signin()">Sign In</button>
				<div class="btn" id="btn"></div>
			</div>
			<form id="reg" action="apsssignup.php" method="post">
				<input class="input" type="text" name="fname" id="fname" placeholder="First Name"> 
				<span id="fnamewar"></span>
				<input class="input" type="text" name="lname" id="lname" placeholder="Last Name"> 
				<span id="lnamewar"></span>

				<input class="input" type="text" name="email" id="email" placeholder="Email"> 
				<span id="emailwar"></span>

				<input class="input" type="Number" name="phone" maxlength="10" id="phone" placeholder="Phone Number"> 
				<span id="phnwar"></span>

				<input class="input" type="password" name="pass" id="pass" placeholder="Password"> 
				<span id="paswar"></span>

				<input class="input" type="password" name="cpass" id="cpass" placeholder="Confirm Password"> 
				<span id="cpaswar"></span>

				<button type="button" name="submit" class="submit" style="border: 0; width: 100px;margin: 0;border-bottom: 2px solid red;">Submit</button>
			</form>
		</div>
		<div class="formbox1">
			<form id="login" action="apsssignin.php" method="post" style="display: block;right: 0;">
				<input type="text" name="email" placeholder="Email">
				<span id="emailwar1"></span>

				<input type="password" name="password" placeholder="Password">
				<span id="passwar1"></span>

				<button type="button" align="center" name="submit" class="submit1" style="border: 0; width: 100px;margin: 0;border-bottom: 2px solid red;">Submit</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var btn=document.getElementById('btn');
		var login=document.getElementById('login');
		var regis=document.getElementById('reg');
		var delayInMilliseconds = 1000; //1 second
		function signin(){
			btn.style.left='100px';
			login.style.display='block';
			regis.style.display='none';
		}
		function reg(){
			btn.style.left='0px';
			login.style.display='none';
			regis.style.display='block';
		}
	</script>
	<script type="text/javascript" src="jquery.min.js">
	</script>
	<script type="text/javascript">
		$('#fname').change(function(event){
			var form=$('#reg');
			var fname = form.find('input[name="fname"]').val();
			var flen=fname.length;
			if(flen==0)
			{
				$('#fnamewar').text("First Name can't be empty");
				$('#fname').css('border-bottom-color','red');
			}
			else
			{
				$('#fnamewar').text("");
				$('#fname').css('border-bottom-color','#47d147');
			}
		})
		$('#lname').change(function(event){
			var form=$('#reg');
			var lname = form.find('input[name="lname"]').val();
			var llen=lname.length;
			if(llen==0)
			{
				$('#lnamewar').text("Last Name can't be empty");
				$('#lname').css('border-bottom-color','red');
			}
			else
			{
				$('#lnamewar').text("");
				$('#lname').css('border-bottom-color','#47d147');
			}
		})
		$('#email').change(function(event){
			var form=$('#reg');
			var email = form.find('input[name="email"]').val();
			var elen=email.length;
			if(elen==0)
			{
				$('#emailwar').text("Email can't be empty");
				$('#email').css('border-bottom-color','red');
			}
			else
			{
				$('#emailwar').text("");
				$('#email').css('border-bottom-color','#47d147');
			}
			$.post( 'post.php', { 'val': email },
		      function( data ) {
		          window.console && console.log(data);
		          // alert(txt+"exists");
		          if(data==1)
		          {
		          	$('#emailwar').text("Email already exists");
		          	$('#email').css('border-bottom-color','red');
		          }
		          else
		          {
		          	$('#emailwar').text("");
		          	$('#email').css('border-bottom-color','#47d147');
		          }
		      }
	   	 )
		})
		$('#phone').change(function(event){
			var form=$('#reg');
			var phone = form.find('input[name="phone"]').val();
			var plen=phone.length;
			if(plen==0)
			{
				$('#phnwar').text("Phone Number cant be empty");
				$('#phone').css('border-bottom-color','red');
			}
			else
			{
				$('#phnwar').text("");
				$('#phone').css('border-bottom-color','#47d147');
			}
		})
		$('#pass').change(function(event){
			var form=$('#reg');
			var pass = form.find('input[name="pass"]').val();
			var palen=pass.length;
			if(palen<5||palen>15)
			{
				$('#paswar').text("Password must contain 5-15 characters");
				$('#pass').css('border-bottom-color','red');
			}
			else
			{
				$('#paswar').text("");
				$('#pass').css('border-bottom-color','#47d147');
			}
		})
		$('#cpass').change(function(event){
			var form=$('#reg');
			var pass = form.find('input[name="pass"]').val();
			var cpass = form.find('input[name="cpass"]').val();
			var cpass = form.find('input[name="cpass"]').val();
			var palen=pass.length;
			if(palen>=5&&palen<=15&&pass!=cpass)
			{
				$('#cpaswar').text("Password does not match");
				$('#cpass').css('border-bottom-color','red');
			}
			else
			{
				$('#cpaswar').text("");
				$('#cpass').css('border-bottom-color','#47d147');
			}
		})
	</script>
</body>
</html>