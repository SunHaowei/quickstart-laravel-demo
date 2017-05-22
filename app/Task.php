<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	/**
     * 这些属性能被批量赋值。
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
