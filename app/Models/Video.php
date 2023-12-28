<?php
namespace App\Models ;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model {
    use HasFactory ;
    protected $fillable = [
        'thumbnail' , 'name' , 'slug' , 'description' ,'url' , 'created_at' , 'updated_at' , 'length' , 'category'
    ];
    public function getRouteKeyName()
    {
        return 'slug' ;
    }
    public function getLengthInHumanAttribute(){
        return gmdate('H:i:s',$this->value);
    }
    
    public function getCreatedAtAttribute($value)
    {
        return verta($value)->formatDifference();
    }

    public function relatedVideos(int $count = 6){
        return Video::all()->random($count) ;
    }
    public function findVideos(int $count = 6){
        return Video::all() ;
    }
    public function category(){
        return $this->belongsTo(category::class);
    }
    
}