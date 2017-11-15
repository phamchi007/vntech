<?php
namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tech_category';

    function getdata(){
        $flights = UsersModel::where('category_flag', 0)
               ->get();
               print_r($flights);die;
        return 2;
    }
}
?>