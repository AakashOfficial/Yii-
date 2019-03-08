<h2>Registration Form</h2>
<?php
/*
$form = $this->beginWidget(
	'CActiveForm',
	array(
	
		'id' => 'upload-form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)
); 

    echo CHtml::activeLabel($model,'name');
    echo CHtml::activeTextField($model,'name');
	echo "<br/>";

    echo CHtml::activeLabel($model,'contact_no');
    echo CHtml::activeTextField($model,'contact_no');
	echo "<br/>";

    echo CHtml::activeLabel($model,'email');
    echo CHtml::activeTextField($model,'email');
	echo "<br/>";
 
    echo CHtml::activeLabel($model,'password');
    echo CHtml::activeTextField($model,'password');
	echo "<br/>";

    echo CHtml::activeLabel($model,'retypepassword');
    echo CHtml::activeTextField($model,'retypepassword');
	echo "<br/>";
		
    echo CHtml::activeLabelEx($model,'imageupl');
    echo CHtml::activeFileField($model,'imageupl');
	echo "<br/>";
    
       // echo $form->activeLabelEx($model, 'imageupl');
        //echo $form->activeFileField($model, 'imageupl');
	echo CHtml::submitButton('Registeration');	 

$this->endWidget(); */
?>

 <!-- <h2>Registration Form</h2> -->

<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
	
		'id' => 'upload-form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
	)
); 
?>
<div >
<?php
    echo CHtml::activeLabel($model,'name');
    echo CHtml::activeTextField($model,'name');
	echo "<br/>";
?></div>

<div>
<?php
    echo CHtml::activeLabel($model,'contact_no');
    echo CHtml::activeTextField($model,'contact_no');
	echo "<br/>";
?></div>

<div>
<?php
    echo CHtml::activeLabel($model,'email');
    echo CHtml::activeTextField($model,'email');
	echo "<br/>";
 ?></div>

<div>
<?php
    echo CHtml::activeLabel($model,'password');
    echo CHtml::activeTextField($model,'password');
	echo "<br/>";
?></div>

<div>
<?php
    echo CHtml::activeLabel($model,'retypepassword');
    echo CHtml::activeTextField($model,'retypepassword');
	echo "<br/>";
?></div>

<div>
<?php		
    echo CHtml::activeLabelEx($model,'imageupl');
    echo CHtml::activeFileField($model,'imageupl');
	echo "<br/>";
?></div>

<div>
<?php   
       // echo $form->activeLabelEx($model, 'imageupl');
        //echo $form->activeFileField($model, 'imageupl');
	echo CHtml::submitButton('Registeration');	 
?>
</div>
<?php
$this->endWidget(); 
?>


