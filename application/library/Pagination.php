<?php

class Pagination {
	/** /1 */
	const TYPE_PARAM = 1;
	/** &p=1 */
	const TYPE_ENTITY = 2;
	/** /page/1 */
	const TYPE_DETAIL = 3;

    /**
     * 分页函数
     *
     * @param string $url
     * @param int $perPage
     * @param int $currentPage
     * @param int $totalItems
     * @param int $delta
     * @param string $target
     * @return string
     */
    public static function createPage($url, $perPage, $currentPage, $totalItems, $delta = 2, $target = '_self',$isSearchIpt = false)
    {
        $t_high = ceil($totalItems / $perPage) == 0 ? 1 : ceil($totalItems / $perPage);
        $high = $currentPage + $delta;
        $low = $currentPage - $delta;
        if ($high > $t_high)	{
            $high = $t_high;
            $low = $t_high - 2 * $delta;
        }
        if ($low < 1) {
            $low = 1;
            $high = $low + 2 * $delta;
            if($high > $t_high) $high = $t_high;
        }
        $offset = ($currentPage - 1) * $perPage + 1;
        if ($offset < 0) $offset = 0;
        $end = $offset + $perPage - 1;
        if($end > $totalItems) $end = $totalItems;
        $ret_string = '<div class="link"><div class="sabrosus">';
        if($currentPage > 1)
        {
            $ret_string .= '<a href=\'' . str_replace('%d', 1, $url) . "' target='{$target}'>首页</a>";
            $ret_string .= '<a href=\'' . str_replace('%d', $currentPage - 1, $url) . "' target='{$target}' style='margin-right: -2px;'>上一页</a>";
        }
        else {
            $ret_string .= '<span class="cd">首页</span>';
            $ret_string .= "<span class='cd' style='margin-right: -2px;'>上一页</span>";
        }
        $links = array();
        for (;$low <= $high; $low++)
        {
            if($low != $currentPage) $links[] = '<a href=\'' . str_replace('%d', $low, $url) . '\' target=\'' . $target . '\'>' . $low . '</a>';
            else $links[] = "<span class='curr'>{$low}</span>";
        }
        $links = implode('', $links);
        $ret_string .= "\r\n" . $links;

        if($currentPage < $t_high){
            $ret_string .= '<a href=\'' . str_replace('%d', $currentPage + 1, $url) . "' target='{$target}'>下一页</a>";
            $ret_string .= '<a href=\'' . str_replace('%d', $t_high, $url) . '\' target=\'' . $target . '\'>尾页</a>';
        }
        else{
            $ret_string .= '<span class="cd">下一页</span>';
            $ret_string .= '<span class="cd">尾页</span>';
        }
        $ret_string .= " 共<span class='topage'>{$t_high}</span>页";
        if($isSearchIpt)
        {
            $ret_string .= '　第 <input type="text" id="searchNum" /> 页';
            $ret_string .= ' <input type="button" class="page-btn cp" value="确定" onClick="location.href= \'' .$url .'\'.replace(\'%d\',$(\'#searchNum\').val());" />';
        }
        return $ret_string . '</div></div>';
    }
}
