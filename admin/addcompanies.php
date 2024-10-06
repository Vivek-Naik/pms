<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/addcomp.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
    	<img id="img2" src="../images/walk.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 60%; margin-top: 50vh;">
    </div>
    <img src="../images/add.png" id="img1">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 100px;">Add Company</h1> <br>
    	<form action="php/addcomp.inc.php" autocomplete="off" method="POST">
			<input type="text" style="display: none;" autocomplete="false">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
		        <div class="form-row">
		        	<div class="form-group col-md-6">
			          <label for="cid">Company ID</label>
			          <input type="text" class="form-control" id="cid" name="cid" placeholder="Company ID" disabled>
			        </div>
			        <div class="form-group col-md-6">
			          <label for="cname">Company Name</label>
			          <input type="text" class="form-control" id="cname" name="cname" placeholder="Company Name" required>
			        </div>
		        </div>
		        <div class="form-row">
			        <div class="form-group col-md-6">
			          <label for="ctype">Industry Type</label>
			          <select class="custom-select" id="ctype" name="ctype" placeholder="Company Type" onchange="populateOptions()">
					  <option value="IT">IT</option>
            <option value="Ecommerce">E-commerce</option>
            <option value="Finance">Finance</option>
            <option value="Manufacturing">Manufacturing</option>
            <option value="Education">Education</option>
            <option value="Entertainment">Entertainment</option>
            <option value="Automotive">Automotive</option>
            <option value="Healthcare">Healthcare</option>

			          </select>
			        </div>
					<div class="form-group col-md-6">
					<label for="jobOptions">Select Job Role:</label>
        				<select class="custom-select" id="jobOptions" name="jobOptions">
            			<option value="Select Company Type">Select Company Type</option>
            <!-- Options will be dynamically populated here using JavaScript -->
        			</select>
	<script>
 	function populateOptions() {
            var selectedDomain = document.getElementById("ctype").value;
            var jobOptionsDropdown = document.getElementById("jobOptions");

            // Clear previous options
            jobOptionsDropdown.innerHTML = "";

            // Populate options based on selected domain
            switch (selectedDomain) {
                case "IT":
                    addOption("System Administrator", jobOptionsDropdown);
                    addOption("Network Engineer", jobOptionsDropdown);
                    addOption("IT Support Specialist", jobOptionsDropdown);
                    addOption("Database Administrator", jobOptionsDropdown);
                    addOption("Software Developer", jobOptionsDropdown);
                    addOption("Cybersecurity Analyst", jobOptionsDropdown);
                    break;
                case "Ecommerce":
                    addOption("E-commerce Manager", jobOptionsDropdown);
                    addOption("Product Manager", jobOptionsDropdown);
                    addOption("Digital Marketing ", jobOptionsDropdown);
                    addOption("Customer Support ", jobOptionsDropdown);
                    addOption("UX/UI Designer", jobOptionsDropdown);
                    addOption("Data Analyst ", jobOptionsDropdown);
                    break;
                case "Finance":
                    addOption("Financial Analyst", jobOptionsDropdown);
                    addOption("Investment Analyst", jobOptionsDropdown);
                    addOption("Risk Manager", jobOptionsDropdown);
                    addOption("Accountant", jobOptionsDropdown);
                    addOption("Financial Planner", jobOptionsDropdown);
                    addOption("Compliance Officer", jobOptionsDropdown);
                    break;
                case "Manufacturing":
                    addOption("Production Manager", jobOptionsDropdown);
                    addOption("Quality Control Engineer", jobOptionsDropdown);
                    addOption("Supply Chain Manager", jobOptionsDropdown);
                    addOption("Industrial Engineer", jobOptionsDropdown);
                    addOption("Manufacturing Technician", jobOptionsDropdown);
                    addOption("Operations Manager", jobOptionsDropdown);
                    break;
                case "Education":
                    addOption("Instructional Designer", jobOptionsDropdown);
                    addOption("Educational Technologist", jobOptionsDropdown);
                    addOption("Teacher/Professor", jobOptionsDropdown);
                    addOption("Academic Advisor", jobOptionsDropdown);
                    addOption("Learning Administrator", jobOptionsDropdown);
                    addOption("Curriculum Developer", jobOptionsDropdown);
                    break;
                case "Entertainment":
                    addOption("Game Developer", jobOptionsDropdown);
                    addOption("Artist/Animator", jobOptionsDropdown);
                    addOption("Video Editor", jobOptionsDropdown);
                    addOption("Content Creator", jobOptionsDropdown);
                    addOption("Sound Designer", jobOptionsDropdown);
                    addOption("Entertainment Lawyer", jobOptionsDropdown);
                    break;
                case "Automotive":
                    addOption("Automotive Engineer", jobOptionsDropdown);
                    addOption("Vehicle Design Engineer", jobOptionsDropdown);
                    addOption("Manufacturing Engineer", jobOptionsDropdown);
                    addOption("Supply Chain Manager", jobOptionsDropdown);
                    addOption("Automotive Technician", jobOptionsDropdown);
                    addOption("Car Software Developer", jobOptionsDropdown);
                    break;
                case "Healthcare":
                    addOption("Healthcare IT Specialist", jobOptionsDropdown);
                    addOption("Health Informatics Analyst", jobOptionsDropdown);
                    addOption("Medical Researcher", jobOptionsDropdown);
                    addOption("Nurse Informaticist", jobOptionsDropdown);
                    addOption("Health Data Analyst", jobOptionsDropdown);
                    addOption("Telemedicine Specialist", jobOptionsDropdown);
                    break;
                default:
                    // Default case, add a generic option
                    addOption("Select a Domain first", jobOptionsDropdown);
            }
        }

        function addOption(text, dropdown) {
            var option = document.createElement("option");
            option.text = text;
            dropdown.add(option);
        }
</script>

			        </div>
		        </div>

		        <div class="form-row">
			        <div class="form-group col-md-6">
			          <label for="exampleInputEmail1">Status</label>
			          <select class="custom-select" name="status">
			          	<option value="Active">Active</option>
			          	<option value="Inactive">Inactive</option>
			          </select>
			        </div>
		        	<div class="form-group col-md-6">
			          <label for="telephone">Phone</label>
			          <input type="tel" pattern="^\d{10}$" class="form-control" id="cname" name="telephone" required>
			        </div>
		        </div>
		        <div class="form-row">
					<div class="form-group col-md-6">
			          <label for="website">Website</label>
			          <input type="text" class="form-control" id="website" name="website" placeholder="Website" required>
			        </div>

              <div class="form-group col-md-6">
        <label for="minperc">Minimum Percentage</label>
        <select class="custom-select" name="minperc">
          <option value="80">80%</option>
          <option value="70">70%</option>
          <option value="60">60%</option>
          <option value="50">50%</option>
        </select>
        </div>
	</div>

		        <div class="form-row justify-content-center">
		        	<button type="submit" class="btn" name="add" style="width: 250px; color: white;
									font-weight: bold; background: linear-gradient(to left, #4B83EA, #504EC2);">Add Company</button>
		        </div>
		      </div>
		    </div>
		  </form> 
    </div>
    <?php include_once 'includes/footer.php' ?>
		<script>
			var a = document.getElementById("telephone").value;
			function f() {
					if (a.length > 10) {
						alert("Numbers must be equal to 10 digits");
					}	
			}
		</script>
</body>
</html>