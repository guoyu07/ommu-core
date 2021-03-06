<?php
/**
 * Messages (message)
 * @var $this TranslateController
 * @var $model Message
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 Ommu Platform (opensource.ommu.co)
 * @created date 21 January 2018, 09:03 WIB
 * @modified date 21 January 2018, 09:03 WIB
 * @link http://opensource.ommu.co
 *
 */
?>

<?php $form=$this->beginWidget('application.libraries.core.components.system.OActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>true,
	/*
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
	*/
)); ?>

<div class="dialog-content">
	<fieldset>

		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<?php if(!$model->isNewRecord) {?>
		<div class="form-group row">
			<?php echo $form->labelEx($model, 'phrase_search', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php echo $model->phrase->message;?>
				<?php echo $form->error($model, 'phrase_search'); ?>
			</div>
		</div>
		<?php }?>

		<div class="form-group row">
			<?php echo $form->labelEx($model, 'language', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php 
				$language = OmmuLanguages::getLanguage(null, null, 'code');
				if($language != null)
					echo $form->dropDownList($model,'language', $language, array('prompt'=>Yii::t('phrase', 'Select One'), 'class'=>'form-control'));
				else
					echo $form->dropDownList($model,'language', array('prompt'=>Yii::t('phrase', 'Select One')), array('class'=>'form-control')); ?>
				<?php echo $form->error($model, 'language'); ?>
			</div>
		</div>

		<div class="form-group row">
			<?php echo $form->labelEx($model, 'translation', array('class'=>'col-form-label col-lg-4 col-md-3 col-sm-12')); ?>
			<div class="col-lg-8 col-md-9 col-sm-12">
				<?php //echo $form->textArea($model, 'translation', array('rows'=>6, 'cols'=>50, 'class'=>'form-control'));
				$this->widget('yiiext.imperavi-redactor-widget.ImperaviRedactorWidget', array(
					'model'=>$model,
					'attribute'=>'translation',
					'options'=>array(
						'buttons'=>array(
							'html', 'formatting', '|', 
							'bold', 'italic', 'deleted', '|',
							'unorderedlist', 'orderedlist', 'outdent', 'indent', '|',
							'link', '|',
						),
					),
					'plugins' => array(
						'fontcolor' => array('js' => array('fontcolor.js')),
						'table' => array('js' => array('table.js')),
						'fullscreen' => array('js' => array('fullscreen.js')),
					),
					'htmlOptions'=>array(
						'class' => 'form-control',
					),
				)); ?>
				<?php echo $form->error($model, 'translation'); ?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save'), array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>