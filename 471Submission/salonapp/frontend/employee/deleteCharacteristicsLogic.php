<?php
    include '../../backend/database.php';
    include '../../logic/logic.php';

    $conn = connect();

    $clientno = $_POST['clientno'] ?? "";

    $sql = "DELETE FROM haircharacteristics WHERE clientno='" . $_GET["clientno"] . "'";


    if (mysqli_query($conn, $sql)) {
        header("Content-Type: JSON");
        echo json_encode("Employee removed successfully!", JSON_PRETTY_PRINT);

    } else {
        echo "Error deleting employee record: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>
