<!-- Question number 1  -->
<!DOCTYPE html>
<html>
<body>

<form method="get" action="action.php" target="_blank">
  Email: <input type="text" name="email">
  Password: <input type="password" name="password">
  <input type="submit">
</form>


<!-- Question number 2  -->
<form method="post" action="">
  Website: <input type="url" name="URL" placeholder="https://example.com" pattern="https://.*">
  <input type="submit" value="Go">
</form>

<?php
if (isset($_POST['URL'])) {
  $url = $_POST['URL'];
  header("Location:$url");
}
?>

<!-- Question number 3  -->
<?php
$result = '';

if (isset($_POST['result'])) {
    $first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }}

?>
            <form action="" method="post" id="quiz-form">
                <br>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> 
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> 
                <br>
               <b>Result</b> <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
               <br>
            <input type="submit" name="operator" value="Add" required/>
            <input type="submit" name="operator" value="Subtract" required />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>

<!-- Question number 4  -->
	<form method="post" action="index.php">
		<input type="text" name="task" required>
		<input type="submit" name="addTask" value= "Add Task"/>
        <?php
session_start();
if (isset($_POST["addTask"])) {
    if (isset($_SESSION["tasks"])) {
        array_push($_SESSION["tasks"],$_POST["task"]);
    }else{
        $_SESSION["tasks"] = array($_POST["task"]);
    }
}
if (isset($_SESSION["tasks"])){
    foreach($_SESSION["tasks"] as $task){
        echo "<p>$task</p>";
    }
}
        ?>
	</form>

<!-- Question number 5  -->
<?php
$path= explode('/',$_SERVER['SCRIPT_NAME']);
echo 'project name is: '.$path[1].'<br>';
echo 'script name is: '.$path[2].'<br>';

// Question number 6
echo ' page requested time is: '.$_SERVER['REQUEST_TIME'] . '<br>';

// Question number 7 & 8
if (isset($_SESSION['refresh']))
	$_SESSION['refresh']++;
else
	$_SESSION['refresh'] = 1;

echo 'this page has been refreshed for '.$_SESSION['refresh'].' times'; 

// Question number 9

setcookie("Tasks", "Done", time() + 60 * 60, "/", "http://localhost/superglobals", false, false);
echo "<pre>";
// echo $_COOKIE["Tasks"];
print_r($_COOKIE);
// unset($_COOKIE["Tasks"]);
// setcookie("Tasks", "", time() - 60 * 60); 


?> 



</body>
</html>