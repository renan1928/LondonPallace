<?php
/**
 * 
 * Controller de cadastro
 * 
 * @author Douglas Tenório 
 * @since 25-10-2013
 */

use Application\Controller\IndexController;
use Application\Model\Post;
use Zend\Http\Request;
use Zend\Stdlib\Parameters;
use Zend\View\Render\PhpRenderer;

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CadastroController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
