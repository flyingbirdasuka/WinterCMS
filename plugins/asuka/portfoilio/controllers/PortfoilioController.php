<?php namespace Asuka\Portfoilio\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PortfoilioController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Asuka.Portfoilio', 'main-menu-item');
    }
}
