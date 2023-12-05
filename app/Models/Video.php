<?php
namespace App\Models ;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model {
    use HasFactory ;
    protected $fillable = [
        'thumbnail' , 'name' , 'slug' , 'description' ,'url' , 'created_at' , 'updated_at' , 'length'
    ];
    public function getLengthAttribute($value){
        return gmdate('H:i:s',$value);
    }
    
    public function getCreatedAtAttribute($value)
    {
        return verta($value)->formatDifference();
    }
}