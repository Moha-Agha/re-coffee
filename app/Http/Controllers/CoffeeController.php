<?php

namespace App\Http\Controllers;

use App\Drinker;
use function Couchbase\defaultDecoder;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;
use App\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $validator = Validator::make($request->all(), [
            'drinker_id' => 'required|integer',
            'size' => 'required',
        ]);
        $drinker_id = $request->input('drinker_id');
        $size = $request->input('size');
        //if user existent

        $drinker = new Drinker;
        $drinker->find($drinker_id);

        if($drinker == null){
            return 'sorry, there is no user in this ID';
        }

        if ($drinker){
        // new coffee model
        $coffee = new Coffee;
        // set user id, size (price)
        $coffee->drinker_id = $drinker_id;
        $coffee->size = $size;
        if ($size == 'single') {
            $coffee->price = env('COFFEE_PRICE_SINGLE');
        } else {
            $coffee->price = env('COFFEE_PRICE_DOUBLE');
        }
        // save to db
        $coffee->save();

        Session()->flash('add', 'Der Kaffee hat hinzufügte');

            return redirect('/');
        }else{
            return 'in another time -> 00';
        }
        //{
        //	"drinker_id": 1,
        //	"size": "double"
        //}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //validate
        if (!empty($id) ){
            if(filter_var($id, FILTER_VALIDATE_INT)){
                $coffee_id = $id;
            }
        }

        // findOrFail
        $coffeeDelete = Coffee::findOrFail($coffee_id);
        $coffeeDelete->delete();

        Session()->flash('remove', 'Der Kaffee hat gelöscht');

        return redirect('/');
    }
}
