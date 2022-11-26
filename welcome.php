<html>
    <body>
        Welcome <?php echo $_POST["komentar"];?>
        <?php 

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    $komentar=$_POST["komentar"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO myguests (komentar)
    VALUES ('$komentar');";
    
    if($conn->query($sql) === TRUE){
        echo "New records created succesfully";
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    $sql=  "SELECT komentar FROM myguets";
   
    ?>
    </body>
</html>