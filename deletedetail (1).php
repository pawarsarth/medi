<?php
include 'con3.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $q = "DELETE FROM dis WHERE id='$id'";
    if (mysqli_query($a, $q)) {
        echo "<script>
               
                window.location.href = 'med2.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to delete value');
                window.location.href = 'med2.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Invalid ID');
            window.location.href = 'med2.php';
          </script>";
}
?> 