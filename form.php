<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
  </head>
  <body bgcolor="#F5EFE7">
    <h1 align="center">Form Application</h1>
    <form action="action.php" method="POST" onsubmit="return validate()">
      <fieldset>
        <legend><h4>Personal Information</h4></legend>
        <label for="f_name">First Name* </label>
        <input type="text" name="f_name" placeholder="Enter your first name" id="fname" required><br><br>
        <label for="l_name">Last Name* </label>
        <input type="text" name="l_name" placeholder="Enter your last name" id="lname" required><br><br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="Male">Male 
        <input type="radio" name="gender" value="Female">Female 
        <input type="radio" name="gender" value="Other">Other 
      </fieldset><br>
      <fieldset>
        <legend><h4>Contact Details</h4></legend>
        <label for="city">City </label>
        <input type="text" name="city" placeholder="Enter your city"><br><br>
        <label for="state">State </label>
        <input type="text" name="state" placeholder="Enter your state"><br><br>
        <label for="country">Country </label>
        <input type="text" name="country" placeholder="Enter your country"><br><br>
        <label for="pincode">Pincode </label>
        <input type="text" name="pincode" placeholder="Enter your pincode" id="pin"><br><br>
      </fieldset><br>
      <fieldset>
        <legend><h4>Identification Documents</h4></legend>
        <label for="aadhar">Aadhar Card </label>
        <input type="file" name="aadhar" placeholder="Aadhar Card No."><br><br>
        <label for="pan">PAN Card </label>
        <input type="file" name="pan" placeholder="PAN Card No."><br><br>
      </fieldset><br>
      <p align="center">
        <input type="submit" value="submit">
        <input type="reset" value="reset">
      </p>
    </form>

    <script>
      function validate(){
        let firstname=document.getElementById("fname").value;
        let lastname=document.getElementById("lname").value;
        let pincode=document.getElementById("pin").value;
        let name=firstname+lastname;
        if(!/^[a-zA-Z]+$/.test(name)){
          alert("Please enter valid name");
          return false;
        }
        if(!/^[0-9]+$/.test(pincode)){
          alert("Enter valid pincode");
          return false;
        }
        else if(pincode.length>6 || pincode.length<6){
          alert("Enter valid pincode");
          return false;
        }
        alert("Form Submitted Successfully");
        return true;
      }
    </script>
  </body>
</html>
