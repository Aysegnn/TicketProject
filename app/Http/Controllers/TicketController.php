<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=array(
            "subject"=>"required",
            "content"=>"required",
            "department_id"=>"required"
        );
    
        $validator=Validator::make($request->all(),$rules);
    
        if($validator->fails()){
            return $validator->errors();
        }else{
            $ticket=new Ticket;
            $ticket->subject=$request->subject;
            $ticket->content=$request->content;
            $ticket->department_id=$request->department_id;
            $result=$ticket->save();
    
            if($result){
                return ["Result" =>"Ticket is created"];
            }else{
                return ["Result" =>"Ticket is not created"];
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket=Ticket::find($id);
       $result=$ticket->update($request->all());
       if($result){
        return ["Result" =>"Ticket is updated"];
    }else{
        return ["Result" =>"Ticket is not updated"];
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
