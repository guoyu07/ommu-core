<?php
/**
 * Ommu Menu Categories (ommu-menu-category)
 * @var $this MenucategoryController
 * @var $model OmmuMenuCategory
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 15 January 2016, 16:57 WIB
 * @link https://github.com/ommu/ommu-core
 *
 */

	$this->breadcrumbs=array(
		'Ommu Menu Categories'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('/menu_category/_form', array('model'=>$model)); ?>