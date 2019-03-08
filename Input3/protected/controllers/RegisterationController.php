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

    public function actionShowuser(){
		$model = new RegisterationForm;
		$record = RegisterationForm::model()->findAll();
		
		$this->render('showuser',array(
               'model'=>$record,
        ));
		/*echo "<pre>";
        print_r ($record);
        echo "</pre>";
		*/
		
		/*foreach($record as $records){
			echo CHTML::encode($records->id); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
            echo CHTML::encode($records->name);  echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->contact_no); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->email); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->password); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo CHTML::encode($records->imageupl); echo "&nbsp;&nbsp; &nbsp; &nbsp;";
			echo "<br/>";
			echo "<br/>";
			
        }; */
		
	}
}