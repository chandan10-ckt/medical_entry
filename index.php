<!DOCTYPE html>
<html>
<head>
	<title>medical_entry</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body class="medical_form">
	<img src="img\iitg_logo.svg" alt="logo" class="logo" style="width: 120px" style="height: 120px">
	<div class="topbar jumbotron jumbotron-fluid">
		
		<h1> Indian Institute of Technology</h1>
		<h2>Guwahati - 781039</h2>
		

	</div>	



	<div class="title">
		<h1 class="title"> Medical Entry for Freshers</h1>	
		<h4>Please Fill Up This Form</h4>

	</div>
	

<!-- FORM START -->

	<form class="jumbotron jumbotron-fluid" name="myForm" action="include/submit.inc.php" method="POST">
		
<!-- NAME -->
		<div class="row">
			<div class="col-2"></div>	
	    	<label for="Name" class="col-2">Name: </label>
	    	<input type="text"  name ='Name' title="Name" class="col-5" placeholder="Enter Your Name">
	  	</div>

<!-- ROLL NUMBER -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="Rollno" class="col-2">Roll number: </label>
	    	<input type="number"  name ='Rollno' class="col-5" title="Roll Number" placeholder="Enter Your Rollno.">
	  	</div>

<!-- SEX -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="Sex" class="col-2">Sex: </label>
	    	<select name ='Sex' class="col-5" title="Sex" >
	    	 	<option value="M">Male</option>
	  		 	<option value="F">Female</option>
	  		 	<option value="O">Other</option>
			</select>
	  	</div> 	

<!-- DATE OF BIRTH -->	  	

		<div class="row">
			<div class="col-2"></div>	
	    	<label for="dob" class="col-2">Date of Birth: </label>
	    	<input type="text"  name ='dob' class="col-5" title="Your Date of Birth" placeholder="DD/MM/YYYY">
	  	</div>	  	


<!-- BLOOD GROUP -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="bloodgroup" class="col-2">Blood Group:</label>
	    	<select name ='bloodgroup' class="col-5" title="Your Blood Group" >
	    	 	<option value="A+">A+</option>
	  		 	<option value="A-">A-</option>
	  		 	<option value="B+">B+</option>
	  		 	<option value="B-">B-</option>
	  		 	<option value="AB+">AB+</option>
	  			<option value="AB-">AB-</option>
			  	<option value="O+">O+</option>
			  	<option value="O-">O-</option>
			</select>
	  	</div>  	

<!-- HEIGHT -->

	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="height" class="col-2">Height:</label>
	     	<input type="number"  name ='height' class="col-5" title="Height" placeholder="In c.m." >
	  	</div>	  	

<!-- WEIGHT -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="weight" class="col-2">Weight:</label>
	     	<input type="number"  name ='weight' class="col-5" title="Weight" placeholder="In K.g." >
	  	</div>

<!-- IDENTIFICATION MARK -->

		<div class="row">
			<div class="col-2"></div>	
	    	<label for="Id Mark" class="col-2">Idebntification Mark:</label>
	    	<input type="text"  name ='idmark' title="Identification Mark" class="col-5" placeholder="If Any">
	  	</div>


<!-- VACCINATIONS -->

	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="vaccine" class="col-2">Vaccination Record:</label>
	    		<div class="multiselect col-5">
		    		<div class="selectBox" onclick="showCheckboxes()">
		      			<select title="Select Vaccinations">
		        			<option>Select Vaccinations</option>
		      			</select>
		      			<div class="overSelect"></div>
		    		</div>
		    		<div id="checkboxes">
		      			<label for="hep-A">
		        		<input type="checkbox" name="vaccine[]" value="Hepatitis-A" />Hepatitis-A</label>
		      			<label for="hep-B">
		        		<input type="checkbox" name="vaccine[]" value="Hepatitis-B" />Hepatitis-B</label>
		      			<label for="cholera">
		        		<input type="checkbox" name="vaccine[]" value="Cholera" />Cholera</label>
		        		<label for="malaria">
		        		<input type="checkbox" name="vaccine[]" value="Malaria" />Malaria</label>
		        		<label for="rabies">
		        		<input type="checkbox" name="vaccine[]" value="Rabies" />Rabies</label>
		        		<label for="typhoid">
		        		<input type="checkbox" name="vaccine[]" value="Typhoid" />Typhoid</label>
		        		<label for="tetanus">
		        		<input type="checkbox" name="vaccine[]" value="Tetanus" />Tetanus</label>
		    		</div>
		  		</div>
			
	  	</div>



