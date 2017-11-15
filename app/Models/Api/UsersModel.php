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
        
        return 2;
    }
}
?>