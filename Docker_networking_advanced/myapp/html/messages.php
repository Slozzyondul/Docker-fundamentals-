<!DOCTYPE html>
<html>
   <head>
   <title> Solo Docker app - messaging</title>
   </head>
   <body>
    <h1>messages</h1>
    <?php
    $host = 'my_database_container';
    $user = 'root';
    $password = 'rootpassword';
    $database = 'mydatabase';

    //connect to the database
    $conn = new mysqli($host, $user, $password, $database);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    //get all messages from the database
    $sql = "SELECT * FROM messages ORDER BY id DESC";
    $result = $conn->query($sql);

    //display the messages
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>". $row["text"]. "</p>";
        }
    } else {
        echo "No messages yet.";
    }

    //close the database connection
    $conn->close();
   ?>
   </body>
</html>