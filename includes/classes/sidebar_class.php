<?php
/**
 * Date: 23-Mar-15
 * Time: 8:58 PM
 */
class Sidebar
{
    public static function Navigation_main()
    {
        $pdo = new dBQuery();
        $sql  = "Select action, type, id, status, permission FROM routes";
        $rows = $pdo->sendpQuery($sql, array());
        var_dump($rows);
    }



}

?>