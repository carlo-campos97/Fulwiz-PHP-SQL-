   <?php
    
    include_once ('config.php');
    $eid = $_GET['key'];
    $sql ="DELETE FROM phic.tblemployee WHERE ID= :id";
    $query = $conn->prepare($sql);
    $query->execute(array(':id' => $eid));
    echo "RECORD DELETED" . "<br/>";
    echo "<a href = \"index.php\">Back<a/>";
    ?>

