<?php /* Smarty version Smarty-3.1.18, created on 2017-01-19 11:54:54
         compiled from "views\cms_insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2728258469659af0388-73062114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e649b769ce7e32f41f030485984bb4f8513583c6' => 
    array (
      0 => 'views\\cms_insert.tpl',
      1 => 1484823290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2728258469659af0388-73062114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58469659b33c27_25356364',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58469659b33c27_25356364')) {function content_58469659b33c27_25356364($_smarty_tpl) {?><form action="./model/insert_item.php" method="get">
    <table>
       
       
       
       
        <tr>
            <td>name<input type="text" class="textField" placeholder="Schoolname" name="name" value="" required></td>
        </tr>
        <tr>
            <td>street<input type="text" class="textField" placeholder="street" name="street" value="" required></td>
        </tr>
        <tr>
            <td>streetNumber<input type="text" class="textField" placeholder="streetNumber" name="streetNumber" value="" required></td>
        </tr>
        <tr>
            <td>zipCode<input type="text" class="textField" placeholder="zipCode" name="zipCode" value="" required></td>
        </tr>
        <tr>
            <td>telNr<input type="text" class="textField" placeholder="telNr" name="telNr" value="" required></td>
        </tr>
        <tr>
            <td>email<input type="text" class="textField" placeholder="email" name="email" value="" required></td>
        </tr>
        <tr>
            <td>website<input type="text" class="textField" placeholder="website" name="website" value="" required></td>
        </tr>
        <tr>
            <td>disctrict<input type="number" class="textField" placeholder="districts_id" name="districts_id" value="" min="1" max="9" required></td>
        </tr>
        <tr>
            <td>openday<input type="datetime-local" name="openday" required></td>
        </tr>
        <tr>
            <td>openclass<input type="datetime-local" name="openclass" required></td>
        </tr>
        <tr>
            <td><input type="submit" id="submit" name="submit" value="Registreer"></td>
        </tr>
        
    </table>
    <a href="index.php?action=admin">Keer terug</a>
    
</form><?php }} ?>
