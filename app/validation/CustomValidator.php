<?php

class CustomValidator extends Illuminate\Validation\Validator
{

    protected $implicitRules = array('Required', 'RequiredWith', 'RequiredWithout', 'RequiredIf', 'Accepted', 'RequiredWithoutField');

    public function __construct(\Symfony\Component\Translation\TranslatorInterface $translator, $data, $rules, $messages = array())
    {
        parent::__construct($translator, $data, $rules, $messages);
        $this->isImplicit('fail');
    }

    public function validateAlphamericSpaces($attribute, $value, $parameters = null)
    {
        $regex = "/(^[A-Za-z0-9\-_ ]+$)+/";
    
        if (preg_match($regex, $value)) {
            return true;
        }
        return false;
    }
}