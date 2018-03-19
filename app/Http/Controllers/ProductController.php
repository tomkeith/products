<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
   
    public function index(){
      $fruits= Fruit::all()->toArray();
      return view('fruit.index' , compact('fruits'));
    } 

    public function create()
    {
        return view('fruit.create');
    }
    

    public function store(Request $request)
    {
       // print_r($request->all());
       // exit();

        $validator= Validator::make($request->all(),[
            'fruit_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'discount' => 'required',
        ]);
        if ($validator->fails()){
          return redirect('create')
              ->withErrors($validator)
              ->withInput();
        }
        $fruit = new Fruit();

        $fruit->fruit_name = $request->get('fruit_name');
        $fruit->quantity =$request->get('quantity');
        $fruit->price =$request->get('price');
        $fruit->discount =$request->get('discount');
        
        $fruit->save();

        return redirect('/fruits');
      }

      public function edit($id){
          $fruits = Fruit::find($id);
          return view('fruit.edit', compact('fruits','id'));

      }


      public function update(Request $request,$id){

      $fruits= Fruit::find($id);
      $validator = Validator::make($request->all(),[

        'fruit_name' => 'required',
        'quantity'   => 'required',
        'price'      => 'required',
        'discount'   => 'required',
      ]);

       if ($validator->fails()){
           return redirect('fruit/create')
           ->withErrors($validator)
           ->withInput();
       }
         
          $fruits->fruit_name = $request->get('fruit_name');
          $fruits->quantity = $request->get('quantity');
          $fruits->price = $request->get('price');
          $fruits->discount = $request->get('discount');
          
          $fruits->save();
  
          return redirect('/fruit');

      }

      public function destroy($id){
          $fruits = Fruit::find($id);
          $fruits->delete();
          return redirect('/fruit')->with('Success','fruit has been deleted');
      }
    }
       
