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
echo $form->labelEx($model, 'imageupl');
echo $form->fileField($model, 'imageupl');

echo $form->error($model, 'image');


// ...
echo CHtml::submitButton('Imag');
$this->endWidget();

/*
<form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
</form>
*/
?>