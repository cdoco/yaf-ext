<?php /* Smarty version 2.6.26, created on 2014-09-23 17:48:57
         compiled from product%5Cadd.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'product\\add.html', 1, false),)), $this); ?>
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
            <h3 class="mc-h3">您当前所在位置：<a href="/product">商品管理</a>><a href="/product/add">产品添加</a></h3>
            <div class="pro-add">
                <p class="fwb pt10p pb10p">从产品库中筛选(如果没有搜索到您需要添加的产品，请点击添加新产品)</p>
                <form action="/product/add" method="post">
                <ul class="product-screening">
                    <li class="pb10p">产品牌号：<input type="text" class="shop-text" id="search" name="productCode"/></li>
                    <li class="pb10p">产品产地：<input type="text" class="shop-text" id="tmp" name="productPlace"/></li>
                    <li class="last"><input type="submit" value="搜索" class="my-shop-search">
                        <input type="button" value="添加新产品" class="my-shop-search mss" id="addNew"></li>
                </ul>
                </form>
            </div>

        </div>

    </div>
</div>
<?php echo '
<script type="application/javascript">

    $(function(){
        initAutoComplete($("#search"));

        $("#addNew").click(function(){
            window.location.href = "/product/addStep";
        });
    });

    function initAutoComplete(input){
        input.autocomplete("/api/search", {
            tableHead: "<div><span class=\'col-1\'>牌号</span> <span class=\'col-2\'>产地</span></div>",
            minChars: 0,
            width: 350,
            scrollHeight: 340,
            selectFirst: false,
            formatItem: formatItem,
            formatResult: formatResult
        }).result(function(e,data,value,sec){/**加选中后的回调函数**/
            $("#tmp").val(data[1]);
        });
        function formatItem(row,i, max) {
            return "<span class=\'col-1\'>" + row[0] + "</span> " + "<span class=\'col-2\'>" + row[1] + "</span>";
        }
        function formatResult(row) {
            return row[0];
        }
    }
</script>
<!--商品询价弹出 end-->
<style type="text/css">
    .ac_results {
        padding: 0px;
        border: 1px solid black;
        background-color: white;
        overflow: hidden;
        z-index: 99999;
    }

    .ac_results ul {
        width: 100%;
        list-style-position: outside;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ac_results li {
        margin: 0px;
        padding: 2px 5px;
        cursor: default;
        display: block;
        /*
        if width will be 100% horizontal scrollbar will apear
        when scroll mode will be used
        */
        /*width: 100%;*/
        font: menu;
        font-size: 12px;
        /*
        it is very important, if line-height not setted or setted
        in relative units scroll will be broken in firefox
        */
        line-height: 16px;
        overflow: hidden;
    }

    .ac_loading {
        background: white url(\'indicator.gif\') right center no-repeat;
    }

    .ac_odd {
        background-color: #eee;
    }

    .ac_over {
        background-color: #0A246A;
        color: white;
    }

    .ac_results .col-1,
    .ac_results .col-2{display:inline-block;width:49%;}

    .ac_results .col-3{display:inline-block;width:65%;}
    .ac_results .col-4{display:inline-block;width:30%;}
    .ac_navi{
        background:#eee;
        border-bottom:1px solid #79b;
        margin:0;
        padding:4px;
        text-align:right;
        font-size:13px;
        font-weight:normal;
        line-height:1;
    }
    .ac_navi a:link,
    .ac_navi a:visited,
    .ac_navi a:hover,
    .ac_navi a:active{
        color:blue;
        text-decoration:underline;
        margin:0px 4px;
        font-weight:normal;
    }
    .ac_navi p{
        font-size:13px;
        text-align:center;
        color:black;
        padding-top:4px;
        margin:0;
    }
    .ac_navi .current{
        font-weight:bold;
        font-size:16px;
        color:#00c;
    }
    .ac_navi .page_end{
        color:gray;
        margin:0px 4px;
        font-weight:normal;
    }

</style>
'; ?>

<!--content end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/footer.html") : smarty_modifier_cat($_tmp, "/application/views/footer.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>