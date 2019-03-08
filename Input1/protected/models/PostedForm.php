<?php

class PostedForm extends CActiveRecord
{
	public $imageupl;
	public $title;
	public $content;
	public $id;
	public $create_time;
	
	private $_identity;
	
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'posted';
    }

	public function primaryKey(){
        return 'id';
    }
	
	public function rules()
	{
		return array(
			// title and content are required
			array('title,content,imageupl', 'required'),
		);
	}
	
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->title);
			if(!$this->_identity->authenticate())
				$this->addError('title','Title Not Entered');
			
			$this->_identity=new UserIdentity($this->content);
			if(!$this->_identity->authenticate())
				$this->addError('content','Content Not Entered');
			
			$this->_identity=new UserIdentity($this->imageupl);
			if(!$this->_identity->authenticate())
				$this->addError('imageupl','Image Not Entered');
		}
	}
}

?>