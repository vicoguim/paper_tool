<?php /* Smarty version Smarty-3.1.13, created on 2014-07-12 22:23:25
         compiled from "./templates/paper_add_nm_previous_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102109010253c1df8d401b30-03476959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0cdf9fc51ecd7b191eec0cddd916a49786c72a6' => 
    array (
      0 => './templates/paper_add_nm_previous_comment.tpl',
      1 => 1389550679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102109010253c1df8d401b30-03476959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'previous_comments' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53c1df8d48dd14_13078358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c1df8d48dd14_13078358')) {function content_53c1df8d48dd14_13078358($_smarty_tpl) {?><div id="modal-form-add-previous-comment" class="modal hide fade">
  	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    	<h6 id="modal-formLabel">View comments</h6>
  	</div>
  	<div>

<?php if (count($_smarty_tpl->tpl_vars['previous_comments']->value)){?>
	
<ul class="chat-box timeline">

  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['previous_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
  <li class="gray">
    <div class="info">
      <span class="name">
        <span class="label label-green">COMMENT</span> 
				<strong class="indent"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</strong> posted a comment
      </span>
      <span class="time"><i class="icon-time"></i><?php echo $_smarty_tpl->tpl_vars['row']->value['data'];?>
</span>
    </div>
    <div class="content">
      <blockquote>
      	<?php echo $_smarty_tpl->tpl_vars['row']->value['comments'];?>

			</blockquote>
    </div>
  </li>
<?php } ?>
</ul>

<?php }else{ ?>
	<h3 style="color: #970000; width: 100%; text-align: center;">No previous comments!</h3>
<?php }?>

</div>
</div>
<?php }} ?>