<?php

$form = $this->beginWidget(
	'CActiveForm',
	array(
	
		'id' => 'upload-form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)
);
// ...
echo CHtml::activeLabel($model,'title');
echo CHtml::activeTextField($model,'title');

echo CHtml::activeLabel($model,'content');
echo CHtml::activeTextField($model,'content');

echo $form->labelEx($model, 'imageupl');
echo $form->fileField($model, 'imageupl');

echo $form->error($model, 'image');

echo CHtml::submitButton('Submit');
$this->endWidget();

/*
<form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
</form>
*/
?>