<?php
/*
 * --------------------------------------------------------------------------------
   Weblogicx India  - J2Store - Payment Plugin - SagePay
 * --------------------------------------------------------------------------------
 * @package		Joomla! 2.5x
 * @subpackage	J2 Store
 * @author    	Sasi varna kumar - Weblogicx India http://www.weblogicxindia.com
 * @copyright	Copyright (c) 2010 - 2015 Weblogicx India Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link		http://weblogicxindia.com
 * --------------------------------------------------------------------------------
*/

defined('_JEXEC') or die('Restricted access'); ?>

<?php if (!empty($vars['error'])) : ?>
<div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h1 id="oh-snap!-you-got-an-error!">Process executed with errors!</h1>
      <p><?php echo $vars['error']; ?></p>
</div>
<?php endif; ?>
<?php if (!empty($vars['success'])) : ?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h1 id="oh-snap!-you-got-an-error!">Process executed without errors!</h1>
      <p><?php echo $vars['success']; ?></p>
</div>
<?php endif; ?>