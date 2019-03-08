<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
    public $id;
    public $password;
    public $name;
 
    private $_identity;
 
    public function rules()
    {
        return array(
            array('id, password,name', 'required'),
            array('password', 'authenticate'),
        );
    }
 
    public function authenticate($attribute,$params)
    {
        $this->_identity=new UserIdentity($this->id,$this->password);
        if(!$this->_identity->authenticate())
            $this->addError('password','Incorrect id or password.');
    }
}

?>