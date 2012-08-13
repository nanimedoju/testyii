<?php
$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subcategory', 'url'=>array('index')),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
);
?>

<h1>Create Subcategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>