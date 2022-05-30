

    <!-- Database connection -->
 
<?php
$servername = "172.16.10.202";
$username = "QA_ITUser01";
$password = "projects01";
 

try {
    // Create connection
      $conn = new PDO("sqlsrv:server=$servername;Database=F13P_QREX", $username, $password);
  
  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  } catch(Exception $e) {
  die( print_r( $e->getMessage()));
  }
  

if(isset($_GET['batchnumberDimension'])){
    $batchn = $_GET['batchnumberDimension'];

    $query = 'SELECT COUNT(Batch_Number) AS count FROM T_Dimension WHERE Batch_Number = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $batchn);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row['count']!=0){
        echo "<span style='color:red;'>Already exist</span>";
    }
    else{
        echo"<span style='color:green;'>Available</span>";
    }


}

if(isset($_GET['batchnumberTS'])){
    $batchn = $_GET['batchnumberTS'];

    $query = 'SELECT COUNT(Batch_Number) AS count FROM T_ThermalShock WHERE Batch_Number = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $batchn);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row['count']!=0){
        echo "<span style='color:red;'>Already exist</span>";
    }
    else{
        echo"<span style='color:green;'>Available</span>";
    }


}

if(isset($_GET['batchnumberBending'])){
    $batchn = $_GET['batchnumberBending'];

    $query = 'SELECT COUNT(Batch_Number) AS count FROM T_Dimension WHERE Batch_Number = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $batchn);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row['count']!=0){
        echo "<span style='color:red;'>Already exist</span>";
    }
    else{
        echo"<span style='color:green;'>Available</span>";
    }


}

if(isset($_GET['batchnumberByLot'])){
    $batchn = $_GET['batchnumberByLot'];

    $query = 'SELECT COUNT(Batch_Number) AS count FROM T_Dimension WHERE Batch_Number = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $batchn);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row['count']!=0){
        echo "<span style='color:red;'>Already exist</span>";
    }
    else{
        echo"<span style='color:green;'>Available</span>";
    }


}

if(isset($_GET['batchnumberRoughness'])){
    $batchn = $_GET['batchnumberRoughness'];

    $query = 'SELECT COUNT(Batch_Number) AS count FROM T_Dimension WHERE Batch_Number = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $batchn);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row['count']!=0){
        echo "<span style='color:red;'>Already exist</span>";
    }
    else{
        echo"<span style='color:green;'>Available</span>";
    }


}

if(isset($_GET['batchnumberGlossiness'])){
    $batchn = $_GET['batchnumberGlossiness'];

    $query = 'SELECT COUNT(Batch_Number) AS count FROM T_Dimension WHERE Batch_Number = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $batchn);
    $stmt->execute();

    $row = $stmt->fetch();

    if($row['count']!=0){
        echo "<span style='color:red;'>Already exist</span>";
    }
    else{
        echo"<span style='color:green;'>Available</span>";
    }


}

?>

<style>
h8{
    color: red;
    font: 10px Arial, sans-serif;
}

</style>
 
