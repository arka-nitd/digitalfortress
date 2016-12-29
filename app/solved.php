<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class solved extends Model {

    protected $table = 'solved';
    protected $fillable = ['id','email','question_no','round_id'];

}
