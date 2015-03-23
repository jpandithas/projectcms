<?php
/**
 * Date: 20-Mar-15
 * Time: 1:56 PM
 */

class User
{
    /**
     * @return bool
     */
    public function user_session_exists()
    {
        if (isset($_SESSION['user']))
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