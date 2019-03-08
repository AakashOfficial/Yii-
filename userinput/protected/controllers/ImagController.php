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
       
			
		/*	
		$defaultdir = sys_get_temp_dir();
		echo $defaultdir;
		echo "==============================";
		if(isset($_REQUEST['ImagForm'])){
		    $filenames = $_FILES['ImagForm']['tmp_name'];
			//$filename = (string)$filename;
			//echo implode( ", ",$filenames);
			$filename = implode( ", ",$filenames);
		    echo $filename;
		}
		$destination = "C:\xampp\tmp\New\New";
		move_uploaded_file ($filename , $destination );
		
		*/
		
/********************************************************************************************************************************************************/		
		
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
                $model->imageupl->saveAs($rep.date('Y-m-d').$model->imageupl);
                $model->imageupl=date('Y-m-d').$model->imageupl;
				//echo " <script type="javascript"> alert("Uploaded ")</script>";
				echo "File Uploaded";
            }
           
           // $model->description= CHtml::encode($_POST['ImagForm']['description']);
          //  $model->save();
           // Yii::app()->user->setFlash('save',"The car has been successfully registered!");
            //$this->redirect(array('admin'));
			
			//move_uploaded_file($_FILES["ImagForm"]["tmp_name"],"/images".$_FILES["ImagForm"]["name"]);

        }else{
			
			echo "<pre>"; print_r($model->getErrors());
		}
		
		 /*$this->render('imag',array(
                'model'=>$model,
            )); 
		 */	

	}	
	
	/*
	function createpath( $path=NULL, $perm=0644 ) {
        if( !file_exists( $path ) ) {
            createpath( dirname( $path ) );
            mkdir( $path, $perm, TRUE );
            clearstatcache();
        }
    }
	
	
	if( isset( $_POST['submit'] ) && !empty( $_FILES['imageupl'] ) ) {

        $status = false;
        $writeenable=true;

        $name = $_FILES['imageupl']['name'];
        $error = $_FILES['imageupl']['error'];
        $tmp = $_FILES['imageupl']['tmp_name'];
		
		$targetdir = 'C:\xampp\htdocs\userinput\protected\upload\images';

        if( !file_exists( $targetdir ) ) exit('Warning: Target directory cannot be found');
        if( !is_writable( $targetdir ) ) {
            if( $writeenable ) chmod( $targetdir,0644 );
            else exit('unable to write to target directory');
        }

        if( $error == UPLOAD_ERR_OK && is_uploaded_file( $tmp ) ){
            $status = move_uploaded_file( $tmp , $targetdir . '/' . $name );
        }

        echo $status ? 'uploaded' : 'Not Uploaded';
    }
	*/
	/*public function actionImag()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=new ImagForm;    
        $this->render('imag',array(
                'model'=>$model,
            )); 
			
		$defaultdir = sys_get_temp_dir();
		echo $defaultdir;
		echo "==============================";
		if(isset($_REQUEST['ImagForm'])){
		    $filenames = $_FILES['ImagForm']['tmp_name'];
			//$filename = (string)$filename;
			//echo implode( ", ",$filenames);
			$filename = implode( ", ",$filenames);
		    echo $filename;
		}
		$destination = "C:\xampp\tmp\New\New";
		move_uploaded_file ($filename , $destination );
		//$image = CUploadedFile::getInstance ($model, '$uploaded');
		//$image->saveAs('C:\xampp\tmp\New');
		//$ourModel->imageField = 'C:\xampp\tmp\New\.';
		//$model->save();
		
		
		
		
		
		
		
		//$currentDir = getcwd();
        //$uploadDirectory = "/uploads/"
		
		
	    /*echo "ssss<pre>"; print_r($_REQUEST); 
		
		if(isset($_REQUEST['ImagForm'])){
			echo "ssss<pre>"; print_r($_FILES['ImagForm']); exit();
		}
		*/

	   
		//$temp_file = tempnam(sys_get_temp_dir(), '$_REQUEST');
		//if(isset($_FILES['ImagForm'])){
			//$uploaded = $_FILES['image'];
		}
		
		//$image = CUploadedFile::getInstance ($model, '$uploaded');
		//$image->saveAs('C:\xampp\tmp\New');
		//$ourModel->imageField = 'C:\xampp\tmp\New\.';
		//$model->save();
     
	 
		
        //if(isset($_REQUEST['ImagForm'])){
		//	echo "ssss<pre>"; print_r($_FILES['ImagForm']); exit();
		//}
				
		
		
		//$this->render('imag',array(
        //        'model'=>$model,
        //     )); 
		//}	
		
		
	/*foreach ($_FILES["pictures"]["error"] as $key => $error) {
     if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
     }
    }*/
		
	/*move_uploaded_file ( string $ImagForm , string $destination )
		//$this->render('imag');
		if(isset($_REQUEST['ImagForm'])){
			echo "ssss<pre>"; print_r($_FILES['ImagForm']); exit();
			
			//rename( Yii::app()->basePath.'C:\xampp\tmp\'.$ads->image, Yii::app()->basePath.'C:\Users\Deepak\Desktop\'.$ads->image);
			
		}
		
		$this->render('imag',array(
                'model'=>$model,
            )); 
	}
	*/
	
	/*
	public function actionImag()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=new ImagForm;
       
        
	echo "ssss<pre>"; print_r($_REQUEST); 
		//$this->render('imag');
		if(isset($_REQUEST['ImagForm'])){
			echo "ssss<pre>"; print_r($_FILES['ImagForm']); exit();
			
			//rename(Yii::app()->basePath.'C:\xampp\tmp\'.$ads->image, Yii::app()->basePath.'C:\Users\Deepak\Desktop\'.$ads->image);
			if(isset($_REQUEST['ImagForm'])){
			echo "ssss<pre>"; print_r($_FILES['ImagForm']); exit();
			//$imagevar = $_POST['images'];
			//$messages = "";
			//$this->actionImagevali(array('userimage' => $imagevar));
            //$message = $this;
			//echo $message;
		}
		
		$this->render('imag',array(
                'model'=>$model,
            )); 
	}
	}
	*/
	
}