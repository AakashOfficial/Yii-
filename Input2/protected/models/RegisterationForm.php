<?php

class RegisterationForm extends CActiveRecord
{
	public $name;
	public $contact_no;
	public $email;
	public $password;
	public $retypepassword;
	public $imageupl;
	
	private $_identity;
	
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'registeration';
    }

	public function primaryKey(){
        return 'id';
    }
	
	public function rules()
	{
		return array(
			// title and content are required
			array('name,contact_no,email,password,retypepassword,imageupl', 'required'),
		);
	}
	
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->name);
			if(!$this->_identity->authenticate())
				$this->addError('name','Name Not Entered');
			
			$this->_identity=new UserIdentity($this->contact_no);
			if(!$this->_identity->authenticate())
				$this->addError('contact_no','Contact Number Not Entered');
			
			$this->_identity=new UserIdentity($this->email);
			if(!$this->_identity->authenticate())
				$this->addError('email','Email Not Entered');
			
			$this->_identity=new UserIdentity($this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Password Not Entered');
			
			$this->_identity=new UserIdentity($this->retypepassword);
			if(!$this->_identity->authenticate())
				$this->addError('retypepassword','Password Not Re-Entered');
			
			$this->_identity=new UserIdentity($this->imageupl);
			if(!$this->_identity->authenticate())
				$this->addError('imageupl','Image Not Entered');
		}
	}
}

?>