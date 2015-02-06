<?php /* Smarty version 2.6.26, created on 2014-09-23 09:41:12
         compiled from shop/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'shop/index.html', 1, false),)), $this); ?>
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
            <h3 class="mc-h3">您当前所在位置：<span class="blue">我的店铺</span></h3>
            <div class="my-shop-classify">
                <span class="fl fwb">经营分类：</span>
                <div class="myshop-s">
                    <p>聚乙烯(PE)<i>></i>LDPE</p>
                    <p>聚丙烯(PP)<i>></i>注塑</p>
                    <p>ABS塑料/TPE<i>></i>TPE</p>
                </div>
            </div>

            <div class="my-shop-title">店铺名称：上海塑米城信息科技有限公司</div>

        </div>


        <div class="my-shop-logo">
            <span class="fl fwb">店铺LOGO：</span>
            <div class="my-shop-logo-wrap">
                <p class="pb10p">仅支持<span class="orange">jpg png</span>和<span class="orange">gif</span>默认风格模板内Logo大小为180x60</p>
                <div class="my-shop-logo-upload">
                    <div class="file">
                        <input type="file" name="files[]" class="file-input" id="1">
                        <input type="hidden" name="uploaded[]" class="uploaded">
                        <input type="text" readonly value="上传公司logo" class="file-text">
                    </div>
                    <input type="button" value="上传" file_index="1" files="files01" class="file-btn" name="">
                    <span class="file-del"></span>
                </div>

                <div class="file-big-pic"><img src="images/temp/ps1.jpg" width="180" height="60"/></div>

            </div>
        </div>



        <div class="my-shop-banner">
            <p class="pb10p pl10p"><span class="fwb">首页大图：</span>仅支持jpg和gjf 默认风格模板内Banner大小为990x250</p>
            <div class="my-shop-logo-upload">
                <div class="file">
                    <input type="file" name="files[]" class="file-input" id="1">
                    <input type="hidden" name="uploaded[]" class="uploaded">
                    <input type="text" readonly value="上传公司宣传图" class="file-text">
                </div>
                <input type="button" value="上传" file_index="1" files="files01" class="file-btn" name="">
                <span class="file-del"></span>
            </div>

            <div class="tac pt10p pl60p"><img src="images/temp/banners.jpg"/></div>
        </div>


        <div class="my-shop-banner">
            <div class="pb10p pl10p"><span class="fwb fl">品牌简介：</span>
                <div class="my-shop-editor"><img src="images/temp/editor.jpg"/></div>

            </div>
        </div>

        <div class="mc-list-btn"><input type="button" value="保存"><input type="button" value="取消" class="mc-list-btn-cz"></div>



    </div>
</div>
<!--content end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/footer.html") : smarty_modifier_cat($_tmp, "/application/views/footer.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
