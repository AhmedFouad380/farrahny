<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class ProviderController extends Controller
{
    public function index()
    {
        return view('admin.Provider.index');
    }
    public function datatable(Request $request)
    {
        $data = Provider::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('name', function ($row) {
                $name = '';
                $name .= ' <span class="text-gray-800 text-hover-primary mb-1">' . $row->name . '</span>';
                return $name;
            })

            ->editColumn('is_active', function ($row) {
                $is_active = '<div class="badge badge-light-success fw-bolder">Active</div>';
                $not_active = '<div class="badge badge-light-danger fw-bolder">inactive</div>';
                if ($row->is_active == 'active') {
                    return $is_active;
                } else {
                    return $not_active;
                }
            })

            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("Provider-edit/" . $row->id) . '" class="btn btn-active-light-info">Edit <i class="bi bi-pencil-fill"></i>  </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active','branch'])
            ->make();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'owner_name' => 'required|string',
            'email' => 'required|email|unique:providers',
            'password' => 'required|confirmed',
            'phone' => 'required|unique:providers|min:8',
            'is_active' => 'nullable|string',
            'image'=>'required',
            'cover'=>'required',
            'lat'=>'required',
            'lng'=>'required',
        ]);


        $user = new Provider;
        $user->ar_name=$request->ar_name;
        $user->en_name=$request->en_name;
        $user->owner_name=$request->owner_name;
        $user->ar_name=$request->ar_name;
        $user->phone=$request->phone;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->is_active=$request->is_active;
        $user->image=$request->image;
        $user->cover=$request->cover;
        $user->lat=$request->lat;
        $user->lng=$request->lng;
        $user->address=$request->address;
        $user->is_top=$request->is_top;
        $user->save();

        return redirect()->back()->with('message', 'تم الاضافة بنجاح ');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Provider::findOrFail($id);
        return view('admin.Provider.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->validate(request(), [
            'id' => 'required|exists:users,id',
            'email' => 'required|email|unique:providers,email,' . $request->id,
            'password' => 'nullable|confirmed',
            'phone' => 'required|min:8|unique:providers,phone,' . $request->id,
            'is_active' => 'nullable|string',
            'ar_name' => 'required|string',
            'en_name' => 'required|string',
            'owner_name' => 'required|string',
            'image'=>'required',
            'cover'=>'required',
            'lat'=>'required',
            'lng'=>'required',
        ]);



        $user = Provider::whereId($request->id)->first();
        $user->ar_name=$request->ar_name;
        $user->en_name=$request->en_name;
        $user->owner_name=$request->owner_name;
        $user->ar_name=$request->ar_name;
        $user->phone=$request->phone;
        if(isset($user->password)){
            $user->password=Hash::make($request->password);
        }
        $user->email=$request->email;
        $user->is_active=$request->is_active;
        $user->image=$request->image;
        $user->cover=$request->cover;
        $user->lat=$request->lat;
        $user->lng=$request->lng;
        $user->address=$request->address;
        $user->is_top=$request->is_top;
        $user->save();





        return redirect(url('Providers_setting'))->with('message', 'تم التعديل بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Provider::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
