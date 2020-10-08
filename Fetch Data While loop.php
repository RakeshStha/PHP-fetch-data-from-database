<section>
<?php
 $mysqli=mysqli_connect('localhost','username','password','dbname');
 $sql='SELECT username, email, password, createdate FROM accounts';
   $result = mysqli_query($GLOBALS['mysqli'], $sql); //$request=mysqli_result object
 ?>
 <hr>
   <h2><u>All registered accounts are:</u></h2>
 <?php
 while($row= $result->fetch_assoc()){
   echo'<pre>';
   echo "<div><span>Name          : $row[username]</span></br>";
   echo "<div><span>Email address : $row[email]</span></br>";
   echo "<div><span>Password        : $row[password]</span></br>";
   echo "<div><span>Created Date : $row[createdate]</span></br>";
   echo'</pre>';
   #echo "<a href='https://www.shrestharakesh.com.np/'> &copy; Developed by Rakesh Shrestha</a>";

 }
 exit;
 ?>
 </section>