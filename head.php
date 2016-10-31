	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		function show() {
		   		document.getElementById('scritta').className='visiblediv'; 
		   		document.getElementById('scrittb').className='hiddendiv';
		   		// document.getElementById('buttonb').className='hiddendiv';
		   		document.getElementById('scrittc').className='showdiv';
		   		// document.getElementById('buttonc').className='showdiv'; 
			}
		function hide() {
		   		document.getElementById('scritta').className='hiddendiv'; 
		   		document.getElementById('scrittb').className='showdiv';
		   		// document.getElementById('buttonb').className='showdiv'; 
		   		document.getElementById('scrittc').className='hiddendiv';
		   		// document.getElementById('buttonc').className='hidediv';
			}
	    function checkPass(){
	        //Store the password field objects into variables ...
	        var pass1 = document.getElementById('password1');
	        var pass2 = document.getElementById('password2');

            var div = document.getElementById('confirm');
            var regBtn = document.getElementById('regBtn');
	        //Store the Confimation Message Object ...
	        var message = document.getElementById('confirmMessage');
	        //Compare the values in the password field 
	        //and the confirmation field
	        if(pass1.value == pass2.value){
	            //The passwords match. 
	            //Set the color to the good color and inform
	            //the user that they have entered the correct password 
	            div.className = "form-group has-success has-feedback";
	            message.innerHTML = "Passwords Match!"
                regBtn.className = "btn btn-success btn-lg"
	        }else{
	            //The passwords do not match.
	            //Set the color to the bad color and
	            //notify the user.
	            div.className = "form-group has-error has-feedback";
	            message.innerHTML = "Passwords Do Not Match!"
                regBtn.className = "btn btn-success btn-lg disabled"
	        }
	    }  
	function goBack() {
    	window.history.back();
	}
	</script>
	<style>
		.visiblediv {
    		display: block;
		}

		.hiddendiv {
    		display: none;
		}
		.navbar-default, .nav-pills .open .dropdown-menu,.navbar-default .navbar-nav .open .dropdown-menu, .list-group .active{
			background-color: #306EFF;
		}	
		.navbar-default .navbar-brand, .navbar-default .navbar-nav li>a, .navbar-default .dropdown a, .nav-pills .open .dropdown-menu>li>a, .navbar-default .navbar-nav .open .dropdown-menu>li>a{
			color: #fff;
		}
		.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus{
			color: #BCC6CC;
		}
		.navbar-default .navbar-nav li>a:hover, .navbar-default .navbar-nav li>a:focus, .navbar-default .navbar-nav .dropdown a:hover,.navbar-default .navbar-nav  .dropdown a:focus, .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover, .nav-pills>li>a:hover,.nav-pills>li>a:focus, .list-group .active:hover{
			color: #fff;
			background-color: #2B65EC;
		}
		.navbar-default .navbar-toggle .icon-bar{
			background-color: #fff;
		}
		.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus, .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{
			background-color: #2B65EC;
		}
		.nav-pills>li>a{
			color: #fff;
			background-color: #306EFF;
		}
		.nav-pills .dropdown-menu>li>a:focus,.nav-pills .dropdown-menu>li>a:hover, .nav-pills .open>a, .nav-pills .open>a:hover, .nav-pills .open>a:focus{
			background-color: #2B65EC;
		}
		.open > .dropdown-menu {
		  -webkit-transform: scale(1, 1);
		  transform: scale(1, 1);
		}
		.open > .dropdown-menu li a {
		  color: #000;  
		}
		.dropdown-menu li a{
		  color: #fff;
		}
		.dropdown-menu {
		  -webkit-transform-origin: top;
		  transform-origin: top;
		  -webkit-animation-fill-mode: forwards;  
		  animation-fill-mode: forwards; 
		  -webkit-transform: scale(1, 0);
		  display: block;
		  
		  transition: all 0.2s ease-out;
		  -webkit-transition: all 0.2s ease-out;
		}
		.dropup .dropdown-menu {
		  -webkit-transform-origin: bottom;
		  transform-origin: bottom;  
		}

		.navbar .nav > li > .dropdown-menu:after {

		}
		.dropup > .dropdown-menu:after {
		  border-bottom: 0;
		  border-top: 6px solid rgba(39, 45, 51, 0.9);
		  top: auto;
		  display: inline-block;
		  bottom: -6px;
		  content: '';
		  position: absolute;
		  left: 50%;
		  border-right: 6px solid transparent;
		  border-left: 6px solid transparent;
		}
		.panel-primary{
			border-color: #306EFF;
		}
		.panel-primary .panel-body{
			padding-left: 30px;
			padding-right: 30px;
		}
		.panel-primary .panel-heading{
			background-color: #306EFF;
		}
		.thumbnail img{
			max-height: 100%;
			max-width: 100%;
		}
		.btn-primary{
			background-color: #306EFF;
		}
		.btn-primary:hover{
			background-color: #2B65EC;
		}
		.btn-danger, .label-danger{
			background-color: #F62817;
		}
		.btn-danger:hover{
			background-color: #E41B17;
		}
		.danger{
			color: #F62817;
		}
	</style>