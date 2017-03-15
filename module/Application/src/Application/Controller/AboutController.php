<?php

/**
 * @author Shoaib
 * @copyright 2017
 */


/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\About;

class AboutController extends AbstractActionController
{
    
    
    protected $aboutTable;
    public function getAboutTable()
    {
        if (!$this->aboutTable) {
            $sm = $this->getServiceLocator();
            $this->aboutTable = $sm->get('Application\Model\AboutTable');
        }
        return $this->aboutTable;
    }
    
    public function AboutAction()
    {
        return new ViewModel(array(
            'abouts' => $this->getAboutTable()->fetchAll(),
        ));
    }
    
    //public function AboutAction()
    //{
     //   return new ViewModel();
    //}
}


