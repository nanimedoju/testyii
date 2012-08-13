<?php
$this->breadcrumbs=array(
	'Logins'=>array('index'),
	$model->name=>array('view','id'=>$model->login_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Login', 'url'=>array('index')),
	array('label'=>'Create Login', 'url'=>array('create')),
	array('label'=>'View Login', 'url'=>array('view', 'id'=>$model->login_id)),
	array('label'=>'Manage Login', 'url'=>array('admin')),
);
?>

<h1>Update Login <?php echo $model->login_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>