<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class quizController extends CrudController{

    public function all($entity){
        parent::all($entity); 


			$this->filter = \DataFilter::source(new \App\quiz);
			$this->filter->add('round', 'Round ID', 'text');
			$this->filter->add('question', 'Question', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'Question No',true);
			$this->grid->add('round', 'Round',true);
			$this->grid->add('question', 'Question');
			$this->grid->add('answer', 'Answer');
			$this->grid->add('position', 'GMAP Position');
			$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\quiz);

			$this->edit->label('Edit Questions');

 			$helpMessage = trans('This form is used to edit/add a new question in Digital Fortress');

			$this->edit->add('round', 'Round ID','text')->rule('required');
			$this->edit->add('id', 'Question ID','text')->rule('required');
			$this->edit->add('question', 'Question','text')->rule('required');
			$this->edit->add('answer', 'Answer','text')->rule('required');
			$this->edit->add('position', 'GMAP Position','text')->rule('required');

			$this->addHelperMessage($helpMessage);

       
        return $this->returnEditView();
    }    
}
