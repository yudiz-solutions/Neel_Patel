<?php
include "DBconn.php";

if (isset($_POST['dlt_btn'])) {

    $dID = $_POST['dID'];

    $dsql = "DELETE FROM wp_form WHERE id='$dID'";

    if ($conn->query($dsql) == true) {
        $res = [
            'd_id' => 1,
            'message' => "Student Deleted Successfully"
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'd_id' => 0,
            'message' => 'Student Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>
</body>

</html>