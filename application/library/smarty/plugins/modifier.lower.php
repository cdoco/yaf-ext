<?php
/**
 * smarty plugin
 * @package smarty
 * @subpackage plugins
 */


/**
 * smarty lower modifier plugin
 *
 * Type:     modifier<br>
 * Name:     lower<br>
 * Purpose:  convert string to lowercase
 * @link http://smarty.php.net/manual/en/language.modifier.lower.php
 *          lower (smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @return string
 */
function smarty_modifier_lower($string)
{
    return strtolower($string);
}

?>
