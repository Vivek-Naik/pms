<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <?php include_once 'includes/nav.php' ?>
    <h1 align="center">Select Job Category</h1> <br> <br>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Division for Image -->
            <div class="col-md-6">
            <img id="img2" src="../images/feedicon.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 60%; margin-top: 0vh;">
            </div>
           
    
    <div class="col-md-6" style="position: absolute; position: fixed; z-index: 1; margin-right: 60%; margin-top: 18vh;">
    <form id="filterForm" action="filteredResults.php" method="GET" style="margin: 20px;">
    <div class="form-row text-center">
                        <div class="form-group col-md-6">
                <label for="ctype">Company Type:</label>
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
                    addOption("Multimedia Artist/Animator", jobOptionsDropdown);
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
      <br>
      <br>
      <div align="center">
        <button type="submit"  align="center" class="btn btn-sm btn-danger" style="font-size: 20px;">Apply Filter</button>
        </form>
      </div>
      </div>
      </div>


    <?php include_once 'includes/footer.php' ?>
    <script>
        $(document).ready(function() {
            $("#home").removeClass("active");
            $("#apply").addClass("active");
        });
    </script>
</body>
</html>
