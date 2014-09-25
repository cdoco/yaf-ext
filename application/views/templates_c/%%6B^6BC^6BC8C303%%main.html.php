<?php /* Smarty version 2.6.26, created on 2014-09-24 20:25:48
         compiled from order%5Cmain.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'order\\main.html', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/header.html") : smarty_modifier_cat($_tmp, "/application/views/header.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<!--content start-->
<div class="content-wrap">
	<div class="content-left">
    	<h3 class="content-h3">商家后台管理</h3>
        <ul class="content-menu">
        	<li><a href="#">商家首页</a></li>
            <li><a href="#">我的店铺</a></li>
            <li class="items">订单管理</li>
            <li><a href="/order/main">订单查询管理</a></li>
        </ul>
    </div>
    
    <div class="content-right">
    	<div class="merchandise-control">
        	<h3 class="mc-h3">您当前所在位置：<span class="blue">订单管理</span></h3>
            <ul class="mc-list">
            	<li>订单管理：<input type="text"/></li>
                <li class="first">订单时间：<input type="text"/> 至 <input type="text"/></li>
                <li>支付方式：<select class=""><option>请选择</option><option>在线支付</option><option>银行转账</option></select></li>
                <li class="first">订单金额：<input type="text"/> 至 <input type="text"/></li>
                <li>配送方式：<select class=""><option>请选择</option><option>委托配送</option><option>现货自提</option></select></li>
            </ul>
            <div class="mc-list-btn"><input type="button" value="查询"/><input class="mc-list-btn-cz" type="button" value="重置"/></div>
        </div>
        <div class="mc-products">
           
            <ul class="pc-order-title">
                <li class="curr">全部订单</li>
               	<li>未付款</li>
                <li>等待出库</li>
                <li>已出库</li>
                <li>买家已收货</li>
                <li>已取消</li>
                <li>换货订单</li>
                <li>锁定订单</li>
                <li>退款中</li>
            </ul>
            
            <table class="pc-pro-tab">
            	<tr>
                	<th align="left" width="60"><label class="pl10p"><input type="checkbox" class="check_box"/> 全选</label></th>
                	<th width="160">商品信息</th>
                    <th width="160">订单金额</th>
                    <th width="90">配送方式</th>
                    <th>买家用户名</th>
                    <th>商家备注</th>
                    <th width="100">操作</th>
                </tr>
              </table>
            
            <table class="pc-order-tab">
                <tr>
                	<th colspan="6">
                    	<span class="fl"><input class="check_box mr5p" type="checkbox"/>订单编号：185236533 <i class="orange">现货订单</i><i class="pl20p">下单时间：2014-09-10 14:10</i><i class="pl20p">付款时间：2014-09-10 14:10</i></span><span class="fr orange">合同编号：B55185236533</span>
                    </th>
                </tr>
                 <tr>
                	<td width="220">
                    	<div class="pc-order-pic">
                        	<a href="#"><img src="images/temp/pic.jpg"/></a>
                            <div class="fl">
                            	<p><a href="#" class="blue">HDPE 伊朗石化 EX5 原厂原装</a></p>
                                <p>商品数量:10吨</p>
                            </div>
                        </div>
                    </td>
                    <td width="160">
                    	<div class="pl10p">
                            <p class="orange">12100.00 </p>
                            <p>已提：5吨 还剩：5吨</p>
                        </div>
                    </td>
                    <td width="90" align="center">现货自提</td>
                    <td align="center">sm-ccdhgb</td>
                    <td align="center">加急加急</td>
                    <td width="100" align="center"><p><a class="blue" href="#">出库</a></p>
                    	<p><a class="blue" href="#">多库发货</a></p>
                        <p><a class="blue" href="#">查看详情</a></p>
                        <p><a class="blue" href="#">添加备注</a></p>
                    </td>
                </tr>
               
            </table>
            <table class="pc-order-tab">
                <tr>
                	<th colspan="6">
                    	<span class="fl"><input class="check_box mr5p" type="checkbox"/>订单编号：185236533 <i class="orange">现货订单</i><i class="pl20p">下单时间：2014-09-10 14:10</i><i class="pl20p">付款时间：2014-09-10 14:10</i></span><span class="fr orange">合同编号：B55185236533</span>
                    </th>
                </tr>
                 <tr>
                	<td width="220">
                    	<div class="pc-order-pic">
                        	<a href="#"><img src="images/temp/pic.jpg"/></a>
                            <div class="fl">
                            	<p><a href="#" class="blue">HDPE 伊朗石化 EX5 原厂原装</a></p>
                                <p>商品数量:10吨</p>
                            </div>
                        </div>
                    </td>
                    <td width="160">
                    	<div class="pl10p">
                            <p class="orange">12100.00 </p>
                            <p>已提：5吨 还剩：5吨</p>
                        </div>
                    </td>
                    <td width="90" align="center">现货自提</td>
                    <td align="center">sm-ccdhgb</td>
                    <td align="center">加急加急</td>
                    <td width="100" align="center"><p><a class="blue" href="#">出库</a></p>
                    	<p><a class="blue" href="#">多库发货</a></p>
                        <p><a class="blue" href="#">查看详情</a></p>
                        <p><a class="blue" href="#">添加备注</a></p>
                    </td>
                </tr>
               
            </table>
            
            <table class="pc-order-tab">
                <tr>
                	<th colspan="6">
                    	<span class="fl"><input class="check_box mr5p" type="checkbox"/>订单编号：185236533 <i class="orange">现货订单</i><i class="pl20p">下单时间：2014-09-10 14:10</i><i class="pl20p">付款时间：2014-09-10 14:10</i></span><span class="fr orange">合同编号：B55185236533</span>
                    </th>
                </tr>
                 <tr>
                	<td width="220">
                    	<div class="pc-order-pic">
                        	<a href="#"><img src="images/temp/pic.jpg"/></a>
                            <div class="fl">
                            	<p><a href="#" class="blue">HDPE 伊朗石化 EX5 原厂原装</a></p>
                                <p>商品数量:10吨</p>
                            </div>
                        </div>
                    </td>
                    <td width="160">
                    	<div class="pl10p">
                            <p class="orange">12100.00 </p>
                            <p>已提：5吨 还剩：5吨</p>
                        </div>
                    </td>
                    <td width="90" align="center">现货自提</td>
                    <td align="center">sm-ccdhgb</td>
                    <td align="center">加急加急</td>
                    <td width="100" align="center"><p><a class="blue" href="#">出库</a></p>
                    	<p><a class="blue" href="#">多库发货</a></p>
                        <p><a class="blue" href="#">查看详情</a></p>
                        <p><a class="blue" href="#">添加备注</a></p>
                    </td>
                </tr>
                <tr>
                	<td width="220">
                    	<div class="pc-order-pic">
                        	<a href="#"><img src="images/temp/pic.jpg"/></a>
                            <div class="fl">
                            	<p><a href="#" class="blue">HDPE 伊朗石化 EX5 原厂原装</a></p>
                                <p>商品数量:10吨</p>
                            </div>
                        </div>
                    </td>
                    <td width="160">
                    	<div class="pl10p">
                            <p class="orange">12100.00 </p>
                            <p>已提：5吨 还剩：5吨</p>
                        </div>
                    </td>
                    <td width="90" align="center">现货自提</td>
                    <td align="center">sm-ccdhgb</td>
                    <td align="center">加急加急</td>
                    <td width="100" align="center"><p><a class="blue" href="#">出库</a></p>
                    	<p><a class="blue" href="#">多库发货</a></p>
                        <p><a class="blue" href="#">查看详情</a></p>
                        <p><a class="blue" href="#">添加备注</a></p>
                    </td>
                </tr>
            </table>
            
            
            
            
            <div class="page"><span class="cd">首页</span><span class="cd">上一页</span><a href="#"  class="curr">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">下一页</a><a href="#">尾页</a></div>
            
        </div>
    </div>
</div>
<!--content end-->


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/footer.html") : smarty_modifier_cat($_tmp, "/application/views/footer.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>