<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MessageBoard;

class MessageController extends Controller
{
    //
    public function add(){
        return view('MessageBoardAdd');
    }
    public function store(Request $request){
        $input = $request -> except('_token');
        $ref = MessageBoard::create($input);
        if($ref){
            return redirect('MessageBoard/index');
        }
        else{
            return back();
        }
    }
    public function index(){
        $ref = MessageBoard::get();
        return view('MessageBoardIndex',[
            'ref' => $ref
        ]);
    }
    public function edit($id){
        $input = $id;
        $pp = MessageBoard::where('id',$input);
        $pp->delete();
        if($pp){
            return redirect('MessageBoard/index');
        }
        else{
            return back();
        }
    }
}
