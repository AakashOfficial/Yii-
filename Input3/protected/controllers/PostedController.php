<?php

class PostedController extends Controller
{

	 public function actionPosted(){
		$post=new PostedForm;
		//$post2=new PostedForm;
		$this->render('posted',array(
               'model'=>$post,
           ));
		   
		  // echo "Test";
	    if(isset($_POST['PostedForm'])){
			
			
			//echo "Test";
	        $post->attributes=$_POST['PostedForm'];
			$post->imageupl=CUploadedFile::getInstance($post,'imageupl');
			
			//$post2->imageupl=CUploadedFile::getInstance($post,'imageupl');
			print_r($_REQUEST);
			//echo "Test";
			if($post->validate()){
			//echo "Test";
                /*if(!empty($post->imageupl)){
					//echo "Test";
                    $rep = Yii::getPathOfAlias('webroot').'/upload/';
				    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
                    $post->imageupl->saveAs($rep.date('Y-m-d').$post->imageupl);
                    $post->imageupl=date('Y-m-d').$post->imageupl;
					//echo "Test";
                }*/
				if(!empty($post->imageupl)){
					//echo "Test";
                    $rep = Yii::getPathOfAlias('webroot').'/upload/';
				    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
                    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
					//echo "Test";
                }
		    } 

	        print_r($_REQUEST);
			$post->create_time=time();
	        $post->save();
			//echo "Test";
       } 
	}		
	
	//$post->image='content for the sample post';
	
	/*
	public function actionPosted(){
		$model=new PostedForm;    
       	$this->render('posted',array(
                'model'=>$model,
            )); 
	
	$model=new PostedForm;
    if(isset($_POST['PostedForm']))
    {
		
        $model->attributes=$_POST['PostedForm'];
        $model->image=CUploadedFile::getInstance($model,'image');
		
        if($model->validate())
        {
			
            if(!empty($model->image)){
                $rep = Yii::getPathOfAlias('webroot').'/upload/';
				$model->image->saveAs($rep.$model->image);
                $model->image=$model->image;
                $model->image->saveAs($rep.date('Y-m-d').$model->image);
                $model->image=date('Y-m-d').$model->image;
				//echo " <script type="javascript"> alert("Uploaded ")</script>";
				echo "File Uploaded";
            }
           
        }else{
			
			echo "<pre>"; print_r($model->getErrors());
		}
		
	}
	}
	*/
}




/*if($post->validate()){
			//echo "Test";
                if(!empty($post->imageupl)){
					//echo "Test";
                    $rep = Yii::getPathOfAlias('webroot').'/upload/';
				    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
                    $post->imageupl->saveAs($rep.date('Y-m-d').$post->imageupl);
                    $post->imageupl=date('Y-m-d').$post->imageupl;
					echo "Test";
                }
		    } 
			*/