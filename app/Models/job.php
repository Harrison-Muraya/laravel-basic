<?php

namespace App\Models;

use Illuminate\Support\Arr;

class job{
    public static function all():array{
        return [
        [
            'id'=> 1,
            'title'=>'programmer',
            'salary'=> 300000,
        ],
        [
            'id'=> 2,
            'title'=>'techear',
            'salary'=> 3290000,
        ],
        [
            'id'=> 3,
            'title'=>'engineer',
            'salary'=> 4000000,
        ]
    ];
 }
 public static function find($id){
   $job = Arr::first (static::all(), fn($job)=>$job['id']==$id);

   if(!$job){
    abort(404);
   }

   return $job;

 }
}
