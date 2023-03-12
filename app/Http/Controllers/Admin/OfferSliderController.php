<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OfferSlider;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;
class OfferSliderController extends Controller
{
    public function index()
    {
        return view('admin.OfferSlider.index');
    }
    public function datatable(Request $request)
    {
        $data = OfferSlider::orderBy('id', 'desc');

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->AddColumn('button', function ($row) {
                if(Session()->get('lang') == 'ar'){
                    return  $row->ar_button;
                }else{
                    return  $row->en_button;
                }
            })

            ->AddColumn('description', function ($row) {
                if(Session()->get('lang') == 'ar'){
                    return  $row->ar_description;
                }else{
                    return  $row->en_description;
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
                $actions = ' <a href="' . url("OfferSlider-edit/" . $row->id) . '" class="btn btn-active-light-info">Edit <i class="bi bi-pencil-fill"></i>  </a>';
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
        $this->validate(request(), [
            'ar_button' => 'required|string',
            'en_button' => 'required|string',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'offer' => 'required',
            'is_active' => 'required|string',
            'image'=>'required|mimes:png,jpeg,jpg'

        ]);


        $user = new OfferSlider;
        $user->ar_button=$request->ar_button;
        $user->en_button=$request->en_button;
        $user->offer=$request->offer;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        $user->link=$request->link;
        $user->created_by=Auth::guard('admin')->id();
        $user->is_active=$request->is_active;
        if($request->image){
            $user->image=$request->image;
        }
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
        $employee = OfferSlider::findOrFail($id);
        return view('admin.OfferSlider.edit', compact('employee'));
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
            'ar_button' => 'required|string',
            'en_button' => 'required|string',
            'ar_description' => 'required|string',
            'en_description' => 'required|string',
            'offer' => 'required',
            'is_active' => 'nullable|string',
        ]);


        $user = OfferSlider::whereId($request->id)->first();
        $user->ar_button=$request->ar_button;
        $user->en_button=$request->en_button;
        $user->offer=$request->offer;
        $user->ar_description=$request->ar_description;
        $user->en_description=$request->en_description;
        $user->link=$request->link;
        $user->created_by=Auth::guard('admin')->id();
        $user->is_active=$request->is_active;
        if($request->image){
            $user->image=$request->image;
        }
        $user->save();

        return redirect(url('OfferSlider_setting'))->with('message', 'تم التعديل بنجاح ');
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
            OfferSlider::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
