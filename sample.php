 <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      error_reporting(E_ALL ^ E_DEPRECATED);
      $servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";
print_r(date("d/m/Y"));
echo "<br>";
// print_r(strtotime($date2));
echo "<br>";
$date1 = 2015-01-25;
$date2 = 2015-02-28;
$number_days =date_diff(strtotime($date2),strtotime($date1));
echo $number_days;



echo "<br>";
      $connector = mysql_connect($servername,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("$db_name", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT user_name FROM book_kart");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          
          <th>Name</th>
        
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
            <td>
            {$row['user_name']}
            </td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
    </body>
    </html>