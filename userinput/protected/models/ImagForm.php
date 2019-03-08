<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ImagForm extends CFormModel
{
	public $imageupl;
	//public $description;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('imageupl', 'required'),
			//array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			//array('title, image', 'length', 'max'=>255, 'on'=>'insert,update'),
		);
	}
	
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->imageupl);
			if(!$this->_identity->authenticate())
				$this->addError('imageupl','Incorrect Format of Image.');
		}
	}

}




/*
class ImagForm extends CFormModel
{
	public $imageupl;

	private $_identity;


	public function rules()
	{
		return array(
			// username and password are required
			array('imageupl', 'required'),
			//array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			//array('title, image', 'length', 'max'=>255, 'on'=>'insert,update'),
		);
	}
	
	public function validate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->imageupl);
			if(!$this->_identity->authenticate())
				$this->addError('imageupl','Incorrect Format of Image.');
		}
	}

}
*/
?>