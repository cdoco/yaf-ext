<?php
/**
 * Created by PhpStorm.
 * User: Talent Gao
 * Date: 14-8-20
 * Time: 下午2:07
 */

if (!function_exists('linkTo'))
{
    /**
     * 产生一个URL连接
     *
     * @param string $controller
     * @param string $action
     * @param Array $params
     * @return string
     */
    function linkTo($controller, $action = '', $params_string = '')
    {
        if(!empty($params_string)){
            $params_string = explode(";",$params_string);

            foreach($params_string as $row){
                if(empty($row)){
                    continue;
                }
                $row_string = explode(",",$row);
                $params[$row_string[0]] = $row_string[1];
            }

            array_multisort($params,SORT_ASC,SORT_STRING);

        }

        if (empty($params))
        {
            if (empty ($action))
            {
                return "/{$controller}";
            }

            if($controller === 'index')
            {
                return "/index/index/{$action}";
            }

            return "/{$controller}/{$action}";
        }

        if($controller === 'detail')
        {
            if(count($params) === 1)
            {
                return "/{$controller}/{$params['product_id']}";
            }
        }

        if(is_array($params)) ksort ($params);
        $extra  = array();
        foreach ($params as $k => $v)
        {
            if (is_array($v))
            {
                $tmp    = array();
                foreach ($v as $itm)
                {
                    $tmp[]  = "{$k}[]/{$itm}";
                }
                $extra[]    = implode('/', $tmp);
            } else {
                $extra[]    = "{$k}/{$v}";
            }
        }
        $extra  = implode('/', $extra);
        if (empty($action))
            return "/{$controller}/{$extra}";

        return "/{$controller}/{$action}/{$extra}";
    }
}


