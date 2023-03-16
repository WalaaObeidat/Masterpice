<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\designs;
use App\Models\Categories;
use Illuminate\Http\Request;

class designsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs= designs::all();
        return view('Admin.designs', compact('designs'));
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

        return view('Admin.designsAdd',compact('categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $designs = New designs();
        $designs->name = $request->name;
        $designs->price = $request->price;
        $designs->description = $request->description;
        $designs->category_id = $request->category_id;

        $photoName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $photoName);
        $pdesigns->image = $photoName;
        $designs->save();
        return redirect()->route('designs.index');
        // return view('Admin.categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\designs  $Playgrounds
     * @return \Illuminate\Http\Response
     */
    public function show(designs $categories,$id)
    {
        $designsDetails = designs::findorFail($id);
        $categories = Categories::findorFail($designsDetails->category_id);

        //    $playgroundsDetails = Playgrounds::with('Categories')->get();
           

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
        return view('Admin.designsDetails',compact('designsDetails', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\designs  $Playgrounds
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categories = Categories::all();
        $designsEdit = designs::findorFail($id);
        // $playgroundsEdit = Playgrounds::where();
        $designsCat=Categories::all();
        // $playgroundsCat= Playgrounds::with('Categories')->get();
        //    $Playgrounds = Categories::where('id',$id)->first(); //  method 2 -- when id = id - get the data of the first row
           return view('Admin.designsEdit',compact('designsEdit', 'designsCat'));
        //    $data = [];
        //    foreach ($playgroundsEdit as $playgrounds) {
        //        $data[] = [
        //            'id' => $playgrounds->id,
        //            'name' => $playgrounds->name,
        //            'description' => $playgrounds->description,
        //            'price' => $playgrounds->price,
        //            'image' => isset($playgrounds->category_id) ? $playgrounds->name->category_id : ""
        //        ];
        //    };
        //    return view('Admin.playgroundsEdit',compact('data'));
       }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\designs $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $designsEdit = designs::findorFail($id);
        $designsEdit->update($request->all());
        return redirect()->route('designs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\designs  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(designs $categories,$id)
    {
        designs::destroy($id);
        return redirect()->route('designs.index');
    }
}
