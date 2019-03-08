<?php

class RegisterationController extends Controller
{

	 public function actionRegisteration(){
		 
		 $post=new RegisterationForm;
		 $this->render('registeration',array(
               'model'=>$post,
           ));
		   
		  // echo "Test";
	    if(isset($_POST['RegisterationForm'])){

	        $post->attributes=$_POST['RegisterationForm'];
			$post->imageupl=CUploadedFile::getInstance($post,'imageupl');
		
			print_r($_REQUEST);
			echo "Test";
			if($post->validate()){

				if(!empty($post->imageupl)){
					//echo "Test";
                    $rep = Yii::getPathOfAlias('webroot').'/upload/';
				    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
                    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
					//echo "Test";
                }
		    }else{
				echo "<pre>"; print_r($post->getErrors());
				echo "<pre>"; print_r($post->hasErrors());
			}

	       // print_r($_REQUEST);
	        $post->save();
       } 
		 
		/*$post=new RegisterationForm;
		$this->render('registeration',array(
               'model'=>$post,
           ));
		 //  echo "Test";
		 // echo "Test";
	    if(isset($_POST['RegisterationForm'])){
				
			//echo "Test";
	        $post->attributes=$_POST['RegisterationForm'];
			$post->imageupl=CUploadedFile::getInstance($post,'imageupl');
			//echo "Test";
			//print_r($_REQUEST);
			//echo "Test";
			if($post->validate()){
				echo "Test";
				if(!empty($post->imageupl)){
					//echo "Test";
                    $rep = Yii::getPathOfAlias('webroot').'/upload/';
				    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
                    $post->imageupl->saveAs($rep.$post->imageupl);
                    $post->imageupl=$post->imageupl;
					$post->save();
					//echo "Test";
                }
		    }else{
				echo "<pre>"; print_r($post->getErrors());
				echo "<pre>"; print_r($post->hasErrors());
			} 
       }*/
	}		
}