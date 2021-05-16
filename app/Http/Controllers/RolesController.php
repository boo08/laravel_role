<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::latest()->orderBy('id')->get(); 
        return view('roles.index',["roles"=>$roles] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');

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
            'name' => 'required',
            'slug' => 'required',
            'menus' => 'required',
        ]);

        $userData =[
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'menus' => $request->input('menus'),
        ];
   

        Role::create($userData);

        return redirect()
        ->route('roles.index')->with("status","Role Create Success");
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
        $role = Role::find($id); 
        return view('roles.edit',["role"=>$role] );
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
            'name' => 'required',
            'slug' => 'required',
            'menus' => 'required',
        ]);

        $role = Role::findOrFail($id);
        $roleData =[
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'menus' => $request->input('menus'),
        ];
   

        $role->update($roleData);
        return redirect()
                ->route('roles.index')->with("status","Role Updated Success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id != 1) {
            $role =Role::find($id); 
            $role->delete(); 
            return redirect()
            ->route('roles.index')->with("status","Role Delete Success");
        }else{
         return redirect()
         ->route('roles.index')->with("status","Main Role not able to delete");
        }
    }
}
