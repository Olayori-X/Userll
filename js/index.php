

<!DOCTYPE html>
<html lang="en">
<head>

<title>ShowTech</title>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-1.12.4.js"> </script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="Css.css">
<script src="js/jquery3.min.js"></script>
</head>

<body>
	
	<div class="container-fluid">
		<div class="col-sm-1">	</div>
	<div class="col-sm-10">	


		<div class="row" style="background-color:rgb(124,147,214)">
		
			 <div class="col-sm-3"><img src="img/man1.png" class="img-circle" alt="Cinque Terre" width="150px" height="150px"></div>
			  <div class="col-sm-9"  ><h1><font color="white" > <img src="img/tutor.png" class="img-rectangle" alt="Cinque Terre" width="550px" height="100px"></font></h1></div>
			  <p><font color="white">.......Showing you the real programming world....</font></</p> 
									
		</div>
		<br>
				<!-- Begin Slides-->  
		<div class="row" >
			
		<div class="col-sm-12" align="center" >		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>

					  <!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="img/imgps.png" alt="Projects and Seminars" >
						  
						</div>

						<div class="item">
						  <img src="img/imgp.png" alt="Programming">
						  
						</div>

					<div class="item">
					  <img src="img/imgn.png" alt="Networking">
					  
					</div>

					<div class="item">
					  <img src="img/imgw.png" alt="Web Design">
					  
					</div>
				</div>
			</div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
		</div>				
		</div>
		<!--end Slides-->
		<br>
		<!--Start navigation-->
		<nav class="navbar navbar-inverse" style="background-color:rgb(124,147,214)">
	
								<div class ="container-fluid"  >
									
									<ul class="nav navbar-nav "  >
									  <li class="active"id="navAppps" style="font-color:white;font-weight:bold"><a href="index.php">Home</a></li>
										
										<li class="dropdown" id="navAppps">
											<a class="dropdown-toggle" data-toggle="dropdown" href="tutor.php">Tutorials
											<span class="caret"></span></a>
											<ul class="dropdown-menu">
											  <li ><a href="program.php">Programming</a></li>
											  <li ><a href="Networking.php">Networking</a></li>
											  <li ><a href="engineering.php">Engineering</a></li> 
											  <li ><a href="web.php">Web Development</a></li> 
											</ul>
										</li>
									   <li style="font-color:white;font-weight:bold" id="navAppps"><a href="project.php">Projects Topics</a></li> 
									   <li style="font-color:white;font-weight:bold" id="navAppps"><a href="semenars.php">Semenars Topics </a></li>
									   <li style="font-color:white;font-weight:bold" id="navAppps"><a href="#">Ads </a></li>
									</ul>
											<form class= "navbar-form navbar-left" role="search" action="index.php" Method="post">
													<div class ="form-group">
													<input type="text" class="form-control" placeholder="search"/>
													</div>
													<button type="submit" class ="btn btn-default" name="action" > Search </button>
										  </form>
										 <!-- <ul class ="nav navbar-nav navbar-right" >
										  
											
											<li style="color:rgb(225,225,225)"><a href="login.php?logout=logout"><span class="glyphicon glyphicon-lock" style="color:rgb(225,225,225)"> </span> Logout</a> Welcome (<?php echo $obj->full_name; ?> )</li>
										  </ul>
										  -->
											<ul class ="nav navbar-nav navbar-right" >
																			 
												<li><a href=""  data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-user" style="color:rgb(225,225,225)"> </span> Sign Up</a></li>
												<?php if (isset($_SESSION['objl'])){ $obj = unserialize($_SESSION['objl']); ?>
												
												<li style="color:rgb(225,225,225)"><a href="index.php?logout=logout"><span class="glyphicon glyphicon-lock" style="color:rgb(225,225,225)"> </span> Logout</a> Welcome (<?php echo $obj->full_name; ?> )</li>
												
												<?php }else{ ?>
												<li style="color:rgb(222,189,96)"><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-lock" style="color:rgb(222,225,225)"> </span> Login </a><?php echo $error_message; ?> </li> 	
												<?php } ?>
																			
											</ul>
											
		 </div>
								 		
	</nav>
		
		<p style="background-color:rgb(124,147,214)"> </p>
		
		
		<!--End navigation-->
		<!---------------------------------------------- Modal Login In Begining -------------------------------->


				<!-- Modal -->

				<div id="myModal1" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h4 class="modal-title" align="center" ><b> Login Forum</b></h4>
					  </div>
					  
						<div class="modal-body">
					  <!-- begin login modal-->
					  
							<form role="form" class="form-horizontal" action="index.php" method="post" >
								<div class="form-group">
										<label class="control-label col-sm-4">Email: </label>
										<div class="col-sm-8">
										  <input type="email" class="form-control" placeholder="Enter email" name="mail">
										</div>
								</div>
								<div class="form-group">
										<label class="control-label col-sm-4"> Password: </label>
										<div class="col-sm-8">
										  <input type="password" class="form-control" placeholder="Enter password" name ="password">
										</div>
								</div>
									
								 
								  <button type="submit" class="btn btn-info btn-block" name="login" > Log In </button>
								 
							</form>
							</div>
							
						</div>	
					</div>
				</div>
