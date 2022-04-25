<?php

namespace App\Http\Controllers;
use App\Models\Articles;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getarticles(){
        
        $articles = Articles::all();
        return $articles;

    }
    public function getarticle($id){
        
        $article = Articles::findOrFail($id);
        return $article;

    }
    public function deletearticle($id){
        
        DB::table('articles')->where('id', $id)->delete();
        $articles = Articles::all();
        return $articles;
        


    }
    public function addarticle(Request $request){
        
       return $request;
        


    }
    
}
