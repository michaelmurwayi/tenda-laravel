<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Observers\TenderObserver;


class Tender extends Model
{
    public $primarykey = 'id';
    protected $table="tender";
    public $incrementing = true;
    protected $fillable = ['name', 'submission_date', 'description', 'user_id' ];
    use HasFactory;
    
    public function user()  
    {  
        return $this->belongsTo(User::class);  
    }

    public static function boot() {
        parent::boot();
        parent::observe(new TenderObserver);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }  
}

