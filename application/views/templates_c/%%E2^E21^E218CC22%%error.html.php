<?php /* Smarty version 2.6.26, created on 2014-09-24 20:25:50
         compiled from error%5Cerror.html */ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Error</title>
    </head>
    <body>
        <h1><?php echo $this->_tpl_vars['Errortype']; ?>
</h1>
        <?php echo $this->_tpl_vars['trace']; ?>

        <br />
        <?php echo $this->_tpl_vars['message']; ?>

        <br />
        <?php echo $this->_tpl_vars['exception']; ?>

    </body>
</html>