<!---------------------------------------------- Modal Login In Ending -------------------------------->	
											
<!---------------------------------------------- Modal sign up Begining -------------------------------->


				<!-- Modal -->

				<div class="modal fade" id="myModal" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h4 class="modal-title" align="center" ><b>Registration</b></h4>
					  </div>
					  
					<div class="modal-body">
					  <!-- begin login modal-->
							<form role="form" class="form-horizontal" action="index.php" method="post"  enctype="multipart/form-data" >
								<div class="form-group">
										<label class="control-label col-sm-4"> Full Name: </label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" placeholder="Enter Name" value="<?php echo $obj->full_name; ?>" name="full_name">
										</div>
								</div>
								<div class="form-group">
										<label class="control-label col-sm-4"> Password: </label>
										<div class="col-sm-8">
										  <input type="password" class="form-control" placeholder="Enter password" value="<?php echo $obj->password; ?>"name ="password">
										</div>
								</div>
									
								 <div class="form-group">
										<label class="control-label col-sm-4">Confirm Password: </label>
										<div class="col-sm-8">
										  <input type="password" class="form-control"  placeholder="Confirm password" value="<?php echo $c_password; ?>" name="c_password">
										</div>
								</div>
								<div class="form-group">
										<label class="control-label col-sm-4">Email: </label>
										<div class="col-sm-8">
										  <input type="email" class="form-control" placeholder="Enter email" value="<?php echo $obj->email; ?>" name="email">
										</div>
								</div>
								<div class="form-group">
											  <label class="control-label col-sm-4"> Sex:</label>
											  <div class="col-sm-8"> 
											  <select class="form-control" name="Sex"  placeholder="Enter Sex">
												<option>Male</option>
												<option>Female</option>
											  </select>
											  </div>
								</div>
								
								<div class="form-group">
										<label class="control-label col-sm-4">Phone Number: </label>
										<div class="col-sm-8">
										  <input type="text" class="form-control"  placeholder="Enter Phone Number" value="<?php echo $obj->phone_number; ?>" name="Phone">
										</div>
								</div>
								<div class="form-group">
										<label class="control-label col-sm-4"> Address: </label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" placeholder="Enter Address" value="<?php echo $obj->address; ?>" name="Address">
										</div>
								</div>
							
								<div class="form-group">
										<label class="control-label col-sm-4"> Choose Picture: </label>
										<div class="col-sm-8">
										 <label for="fileField"></label>
										<input type="file" name="pix" id="fileField" />
										</div>
								</div>
								 
								  <button type="submit" class="btn btn-info btn-block" name="submit" >Sign up</button>
								 
							</form>
							</div>
						</div>			
					</div>	
				</div>
