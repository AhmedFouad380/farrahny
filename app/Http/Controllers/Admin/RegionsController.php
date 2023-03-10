<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;

class RegionsController extends Controller
{
    public function index($city_id)
    {
        return view('admin.regions.index', compact('city_id'));
    }

    public function datatable(Request $request)
    {
        $data = Region::orderBy('id', 'desc')->where('city_id',$request->id);
        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->AddColumn('title', function ($row) {
                if (Session()->get('lang') == 'ar') {
                    return $row->ar_title;
                } else {
                    return $row->en_title;
                }
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
                $actions = ' <a href="' . url("regions-edit/" . $row->id) . '" class="btn btn-active-light-info">Edit <i class="bi bi-pencil-fill"></i>  </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active', 'branch'])
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
        $this->validate(request(), [
            'city_id' => 'required|exists:cities,id',
            'ar_title' => 'required|string',
            'en_title' => 'required|string',
            'is_active' => 'nullable|string',
        ]);
        $user = new Region;
        $user->city_id = $request->city_id;
        $user->ar_title = $request->ar_title;
        $user->en_title = $request->en_title;
        $user->is_active = $request->is_active;
        $user->save();
        return redirect()->back()->with('message', '???? ?????????????? ?????????? ');
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
        $employee = Region::findOrFail($id);
        return view('admin.regions.edit', compact('employee'));
    }

    public function buttons($city_id)
    {
        return view('admin/regions/button', compact('city_id'));
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
            'ar_title' => 'required|string',
            'en_title' => 'required|string',
            'is_active' => 'nullable|string',
        ]);
        $user = Region::whereId($request->id)->first();
        $user->ar_title = $request->ar_title;
        $user->en_title = $request->en_title;
        $user->is_active = $request->is_active;
        $user->save();
        return redirect(url('regions_setting/' . $user->city_id))->with('message', '???? ?????????????? ?????????? ');
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
            Region::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
