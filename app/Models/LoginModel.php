<?php 
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';

    public function getLogin($username, $password){
        return $this->where([
            'username' => $username,
            'password' => $password
        ])->first();
    }
	
}