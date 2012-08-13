<?php
$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->sub_cat_id=>array('view','id'=>$model->sub_cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subcategory', 'url'=>array('index')),
	array('label'=>'Create Subcategory', 'url'=>array('create')),
	array('label'=>'View Subcategory', 'url'=>array('view', 'id'=>$model->sub_cat_id)),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
);
?>

<h1>Update Subcategory <?php echo $model->sub_cat_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>