<?php
/* 
 * 支付宝支付接口
 */

class Payment_AliPay
{
    /**
     * 订单编号为空
     */
    const ERR_ORDER_NO_EMPTY  = -100;
    /**
     * 订单标题为空
     */
    const ERR_ORDER_SUBJECT_EMPTY  = -101;
    /**
     * 订单内容介绍为空
     */
    const ERR_ORDER_INTRO_EMPTY  = -102;
    /**
     * 用户IP为空
     */
    const ERR_USER_IP_EMPTY  = -103;
    /**
     * 返回URL为空
     */
    const ERR_RETURN_URL_EMPTY  = -104;
    /**
     * 通知URL为空
     */
    const ERR_NOTIFY_URL_EMPTY  = -105;
    /**
     * 订单详情URL为空
     */
    const ERR_SHOW_URL_EMPTY  = -106;
    /**
     * 订单介绍文字超出长度限制（支付宝支持长度为1000)
     */
    const ERR_ORDER_INTRO_EXCEED_MAX_LENGTH     = -110;
    /**
     * 返回URL格式不匹配
     */
    const ERR_RETURN_URL_FORMAT_UNMATCH  = -111;
    /**
     * 通知URL格式不匹配
     */
    const ERR_NOTIFY_URL_FORMAT_UNMATCH  = -112;
    /**
     * 订单详情URL格式不匹配
     */
    const ERR_SHOW_URL_FORMAT_UNMATCH  = -113;
    /**
     * 原始请求参数为空
     */
    const ERR_ORIGINAL_REQUIRE_PARAMETER_EMPTY  = -114;
    /**
     * 订单ID为空
     */
    const ERR_ORDER_ID_EMPTY            = -201;
    /**
     * 订单价格为空
     */
    const ERR_ORDER_PRICE_EMPTY         = -202;
    /**
     * 订单价格不是数字
     */
    const ERR_ORDER_PRICE_IS_NOT_NUMERIC    = -203;
    /**
     * 订单价格不匹配
     */
    const ERR_PRICE_NOT_MATCH           = -210;
    /**
     * ANT验证失败
     */
    const ERR_ANT_VERIFY_FAILED         = -211;
    /**
     * 签名验证失败
     */
    const ERR_SIGN_VERIFY_FAILED        = -212;
    /**
     * 支付状态不正确
     */
    const ERR_TRADE_STATUS_ERROR        = -213;
    /**
     * 未知错误
     */
    const ERROR_UNKOWN                  = 0;
    /**
     * 返回正常
     */
    const OK                            = 1;

    /**
     * 支付宝合作身份者ID，以2088开头的16位纯数字
     */
    private static $_partner    = '2088701477300542';
    /**
     * 支付宝安全检验码，以数字和字母组成的32位字符
     */
    private static $_key    = 'rx13h3v4q6jpdwbu6bzcbuic0bybxvwj';
    /**
     * 签约支付宝账号或卖家支付宝帐户
     */
    private static $_seller_email    = 'ecsales3@easymro.com.cn';
    /**
     * 访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
     */
    private static $_transport  = 'http';
    /**
     * 默认支付方式，四个值可选：bankPay(网银); cartoon(卡通); directPay(余额); CASH(网点支付)
     */
    private static $_paymethod  = 'directPay';
    /**
     * 淘宝接口Url
     */
    private static $_gateway    = "https://www.alipay.com/cooperate/gateway.do?";
    /**
     * 验证的响应时限，用于从支付宝服务器获取ATN。单位：秒
     */
    private static $_verify_response_time_limit = 120;


