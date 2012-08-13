<?php
$this->breadcrumbs=array(
	'Logins'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Login', 'url'=>array('index')),
	array('label'=>'Create Login', 'url'=>array('create')),
	array('label'=>'Update Login', 'url'=>array('update', 'id'=>$model->login_id)),
	array('label'=>'Delete Login', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->login_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Login', 'url'=>array('admin')),
);
?>

<h1>View Login #<?php echo $model->login_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'login_id',
		'name',
		'password',
	),
)); ?>
