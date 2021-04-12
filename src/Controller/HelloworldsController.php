<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Validation\Validator;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3/en/controllers/pages-controller.html
 */
class HelloworldsController extends AppController
{
    
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function initialize()
   {
   parent::initialize();
     $components = array('Email'); 

   //$this->loadComponent('Csrf');
   }


    
  public function registration(){
$this->Email->smtp = array(
  'port'=>'587',
  'timeout'=>'30',
  'host' => 'smtp.sendgrid.net',
  'username'=>'sendgrid_username',
  'api_key'=>'sendgrid_api_key',
  'client' => 'yourdomain.com'
);

$this->Email->delivery = 'smtp';
$this->Email->from = 'yadavmithlesh784@gmail.com ';
$this->Email->to = 'mithlesh.k@nopaperforms.com ';
$this->set('mithlesh', 'mithlesh');
$this->Email->subject = 'This is a subject';
$this->Email->template = 'registration';
$this->Email->sendAs = 'both';
$this->Email->send();
}


    public function test()

    {

        $this->autoRender=false;
       $validator = new Validator();
    $data=array($this->request->data("name"),
     $this->request->data("email"),  
     $this->request->data("password"),
     $this->request->data("mobilenumber"));
$validator
 
 ->requirePresence('name')
 ->notEmpty('name', 'Enter Your Name.')
 ->requirePresence('email')
 ->add('email', 'validFormat', [
   'rule' => 'email',
   'message' => 'E-mail must be valid'
 ])
 ->requirePresence('password')
 //->notEmpty('password', 'You need to enter password.')
 ->add('password', [
        'length' => [
            'rule' => ['minLength', 6],
            'message' => 'passwors at least 10 characters long',
        ]
    ])
 ->requirePresence('mobilenumber')
 ->notEmpty('mobilenumber', 'Enter your mobileno.');

$errors = $validator->errors($this->request->getdata());
if (!empty($errors)) {
 // Send an email.
 print_r($errors);
} 

        
       
}
    
}


