<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class roundansController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\roundans);
			$this->filter->add('round_id', 'Round ID', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'Round ID');
			$this->grid->add('round_name', 'Round Name');
			$this->grid->add('question', 'Question');
			$this->grid->add('answer', 'Answer');
			$this->addStylesToGrid();

 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

 		$this->edit = \DataEdit::source(new \App\roundans);

		$this->edit->label('Edit Round Table');

 		$helpMessage = trans('This form is used to add a new round in Digital Fortress');
		
		$this->edit->add('id', 'Round ID','text')->rule('required');
		$this->edit->add('round_name', 'Round Name','text')->rule('required');
		$this->edit->add('question', 'Question','text')->rule('required');
		$this->edit->add('answer', 'Answer','text')->rule('required');

		$this->addHelperMessage($helpMessage);

        return $this->returnEditView();
    }    
}
