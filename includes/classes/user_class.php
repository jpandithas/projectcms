<?php
/**
 * Date: 20-Mar-15
 * Time: 1:56 PM
 */

class User
{
    public function user_session_exists()
    {
        if ($_SESSION['user'])
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>