<?php

class ImagController extends Controller
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	
	
	
	public function actionImag(){
		
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=new ImagForm;    
       	$this->render('imag',array(
                'model'=>$model,
            )); 
	
	$model=new ImagForm;
    if(isset($_POST['ImagForm']))
    {
		
        $model->attributes=$_POST['ImagForm'];
        $model->imageupl=CUploadedFile::getInstance($model,'imageupl');
		
        if($model->validate())
        {
			
            if(!empty($model->imageupl)){
                $rep = Yii::getPathOfAlias('webroot').'/upload/';
				$model->imageupl->saveAs($rep.$model->imageupl);
                $model->imageupl=$model->imageupl;
                $model->imageupl->saveAs($rep.date('Y-m-d').$model->imageupl);
                $model->imageupl=date('Y-m-d').$model->imageupl;
				//echo " <script type="javascript"> alert("Uploaded ")</script>";
				echo "File Uploaded";
            }
           
        }else{
			
			echo "<pre>"; print_r($model->getErrors());
		}
		
	}	
	
	
}