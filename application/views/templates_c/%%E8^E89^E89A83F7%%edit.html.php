<?php /* Smarty version 2.6.26, created on 2014-09-25 13:48:24
         compiled from product%5Cedit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'product\\edit.html', 1, false),array('modifier', 'in_array', 'product\\edit.html', 143, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/header.html") : smarty_modifier_cat($_tmp, "/application/views/header.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--content start-->
<form action="/product/edit" method="post">
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
                <table class="pro-add-tab">
                    <tr>
                        <td width="150" align="right"><span class="red">*</span>商品名称：</td>
                        <td><input type="text" name="ProductName" class="pro-add-tab-text" value="<?php echo $this->_tpl_vars['productDetail']['original_name']; ?>
"/><span>还能输入<i class="orange">45</i>字</span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>广告词：</td>
                        <td><input type="text" name="OnSales" class="pro-add-tab-text" value="<?php echo $this->_tpl_vars['productDetail']['special_offer_yuju']; ?>
"/><span>还能输入<i class="orange">45</i>字</span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>品牌：</td>
                        <td><select class="pro-add-tab-select" name="brandId">
                            <option>请选择</option>
                            <?php $_from = $this->_tpl_vars['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                            <option value="<?php echo $this->_tpl_vars['item']['brand_id']; ?>
" <?php if ($this->_tpl_vars['item']['brand_id'] == $this->_tpl_vars['productDetail']['brand_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['item']['brand_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>分类：</td>
                        <td><select class="pro-add-tab-select" name="cateId">
                            <option value="0">请选择</option>
                            <?php $_from = $this->_tpl_vars['rootCate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                            <option value="<?php echo $this->_tpl_vars['item']['cate_id']; ?>
">++<?php echo $this->_tpl_vars['item']['cate_name']; ?>
</option>
                            <?php $this->assign('x', $this->_tpl_vars['item']['children']); ?>
                            <?php $_from = $this->_tpl_vars['x']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['row']):
?>
                            <option value="<?php echo $this->_tpl_vars['row']['cate_id']; ?>
" <?php if ($this->_tpl_vars['row']['cate_id'] == $this->_tpl_vars['productDetail']['cate_id']): ?>selected<?php endif; ?>>--<?php echo $this->_tpl_vars['row']['cate_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </select></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>单位：</td>
                        <td><select name="unit" class="pro-add-tab-select">
                            <!--<option value="0">请选择</option>-->
                            <option value="30">吨</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>产品类型：</td>
                        <td><select name="productType" class="pro-add-tab-select" id="productType">
                            <option value="Futures" rel="0" <?php if ($this->_tpl_vars['productDetail']['is_show_futures'] == 'Y'): ?>selected<?php endif; ?>>期货</option>
                            <option value="Spot" rel="1" <?php if ($this->_tpl_vars['productDetail']['is_show_b2c'] == 'Y'): ?>selected<?php endif; ?>>现货</option>
                            <option value="WarehouseOut" rel="2" <?php if ($this->_tpl_vars['productDetail']['is_warehouse_out'] == 'Y'): ?>selected<?php endif; ?>>外库</option>
                            <option value="Usd" rel="3" <?php if ($this->_tpl_vars['productDetail']['is_show_usd'] == 'Y'): ?>selected<?php endif; ?>>美金业务</option>
                        </select></td>
                    </tr>

                    <tr>
                        <td align="right"><span class="red">*</span>
                            <span class="product-add-text">
                                <?php if ($this->_tpl_vars['productDetail']['is_show_futures'] == 'Y'): ?>期货
                                <?php elseif ($this->_tpl_vars['productDetail']['is_show_b2c'] == 'Y'): ?>现货
                                <?php elseif ($this->_tpl_vars['productDetail']['is_warehouse_out'] == 'Y'): ?>外库
                                <?php elseif ($this->_tpl_vars['productDetail']['is_show_usd'] == 'Y'): ?>美金业务<?php endif; ?>
                            </span>：</td>
                        <td>

                            <ul class="pro-add-list">
                                <li class="<?php if ($this->_tpl_vars['productDetail']['is_show_futures'] == 'N'): ?>display-none<?php endif; ?>">
                                    <input type="text" class="shop-text" name="Delivery" value="<?php echo $this->_tpl_vars['productDetail']['Delivery']; ?>
"/>
                                    <span class="ml10p orange">填写货期格式（9月上海 月份+交货地）</span></li>
                                <li class="<?php if ($this->_tpl_vars['productDetail']['is_show_b2c'] == 'N'): ?>display-none<?php endif; ?>">
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
                                <li class="<?php if ($this->_tpl_vars['productDetail']['is_warehouse_out'] == 'N'): ?>display-none<?php endif; ?>">
                                    <select name="areaIdT" class="pro-add-tab-select">
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
                                <li class="<?php if ($this->_tpl_vars['productDetail']['is_show_usd'] == 'N'): ?>display-none<?php endif; ?>">
                                    <input type="text" class="shop-text" name="DeliveryT" value="<?php echo $this->_tpl_vars['productDetail']['Delivery']; ?>
"/>
                                    <span class="ml10p orange">填写目的港</span>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td align="right"><span class="red">*</span>市场价格: </td>
                        <td><input type="text" name="marketPrice" value="<?php echo $this->_tpl_vars['productDetail']['market_price']/100; ?>
"/>
                            <span class="ml10p">单位（人民币）</span></td>
                    </tr>
                    <tr>
                        <td align="right"><span class="red">*</span>销售价格: </td>
                        <td><input type="text" name="b2cPrice" value="<?php echo $this->_tpl_vars['productDetail']['slm_b2c_price']/100; ?>
"/>
                            <span class="ml10p">单位（人民币）</span></td>
                    </tr>
                </table>
            </div>

        </div>

        <div class="merchandise-control mt10p">
            <h3 class="mc-h3">商品信息</h3>
            <ul class="mc-list">

                <li>产地：<input type="text" name="productPlace" value="<?php echo $this->_tpl_vars['productDetail']['produceing_place']; ?>
"/></li>
                <li>库　　存：<input type="text" name="Stock"/></li>
                <li>牌号：<input type="text" name="productCode" value="<?php echo $this->_tpl_vars['productDetail']['product_code']; ?>
"/></li>

            </ul>

        </div>

        <div class="merchandise-control mt10p">
            <h3 class="mc-h3">扩展属性</h3>
            <table class="border_table1" id="propert_table">
                <?php $_from = $this->_tpl_vars['Tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <tr>
                    <?php if ($this->_tpl_vars['key'] == 0): ?>
                    <th>加工级别</th>
                    <?php elseif ($this->_tpl_vars['key'] == 1): ?>
                    <th>特性级别</th>
                    <?php else: ?>
                    <th>用途级别</th>
                    <?php endif; ?>
                    <?php $this->assign('i', $this->_tpl_vars['item']); ?>
                    <td>
                        <div class="sp-label">
                            <?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['row']):
?>
                            <label class="sp-t mr5p">
                                <input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['row']['tag_name']; ?>
" <?php if (in_array($this->_tpl_vars['row']['tag_id'], $this->_tpl_vars['productTags'])): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['row']['tag_name']; ?>
</label>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>

            </table>

        </div>

        <div class="merchandise-control mt10p">
            <h3 class="mc-h3">图片管理</h3>

            <div class="my-shop-logo-upload">
                <div class="file">
                    <input type="file" name="files[]" class="file-input" id="1">
                    <input type="hidden" name="uploaded[]" class="uploaded">
                    <input type="text" readonly value="上传公司宣传图" class="file-text">
                </div>
                <input type="button" value="上传" file_index="1" files="files01" class="file-btn" name="">
                <span class="file-del"></span>
            </div>
            <input type="hidden" value="<?php echo $this->_tpl_vars['productDetail']['product_id']; ?>
" name="productId">

        </div>
        <input type="submit" class="my-shop-search fr mt5p mb10p" value="确认修改">
        <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js,/ueditor/ueditor.all.min.js?minify=true"></script>
        <div class="merchandise-control mt10p">
            <h3 class="mc-h3" id="test">详细内容</h3>
            <?php echo $this->_tpl_vars['productDetail']['intro']; ?>

            <!--<div>-->
                <!--<script id="container" name="content" type="text/plain" style="height: 500px;"></script>-->
                <!--<?php echo '-->
                <!--<script type="text/javascript">-->
                    <!--var ue = UE.getEditor(\'container\');-->
                    <!--var text = "";-->
                    <!--alert(text);-->
                    <!--ue.ready(function() {-->
<!--//                        ue.setContent("");-->
                    <!--});-->
                <!--</script>-->
                <!--'; ?>
-->
            <!--</div>-->
        </div>
    </div>
</div>
</form>
<?php echo '
<style type="text/css">
    .display-none{display: none;}
</style>
<script type="text/javascript">
    $(function(){
        $(\'#productType\').change(function(){
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