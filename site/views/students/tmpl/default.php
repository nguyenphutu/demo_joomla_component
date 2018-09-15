<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_student
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

JHtml::_('formbehavior.chosen', 'select');

$listOrder     = $this->escape($this->state->get('list.ordering'));
$listDirn      = $this->escape($this->state->get('list.direction'));
?>
<a href="index.php?option=com_student&view=form&layout=edit">Create new student</a>
<form action="index.php?option=com_student&view=students" method="post" id="adminForm" name="adminForm">	
	<div id="j-main-container" class="span12">		
		<table class="table table-striped table-hover">
			<thead>
			<tr>
				<th width="1%"><?php echo JText::_('COM_STUDENT_NUM'); ?></th>				
				<th width="20%">
					<?php echo JHtml::_('searchtools.sort', 'Full Name', 'fullname', $listDirn, $listOrder); ?>
				</th>
				<th width="30%">
					<?php echo JHtml::_('searchtools.sort', 'Email', 'email', $listDirn, $listOrder); ?>
				</th>
				<th width="24%">
                    <?php echo JHtml::_('searchtools.sort', 'AUTHOR', 'author', $listDirn, $listOrder); ?>
                </th>
                <th width="25%">
                    <?php echo JHtml::_('searchtools.sort', 'CREATED_DATE', 'created', $listDirn, $listOrder); ?>
                </th>
			</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="5">
						<?php echo $this->pagination->getListFooter(); ?>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php if (!empty($this->items)) : ?>
					<?php foreach ($this->items as $i => $row) :
						$link = JRoute::_('index.php?option=com_student&view=student&id=' . $row->id);
					?>
						<tr>
							<td><?php echo $this->pagination->getRowOffset($i); ?></td>							
							<td>
								<a href="<?php echo $link; ?>" title="<?php echo JText::_('EDIT_STUDENT'); ?>">
									<?php echo $row->fullname; ?>
								</a>
							<td>
								<a href="<?php echo $link; ?>" title="<?php echo JText::_('EDIT_STUDENT'); ?>">
									<?php echo $row->email; ?>
								</a>
							</td>
							<td align="center">
                                <?php echo $row->author; ?>
                            </td>
                            <td align="center">
                                <?php echo substr($row->created, 0, 10); ?>
                            </td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
		<input type="hidden" name="task" value=""/>
		<input type="hidden" name="boxchecked" value="0"/>
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>