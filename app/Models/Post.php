<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =['titulo','contenido'];

<<<<<<< Updated upstream


=======
    public function images(): HasMany
    {
        return $this->hasMany('images', 'post_id');
    }
>>>>>>> Stashed changes
}
