<?php
/**
 * Ommu Languages (ommu-languages)
 * @var $this LanguageController
 * @var $model OmmuLanguages
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2012 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-core
 *
 */
?>

<?php $form=$this->beginWidget('application.libraries.core.components.system.OActiveForm', array(
	'id'=>'ommu-languages-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>
<div class="dialog-content">

	<fieldset>

		<?php echo $form->errorSummary($model); ?>

		<div class="form-group row">
			<?php echo $form->labelEx($model,'name', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php echo $form->textField($model,'name',array('maxlength'=>32, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'name'); ?>
			</div>
		</div>

		<div class="form-group row">
			<?php echo $form->labelEx($model,'code', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php echo $form->textField($model,'code',array('maxlength'=>8, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'code'); ?>
			</div>
		</div>

		<div class="form-group row publish">
			<?php echo $form->labelEx($model,'actived', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php echo $form->checkBox($model,'actived', array('class'=>'form-control')); ?>
				<?php echo $form->labelEx($model, 'actived'); ?>
				<?php echo $form->error($model,'actived'); ?>
			</div>
		</div>

		<div class="form-group row publish">
			<?php echo $form->labelEx($model,'default', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php echo $form->checkBox($model,'default', array('class'=>'form-control')); ?>
				<?php echo $form->labelEx($model, 'default'); ?>
				<?php echo $form->error($model,'default'); ?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save'), array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>

