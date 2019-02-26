<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sales;

class SalesController extends Controller
{

public function create()
{
    return view('sales.create');
}


public function index()
{ 
  $sales = sales::all()->toArray();
        
  return view('sales.index', compact('sales'));
}

public function store(Request $request)
{
  
  $sales = new sales([
    'name' => $request->get('name'),
    'email'=> $request->get('email'),
    'telephone_number'=> $request->get('telephone_number'),
    'joined_date'=> $request->get('joined_date'),
    'current_working_routes'=> $request->get('current_working_routes'),
    'comments'=> $request->get('comments')
  ]);
  $sales->save();
  return redirect('/sales')->with('Success', 'Details has been added!!');
}

public function edit($id)
{
    $sales = sales::find($id);
    
    return view('sales.edit', compact('sales','id'));

}
public function update(Request $request, $id)
    {
        $sales = sales::find($id);
        $sales->name= $request->get('name');
        $sales->email= $request->get('email');
        $sales->telephone_number= $request->get('telephone_number');
        $sales->joined_date = $request->get('joined_date');
        $sales->current_working_routes = $request->get('current_working_routes');
        $sales->comments= $request->get('comments');
        $sales->save();
        return redirect('/sales');
    }


    public function destroy($id)
    {
      $sales = sales::find($id);
      $sales->delete();

      return redirect('/sales');
    }

    public function show($id)
    {
        //
    }

}

