<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Branch;



class BranchController extends Controller
{
    public function createBranch(Request $request) {
        
        $request -> validate([
 
            'Branchname' => 'required|string|max:50',
            'Address1' => 'required|string|max:50',
            'Address2' => 'required|string|max:50',
            'DateOpened' => 'required|date',
            'Type' => 'required|string|max:1',
            'Notes' => 'required|string|max:255',
            'Remark' => 'required|string|max:255',
        ]);

        $branch = Branch::create(
            [
            'branchid' => Str::random(10),
            'Branchname' => $request->Branchname,
            'Address1' => $request->Address1,
            'Address2' => $request->Address2,
            'DateOpened'=> $request->DateOpened,
            'Type'=> $request->Type,
            'Notes' => $request->Notes,
            'Remark' => $request->Remark,
        ]
    );

        return response() ->json([
            'message' => 'Branch created successfully',
            'branch' => $branch,
        ]);
           
        }
    
    public function updateBranch(Request $request, $id){
       

        $branch = Branch::find($id);
        $branch -> update($request->all());
        // $shop::where('id', $id)->update([
        //     'shopname' => $request -> shopname,
        //     'Address1' => $request -> Address1,
        //     'Address2' => $request -> Address2,
        //     'Notes' => $request -> Notes,
        //     'Remark' => $request -> Remark, 
        // ]);
        return response() ->json([
            // 'message' => 'Shop updated successfully',
            // 'shop' => 
            $branch,
        ]);

    }

    public function showBranch(Request $request, $id){
       

        $branch = Branch::find($id);
        // $branch -> update($request->all());
        // $shop::where('id', $id)->update([
        //     'shopname' => $request -> shopname,
        //     'Address1' => $request -> Address1,
        //     'Address2' => $request -> Address2,
        //     'Notes' => $request -> Notes,
        //     'Remark' => $request -> Remark, 
        // ]);
        return response() ->json([
            // 'message' => 'Shop updated successfully',
            // 'shop' => 
            $branch,
        ]);

    }
    public function deleteBranch(Request $request, $id){
       

        $branch = Branch::find($id)->delete();
        // $branch -> update($request->all());
        // $shop::where('id', $id)->update([
        //     'shopname' => $request -> shopname,
        //     'Address1' => $request -> Address1,
        //     'Address2' => $request -> Address2,
        //     'Notes' => $request -> Notes,
        //     'Remark' => $request -> Remark, 
        // ]);
        return response() ->json([
            'message' => 'Branch deleted successfully',
            // 'shop' => 
            $branch,
            
        ]);

    }
}
