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

    function getDataList(){
        
        $data_list = UsersModel::where('category_flag', 0)->paginate(1)->toArray();
                    print_r($data_list);die;
        return 2;
    }
}
?>