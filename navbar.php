<!--Navigation bar -->
<div class="container-fullwidth" id="header-container">
	<div class="row" id="header-logo">
		<div class="col-xs-3" id="sing-flag"><b>SGD</b> <img src="images/singapore-flag.png" height="22px" width="35px"  style="border: 1px solid #f3f2f2;"></div>
		<div class="col-xs-6"><center><a href="index.php"><img src="images/HWDesign.png"></center></a></div>
		<div class="col-xs-3"></div>

	</div>

	<div name="nav bar">
		<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <div class="navbar-header">
	     		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	       		<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
     			</button>

   			</div>

   			<div class="collapse navbar-collapse" id="nav-bar">
				<ul class="nav navbar-nav">
				<?php 
					include("categoryList.php");
				?>	
				</ul>
   			</div>
			
		</div>	
		</nav>
	</div>

</div>
<!--Navigation bar ends -->