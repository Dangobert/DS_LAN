<?php /* Smarty version 2.6.14, created on 2022-12-24 00:50:19
         compiled from ../templates/popup_unit.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['unit']); ?>
</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1176997364" type="text/javascript"></script>
</head>

<body>
<table class="main" width="100%" align="center"><tr><td>
<table><tr><td><img src="graphic/unit_big/<?php echo $this->_tpl_vars['cl_units']->get_graphicName($this->_tpl_vars['unit']); ?>
.png" alt="<?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['unit']); ?>
" /></td>
<td>
<h2><?php echo $this->_tpl_vars['cl_units']->get_name($this->_tpl_vars['unit']); ?>
</h2>
<p><?php echo $this->_tpl_vars['cl_units']->get_description($this->_tpl_vars['unit']); ?>
</p>
</td></tr></table>

<table style="border: 1px solid #DED3B9;" class="vis"><tr><th width="150"><?php echo $this->_tpl_vars['lang']->grab('popup_unit','costs'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->grab('popup_unit','population'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->grab('popup_unit','speed'); ?>
</th><th><?php echo $this->_tpl_vars['lang']->grab('popup_unit','booties'); ?>
</th></tr>

<tr class="center"><td><img src="graphic/holz.png" title="Holz" alt="" /><?php echo $this->_tpl_vars['cl_units']->get_woodprice($this->_tpl_vars['unit']); ?>
 <img src="graphic/lehm.png" title="Lehm" alt="" /><?php echo $this->_tpl_vars['cl_units']->get_stoneprice($this->_tpl_vars['unit']); ?>
 <img src="graphic/eisen.png" title="Eisen" alt="" /><?php echo $this->_tpl_vars['cl_units']->get_ironprice($this->_tpl_vars['unit']); ?>
 </td>
<td><img src="graphic/face.png" title="Arbeiter" alt="" /> <?php echo $this->_tpl_vars['cl_units']->get_bhprice($this->_tpl_vars['unit']); ?>
</td>
<td><?php echo $this->_tpl_vars['cl_units']->get_speed($this->_tpl_vars['unit'],'minutes'); ?>
 <?php echo $this->_tpl_vars['lang']->grab('popup_unit','minutes'); ?>
</td><td><?php echo $this->_tpl_vars['cl_units']->get_booty($this->_tpl_vars['unit']); ?>
</td></tr>
</table>
<br />

<table style="border: 1px solid #DED3B9;" class="vis">
<tr><td><?php echo $this->_tpl_vars['lang']->grab('popup_unit','attack'); ?>
</td><td><img src="graphic/unit/att.png" alt="Angriffsstärke" /> <?php echo $this->_tpl_vars['cl_units']->get_att($this->_tpl_vars['unit'],1); ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('popup_unit','def_general'); ?>
</td><td><img src="graphic/unit/def.png" alt="Verteidigung allgemein" /> <?php echo $this->_tpl_vars['cl_units']->get_def($this->_tpl_vars['unit'],1); ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('popup_unit','def_cav'); ?>
</td><td><img src="graphic/unit/def_cav.png" alt="Verteidigung Kavallerie" /> <?php echo $this->_tpl_vars['cl_units']->get_defCav($this->_tpl_vars['unit'],1); ?>
</td></tr>
<tr><td><?php echo $this->_tpl_vars['lang']->grab('popup_unit','def_archer'); ?>
</td><td><img src="graphic/unit/def_archer.png" alt="Verteidigung Kavallerie" /> <?php echo $this->_tpl_vars['cl_units']->get_defArcher($this->_tpl_vars['unit'],1); ?>
</td></tr>
</table>
<br />

	
<table class="vis"><tr><th colspan="<?php echo $this->_tpl_vars['cl_units']->get_countNeeded($this->_tpl_vars['unit']); ?>
"><?php echo $this->_tpl_vars['lang']->grab('popup_unit','require'); ?>
</th></tr>
<tr>
		<?php if (count ( $this->_tpl_vars['cl_units']->get_needed($this->_tpl_vars['unit']) ) > 0): ?>
			<?php $_from = $this->_tpl_vars['cl_units']->get_needed($this->_tpl_vars['unit']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n_unit'] => $this->_tpl_vars['n_stage']):
?>
			<td><a href="popup_building.php?building=<?php echo $this->_tpl_vars['n_unit']; ?>
"><?php echo $this->_tpl_vars['cl_builds']->get_name($this->_tpl_vars['n_unit']); ?>
</a> (<?php echo $this->_tpl_vars['lang']->grab('popup_unit','stage'); ?>
 <?php echo $this->_tpl_vars['n_stage']; ?>
)</td>
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<td><?php echo $this->_tpl_vars['lang']->grab('popup_unit','no_require'); ?>
</td>
		<?php endif; ?>
</tr>
</table><br />


</td></tr></table>
<script type="text/javascript">setImageTitles();</script>
</body>
</html>