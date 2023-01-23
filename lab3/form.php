<?php
$nameErr = $emailErr = $genderErr = $agreeErr= "";
$name = $email = $gender = $agree= $details= $group= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }
  else {  
        $name = test_input($_POST["name"]); 
        if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {  
            $nameErr = "Only alphabets and white space are allowed";  
        } }    
 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else{
    $email = ($_POST["email"]);
  }
  if (empty($_POST["agree"])) {
    $agreeErr = "Please agree to the terms and conditions";
  } else{
    $agree = ($_POST["agree"]);
  }

if (empty($_POST["group"])) {
  $group = "";
} else {
  $group = test_input($_POST["group"]);
}
if (empty($_POST["details"])) {
  $details = "";
} else {
  $details = test_input($_POST["details"]);
}

if (empty($_POST["gender"])) {
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<html>
   <body style="background-image: radial-gradient(circle at top right, #17141d, white); height: 97.5vh;">
    <div style="position:relative; width:40%;  border:5px solid black; padding:10px">
    <h1> Registiration Form</h1>
      <h3 >Requierd field <span style="color:red">*</span></h3>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" value="<?php echo $name;?>" require/>
         <span class="error" style="color:red">* <?php echo $nameErr;?></span><br><br>
         E-mail: <input type = "email" name = "email" value="<?php echo $email;?>" require/>
         <span class="error" style="color:red">* <?php echo $emailErr;?></span><br><br>
         Group#: <input type = "text" name = "group" value="<?php echo $group;?>"/><br><br>
         class details: <textarea name="details"  cols="30" rows="10"><?php echo $details;?></textarea><br> <br>
         Gender:  
         <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
         <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                  <span class="error" style="color:red">* <?php echo $genderErr;?></span><br>
         Select Courses: <select name="courses[]" multiple="multiple" value="<?php echo $courses;?>">
               <option value = "php">PHP</option>
               <option value = "js">JS</option>
               <option value = "html">HTML</option>
               <option value = "css">CSS</option>
               <option value = "mysql">MYSQL</option>
            </select><br>
            Agree <input type = "checkbox" name = "agree" require/>
            <span class="error" style="color:red">* <?php echo $agreeErr;?></span><br><br>
         <input type ="submit"/>
      </form>
      </div>
   </body>
</html>

<?php 

 if(isset($_POST["submit"]) || isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["group"]) || isset($_POST["details"])||isset($_POST["gender"]) || isset($_POST["courses"])){
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["group"]) &&!empty($_POST["details"]) &&!empty($_POST["gender"]) &&!empty($_POST["courses"])) {
      if (preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {   
        echo "Your Data:"."</br>";
        echo "Name: ". $_REQUEST['name']. "<br/>";
        echo "Email:". $_REQUEST['email']. " <br>";
        echo "Group#:". $_REQUEST['group']. " <br>";
        echo "Class details:". $_REQUEST['details']. " <br>";
        echo "Gender:". $_REQUEST['gender']. " <br>";
        echo "Your courses are:"."<br>";
        foreach ($_POST['courses'] as $course)
        {
          print $course."</br>";
        }
 }}}

?>
