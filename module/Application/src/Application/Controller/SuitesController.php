<?php
/**
 * 
 * Controller de suítes
 * 
 * @author Douglas Tenório 
 * @since 25-10-2013
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SuitesController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
