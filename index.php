
<html>
<head>
<title>PHP User Registration Form</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Sign Up</div>
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>
            <div class="field-column">
                <label>First Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="firstName"
                        value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
                </div>
            </div>

             <div class="field-column">
                <label>Last Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="lastName"
                        value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>">
                </div>
            </div>

            <div class="field-column">
                <label>Middle Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="middleName"
                        value="<?php if(isset($_POST['middleName'])) echo $_POST['middleName']; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Address</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Address"
                        value="<?php if(isset($_POST['Address'])) echo $_POST['Address']; ?>">
                </div>

                 <div class="field-column">
                <label>Date of Birth</label>
                <div>
                    <input type="dateOfBirth" class="demo-input-box"
                        name="userName"
                        value="<?php if(isset($_POST['dateOfBirth'])) echo $_POST['dateOfBirth']; ?>">
                    </div>

                 <div class="field-column">
                <label>Place of Birth</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="placeOfBirth"
                        value="<?php if(isset($_POST['placeOfBirth'])) echo $_POST['placeOfBirth']; ?>">
                    </div>

                    <div class="field-column">
                <label>Gender</label>
                <div>
                   <form>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</form> 
    </div>

         <div class="field-column">
                <label>Guardian</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="Guardian"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                    </div>

                   <div class="field-column">
                <label>Place of Birth</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="placeOfBirth"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                    </div>


                <div class="field-column">
                <label>Civil Status</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="civilStatus"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                    </div>
                </div>
            <div class="field-column">
                <label>Year Level</label>
                <div>
                    <select id="Year">
  <option value="First Year">First Year</option>
  <option value="Second Year">Second Year</option>
  <option value="Third Year">Third Year</option>
  <option value="Fourth Year">Fourth Year</option>
   <option value="Fifth Year">Fifth Year</option>
</select>
        </div>
            </div>

             <div class="field-column">
                <label>Course</label>
                <div>
                    <select id="Course">
  <option value="Information Technology">Information Technology</option>
  <option value="Data Science">Data Science</option>
  <option value="Education">Education</option>
  <option value="audi">Food Technology</option>
   <option value="Psychology">Psychology</option>
</select>

            <div class="field-column">
                <label>School Year</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="firstName"
                        value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
  
            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>