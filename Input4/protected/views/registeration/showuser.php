<?php 
 echo "<h1>Registered Users Details</h1>";
echo "<pre>";

//print_r ($model);

echo "</pre>";
//$defaultpath = 'C:\xampp\htdocs\Input\upload';
//$image = Yii::app()->baseUrl . '/images/loader.gif';

$baseUrll = 'C:\xampp\htdocs\Input\upload';

/*echo CHtml::image($image , $detail->idProduct0->Name , array(
   'style' => 'max-height: 128px;',
)); */

foreach($model as $records){
	
	echo $records->id;     echo "&nbsp;&nbsp; &nbsp; &nbsp;";
	echo $records->name;     echo "&nbsp;&nbsp; &nbsp; &nbsp;";
	echo $records->contact_no;     echo "&nbsp;&nbsp; &nbsp; &nbsp;";
	echo $records->email;     echo "&nbsp;&nbsp; &nbsp; &nbsp;";
	echo $records->password;     echo "&nbsp;&nbsp; &nbsp; &nbsp;";
	//echo $records->imageupl;     echo "&nbsp;&nbsp; &nbsp; &nbsp;";
	//$image = Yii::app()->baseUrl //. '/'.$records->imageupl;
	//$image = Yii::app()->'C:/xampp/htdocs/Input/upload';// . '/'.$records->imageupl;
	//$image = 'C:\xampp\htdocs\Input\upload' .'/'. $records->imageupl;
	/*$image = $image .'/'. $records->imageupl;
	echo CHtml::image($image ,array(
        'style' => 'max-height: 128px;',
    ));*/
	//echo "<img src='".Yii::app()->$baseUrll->baseUrl."/"."$records->imageupl"."' />";
	//CHtml::image(Yii::app()->$baseUrl.'/'.$records->imageupl);
	$image = Yii::app()->baseUrl.'/upload/'.$records->imageupl;
	echo CHtml::image($image); 
	
	
	//Yii::app()->baseUrl.'/upload/'.$records->imageupl;

	echo "<br/>";
	echo "<br/>";
	
	
	
			/*echo CHTML::encode($records->id); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
            echo CHTML::encode($records->name);  echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->contact_no); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->email); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->password); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->imageupl); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo "<br/>";
			echo "<br/>";*/
			
			//print_r($model);exit();
        };
		
/*foreach($model as $records){
			echo CHTML::encode($records->id); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
            echo CHTML::encode($records->name);  echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->contact_no); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->email); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->password); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->imageupl); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo "<br/>";
			echo "<br/>";
			
        }; 
*/
//foreach($record){print_r( $record )};exit();
?>