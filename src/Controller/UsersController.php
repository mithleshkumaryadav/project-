<?php
namespace App\Controller;
use App\Model\Table\UsersTable;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class UsersController extends AppController
{
	public function initialize()
   {
   parent::initialize();
   $this->loadModel('Users');
   $this->loadComponent('Flash');



  
   //$this->loadComponent('Csrf');
   }

    
   public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
           
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
  
public function add()
{
	$user=$this->Users->newEntity();
  
  if($this->request->is('post')){
    
  	$user=$this->Users->patchEntity($user,$this->request->getdata());
     
     if($this->Users->save($user))
  	{
  		$this->Flash->success(__("your registration is succesful"));
  		return $this->redirect(['action'=>'index']);
  	}
     $this->Flash->error(__(" please fill up form "));
}

}
///////fetching data/////

public function index(){
$this->viewBuilder()->setlayout('Userslayout');
$users = TableRegistry::get('users');
if($this->Auth->user('id')=='1')
{
$query = $users->find();
}else{
 $query = $users->find()->where(['id'=>$this->Auth->user('id')]); 
}

$this->set('results',$query);
$this->set('results', $this->paginate($query, ['limit'=> '5']));
}

/*public function view(){
$users = TableRegistry::get('users');

$query = $users->find()->where(['id'=>$this->Auth->user('id')]);
 $this->set(compact('query'));
   $this->set('_serialize',['query']); 
}*/

public function createuser(){

}
//edit/////
public function edit($id=''){
if($this->request->is('post')){
$username = $this->request->data('username');
$useremail = $this->request->data('useremail');
$userpassword = $this->request->getdata('userpassword');
$designation = $this->request->data('designation');
$address = $this->request->data('address');
$pincode = $this->request->data('pincode');
$role = $this->request->data('role');
$user= TableRegistry::get('users');
$users=$user->get($id);
$users->username = $username;
$users->useremail = $useremail;
$users->designation = $designation;
$users->address = $address;
$users->pincode = $pincode;
$users->userpassword = $userpassword;
$users->role = $role;
if($user->save($users))
echo "User is udpated";
$this->setAction('index');
} else {
$users = TableRegistry::get('users')->find();
$users = $users->where(['id'=>$id])->first();
$this->set('username',$users->username);
$this->set('useremail',$users->useremail);
$this->set('userpassword',$users->userpassword);
$this->set('designation',$users->designation);
$this->set('address',$users->address);
$this->set('pincode',$users->pincode);
$this->set('role',$users->role);
$this->set('id',$id);
}
}
//delete///
public function delete($id=''){

         $users = TableRegistry::get('users');
         $users = $users->get($id);
         $this->Users->delete($users);
         echo "User deleted successfully.";
         $this->setAction('index');
      }

      //role///////
      /*public function isAuthorized($user)
{
   
    if ($this->request->getParam('action') === 'add') {
        return true;
    }

    // The owner of an article can edit and delete it
    // Prior to 3.4.0 $this->request->param('action') was used.
    if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
        // Prior to 3.4.0 $this->request->params('pass.0')
        $userId = (int)$this->request->getParam('pass.0');
        if ($this->Users->isOwnedBy($userId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}*/
///////////permission page////////
       public function permission($id='')
    {
        if($this->request->is('post')){
        $edit = $this->request->data('edit');
        $remove = $this->request->data('remove');
        $users = TableRegistry::get('permissions');
        $user = $users->get($id);
        $user->edit = $edit;
        $user->remove = $remove;
        if($users->save($user))
        {
            $this->Flash->success(__("Permission is udpated"));
            return $this->redirect(['action'=>'index']);
            
        }
        }else {
            $user_table = TableRegistry::get('permissions')->find();
            $user = $user_table->where(['id'=>$id])->first();
            $this->set('edit',$user->edit);
            $this->set('remove',$user->remove);
            $this->set('id',$id);
        }

        

        
        
    }
        


      
     
  }