    /**
     * 取支付宝即时到帐接口的链接
     * @param int $order_no 订单编号
     * @param string $order_subject 订单标题（用于支付宝中显示的订单内容）
     * @param string $order_intro 订单说明（用于支付宝中显示的订单内容）
     * @param number $order_price 订单价格。单位：元
     * @param string $user_ip 用户ID
     * @param string $return_url return接口url
     * @param string $notify_url notify接口url
     * @param string $show_url 订单链接（用于支付宝中点击订单标题后的跳转）
     * @param string $defaultbank 默认银行简码，可留空
     * @param string $alipay_token 支付宝登录的token，默认留空
     * @return 成功则返回url(string)，失败返回错误编码(int)
     */
    public static function getDirectPayLink($order_no, $order_subject, $order_intro, $order_price, $user_ip, $return_url, $notify_url, $show_url, $defaultbank = '', $alipay_token = '') {
        if( empty($order_no) )      return self::ERR_ORDER_NO_EMPTY;
        if( empty($order_subject) ) return self::ERR_ORDER_SUBJECT_EMPTY;
        if( empty($order_intro) )   return self::ERR_ORDER_INTRO_EMPTY;
        if( empty($user_ip) )       return self::ERR_USER_IP_EMPTY;
        if( empty($return_url) )    return self::ERR_RETURN_URL_EMPTY;
        if( empty($notify_url) )    return self::ERR_NOTIFY_URL_EMPTY;
        if( empty($show_url) )      return self::ERR_SHOW_URL_EMPTY;
        
        if( strlen($order_intro) > 1000 )   return self::ERR_ORDER_INTRO_EXCEED_MAX_LENGTH;
        if( 'http' !== substr($return_url, 0, 4) || false !== strpos($return_url, '?') ) {  // 格式：http打头，不能包含'?'的参数部分
            return self::ERR_RETURN_URL_FORMAT_UNMATCH;
        }
        if( 'http' !== substr($notify_url, 0, 4) || false !== strpos($notify_url, '?') ) {  // 格式：http打头，不能包含'?'的参数部分
            return self::ERR_NOTIFY_URL_FORMAT_UNMATCH;
        }
        if( 'http' !== substr($show_url, 0, 4) )    return self::ERR_SHOW_URL_FORMAT_UNMATCH;   //   // 格式：http打头
        
        $parameter = array(
            "service"                   => "create_direct_pay_by_user",        //接口名称，不需要修改
            "payment_type"              => "1",                               //交易类型，不需要修改
            //基本配置
            "partner"                   => self::$_partner,
            "seller_email"              => self::$_seller_email,
            "return_url"                => $return_url,
            "notify_url"                => $notify_url,
            "_input_charset"            => "utf-8",
            "show_url"                  => $show_url,
            //从订单数据中动态获取到的必填参数
            "out_trade_no"              => $order_no,
            "subject"                   => $order_subject,
            "body"                      => $order_intro,
            "total_fee"                 => $order_price,
            //扩展功能参数——网银提前
            "paymethod"                 => self::$_paymethod,
            "defaultbank"               => $defaultbank, // 默认银行CODE
            //扩展功能参数——防钓鱼
            "anti_phishing_key"         => self::_queryTimestamp(),
            "exter_invoke_ip"           => $user_ip,
            //扩展功能参数——自定义参数
            "extra_common_param"        => '',  // 自定义参数，可存放任何内容（除=、&等特殊字符外），不会显示在页面上
            "token"                     => $alipay_token,
        );

        $parameter  = self::_argSort($parameter);
        $parameter  = self::_paraFilter($parameter);
        $sign       = self::_buildSign($parameter);

        $url    = self::$_gateway . self::_createLinkString($parameter, true) . "&sign=" . $sign . "&sign_type=MD5";
        return $url;
    }

    /**
     * 支付成功之后的响应验证
     * @param array $original_require_parameter 原始请求参数，既支付宝响应请求中包含的参数。（在return接口中来自$_GET；在notify接口中来自$_POST）
     * @param number $order_price 订单价格。单位：元.  注意：数字中不能有每千位分隔的“,”号！
     * @return int
     */
    public static function respondVerify(Array $original_require_parameter, $order_price) {
        if( empty($original_require_parameter) ) return self::ERR_ORIGINAL_REQUIRE_PARAMETER_EMPTY;
        if( empty($order_price) )   return self::ERR_ORDER_PRICE_EMPTY;
        if( !is_numeric($order_price) )   return self::ERR_ORDER_PRICE_IS_NOT_NUMERIC;

        //***** 支付状态验证 *****//
        if( $original_require_parameter['trade_status'] !== 'TRADE_FINISHED' && $original_require_parameter['trade_status'] !== 'TRADE_SUCCESS' ) {
            return self::ERR_TRADE_STATUS_ERROR;
        }

        //***** 付款额验证 *****//
        if( $order_price != $original_require_parameter['total_fee'] ) {
            return self::ERR_PRICE_NOT_MATCH;
        }

        //***** 签名验证 *****//
        // 生成签名结果
        $parameter  = self::_argSort($original_require_parameter);
        $parameter  = self::_paraFilter($parameter);
        $sign       = self::_buildSign($parameter);
        // 签名验证。不通过则与安全校验码、请求时的参数格式（如：带自定义参数等）、编码格式有关
        if( $sign !== $original_require_parameter["sign"]) {
            return self::ERR_SIGN_VERIFY_FAILED;
        }

        //***** ANT验证 *****//
        // 获取远程服务器ATN结果，验证是否是支付宝服务器发来的请求
        if( "https" === self::$_transport ) {    // https
            $verify_url = self::$_gateway . "service=notify_verify" . "&partner=" . self::$_partner . "&notify_id=" . $original_require_parameter['notify_id'];
        } else {
            $verify_url = "http://notify.alipay.com/trade/notify_query.do?" . "partner=" . self::$_partner . "&notify_id=" . $original_require_parameter['notify_id'];
        }
        $verify_result = self::_getVerify($verify_url, self::$_verify_response_time_limit);
        // ANT验证。结果不是true与服务器设置问题、合作身份者ID、notify_id一分钟失效有关
        if( !preg_match("/true$/i",$verify_result) ) {
            return self::ERR_ANT_VERIFY_FAILED;
        }

        return self::OK;
    }


