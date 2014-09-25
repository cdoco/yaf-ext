<?php /* Smarty version 2.6.26, created on 2014-09-23 17:35:02
         compiled from product%5Caddstep.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'product\\addstep.html', 1, false),)), $this); ?>
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
        <table class="pro-add-tab">
            <tr>
                <td width="150" align="right"><span class="red">*</span>商品名称：</td>
                <td><input type="text" class="pro-add-tab-text"/><span>还能输入<i class="orange">45</i>字</span></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>广告词：</td>
                <td><input type="text" class="pro-add-tab-text"/><span>还能输入<i class="orange">45</i>字</span></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>品牌：</td>
                <td><select class="pro-add-tab-select"><option>请选择</option><option>独山子石化</option><option>利安德巴塞尔</option></select></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>分类：</td>
                <td><select name="select" class="pro-add-tab-select">
                    <option>请选择</option>
                    <option selected>独山子石化</option>
                    <option>利安德巴塞尔</option>
                </select>
                    <select name="select2" class="pro-add-tab-select">
                        <option>请选择</option>
                        <option>独山子石化</option>
                        <option>利安德巴塞尔</option>
                    </select></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>单位：</td>
                <td><select name="select3" class="pro-add-tab-select">
                    <option>请选择</option>
                    <option>独山子石化</option>
                    <option>利安德巴塞尔</option>
                </select></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>品牌：</td>
                <td><select name="select4" class="pro-add-tab-select">
                    <option>请选择</option>
                    <option>独山子石化</option>
                    <option>利安德巴塞尔</option>
                </select></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>产品类型：</td>
                <td><select name="select4" class="pro-add-tab-select">
                    <option>请选择</option>
                    <option selected>期货</option>
                    <option>现货</option>
                    <option>外库</option>
                    <option>美金业务</option>
                </select></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>产品所在区域：</td>
                <td><select name="select4" class="pro-add-tab-select">
                    <option>请选择</option>
                    <option selected>上海</option>
                    <option>广东</option>
                    <option>---汕头</option>
                    <option>---广州</option>
                    <option>北京</option>
                    <option>青岛</option>
                </select></td>
            </tr>

            <tr>
                <td align="right"><span class="red">*</span>市场价格: </td>
                <td><input type="text"/></td>
            </tr>
            <tr>
                <td align="right"><span class="red">*</span>销售价格: </td>
                <td><input type="text"/></td>
            </tr>
        </table>
    </div>

</div>




<div class="merchandise-control mt10p">
    <h3 class="mc-h3">商品信息</h3>
    <ul class="mc-list">
        <li>材质：
            <input type="text"/></li>
        <li>产地：<input type="text"/></li>
        <li>单托包数：<input type="text"/></li>
        <li>重量： <input type="text"/></li>
        <li>体积： <input type="text"/></li>
        <li>库　　存：<input type="text"/></li>
        <li>型号：
            <input type="text"/></li>

    </ul>

</div>



<div class="merchandise-control mt10p">
    <h3 class="mc-h3">SKU信息</h3>
    <ul class="mc-list">
        <li>SKU：
            <input type="text"/></li>
        <li>属性名称：<input type="text"/></li>
        <li>预警库存量：
            <input type="text"/></li>
        <li>是否显示：
            <input type="radio" name="attr_id_1" value="食品级">显示<input type="radio" name="attr_id_1" value="食品级">不显示
        </li>

    </ul>

</div>

<div class="merchandise-control mt10p">
    <h3 class="mc-h3">扩展属性</h3>
    <table class="border_table1" id="propert_table">


        <tr>
            <th>用途级别</th>
            <td>



                <label class="attr"><input type="radio" name="attr_id_1" value="食品级">食品级</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="薄膜级">薄膜级</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="电子电器部件">电子电器部件</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="通用级">通用级</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="运动器材">运动器材</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="汽车部件">汽车部件</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="薄壁制品">薄壁制品</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="家电部件">家电部件</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="纤维">纤维</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="电线电缆级">电线电缆级</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="电动工具配件">电动工具配件</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="型材">型材</label>


                <label class="attr"><input type="radio" name="attr_id_1" value="板材级">板材级</label>


            </td>
        </tr>



        <tr>
            <th>特性级别</th>
            <td>



                <label class="attr"><input type="radio" name="attr_id_2" value="阻燃级">阻燃级</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="透明级">透明级</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="增韧级">增韧级</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="标准级">标准级</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="高刚性">高刚性</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="高强度">高强度</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="高流动">高流动</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="热稳定性">热稳定性</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="高光泽">高光泽</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="增强级">增强级</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="耐低温">耐低温</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="耐高温">耐高温</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="高抗冲">高抗冲</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="高滑动">高滑动</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="抗紫外线">抗紫外线</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="耐磨">耐磨</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="抗静电">抗静电</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="耐水解">耐水解</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="热稳定">热稳定</label>


                <label class="attr"><input type="radio" name="attr_id_2" value="抗化学性">抗化学性</label>


            </td>
        </tr>



        <tr>
            <th>加工级别</th>
            <td>



                <label class="attr"><input type="radio" name="attr_id_3" value="中空级">中空级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="吹膜级">吹膜级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="注塑级">注塑级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="挤出级">挤出级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="发泡级">发泡级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="涂覆级">涂覆级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="吹塑级">吹塑级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="拉丝级">拉丝级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="热熔级">热熔级</label>


                <label class="attr"><input type="radio" name="attr_id_3" value="脱模级">脱模级</label>


            </td>
        </tr>
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
</div>


<div class="merchandise-control mt10p">
    <h3 class="mc-h3">详细内容</h3>

    <div>可以用百度的编辑器</div>
</div>
</div>
</div>
<!--content end-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@APPLICATION_PATH)) ? $this->_run_mod_handler('cat', true, $_tmp, "/application/views/footer.html") : smarty_modifier_cat($_tmp, "/application/views/footer.html")), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>