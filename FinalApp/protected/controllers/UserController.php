<?php

class UserController extends CController
{
	public function actionUser()
    {
        $model=new UserForm;
        if(isset($_POST['UserForm']))
        {
            echo 'done';
        }
        $this->render('user',array(
                'model'=>$model,
            )); 
	}		
}
?>