    /**
     * 获取远程服务器ATN结果
     * @param string $url
     * @param int $time_out
     * @return string 服务器ATN结果集
     */
    private static function _getVerify($url, $time_out = 60) {
        $urlarr     = parse_url($url);
        $errno      = "";
        $errstr     = "";
        $transports = "";
        if($urlarr["scheme"] == "https") {
            $transports = "ssl://";
            $urlarr["port"] = "443";
        } else {
            $transports = "tcp://";
            $urlarr["port"] = "80";
        }
        $fp = fsockopen($transports . $urlarr['host'],$urlarr['port'],$errno,$errstr,$time_out);
        if(!$fp) {
            die("ERROR: $errno - $errstr<br />\n");
        } else {
            fputs($fp, "POST ".$urlarr["path"]." HTTP/1.1\r\n");
            fputs($fp, "Host: ".$urlarr["host"]."\r\n");
            fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
            fputs($fp, "Content-length: ".strlen($urlarr["query"])."\r\n");
            fputs($fp, "Connection: close\r\n\r\n");
            fputs($fp, $urlarr["query"] . "\r\n\r\n");
            while(!feof($fp)) {
                $info[] = fgets($fp, 1024);
            }
            fclose($fp);
            $info = implode(",",$info);
            return $info;
        }
    }

    /**
     * 参数过滤。将除去数组中的空值和签名参数
     * @param array $parameter
     * @return array
     */
    private static function _paraFilter(Array $parameter) {
        $para = array();
        while (list ($key, $val) = each ($parameter)) {
            if($key == "sign" || $key == "sign_type" || $val == "") {
                continue;
            } else {
                $para[$key] = $parameter[$key];
            }
        }
        return $para;
    }

    /**
     * 构造签名
     * @param array $para_array
     * @return string
     */
    private static function _buildSign($para_array) {
        $prestr = self::_createLinkString($para_array, false);  //把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
        $prestr .= self::$_key;                                  //把拼接后的字符串再与安全校验码直接连接起来
        $sgin = md5($prestr);                                   //把最终的字符串签名，获得签名结果
        return $sgin;
    }

    /**
     * 创建链接的参数部分字符串
     * @param array $para 参数数组
     * @param boolean $is_need_urlencode
     * @return string
     */
    private static function _createLinkString(Array $para, $is_need_urlencode = false) {
        $arg  = "";
        foreach($para as $key => $val) {
            if($is_need_urlencode) {
                $val    = urlencode($val);
            }
            $arg    .= "{$key}={$val}&";
        }
        $arg = substr($arg, 0 , -1);    //去掉最后一个&字符
        return $arg;
    }

    /**
     * 从支付宝端取时间戳。用于防钓鱼
     * @return string
     */
    private static function _queryTimestamp() {
        $encrypt_key = "";
        $URL = "https://mapi.alipay.com/gateway.do?service=query_timestamp&partner=" . self::$_partner;
        $doc = new DOMDocument();
        $doc->load($URL);
        $itemEncrypt_key = $doc->getElementsByTagName( "encrypt_key" );
        $encrypt_key = $itemEncrypt_key->item(0)->nodeValue;
        return $encrypt_key;
    }

    /**
     * 参数数组排序
     * @param array $array
     * @return array
     */
    private static function _argSort($array) {
        ksort($array);
        reset($array);
        return $array;
    }
}
?>