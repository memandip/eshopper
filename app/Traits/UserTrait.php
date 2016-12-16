<?php 
namespace App\Traits;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

Trait UserTrait{

	public function redirectIfSuperadmin($id){
		$user = User::findOrFail($id);
		if($user->group->group_name == 'superadmin'){
	        return redirect('es/admin/viewusers');
	    }
	}


}