<!---------------------------------------------- Modal sign up Ending -------------------------------->
		
					<br>

				
				<br>
				<p><?php echo $errormsg?></p>
			
	 <div class="col-sm-8">
						<ul class="nav nav-pills " style="margin-top:20px;margin-bottom:20px ;background-color:rgb(217, 237, 247); color:white" >
						
								  <li class="active"><a data-toggle="pill" href="#prog" id="aa">PROGRAMMING</a></li>
								  <li><a data-toggle="pill" href="#netwk">NETWORKING</a></li>
								  <li><a data-toggle="pill" href="#webdv">WEB DEVELOPMENT</a></li>
								 <li><a data-toggle="pill" href="#compEng">COMPUTER ENGINEERING </a></li>
								    
						</ul>
						<div class="tab-content aa" >
							
								  <div id="prog" class="tab-pane fade in active">
									
												<div class="panel panel-default">
															  <div class="panel-heading" ><h3><center> PROGRAMMING </center></h3></div>
																	<div class="panel-body">
																			<h3> What is programming ? </h3>
																			<div class="bodycontent">
																				Programming can be define as the act of writing sequence of codes in order to solve a particular problem.<br>
																				while a Programmer is a person who write the set of codes to solve users dat to day activities.<br>
																				a program can define has already package codes to became a software in other to solve a specific problem. <br>
																				Examples are<br>
																				<br>
																				1.Microsoft Office <br>
																				2.Adobe Photoshop<br>
																				<br>
																			
																			</div>
																				<p><a href="">Read More >>></a></p>
																				
																	</div>
												</div>
								  </div>
								  <div id="netwk" class="tab-pane ">
									
									 <div class="panel panel-default">
												  <div class="panel-heading" ><h3> <center>NETWORKING </center></h3></div>
															<div class="panel-body">
									<div class ="bodycontent">
										<h3> Ethernet Technologies </h3><br/>
											<h4>What is Ethernet?</h4><br/>

											Ethernet is a family of technologies that provides data-linkand physical<br/>
											specifications for controlling access to a shared network medium. <br/>
											It has emerged as the dominant technology used in LAN networking.<br/>
											<p> </P>
											Ethernet was originally developed by Xerox in the 1970s, and operated at2.94Mbps. <br/>
											The technology was standardized asEthernet Version 1by aconsortium of three companies - DEC, <br/>
											Intel, and Xerox, collectively referredto asDIX -and further refined asEthernet IIin 1982.<br/>

											In the mid 1980s, theInstitute of Electrical and Electronic <br/>
											Engineers (IEEE) published a formal standard for Ethernet,<br/>
											defined as theIEEE 802.3standard. The original 802.3 Ethernet operated at 10Mbps, and <br/> 
											successfullysupplanted competing LAN technologies, such as Token Ring.<br/>

											Ethernet has several benefits over other LAN technologies:<br/>
											Simple to install and manage <br/>
											Inexpensive<br/>
											Flexible and scalable<br/>
											Easy to interoperate between vendors<br/>"
																		<p><a href="Networking.php"> More >>></a></p>
									</div>
										</div>
									</div>
								  </div>
								  <div id="webdv" class="tab-pane ">
									
												<div class="panel panel-default">
															  <div class="panel-heading" style="color:rgb(124,147,214)" ><h3> <center> WEB DEVELOPMENT </center> </h3></div>
																		<div class="panel-body">
																		<div class ="bodycontent">
																		HTML stands for Hypertext Markup Language, and it is the most widely used language to
																	write Web Pages.<br><br><br>
																<ul>
																<li>Hypertext refers to the way in which Web pages (HTML documents) are linked
																together. Thus, the link available on a webpage is called Hypertext.</li><br>
																<li> As its name suggests, HTML is a Markup Language which means you use HTML
																to simply "mark-up" a text document with tags that tell a Web browser how to
																structure it to display.</li><br>
																</ul>
																Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between researchers.<br>
																Now, HTML is being widely used to format web pages with the help of different tags
																available in HTML language.<br>
																</div>
																			
																				<p><a href="web.php">Read More >>></a></p>
																		</div>
												</div>
								  </div>
								  
								  <div id="compEng" class="tab-pane ">
									
										<div class="panel panel-default">
												  <div class="panel-heading" style="color:rgb(124,147,214)" ><h3> <center>COMPUTER ENGINEERING </center></h3></div>
															<div class="panel-body">
																<div class ="bodycontent">
																	A computer is an electronic device which accept data through an input devece in a predefined formart,<br>
																	perform arithmetic and logical process under a predefined formart , then present information in a specified<br>
																	formart through an output device.<br>
																	<br>
																	<b>Computer System</b><br>
																	<ul>
																		<li>Hardware system.</li>
																		<li>Software System.</li>
																		<li>Humanware system (Users)</li>
																	</ul>
																	<p><a href="engineering.php">Read More >>></a></p>
																</div>
															</div>
										</div>
								  </div>
						 </div>
						<ul class="nav nav-pills " style="margin-top:20px;margin-bottom:20px ;background-color:rgb(217, 237, 247); color:white" >
						
								  <li class="active"><a data-toggle="pill" href="#proj" id="aa">Available Projects Topics</a></li>
								  <li><a data-toggle="pill" href="#sem"> Available Semimars Topics </a></li>
							
						</ul>
						
						<div class="tab-content aa" >
							
								  <div id="proj" class="tab-pane fade in active">
									
										<ul class="list-group">
										
													<li class="list-group-item">Design and implemention of </li>
													<li class="list-group-item">Design and implemention of Food Menu Directory System</li>
													<li class="list-group-item">Design and implemention of Online shoping cart</li>
													<li class="list-group-item"><a href=""> See More >>></a></li>
													
										</ul>
										
								  </div>
								    <div id="sem" class="tab-pane fade ">
									
										<ul class="list-group">
										
													<li class="list-group-item">Design and implemention of Result Transcript</li>
													<li class="list-group-item">Design and implemention of Food Menu Directory System</li>
													<li class="list-group-item">Design and implemention of Online shoping cart</li>
													<li class="list-group-item"><a href=""> See More >>></a></li>
													
										</ul>
										
								  </div>
						</div>
								
	</div>
			  
		 
			  
			  
			  <div class="col-sm-4">
				  <div class="panel-group">
					  <div class="panel panel-info">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" href="#collapse1">Available Projects</a>
								  </h4>
								</div>
						<div id="collapse1" class="panel-collapse collapse">
							  <ul class="list-group">
								<li class="list-group-item">Design and implemention of Result Transcript</li>
								<li class="list-group-item">Design and implemention of Food Menu Directory System</li>
								<li class="list-group-item">Design and implemention of Online shoping cart</li>
								<li class="list-group-item"><a href=""> See More >>></a></li>
								
							  </ul>
						  
						</div>
					  </div>
					</div>
							<div class="panel-group">
										  <div class="panel panel-info">
													<div class="panel-heading">
													  <h4 class="panel-title">
														<a data-toggle="collapse" href="#seminar">Available Semimars Topics</a>
													  </h4>
													</div>
											<div id="seminar" class="panel-collapse collapse">
												  <ul class="list-group">
													<li class="list-group-item">Design and implemention of Result Transcript</li>
													<li class="list-group-item">Design and implemention of Food Menu Directory System</li>
													<li class="list-group-item">Design and implemention of Online shoping cart</li>
													<li class="list-group-item"><a href=""> See More >>></a></li>
												  </ul>  
											</div>
										  </div>
							</div>
							<!---- tab----->
							
							
							
							
							<!---tab End---->
							
							
							
							
						<ul class="nav nav-pills " style="margin-top:20px;margin-bottom:20px ;background-color:rgb(217, 237, 247); color:white" >
						
								  <li class="active"><a data-toggle="pill" href="#technew" id="aa">Tech News</a></li>
								  <li><a data-toggle="pill" href="#freedata">Free Data</a></li>
								  <li><a data-toggle="pill" href="#compTips">Computer Tips</a></li>
								 
								    
						</ul>
						
						
						<div class="tab-content aa" >
							
								  <div id="technew" class="tab-pane fade in active">
									
									<li class="list-group-item" > <div id="net"> <a href ="news.php">Transparent Phone</a></div></li>
									<li class="list-group-item"><div id="cable"><a href="news.php">Hand Band Computer Tech</a></div></li>
									<li class="list-group-item"><div id="topo"><a href="news.php">Light Keyboard</a></div></li>
									<li class="list-group-item"><div id=""><a href="news.php">Robot</a></div></li>
								
									
								  </div>
								  <div id="freedata" class="tab-pane ">
									
									<li class="list-group-item" > <div id="net"><a href="#">MTN, ?</a></div></li>
									<li class="list-group-item"><div id="cable"><a href="#">Types of </a></div></li>
									<li class="list-group-item"><div id="topo"><a href="#">Network Topology</a></div></li>
									<li class="list-group-item"><div id=""><a href="#">Bus Topology</a></div></li>
									<li class="list-group-item"><div id="star"><a href="#">Star Topology</a></div></li>
									
								  </div>
								  <div id="compTips" class="tab-pane ">
									
									<li class="list-group-item" > <div id="net"><a href="#">How to Format</a></div></li>
									<li class="list-group-item"><div id="cable"><a href="#">How to hide your file  </a></div></li>
									<li class="list-group-item"><div id="topo"><a href="#">How to change password on pc</a></div></li>
									<li class="list-group-item"><div id=""><a href="#">How to protect your G mail</a></div></li>
								
									
								  </div>
						 </div>
						 <div class ="panel panel-info bldce">
							 <div class ="panel panel-heading "> Tutorial videos</div>
							 
							 <div class ="panel panel-body">
							 <h4> Andriod Programming Video Tutorial </h4>
									<div class ="embed-responsive embed-responsive-4by3" >
									   <object class="embed-responsive-item" >
										 <video controls >
										    <source src="vid/ba/b4a_audio.mp4" />
										 </video>
									   </object>
									</div>
							 </div>
							  <div class ="panel panel-body">
							  <h4> Window Programming Video Tutorial</h4>
									<div class ="embed-responsive embed-responsive-4by3" >
									   <object class="embed-responsive-item" >
										 <video controls >
										   <source src="calc12.wmv" />
										 
										 </video>
									   </object>
									</div>
							 </div>
							 
							<p><a href="videos.php"> More Videos >>>   </a></p>
						 </div>
						
						
						</div>
							
							
							
						</div>
			
			 		
					
				<!--Advert-->
				
				
