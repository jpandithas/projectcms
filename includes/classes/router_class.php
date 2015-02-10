<?php
/**
 * Date: 23-Jan-15
 * Time: 4:20 PM
 */

class Router
{
  protected static function findModule(URL $URL)
  {
      $dbq = new dBQuery();
      $function  = $dbq->fetchUrl($URL);
      if (!$function) return false;
      else return $function;
  }


    public static function execute_Module(URL $URL, $args)
    {
        if (self::findModule($URL))
        {
            $func = self::findModule($URL);
            $mod_path = "modules/$func";
            if (is_dir($mod_path))
            {
                $mod_filename = $mod_path."/$func.php";
                if (is_file($mod_filename))
                {
                    include $mod_filename;
                    call_user_func($func,$args);
                }
            }
        }
    }


}

?>