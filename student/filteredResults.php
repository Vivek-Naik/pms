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
<div class="container-fluid">
        <div class="row">
        <div id="imageContainer">
    	<img id="img2" src="../images/applyicon.png" width="600px" style="position: absolute; position: fixed; z-index: 1; margin-left: 55%; margin-top: 10vh;">
        <img src="../images/apply.png" id="img1">
    </div>
    </div>
    <div id="companiesAvailable" class="col-md-6" style="position: absolute; position: fixed; z-index: 1; margin-right: 60%; margin-top: 18vh;">
    
    <?php
        // Retrieve values from the form submission
        $selectedCompanyType = $_GET['ctype'];
        $selectedJobRole = $_GET['jobOptions'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "placement";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM company WHERE type = '$selectedCompanyType' AND Role = '$selectedJobRole' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display the companies
            echo "<div style='text-align:left'>";
            echo "<h1 >Companies Available:</h1>";
            echo '<ul style="list-style: number;">';

            while ($row = $result->fetch_assoc()) {
                echo '<li style="font-size:25px;font-family: "Arial", sans-serif;">' ;
                echo '<h3>' . $row["name"] . '</h3>';
                echo '</li>';
            }
    
            echo '</ul>';
    
            // Display the form
            echo '<form action="check.inc.php" method="POST">';
            echo '<div class="form-group col-md-6">';
            echo '<label for="exampleInputEmail1">Select a Company</label>';
            echo '<select class="custom-select" name="company">';
    
            // Reset the result pointer to the beginning of the list
            $result->data_seek(0);
    
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
            }
    
            echo '</select>';
            echo '</div>';
            echo '<div class="form-group col-md-6">';
            echo '<input class="btn" type="submit" name="check" value="Check Eligibility" style="width: 150px; color: white;
            font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);">';
            echo '</div>';
            echo '</form>';
            echo "</div>";
        } else {
            // Display message if no matching companies found
            echo "<h2>No companies found for the selected filters. Please try again with different options.</h2>";
            echo"<br>";
            echo '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="category.php" align="center" class="btn btn-sm btn-danger" style="font-size: 20px;">Check for other</a>';

        }
        echo "</div>";

        $conn->close();

    ?>

</div>
    </div>
    
    <?php include_once 'includes/footer.php' ?>
    <script type="text/javascript" src="includes/jquery31.js"></script>
    <script>
      $(document).ready(function() {
         $("#add").removeClass("active");
        $("#cat").addClass("active");
        $("#heart").click(function() {
            $("#heart").toggleClass("far fa-heart");
            $("#heart").toggleClass("fas fa-heart");
        })
      });
    </script>
    <!-- Add your footer or additional content here if needed -->
</body>
</html>
