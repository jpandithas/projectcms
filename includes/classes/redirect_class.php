<?php
/**
 * Date: 1/2/2015
 * Time: 12:44 μμ
 */

class Redirection
{

    public static function Redirect (URL $url)
    {
      $components = $url->GetUrlComponents(true);
        if (!empty($components['action']))
        {
            $action = "action=" . $components['action'];
            $linktext = $action;

            if (!empty($components['type']))
            {
                $type = "&type=" . $components['type'];
                $linktext.=$type;
                if (!empty($components['id']))
                {
                    $id = "&id=" . $components['id'];
                    $linktext .= $id;
                }
            }
        }

        $basepath = "http://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];

        echo $basepath."?".$linktext;

    }

}

    ?>