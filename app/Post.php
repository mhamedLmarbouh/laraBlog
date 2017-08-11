<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    protected $fillable = ['title', 'body'];

    public function comments()
    {

        return $this->hasMany(Comment::class);

    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year,monthname(created_at) month , count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at)')
            ->get();
    }

    public function scopeFilter($query, $filters)
    {

        if ($month=$filters['month']){
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if ($year=$filters['year']){
            $query->whereYear('created_at',$year);
        }
    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function addComment($body)
    {

        //Comment::create([
//        	'body' 		=> $body,
//        	'post_id' 	=> $this->id
        //]);

        $this->comments()->create([
            'body' 		=> $body,
            'user_id' 	=> auth()->user()->id
        ]);

    }
}
