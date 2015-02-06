<?php /* Smarty version 2.6.26, created on 2014-11-07 09:45:54
         compiled from error%5Cerror.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', 'error\\error.html', 357, false),)), $this); ?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8"/>

<title><?php echo $this->_tpl_vars['Errortype']; ?>
</title>
<?php echo '
<style type="text/css">
/* reset */
html,body,div,span,h1,h2,h3,h4,h5,h6,p,pre,a,code,em,img,strong,b,i,ul,li{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
body{
    line-height: 1;
}
ul{
    list-style: none;
}

/* base */
a{
    text-decoration: none;
}
a:hover{
    text-decoration: underline;
}
h1,h2,h3,p,img,ul li{
    font-family: Arial,sans-serif;
    color: #505050;
}
html,body{
    overflow-x: hidden;
}

/* header */
.header{
    min-width: 860px; /* 960px - 50px * 2 */
    margin: 0 auto;
    background: #f3f3f3;
    padding: 40px 50px 30px 50px;
    border-bottom: #ccc 1px solid;
}
.header h1{
    font-size: 30px;
    color: #e57373;
    margin-bottom: 30px;
}
.header h1 span, .header h1 span a{
    color: #e51717;
}
.header h1 a{
    color: #e57373;
}
.header h1 a:hover{
    color: #e51717;
}
.header img{
    float: right;
    margin-top: -15px;
}
.header h2{
    font-size: 20px;
    line-height: 1.25;
}
.header pre{
    margin: 10px 0;
}

/* previous exceptions */
.header .previous{
    margin: 20px 0;
    padding-left: 30px;
}
.header .previous div{
    margin: 20px 0;
}
.header .previous .arrow{
    -moz-transform: scale(-1, 1);
    -webkit-transform: scale(-1, 1);
    -o-transform: scale(-1, 1);
    transform: scale(-1, 1);
    filter: progid:DXImageTransform.Microsoft.BasicImage(mirror=1);
    font-size: 26px;
    position: absolute;
    margin-top: -3px;
    margin-left: -30px;
    color: #e51717;
}
.header .previous h2{
    font-size: 20px;
    color: #e57373;
    margin-bottom: 10px;
}
.header .previous h2 span{
    color: #e51717;
}
.header .previous h2 a{
    color: #e57373;
}
.header .previous h2 a:hover{
    color: #e51717;
}
.header .previous h3{
    font-size: 14px;
    margin: 10px 0;
}
.header .previous p{
    font-size: 14px;
    color: #aaa;
}
.header .previous pre{
    font-size: 14px;
    margin: 10px 0;
}

/* call stack */
.call-stack{
    margin-top: 30px;
    margin-bottom: 40px;
}
.call-stack ul li{
    margin: 1px 0;
}
.call-stack ul li .element-wrap{
    cursor: pointer;
    padding: 15px 0;
}
.call-stack ul li.application .element-wrap{
    background-color: #fafafa;
}
.call-stack ul li .element-wrap:hover{
    background-color: #edf9ff;
}
.call-stack ul li .element{
    min-width: 860px; /* 960px - 50px * 2 */
    margin: 0 auto;
    padding: 0 50px;
    position: relative;
    /*white-space: nowrap;*/
}
.call-stack ul li a{
    color: #505050;
}
.call-stack ul li a:hover{
    color: #000;
}
.call-stack ul li .item-number{
    width: 45px;
    display: inline-block;
}
.call-stack ul li .text{
    color: #aaa;
}
.call-stack ul li.application .text{
    color: #505050;
    line-height: 30px;
}
.call-stack ul li .at{
    position: absolute;
    right: 110px; /* 50px + 60px */
    color: #aaa;
}
.call-stack ul li.application .at{
    color: #505050;
}
.call-stack ul li .line{
    position: absolute;
    right: 50px;
    width: 60px;
    text-align: right;
}
.call-stack ul li .code-wrap{
    display: none;
    position: relative;
}
.call-stack ul li.application .code-wrap{
    display: block;
}
.call-stack ul li .error-line,
.call-stack ul li .hover-line{
    background-color: #ffebeb;
    position: absolute;
    width: 100%;
    z-index: 100;
    margin-top: -61px;
}
.call-stack ul li .hover-line{
    background: none;
}
.call-stack ul li .hover-line.hover,
.call-stack ul li .hover-line:hover{
    background: #edf9ff !important;
}
.call-stack ul li .code{
    min-width: 860px; /* 960px - 50px * 2 */
    margin: 15px auto;
    padding: 0 50px;
    position: relative;
}
.call-stack ul li .code .lines-item{
    position: absolute;
    z-index: 200;
    display: block;
    width: 25px;
    text-align: right;
    color: #aaa;
    line-height: 20px;
    font-size: 12px;
    margin-top: -63px;
    font-family: Consolas, Courier New, monospace;
}
.call-stack ul li .code pre{
    position: relative;
    z-index: 200;
    left: 50px;
    line-height: 20px;
    font-size: 12px;
    font-family: Consolas, Courier New, monospace;
    display: inline;
}
@-moz-document url-prefix() {
    .call-stack ul li .code pre{
        line-height: 20px;
    }
}

/* request */
.request{
    background-color: #fafafa;
    padding-top: 14px;
    margin-top: 40px;
    margin-bottom: 1px;
}
.request .code{
    min-width: 860px; /* 960px - 50px * 2 */
    margin: 0 auto;
    padding: 15px 50px;
    margin-left: -122px;
}
.request .code pre{
    font-size: 14px;
    line-height: 18px;
    font-family: Consolas, Courier New, monospace;
    display: inline;
    word-wrap: break-word;
}

/* footer */
.footer{
    position: relative;
    height: 70px;
    min-width: 860px; /* 960px - 50px * 2 */
    padding: 0 50px;
    margin: 1px auto 0 auto;
}
.footer p{
    font-size: 16px;
    padding-bottom: 10px;
}
.footer p a{
    color: #505050;
}
.footer p a:hover{
    color: #000;
}
.footer .timestamp{
    font-size: 14px;
    padding-top: 30px;
    margin-bottom: 28px;
}
.footer img{
    position: absolute;
    right: -50px;
}

/* highlight.js */
.comment{
    color: #808080;
    font-style: italic;
}
.keyword{
    color: #000080;
}
.number{
    color: #00a;
}
.number{
    font-weight: normal;
}
.string, .value{
    color: #0a0;
}
.symbol, .char {
    color: #505050;
    background: #d0eded;
    font-style: italic;
}
.phpdoc{
    text-decoration: underline;
}
.variable{
    color: #a00;
}
.margin{
    margin-left: -80px;
}
</style>
</head>
'; ?>

<body>
<div class="header">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA6CAMAAAA3Dq9LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUFDNzhCNUM1QjhDMTFFM0I3QzE5ODkzMUQwNUQyMzYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUFDNzhCNUI1QjhDMTFFM0I3QzE5ODkzMUQwNUQyMzYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzBFREE5RDFDNDdEMTFFMkJGNUU4MkNCQUY4MUM3RUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzBFREE5RDJDNDdEMTFFMkJGNUU4MkNCQUY4MUM3RUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5g4xOFAAADAFBMVEUAAAD////lc3PahobplZXhl5felpbdlpbqoKDln5/moqLgn5/ppqbopaXmpqborKznrKziqKjlq6vnrq7psLDnr6/irKzpsrLqtLTps7Pst7ferKzqtrbntLTturrtvLzqvLzourrhtbXrwMDov7/sw8PrwsLowMDhvb3tysrqycntz8/qzMzqzs7u1NTr09Ps19fo1NTv29vo1dXx4ODx4uLw4uLx5OTq39/x5+fx6Ojw5+fo39/x6enw6Ojp4eHz7Ozy6+vt5+fq5OTz7u7y7e3s5+fz8PDy7+/x7u7z8fHy8PDt6+vz8vLz8/Py8vLw8PDv7+/t7e0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACxvAGHAAAB9klEQVR42qTXfVvBUBgG8Od6qGwx75WoVCKJSlR6pZJSQt//w8S2w86cPXaO+z9n8xu7bs8Z+KXSDgWDoTZ5ClAHm2GcJNxUBfoRNBPpKwInaKesBnQ1BmjvSkAeZ8mrAC1tDmgtBSCFjmTkgQZyuZUGDB6IygJ1dKUuCRhuwJADKriQmgzQ0xcBXQYooiBl/0BXEwHiQgNV4oAd++WxX4CV+PRvZObnyP4IHZ8AK/E1W7giCg1EiS/ZygVRaCA6VGUrVaLQQJR4EcCGD8CgAGM54CjxDDgnCg1Eic/YYokoNBAlLrHFgmOxQgMdZ4kLIkDvkUAelwFYpICWJgT2uN9UhwC4SYyHbDmN3hMaiEmcFgP8JgHEIJwBMX495QXUXBMk5gFwhQZiEjNgECMmNBCTOPZtHXhCYpMAahLv7E+zu43EJgH0JPZKZRHoaDLAvNAzICM4zTWVhYUGYYmtxB/H06E8fokLNomuC0gJrpJgV0kIDuZ5oCH6okkGJEX7VIsDDGmAFRqEJfYD4I0D0FWA6ByooApgFRo8HidM4NN+ZvYADAZ4ljh3YCbndbxmAXIldj/1gGsSy6U8BQaaOqAPJsADrpD7CfC1tgLwPL0HW+rv3zRv4uu66vs37qwefGQDSsm+sSoPR2OFjIZL/zf6yb8AAwCmB2Y7BrVl9wAAAABJRU5ErkJggg==" alt="Exception"/>
    <h1><span><?php echo $this->_tpl_vars['Errortype']; ?>
</span></h1>
    <h2><?php echo $this->_tpl_vars['message']; ?>
</h2>
</div>

<div class="call-stack">
    <ul>
        <li class="application call-stack-item" data-line="9">
            <div class="element-wrap">
                <div class="element">
                    <span class="text"><?php echo $this->_tpl_vars['trace']; ?>
</span>
                </div>
            </div>

            <div class="element-wrap">
                <div class="element">
                    <span class="text"><?php echo $this->_tpl_vars['exception']; ?>
</span>
                </div>
            </div>
        </li>
    </ul>

</div>

<div class="request">
    <div class="code">
            <pre class="php">
                <span class="variable">$_SERVER</span> = [
                <?php $_from = $this->_tpl_vars['server']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php if ($this->_tpl_vars['key'] != 'PATH'): ?>
                <span class="string margin"><?php echo $this->_tpl_vars['key']; ?>
</span> =&gt; <span class="string"><?php echo $this->_tpl_vars['item']; ?>
</span>,
                <?php endif; ?><?php endforeach; endif; unset($_from); ?>];
                <span class="variable">$_COOKIE</span> = [
                <?php $_from = $this->_tpl_vars['cookie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <span class="string margin"><?php echo $this->_tpl_vars['key']; ?>
</span> =&gt; <span class="string"><?php echo $this->_tpl_vars['item']; ?>
</span>,
                <?php endforeach; endif; unset($_from); ?>];
            </pre>
    </div>
</div>
<div class="footer">
    <p class="timestamp"><?php echo date('Y-m-d H:i:s'); ?>
</p>
</div>


