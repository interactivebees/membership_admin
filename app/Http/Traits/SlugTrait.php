<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

/**
 * @method static where(mixed $slugField, string $slug)
 * @method static creating(\Closure $param)
 */
trait SlugTrait
{
    private static $__sluggableConfig = [
        "slug_column" => "slug",
        "slug_from_column"=>"title"
    ];

    protected static function bootSluggable()
    {
        self::setSluggableConfig();  // set initial config for sluggable
        static::creating(function ($model) {
            $model->{self::$__sluggableConfig['slug_column']} = $model->generateUniqueSlug($model->{self::$__sluggableConfig['slug_from_column']},0,self::$__sluggableConfig['slug_column']);
        });
    }

    private static function setSluggableConfig(){
        if(isset(self::$sluggableConfig['slug_column'])){
            self::$__sluggableConfig['slug_column']=self::$sluggableConfig['slug_column'];
        }
        else{
            self::$__sluggableConfig['slug_column']="slug";
        }
        if(isset(self::$sluggableConfig['slug_from_column'])){
            self::$__sluggableConfig['slug_from_column']=self::$sluggableConfig['slug_from_column'];
        }
        else{
            self::$__sluggableConfig['slug_from_column']="title";
        }
    }
    private function generateUniqueSlug($name,$counter=0,$slugField="slug")
    {
        $updatedName = $counter==0?$name:$name."-".$counter;
        if (static::where($slugField,Str::slug($updatedName))->exists()) {
            return  $this->generateUniqueSlug($name,$counter+1);
        }
        return Str::slug($updatedName);
    }

}
