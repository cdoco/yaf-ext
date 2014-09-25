<?php /* Smarty version 2.6.26, created on 2014-09-24 14:37:55
         compiled from product%5Caddtmp.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'product\\addtmp.html', 1, false),)), $this); ?>
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
        <div class="merchandise-control">
            <h3 class="mc-h3">您当前所在位置：<a href="/product">商品管理</a>><a href="/product/add">产品添加</a>><span class="blue">编辑添加页面</span></h3>
            <div class="pro-add">
                <h4 class="pro-add-h4">基本内容编辑<span class="gray">(<i class="orange">*</i>表示必填)</span></h4>
                <form action="/product/addTmp" method="post">
                <table class="pro-add-tab">
                    <tr>
                        <td width="150" align="right"><span class="red">*</span>商品名称：</td>
                        <td><input type="text" class="pro-add-tab-text" name="originalName"/><span>还能输入<i class="orange">45</i>字</span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>广告词：</td>
                        <td><input type="text" class="pro-add-tab-text" name="onSales"/><span>还能输入<i class="orange">45</i>字</span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>产品类型：</td>
                        <td><select name="productType" class="pro-add-tab-select">
                            <option value="Futures" rel="0">期货</option>
                            <option value="Spot" rel="1">现货</option>
                            <option value="WarehouseOut" rel="2">外库</option>
                            <option value="Usd" rel="3">美金业务</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td align="right"><span class="red">*</span><span class="product-add-text">产品所在区域</span>：</td>
                        <td>

                            <ul class="pro-add-list">
                                <li><input type="text" class="shop-text" name="Delivery"/></li>
                                <li style="display: none;"><select name="areaId" class="pro-add-tab-select">
                                    <option value="0">请选择</option>
                                    <?php $_from = $this->_tpl_vars['getAreaId']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                    <option value="<?php echo $this->_tpl_vars['item']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                </li>
                                <li style="display: none;">
                                    <select name="areaId" class="pro-add-tab-select">
                                        <option value="0">请选择</option>
                                        <?php $_from = $this->_tpl_vars['getAreaId']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                                        <option value="<?php echo $this->_tpl_vars['item']; ?>
"><?php echo $this->_tpl_vars['key']; ?>
</option>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                </li>
                                <li style="display: none;"><input type="text" class="shop-text" name="Delivery"/></li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><span class="red">*</span>市场价格：</td>
                        <td><input type="text" class="shop-text" name="marketPrice"/></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>销售价格：</td>
                        <td><input type="text" class="shop-text" name="b2cPrice"/></td>
                    </tr>
                    <tr>
                        <td align="right"></td>
                        <td><input type="submit" class="my-shop-search" value="提交添加"></td>
                    </tr>

                </table>

                    <input type="hidden" value="<?php echo $this->_tpl_vars['productId']; ?>
" name="productId" />
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '
<script type="text/javascript">
    $(function(){
        $(\'.pro-add-tab-select\').change(function(){
            var oIndex =  $(this).children("option[selected=selected]").attr(\'rel\');
            var oText = $(this).children("option[selected=selected]").text();
            $(\'.pro-add-list li\').eq(oIndex).show().siblings().hide();
            $(\'.product-add-text\').html(oText);
        });
    });
</script>
'; ?>

<!--content end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/footer.html") : smarty_modifier_cat($_tmp, "/application/views/footer.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>