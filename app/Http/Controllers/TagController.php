<?php

namespace App\Http\Controllers;
use App\Tags;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::all();

        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'tag_name'=>'required',
            'tag_color'=>'required',
            'category'=>'required',
        ]);
      

        $tag = new Tags([
            'tag_name' => $request->get('tag_name'),
            'tag_color' => $request->get('tag_color'),
            'category' => $request->get('category')
        ]);
        $tag->save();
        return redirect('/tags')->with('success', 'Tag saved!');
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
        $tag = Tags::find($id);
        return view('tags.edit', compact('tag'));   
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
        $this->validate($request, [
            'tag_name'=>'required',
            'tag_color'=>'required',
            'category'=>'required',
        ]);

        $tag = Tags::find($id);
        $tag->tag_name =  $request->get('tag_name');
        $tag->tag_color = $request->get('tag_color');
        $tag->category = $request->get('category');
       
        $tag->save();

        return redirect('/tags')->with('success', 'Tag updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tags::find($id);
        $tag->delete();

        return redirect('/tags')->with('success', 'Tag deleted!');
    }
}
