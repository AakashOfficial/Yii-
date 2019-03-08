<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class PostController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionTests()
	{
		$this->render('tests');		
	}
}

?>