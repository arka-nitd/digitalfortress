<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class hintsController extends CrudController{

    public function all($entity){
        
        parent::all($entity); 

		$this->filter = \DataFilter::source(new \App\hints);
		$this->filter->add('title', 'Hints Title', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('title', 'Hint Title');
		$this->grid->add('content', 'Hint Content');
		$this->addStylesToGrid();

 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

 		$this->edit = \DataEdit::source(new \App\hints);

		$this->edit->label('Add/Edit Round');

 		$helpMessage = trans('This form is used to add/edit a hint in Digital Fortress');
		$this->addHelperMessage($helpMessage);

		$this->edit->add('title', 'Hint Title','text')->rule('required');
		$this->edit->add('content', 'Hint Content','text')->rule('required');
		
        return $this->returnEditView();
    }    
}
