<?php /* Smarty version 2.6.26, created on 2014-09-23 09:50:11
         compiled from index%5Cindex.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'index\\index.html', 1, false),array('modifier', 'number_format', 'index\\index.html', 59, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/header.html") : smarty_modifier_cat($_tmp, "/application/views/header.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--content start-->
<div class="content-wrap">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/common/listMenu.html") : smarty_modifier_cat($_tmp, "/application/views/common/listMenu.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <div class="content-right">
    	<div class="content-user">
        	<div class="content-user-slide">
            	<img class="fl" src="images/temp/head.jpg" width="100" height="100"/>
                <ul class="content-user-mdu">
                	<li>产品名称：他</li>
                    <li>商家店铺ID：<?php echo $this->_tpl_vars['shopInfo']['shop_id']; ?>
</li>
                    <li>商家类型：<?php if ($this->_tpl_vars['shopInfo']['seller_type'] == 'S'): ?>SOP<?php else: ?>POP<?php endif; ?> </li>
                    <li>商店名称：<span class="blue"><?php echo $this->_tpl_vars['shopInfo']['shop_name']; ?>
</span></li>
                    <li class="last">上次登录时间：<?php echo $this->_tpl_vars['shopInfo']['login_time']; ?>
</li>
                </ul>
                <div class="content-user-btn"><a href="/shop">店铺装修</a></div>
                
                <div class="content-user-list">
                	<ul>
                    	<li><a href="#"><span>待付款</span><i>（<?php echo $this->_tpl_vars['dataInfo']['WaitingPay']; ?>
）</i></a></li>
                        <li><a href="#"><span>待自提/配送</span><i>（<?php echo $this->_tpl_vars['dataInfo']['WaitingDeliver']; ?>
）</i></a></li>
                        <li><a href="#"><span>待确认收货</span><i>（<?php echo $this->_tpl_vars['dataInfo']['Delivering']; ?>
）</i></a></li>
                        <li><a href="#"><span>待收票</span><i>（<?php echo $this->_tpl_vars['dataInfo']['Invoiced']; ?>
）</i></a></li>
                        <li><a href="#"><span>订单完成</span><i>（<?php echo $this->_tpl_vars['dataInfo']['OrderComplete']; ?>
）</i></a></li>
                        <!--<li><a href="#"><span>订单取消</span><i>（4）</i></a></li>-->
                        <li><a href="#"><span>现货订单</span><i>(<?php echo $this->_tpl_vars['dataInfo']['B2C']; ?>
)</i></a></li>
                        <li><a href="#"><span>期货订单</span><i>(<?php echo $this->_tpl_vars['dataInfo']['Quotation']; ?>
)</i></a></li>
                        <li><a href="#"><span>美金盘</span><i>（<?php echo $this->_tpl_vars['dataInfo']['UsDollar']; ?>
）</i></a></li>
                    </ul>
                </div>
                
            </div>
            
            
            <div class="content-user-help">
            	<h3>帮助中心</h3>
                <ul>
                	<li><a href="#">新手必读</a></li>
                    <li><a href="#">我要提问</a></li>
                    <li><a href="#">店铺装修</a></li>
                    <li><a href="#">添加新品</a></li>
                    <li><a href="#">创建促销</a></li>
                    <li><a href="#">供应商结算</a></li>
                    <li><a href="#">接入API</a></li>
                    <li><a href="#">开放平台规则</a></li>   
                </ul>
            </div>
        </div>
        <div class="content-quantity">
        	<img src="images/temp/map.jpg" width="800" height="240"/>
        </div>
        <div class="content-sales-quantity">
        	<div class="content-sales">
            	<img class="fl" src="images/icon2.jpg"/>
                <div class="content-sales-parce">
                	<p>今日销售金额</p>
                    <p class="fs30p">￥<?php echo ((is_array($_tmp=$this->_tpl_vars['TodayOrderPay']/100)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', '') : number_format($_tmp, 2, '.', '')); ?>
</p>
                </div>
            </div>
            <div class="content-quan">
            	<img class="fl" src="images/icon3.jpg"/>
                <div class="content-sales-parce">
                	<p>访问总数</p>
                    <p class="fs30p"><?php echo $this->_tpl_vars['shopInfo']['visit']; ?>
</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--content end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/footer.html") : smarty_modifier_cat($_tmp, "/application/views/footer.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
