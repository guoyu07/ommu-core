<?php
/**
 * Ommu Zone Countries (ommu-zone-country)
 * @var $this ZonecountryController
 * @var $model OmmuZoneCountry
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2015 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-core
 *
 */

	$this->breadcrumbs=array(
		'Ommu Zone Countries'=>array('manage'),
		'Create',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('/zone_country/_form', array('model'=>$model)); ?>
</div>
