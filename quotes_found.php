<?php
session_start() ;
// Redirect if not logged in
if ( !isset( $_SESSION[ 'member_id' ] ) ) { 
require ( 'login_functions.php' ) ; load() ; }
?>
<!doctype html>
<html lang=en>
<head>
<title>Quotes  found</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="msgboard.css">
<style type="text/css">
table { background:white; color:black; }
th {padding:4px; border:1px black solid; }
#tab-navigation ul { margin-left:-167px; }

</style>
</head>
<body>
<div id='container'>
<?php
include('includes/header.php'); ?>
<div id='content'><!--Start of the quotes found page content-->
<?php
//if POST is set
if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
$target = $_POST['target'];//Set variable
}
// Make the full text query
$q = "SELECT uname,post_date,subject,message FROM forum WHERE uname LIKE '%$target%' || subject LIKE '%$target%' ||  message LIKE '%$target%' ORDER BY post_date ASC";
$result = mysqli_query( $dbcon, $q ) ;
if ( mysqli_num_rows( $result ) > 0 )
{
 echo '<h2>Full Text Search Results</h2><table><tr><th>Posted By</th><th>Forum</th><th id="msg">Quotation</th></tr>';
  while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ))
  {
    echo '<tr><td>' . $row['uname'].'<br>'.$row['post_date'].'</td>
    <td>'.$row['subject'].'</td><td>' . $row['message'] . '</td> </tr>';
  }
  echo '</table>' ;
}
else { echo '<h4 style = "color:red; font-size:15px; font-weight:bold;">You have not posted any quote <br><a href= "post.php">would you like to post one?.</a></h4>' ; }
mysqli_close( $dbcon ) ;
?>
</div><!--End of the quotes found page content.-->
</div>	
<?php include('includes/footer.php'); ?>
</body>
</html>