<?php

namespace Helper\CheckHaveRowDB;

use Exception;

require_once __DIR__ . "/../database/connect.php";

class CheckHaveRowDB
{
    static function slectFrom($table, $byId = false, $whereId = false)
    {
        $db = new \connect();
        $count_db = 0;
        $data = [];
        if ($byId === false) {
            try {
                $stmt = $db->conn->prepare("SELECT * FROM  `$table`");
                $stmt->execute();
                foreach ($stmt->fetchAll() as $row) {
                    array_push($data, $row);
                    $count_db += 1;
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            if ($whereId === false) {
                try {
                    $stmt = $db->conn->prepare("SELECT * FROM  `$table` WHERE `id`=$byId");
                    $stmt->execute();
                    foreach ($stmt->fetchAll() as $row) {
                        array_push($data, $row);
                        $count_db += 1;
                    }
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                try {
                    $stmt = $db->conn->prepare("SELECT * FROM  `$table` WHERE `$whereId`=$byId");
                    $stmt->execute();
                    foreach ($stmt->fetchAll() as $row) {
                        array_push($data, $row);
                        $count_db += 1;
                    }
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        }

        return ["rows" => $count_db, "data" => $data];
    }
    static function query($_sql, $exc)
    {
        $db = new \connect();
        try {
            $stmt = $db->conn->prepare($_sql);
            $stmt->execute($exc);
            return "ok";
        } catch (Exception $e) {
            throw new \ErrorException("DB->fail : " . $e);
        }
    }
}
