<?php

namespace App\Models\Membership;

use App\Http\Traits\SlugTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'membership_categories';
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($post) {
            $post->slug = $post->generateSlug($post->name);
            $post->save();
        });
    }
    private function generateSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }
}
