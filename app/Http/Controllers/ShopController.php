<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function createShop(Request $request) {
        
        $request -> validate([

            'shopname' => 'required|string|max:50',
            'Address1' => 'required|string|max:50',
            'Address2' => 'required|string|max:50',
            'Notes' => 'required|string|max:255',
            'Remark' => 'required|string|max:255',
        ]);

        $shop = Shop::create(
            [
            'shopid' => Str::random(10),
            'shopname' => $request->shopname,
            'Address1' => $request->Address1,
            'Address2' => $request->Address2,
            'Notes' => $request->Notes,
            'Remark' => $request->Remark,
        ]
    );

        return response() ->json([
            'message' => 'Shop created successfully',
            'shop' => $shop,
        ]);
           
        }
    
    public function updateShop(Request $request, $id){
       

        $shop = Shop::find($id);
        $shop -> update($request->all());
       
        return response() ->json([
            'message' => 'Shop updated successfully',
            // 'shop' => 
            $shop,
        ]);

    }
    public function showShop(Request $request, $id){
       

        $shop = Shop::find($id);
      
        return response() ->json([
            // 'message' => 'Shop updated successfully',
            // 'shop' => 
            $shop,
        ]);

    }
    public function deleteShop(Request $request, $id){
       

        $shop = Shop::find($id)->delete();
       
        return response() ->json([
            'message' => 'Shop deleted successfully',
            // 'shop' => 
            $shop,
            
        ]);

    }
}
