<?php 
    function guardar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Geolocalizacion";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        if(isset($_POST['submit'])){

             $switch = $_POST['switch'];
             $latitud = $_POST['latitud'];
             $longitud = $_POST['longitud'];
             $sql = "INSERT INTO Ubicacion (Latitud_Ubicacion, Longitud_Ubicacion)
             VALUES ( $latitud, $longitud)";
             if (mysqli_query($conn, $sql)) {
                 echo "New record has been added successfully !";
              } else {
                 echo "Error: " . $sql . ":-" . mysqli_error($conn);
              }
              mysqli_close($conn);
            echo $latitud;
            echo $longitud;
            
        }
    }
    guardar();

?>