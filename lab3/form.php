<?php
$nameErr = $emailErr = $genderErr = $agreeErr= "";
$name = $email = $gender = $agree= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";}

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 

  if (empty($_POST["agree"])) {
    $agreeErr = "Please agree to the terms and conditions";
  }
  
}
?>
<html>
   <body style="background-image: radial-gradient(circle at top right, #17141d, white);"
            height: 97.5vh;
           >
    <div style="position:relative; width:40%;  border:5px solid black; padding:10px">
    <h1> Registiration Form</h1>
      <h3 >Requierd field <span style="color:red">*</span></h3>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" require/>
         <span class="error" style="color:red">* <?php echo $nameErr;?></span><br><br>
         E-mail: <input type = "email" name = "email" require/>
         <span class="error" style="color:red">* <?php echo $emailErr;?></span><br><br>
         Group#: <input type = "text" name = "group"/><br><br>
         class details: <textarea name="c-details"  cols="30" rows="10"></textarea><br> <br>
         Gender:  
                  <input type="radio" id="f" name="gender" value="Female">
                  <label for="f">Female</label>
                  <input type="radio" id="m" name="gender" value="Male">
                  <label for="m">Male</label>
                  <span class="error" style="color:red">* <?php echo $genderErr;?></span><br>
         Select Courses: <select name="courses[]" multiple="multiple">
               <option value = "php">PHP</option>
               <option value = "js">JS</option>
               <option value = "html">HTML</option>
               <option value = "css">CSS</option>
               <option value = "mysql">MYSQL</option>
            </select><br>
            Agree <input type = "checkbox" name = "agree" require/>
            <span class="error" style="color:red">* <?php echo $agreeErr;?></span><br><br>
         <input type = "submit" />
      </form>
      </div>
   </body>
</html>

<?php 
 if(isset($_POST["submit"]) || isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["group"]) || isset($_POST["c-details"])||isset($_POST["gender"]) || isset($_POST["courses"])){
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["group"]) &&!empty($_POST["c-details"]) &&!empty($_POST["gender"]) &&!empty($_POST["courses"])) {
    echo "Your Data:"."</br>";
    echo "Name: ". $_REQUEST['name']. "<br />";
    echo "Email:". $_REQUEST['email']. " <br>";
    echo "Group#:". $_REQUEST['group']. " <br>";
    echo "Class details:". $_REQUEST['c-details']. " <br>";
    echo "Gender:". $_REQUEST['gender']. " <br>";
    echo "Your courses are:"."<br>";
    foreach ($_POST['courses'] as $course)
    {
      print $course."</br>";
    }
 }}
?>
