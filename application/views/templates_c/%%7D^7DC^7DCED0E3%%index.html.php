<?php /* Smarty version 2.6.26, created on 2014-09-23 18:03:10
         compiled from product%5Cindex.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'product\\index.html', 1, false),array('modifier', 'number_format', 'product\\index.html', 56, false),)), $this); ?>
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
        <form action="/product" method="post">
        <div class="merchandise-control">
            <h3 class="mc-h3">您当前所在位置：<span class="blue">商品管理</span></h3>
            <ul class="mc-list">
                <li>品牌：
                    <input type="text" name="brandId" value="<?php echo $this->_tpl_vars['dataInfo']['brandName']; ?>
"/></li>
                <li>牌号：
                    <input type="text" name="productCode" value="<?php echo $this->_tpl_vars['dataInfo']['productCode']; ?>
"/></li>
                <li>产地：
                    <input type="text" name="place" value="<?php echo $this->_tpl_vars['dataInfo']['place']; ?>
"/></li>
                <li>SKU：
                    <input type="text" name="skuId" value="<?php echo $this->_tpl_vars['dataInfo']['skuId']; ?>
"/></li>
                <li>类型：
                    <select name="productType" class="pro-add-tab-select">
                        <option value="" <?php if ($this->_tpl_vars['dataInfo']['productType'] == false): ?>selected<?php endif; ?>>全部</option>
                        <option value="Futures" <?php if ($this->_tpl_vars['dataInfo']['productType'] == 'Futures'): ?>selected<?php endif; ?>>期货</option>
                        <option value="Spot" <?php if ($this->_tpl_vars['dataInfo']['productType'] == 'Spot'): ?>selected<?php endif; ?>>现货</option>
                        <option value="WarehouseOut" <?php if ($this->_tpl_vars['dataInfo']['productType'] == 'WarehouseOut'): ?>selected<?php endif; ?>>外库</option>
                        <option value="Usd" <?php if ($this->_tpl_vars['dataInfo']['productType'] == 'Usd'): ?>selected<?php endif; ?>>美金业务</option>
                    </select></li>

            </ul>
            <div class="mc-list-btn"><input type="submit" value="查询"/><input class="mc-list-btn-cz" type="reset" value="重置"/></div>
        </div>
        </form>
        <div class="mc-products">
            <div class="clearfix">
                <ul class="pc-pro-btn">
                    <li class="last"><a href="/product/add">+ 添加新商品</a></li>
                </ul>
            </div>

            <table class="pc-pro-tab">
                <tr>
                    <th>牌号</th>
                    <th>产地</th>
                    <th>可用库存量</th>
                    <th>销售价格</th>
                    <th>产品区域</th>
                    <th>产品类型</th>
                    <th>产品状态</th>
                    <th>操作</th>
                </tr>
                <?php $_from = $this->_tpl_vars['productList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <?php if ($this->_tpl_vars['item']['is_show_b2c'] == 'Y'): ?>
                <tr>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['product_code']; ?>
</a></td>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['produceing_place']; ?>
</a></td>
                    <td><?php echo $this->_tpl_vars['item']['storage']; ?>
</td>
                    <td class="orange">￥<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['slm_b2c_price']/100)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', '') : number_format($_tmp, 2, '.', '')); ?>
</td>
                    <?php $this->assign('i', $this->_tpl_vars['item']['area_id']); ?>
                    <td><?php echo $this->_tpl_vars['getAreaname'][$this->_tpl_vars['i']]; ?>
</td>
                    <td>现货</td>
                    <?php $this->assign('x', $this->_tpl_vars['item']['carriage_status']); ?>
                    <td><?php echo $this->_tpl_vars['productCarriageStatusMean'][$this->_tpl_vars['x']]; ?>
</td>
                    <td><p><a class="blue" href="/product/edit/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">修改商品</a></p>
                        <?php if ($this->_tpl_vars['item']['carriage_status'] == 8): ?>
                        <p><a class="blue" href="/product/soldOut/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">下架</a></p>
                        <?php elseif ($this->_tpl_vars['item']['carriage_status'] == 9): ?>
                        <p><a class="blue" href="/product/putAway/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">上架</a></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php elseif ($this->_tpl_vars['item']['is_show_futures'] == 'Y'): ?>
                <tr>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['product_code']; ?>
</a></td>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['produceing_place']; ?>
</a></td>
                    <td><?php echo $this->_tpl_vars['item']['storage']; ?>
</td>
                    <td class="orange">￥<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['slm_b2c_price']/100)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', '') : number_format($_tmp, 2, '.', '')); ?>
</td>
                    <td><?php echo $this->_tpl_vars['item']['Delivery']; ?>
</td>
                    <td>期货</td>
                    <?php $this->assign('x', $this->_tpl_vars['item']['carriage_status']); ?>
                    <td><?php echo $this->_tpl_vars['productCarriageStatusMean'][$this->_tpl_vars['x']]; ?>
</td>
                    <td><p><a class="blue" href="/product/edit/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">修改商品</a></p>
                        <?php if ($this->_tpl_vars['item']['carriage_status'] == 8): ?>
                        <p><a class="blue" href="/product/soldOut/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">下架</a></p>
                        <?php elseif ($this->_tpl_vars['item']['carriage_status'] == 9): ?>
                        <p><a class="blue" href="/product/putAway/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">上架</a></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php elseif ($this->_tpl_vars['item']['is_warehouse_out'] == 'Y'): ?>
                <tr>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['product_code']; ?>
</a></td>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['produceing_place']; ?>
</a></td>
                    <td>无</td>
                    <td class="orange">询价</td>
                    <td>无</td>
                    <td>外库</td>
                    <?php $this->assign('x', $this->_tpl_vars['item']['carriage_status']); ?>
                    <td><?php echo $this->_tpl_vars['productCarriageStatusMean'][$this->_tpl_vars['x']]; ?>
</td>
                    <td><p><a class="blue" href="/product/edit/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">修改商品</a></p>
                        <?php if ($this->_tpl_vars['item']['carriage_status'] == 8): ?>
                        <p><a class="blue" href="/product/soldOut/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">下架</a></p>
                        <?php elseif ($this->_tpl_vars['item']['carriage_status'] == 9): ?>
                        <p><a class="blue" href="/product/putAway/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">上架</a></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php elseif ($this->_tpl_vars['item']['is_show_usd'] == 'Y'): ?>
                <tr>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['product_code']; ?>
</a></td>
                    <td><a href="#" target="_blank"><?php echo $this->_tpl_vars['item']['produceing_place']; ?>
</a></td>
                    <td><?php echo $this->_tpl_vars['item']['storage']; ?>
</td>
                    <td class="orange">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['slm_b2c_price']/100)) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', '') : number_format($_tmp, 2, '.', '')); ?>
</td>
                    <td><?php echo $this->_tpl_vars['item']['Delivery']; ?>
</td>
                    <td>美金业务</td>
                    <?php $this->assign('x', $this->_tpl_vars['item']['carriage_status']); ?>
                    <td><?php echo $this->_tpl_vars['productCarriageStatusMean'][$this->_tpl_vars['x']]; ?>
</td>
                    <td><p><a class="blue" href="/product/edit/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">修改商品</a></p>
                        <?php if ($this->_tpl_vars['item']['carriage_status'] == 8): ?>
                        <p><a class="blue" href="/product/soldOut/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">下架</a></p>
                        <?php elseif ($this->_tpl_vars['item']['carriage_status'] == 9): ?>
                        <p><a class="blue" href="/product/putAway/productId/<?php echo $this->_tpl_vars['item']['product_id']; ?>
">上架</a></p>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>

            </table>

            <div class="page"><?php echo $this->_tpl_vars['links']; ?>
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