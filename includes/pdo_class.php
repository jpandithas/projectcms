<?php
/**
 * Date: 23-Jan-15
 * Time: 4:23 PM
 */

/**
 * Class dBQuery
 * Sends Queries to the Database
 */
class dBQuery
{
    protected $pdo;
    /**
     * Class Constructor: Uses the settings to instantiate the PDO object
     */
    public function __construct()
    {
            include "settings/settings.php";
            $connection_string = "$dbtype:host=$host;dbname=$database";
            $this->pdo = new PDO($connection_string, $username, $pass);
    }


    /**
     * @param $query
     * @param array $args
     * @return array|bool
     */
    public function sendpQuery($query, array $args)
    {
        $stmt = $this->pdo;
        $q = $stmt->prepare($query);
        $q->execute($args);
        $data = $q->fetchAll();
        return $data;
    }

    /**
     * @param $username
     * @param $passwd
     * @return array
     */
    public function fetchUserData($username, $passwd)
    {
            $stmt = $this->pdo;
            $q = $stmt->prepare('SELECT * FROM users WHERE uname = :usr AND passwd = :pass');
            $q->bindParam(':usr', $username);
            $q->bindParam(':pass', $passwd);
            $q->execute();
            $data = $q->fetchAll();
            return $data;
    }

    /**
     * @param $uname
     * @param $passwd
     * @return bool
     */
    public function userExists($uname, $passwd)
    {
        $user = $this->fetchUserData($uname, $passwd);
        if (count($user) == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


    /**
     * @param URL $URL
     * @return bool
     */
    public function fetchUrl(URL $URL)
    {
        $urldata = $URL->GetUrlComponents(true);

        if (empty($urldata['action']))
        {
            return false;
        }
        $action = $urldata['action'];
        $args[] = $action;

        $query = "SELECT function FROM routes WHERE action = ?";

        if ( !empty($urldata['type']))
        {
            $type = $urldata['type'];
            $query .= " AND type = ?";
            $args[] = $type;
        }
        if (!empty($urldata['id']))
        {
            $id = $urldata['id'];
            $query .= " AND id = ?";
            $args[] = $id;
        }

        $data = $this->sendpQuery($query,$args);
        if (!empty($data))
        {
            return $data[0]['function'];
        }
        else return false;

    }
}

?>