<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Coffee;
use Illuminate\Http\Request;

class reportController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        //validate
        if (!empty($id) ){
            if(filter_var($id, FILTER_VALIDATE_INT)){
                $drinker_id = $id;
            }
    }

        // find drinker
        $drinker = Coffee::where( 'drinker_id','=', $drinker_id )->get();

        return ($drinker);

        //PDF
        //Chart
        //Comment
    }

}
