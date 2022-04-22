<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Attendance</title>
        <link rel="shortcut icon" type="image/png" href="img/fav_mini.png"/>
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
 
    <script src="assests/jquery-1.11.1.min.js"></script>
    <script src="assests/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dob" ).datepicker({
        changeMonth:true,
        changeYear:true,
        yearRange: "-100:+0",
        dateFormat: "yy-mm-dd"
    });
  } );
  </script>
        
    </head>
    
    <body>


		<header>
			
			<div class="main-header large-12 columns no-padding">

				<div class="global-page-container">
				
					<div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
						<a href="index.php" title="home">
							<div class="table">
								<div class="table-cell">
                                   <h1> <span class="square">&nbsp;</span>Attendance</h1>
								</div>
							</div>
						</a>
					</div>

					<div class="main-menu show-for-large-up large-9 columns text-right">		
						<div class="table">
							<div class="table-cell">
								<ul class="menu-items">
									<li><a href="viewattandance.php">View Attandance</a></li>
           
								</ul>
							</div>
						</div>
					</div>
					
					<div id="hamburguer-icon" class="hamburguer-icon small-2 columns text-right">
                        <div class="table">
                            <div class="table-cell">
                                <img src="img/menu/hamburguer.svg">
                            </div> 
                        </div>
					</div>

					<div class="right-space small-1 columns"></div>

				</div>
			</div>			
					
            <div id="sliding-header-menu-outer" class="sliding-header-menu-outer">						
                <div class="sliding-header-menu">
                    
                    <div id="sliding-header-menu-close-button" class="sliding-header-menu-close-button small-12 columns">
                        <div class="table">
                            <div class="table-cell">
                                <img class="close-icon" src="img/menu/close.svg">
                            </div>	
                        </div>	
                    </div>

                    

                    <div class="sliding-header-menu-main-menu small-12 columns">
                        
                        <div class="table">
                            <div class="table-cell">
                                <ul class="sliding-header-menu-li">
                                    <li><a href="index.html#about-us">About</a></li>
									<li><a href="index.html#servicos">Services</a></li>
									<li><a href="index.html#contact-us">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>                           
                </div>
           
		</header>