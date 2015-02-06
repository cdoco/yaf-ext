<?php
/**
 * smarty plugin
 * @package smarty
 * @subpackage plugins
 */


/**
 * smarty upper modifier plugin
 *
 * Type:     modifier<br>
 * Name:     upper<br>
 * Purpose:  convert string to uppercase
 * @link http://smarty.php.net/manual/en/language.modifier.upper.php
 *          upper (smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @return string
 */
function smarty_modifier_upper($string)
{
    return strtoupper($string);
}

?>
