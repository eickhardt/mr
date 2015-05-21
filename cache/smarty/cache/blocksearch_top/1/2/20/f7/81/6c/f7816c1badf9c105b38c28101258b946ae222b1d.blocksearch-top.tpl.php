<?php /*%%SmartyHeaderCode:22323555d9745786137-58476403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7816c1badf9c105b38c28101258b946ae222b1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mr\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22323555d9745786137-58476403',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_555d97f918fcc1_35539334',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d97f918fcc1_35539334')) {function content_555d97f918fcc1_35539334($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//dev-mr.dk/da/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Søg" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Søg</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