<div class="col-sm-12" align="center" >		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>

					  <!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
						<div class="item active">
						  <h1 style="color:rgb(124,147,214)"> Place your Advert here </h1> 
						  
						</div>

						<div class="item">
							<h4 style="color:rgb(124,147,214)">Do you want to be a WEB DESIGNER </h4> 
							<h4 style="color:rgb(124,147,214)">Do you want to Develop a responsive WEB SITE</h4> 
							<h4 style="color:rgb(124,147,214)">Do You Want to Learn how to Develop Andriod Application</h4>
							<h4 style="color:rgb(124,147,214)">Do You Want to Learn how to Develop Windowa Application</h4>
						</div>

					<div class="item">
					
							<h3 style="color:rgb(124,147,214)">Contact SHOW-TECH on  </h3> 
							<h4 style="color:rgb(124,147,214)">Email:	shomorinenny3@gmail.com or  shomorinenny3@yahoo.com</h4> 
							<h4 style="color:rgb(124,147,214)">Phone No: +234(0)7063730332 (Whatsapp)</h4>
					  
					</div>
					<div class="item">
					
							<h3 style="color:rgb(124,147,214)">Contact SHOW-TECH on  </h3> 
							<h4 style="color:rgb(124,147,214)">Email:	shomorinenny3@gmail.com or  shomorinenny3@yahoo.com</h4> 
							<h4 style="color:rgb(124,147,214)">Phone No: +234(0)7063730332 (Whatsapp)</h4>
					  
					</div>
				</div>
			</div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
		</div>

<!---Advrt end-->
					
					
				
<div class="col-sm-1">	</div>
</div>
</body>
</html>