<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_student
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.formvalidator');

// The following is to enable setting the permission's Calculated Setting 
// when you change the permission's Setting. 
// The core javascript code for initiating the Ajax request looks for a field

?>
<form action="<?php echo JRoute::_('index.php?option=com_student&layout=edit&id=' . (int) $this->item->id); ?>"
    method="post" name="adminForm" id="adminForm" class="form-validate">    
    <input id="jform_title" type="hidden" name="helloworld-message-title"/> 
    <?php echo $this->form->renderFieldset('details');  ?>
    <input type="hidden" name="task" value="student.edit" />
    <?php echo JHtml::_('form.token'); ?>
</form>