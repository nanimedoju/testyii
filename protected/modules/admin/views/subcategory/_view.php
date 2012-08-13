<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_cat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sub_cat_id), array('view', 'id'=>$data->sub_cat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_name')); ?>:</b>
	<?php echo CHtml::encode($data->sub_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_desc')); ?>:</b>
	<?php echo CHtml::encode($data->sub_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_by')); ?>:</b>
	<?php echo CHtml::encode($data->added_by); ?>
	<br />


</div>