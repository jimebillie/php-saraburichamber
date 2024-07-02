<?php
session_start();
require_once("../database/connect.php");
$db = new connect();


/**
 * Check if the id is a valid id.
 */
try {
    $stmt = $db->conn->prepare("SELECT * FROM `activity_picture_each_id` WHERE `id`=:id");
    $stmt->execute(["id" => $_GET["id"]]);

    $count_stmt = 0;
    foreach ($stmt->fetchAll() as $row) {
        /**
         * Unlik file
         */
        if (file_exists("../images/activity/" . $row['img'])) {
            unlink("../images/activity/" . $row['img']);
            /** 
             * Delete from database.
             */
            try {
                $stmt = $db->conn->prepare("DELETE FROM `activity_picture_each_id` WHERE `id`=:id");
                $stmt->execute(["id" => $row["id"]]);
?>
                <script>
                    window.history.back();
                </script>
            <?php
                exit;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            /** 
             * Delete from database.
             */
            try {
                $stmt = $db->conn->prepare("DELETE FROM `activity_picture_each_id` WHERE `id`=:id");
                $stmt->execute(["id" => $row["id"]]);
            ?>
                <script>
                    window.history.back();
                </script>
        <?php
                exit;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }


        $count_stmt += 1;
    }
    if ($count_stmt === 0) {
        ?>
        <script>
            window.history.back();
        </script>
<?php
        exit;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
