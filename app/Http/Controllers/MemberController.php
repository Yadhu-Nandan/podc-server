<?php

namespace App\Http\Controllers;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    public function getmembers(){
        $members = Members::all();
        return $members;
    }
    public function getmember($id){
        
        $member = Members::findOrFail($id);
        return $member;

    }
    public function deletemember($id){
        
        DB::table('members')->where('id', $id)->delete();
        $members = Members::all();
        return $members;
        


    }
}
