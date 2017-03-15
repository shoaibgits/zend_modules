<?php

 namespace Application\Model;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;

 class About implements InputFilterAwareInterface
 {
     public $id;
     public $name;
     public $email;
     public $phone;
     public $address;
     //protected $inputFilter;                       // <-- Add this variable

     public function exchangeArray($data)
     {
         $this->id      = (isset($data['id']))     ? $data['id']     : null;
         $this->name    = (isset($data['name'])) ? $data['name'] : null;
         $this->email   = (isset($data['email']))  ? $data['email']  : null;
         $this->phone   = (isset($data['phone']))  ? $data['phone']  : null;
         $this->address = (isset($data['address']))  ? $data['address']  : null;
     }
     
      // Add the following method:
     public function getArrayCopy()
     {
         return get_object_vars($this);
     }


     // Add content to these methods:
     public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }
     
     public function getInputFilter()
     {
         if (!$this->inputFilter) {
             $inputFilter = new InputFilter();

             $inputFilter->add(array(
                 'name'     => 'id',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'Int'),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'artist',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $inputFilter->add(array(
                 'name'     => 'title',
                 'required' => true,
                 'filters'  => array(
                     array('name' => 'StripTags'),
                     array('name' => 'StringTrim'),
                 ),
                 'validators' => array(
                     array(
                         'name'    => 'StringLength',
                         'options' => array(
                             'encoding' => 'UTF-8',
                             'min'      => 1,
                             'max'      => 100,
                         ),
                     ),
                 ),
             ));

             $this->inputFilter = $inputFilter;
         }

         return $this->inputFilter;
     }

 }
