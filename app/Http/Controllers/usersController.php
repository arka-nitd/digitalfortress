<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class usersController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\users);
			$this->filter->add('email', 'Email ID', 'text');
			$this->filter->add('username', 'User Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID',true);
			$this->grid->add('email', 'Email ID');
			$this->grid->add('username', 'Name');
			$this->grid->add('created_at', 'Created At');	
			$this->addStylesToGrid();	

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\users);

			$this->edit->label('Edit Users');

			$this->edit->add('email', 'Email ID', 'text')->rule('required');
			$this->edit->add('username', 'Name', 'text')->rule('required');
       
        return $this->returnEditView();
    }    
    
}
