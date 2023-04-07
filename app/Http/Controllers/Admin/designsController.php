<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\designs;
use App\Models\Categories;
use Illuminate\Http\Request;

class DesignsController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Designs= Designs::all();
        return view('Admin.Designs', compact('Designs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $playgrounds= Playgrounds::with('Categories')->get();
        $categories= Categories::all();

        return view('Admin.DesignsAdd',compact('categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Designs = New Designs();
        $pDesigns->name = $request->name;
        $Designs->price = $request->price;
        $Designs->description = $request->description;
        $Designs->category_id = $request->category_id;

        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $Designs->image = $photoName;
        $Designs->save();
        return redirect()->route('Designs.index');
        // return view('Admin.categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designs  $Designs
     * @return \Illuminate\Http\Response
     */
    public function show(Designs $categories,$id)
    {
        $DesignsDetails = Designs::findorFail($id);
        $categories = Categories::findorFail($DesignsDetails->category_id);

        //    $DesignsDetails =Designs::with('Categories')->get();
           

        // $categories = Categories::get();
        // $data = [];
        // foreach ($trips as $trip) {
        //     $data[] = [
        //         'id' => $trip->id,
        //         'name' => $trip->name,
        //         'short_description' => $trip->short_description,
        //         'long_description' => $trip->long_description,
        //         'guest_number' => $trip->guest_number,
        //         'price' => $trip->price,
        //         'image' => $trip->image,
        //         'category' => isset($trip->category) ? $trip->category->name : "",


        //     ];
        // }
        return view('Admin.DesignsDetails',compact('playgroundsDetails', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designs  $Designs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categories = Categories::all();
        $DesignsEdit = Designs::findorFail($id);
        // $DesignsEdit = Designs::where();
        $DesignsCat=Categories::all();
        // $DesignsCat= Designs::with('Categories')->get();
        //    $Designs = Categories::where('id',$id)->first(); //  method 2 -- when id = id - get the data of the first row
           return view('Admin.DesignsEdit',compact('DesignsEdit', 'DesignsCat'));
        //    $data = [];
        //    foreach ($DesignsEdit as $Designs) {
        //        $data[] = [
        //            'id' => $Designs->id,
        //            'name' => $Designs->name,
        //            'description' => $Designs->description,
        //            'price' => $Designs->price,
        //            'image' => isset($Designs->category_id) ? $Designs->name->category_id : ""
        //        ];
        //    };
        //    return view('Admin.DesignsEdit',compact('data'));
       }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Designs $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $DesignsEdit = Designs::findorFail($id);
        $DesignsEdit->update($request->all());
        return redirect()->route('Designs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designs  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designs$categories,$id)
    {
        Designs::destroy($id);
        return redirect()->route('Designs.index');
    } 
}
