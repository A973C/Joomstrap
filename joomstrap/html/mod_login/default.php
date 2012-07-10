<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_login
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<?php if ($type == 'logout') : ?>

<?php if ($params->get('greeting')) : ?>

	
	<div class="btn-group pull-right">
		<a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
		  <i class="icon-user"></i> 
			<?php if($params->get('name') == 0) : {
				echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('name')));
			} else : {
				echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('username')));
			} endif; ?>
<?php endif; ?>

			
		  <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
		  <li><a href="/index.php?option=com_users&view=profile">Profile</a></li>
		  <li class="divider"></li>
		  <li>
			<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="login-form">
				<div class="logout-button">
					<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT'); ?>" />
					<input type="hidden" name="option" value="com_users" />
					<input type="hidden" name="task" value="user.logout" />
					<input type="hidden" name="return" value="<?php echo $return; ?>" />
					<?php echo JHtml::_('form.token'); ?>
				</div>
			</form>
		  </li>
		</ul>
	</div>


<?php endif; ?>

<?php
$user =& JFactory::getUser();
 if ($user->guest) {?>
	<div class="btn-group pull-right">
		<a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
		  <i class="icon-user"></i> Account
		  <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<?php
			$usersConfig = JComponentHelper::getParams('com_users');
			if ($usersConfig->get('allowUserRegistration')) : ?>
			<li><a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>"><?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a></li>
			<?php endif; ?>
			<li><a href="<?php echo JRoute::_('index.php?option=com_users&view=login'); ?>"><?php echo JText::_('MOD_LOGIN'); ?></a></li>
		</ul>
	</div>
<?php } ?>	