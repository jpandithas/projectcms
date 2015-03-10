<?php
/**
 * Created by PhpStorm.
 * Date: 22-Jan-15
 * Time: 1:35 PM
 */

class URL
{
    protected $action;
    protected $type;
    protected $id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->validate_Get("action");
        $this->validate_Get("type");
        $this->validate_Get("id");
    }

    /**
     * @param $variable
     */
    protected function validate_Get($variable)
    {
        if (isset($_GET[$variable]))
        {
            $this->$variable = $_GET[$variable];
        }
        else
        {
            $this->$variable = "";
        }
    }

    /**
     * @param array $URL
     */
    public function writeURL (array $URL)
    {
        if (!empty($URL['action'])) $this->action = $URL['action'] ;
        $this->type = $URL['type'];
        $this->id = $URL['id'];
    }

    /**
     * @param $indexed
     * @return array|bool
     */
    public function GetUrlComponents($indexed)
    {
        if ($indexed==TRUE)
        {
            return array("action" => $this->action, "type" => $this->type, "id" => $this->id );
        }
        else if ($indexed==FALSE)
        {
            return array ($this->action, $this->type, $this->id);
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * @param array $url_components_array
     * @return string
     */
    public function build_Path(array $url_components_array)
    {
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?";
        $url.="action=".$url_components_array['action'];
        if (isset($url_components_array['type']))
        {
            $url.="&type=".$url_components_array['type'];
        }
        if (isset($url_components_array['id']))
        {
            $url.="&id=".$url_components_array['id'];
        }
        return $url;
    }

    /**
     * @param $link_id
     * @param $link_text
     * @param array $url_components_array
     * @return string
     */
    public function build_Link($link_id, $link_text, array $url_components_array)
    {
        $link = "<a id='$link_id' href='";
        $link .= $this->build_Path($url_components_array);
        $link .= "'>".$link_text."</a>";
        return $link;
    }
}

?>