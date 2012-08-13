<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subcategory-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_name'); ?>
		<?php echo $form->textField($model,'sub_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sub_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_desc'); ?>
		<?php echo $form->textField($model,'sub_desc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sub_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_by'); ?>
		<?php echo $form->textField($model,'added_by'); ?>
		<?php echo $form->error($model,'added_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->