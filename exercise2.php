
<html>
    <head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <title>FORM</title>
    </head>
    <style>
    body{
        background-color: teal;
    }
    </style>
    <body>
    <h1> SIMPLE HTML FORM</h1>
    <form action=exercise2.php method="post">

    <b><label for="title"> Title:</label>
        <select name= "intro">
      <option value= 'Mr.'> Mr. </option>
      <option value= "Mrs."> Mrs.</option>
      <option value= "Ms.">Ms.</option>
      <option value= "Dr.">Dr.</option>
      <option value= "Prof.">Prof.</option>
      </select><br>
      
    <p>First Name:</p>
       <input name="first" type="text"><br>
    <p> Family Name: </p>
       <input name="last" type"text"><br>
     <P>  Address: </p>
       <input name="address" type="text"><br>
    <p>Year of Birth:</p>
        <input name="year" type="text"><br><br>
       <input type="submit" value="Submit" name="submit">
 
      
       </form>
       </body>
        <?php
        
        $intro=$_POST['intro'];
        $first=$_POST['first'];
        $last=$_POST['last'];
        $address=$_POST['address'];
        
          if (isset($_POST['submit'])&& isset($_POST['intro'])){
          
        echo "<br>Hello" ." " .$intro. " " .$first ." " .$last ." " ."of". " ".$address. "<br>";
    
        function age(){
        $year=$_POST["year"];
        $curr= 2017;
        $age = $curr -$year;
        echo "You will be " .$age. " " ."this year";
        }
      age();
    }
    
      ?>
    </body>
</html>