<!-- DISABILITIES -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="disability" class="col-2">Disabilities(If any):</label>
	    		<div class="multiselect col-5">
		    		<div class="selectBox" onclick="showCheckboxes2()">
		      			<select title="Select Disabillities">
		        			<option>Select Disabilities</option>
		      			</select>
		      			<div class="overSelect"></div>
		    		</div>
		    		<div id="checkboxes2">
		      			<label for="physical">
		        		<input type="checkbox" name="disability[]" value="Physical Disability" />Physical Disability</label>
		      			<label for="visual">
		        		<input type="checkbox" name="disability[]" value="Visual Disabillity" />Visual Disabillity</label>
		      			<label for="hearing">
		        		<input type="checkbox" name="disability" value="Hearing Disability" />Hearing Disability</label>
		        		<label for="mental">
		        		<input type="checkbox" name="disability[]" value="Mental Health Disability" />Mental Health Disability</label>
		        		<label for="intellectual">
		        		<input type="checkbox" name="disability[]" value="Intellectual Disability" />Intellectual Disability</label>
		        		<label for="learning">
		        		<input type="checkbox" name="disability[]" value="Learning Disability" />Learning Disability</label>
		        		<label for="able">
		        		<input type="checkbox" name="disability[]" value="No Disability" />No Disability</label>
		    		</div>
		  		</div>
			
	  	</div>	


<!-- HOSTEL -->

	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="hostel" class="col-2">Hostel:</label>
	    	<select  name ='hostel' class="col-5" title="Your Hostel" >
	    	 	<option value="barak">Barak</option>
	  		 	<option value="brahamaputra">Brahamaputra</option>
	  		 	<option value="dhansiri">Dhansiri</option>
	  		 	<option value="dibang">Dibang</option>
	  		 	<option value="dihing">Dihing</option>
	  		 	<option value="kameng">Kameng</option>
			  	<option value="kapili">Kapili</option>
			  	<option value="manas">Manas</option>
			  	<option value="siang">Siang</option>
			   	<option value="subansiri">Subansiri</option>
			  	<option value="umiam">Umiam</option>
			</select>
	  	</div>


<!-- ROOM NUMBER -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="room" class="col-2">Room Number:</label>
	    	<input type="text"  name ='room' class="col-5" title="Your Hostel Room no." placeholder="Enter Your Room No.">
	 	 </div>

<!-- SEMESTER -->	 	 

	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="sem" class="col-2">Semester:</label>
	    	<input type="number"  name ='sem' class="col-5" title="Current Semester" >
	  	</div>
<!-- DEPARTMENT -->
	  	<div class="row">
			<div class="col-2"></div>	
		    	<label for="dept" class="col-2">Department:</label>
		    	<select name ='dept' class="col-5" title="Your Department" >
		    	 	<option value="BSBE">Biosciences and Bioengineering</option>
		  		 	<option value="CSE">Computer Science and Engineering</option>
		  		 	<option value="CL">Chemical Engineering</option>
		  		 	<option value="CST">Chemical Science and Technology</option>
		  		 	<option value="CE">Civil Engineering</option>
		  			<option value="DD">Design</option>
				  	<option value="EEE">Electronics and Electrical Engineering</option>
				  	<option value="ECE">Electronics and Communication Engineering</option>
				  	<option value="HSS">Humanities and Social Sciences</option>
				   	<option value="MA">Mathematics and Computing</option>
				  	<option value="ME">Mechanical Engineering</option>
				  	<option value="EP">Engineering Physics</option>
				</select>
	  	</div>


<!-- CONTACT NUMBER -->
	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="contact" class="col-2">Contact Number:</label>
	     	<input type="number"  name ='contact' class="col-5" title="Your Contact Number" placeholder="Enter Your Contact No.">
	  	</div>

<!-- EMAIL ID -->	  	

	  	<div class="row">
			<div class="col-2"></div>	
	    	<label for="Email" class="col-2">Email:</label>
	    	<input type="Email"  name ='email' class="col-5" title="Your Webmail-ID" placeholder="Enter Yout Email-ID">
	 	</div>	 	 
	  
	  
<!-- SUBMIT -->	  	

	  	<div class="row button">
	  		<div class="col-5"></div>
	  		<button type="submit" name="submit" id="sub">Submit</button>
	  	</div>
	
	</form>

<!-- FORM END -->	

</body>
</html>