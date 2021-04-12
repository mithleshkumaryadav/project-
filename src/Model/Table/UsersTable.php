<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

$users=TableRegistry::getTableLocator()->get('users');
$query=$users->find();
class UsersTable extends Table
{
 public function validationDefault(Validator $validator)
   {
       $validator
           ->integer('id')
           ->allowEmpty('id' );

       $validator
           ->requirePresence('username',)
           ->notEmpty('username');

       $validator
           ->requirePresence('useremail')
           ->notEmpty('useremail');
     
         $validator
           ->requirePresence('designation')
           ->notEmpty('designation');

           $validator
           ->requirePresence('address')
           ->notEmpty('address');

            $validator
           ->requirePresence('pincode')
           ->notEmpty('pincode');
           
            $validator
           ->requirePresence('password')
           ->notEmpty('password');
            /**$validator
           ->requirePresence('role')
           ->notEmpty('role');*/
       return $validator;
   }
   
 }