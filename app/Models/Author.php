<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $primaryKey = 'AuthorID';
    protected $fillable = ['AuthorName', 'Biography'];

    public function books()
    {
        return $this->hasMany(Book::class, 'AuthorID');
    }
}

