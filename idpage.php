<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>user id page</title>
 <link rel="stylesheet" href="style (1).css">>
 </head>
 <body>
<header>
    USER ID PAGE
</header>
 <p>
     <section>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=project', "root", "satwik@15160521");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT fname,lname,cu_id FROM customer";
  //first pass just gets the column names
  print "<table> -";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> -";
  foreach ($row as $field => $value){
   print " <th>$field</th> -";
  } // end foreach
  print " </tr> -";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> -";
   foreach ($row as $name=>$value){
   print " <td>$value</td> -";
   } // end field loop
   print " </tr> -";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
     </section>
 <a href="index2.html"><button class="btn">Go To the home page</button></a>
 </p>
 <footer>
            <center> DBMS PROJECT ON ONLINE CRISCKET MATCH TICKET BOOKING SYSTEM</center>
        </footer>
 </body>
</html>