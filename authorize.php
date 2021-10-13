<?php
ob_start(); //research the use of this
session_start(); //needed to create sessions - maintaining state is discussed above.
ini_set('display_errors', 1); //turn on errors, use for debugging.

$username = $_POST['username']; //refer to the superglobal arrays section above
$password = $_POST['password'];;
$authorized = false;

require ('fill in correct path to database connection file');

$sql = 'SELECT * from Login';

$rs = $conn->Execute($sql);

//Using a While looping structure to check each record in the database

while (!$rs->EOF) {
if ($rs->Fields["UserName"]->Value=="username" && $rs->Fields["Password"]->Value=="password") {
$_SESSION['auth'] = $rs->Fields['Auth']->Value;
$_SESSION['username'] = $rs->Fields['UserName']->Value;
$authorized = true;
}
$rs->MoveNext();
}
# close the connection
$rs->Close();
$conn->Close();

$rs = null;
$conn = null;

if (!$authorized) {
header('Location: fill in correct path'); // see pseudocode for authorize.php
exit();
} else {
header('Location: fill in correct path');
exit();
}

?>