<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientImage;
use App\Models\ServiceImage;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Auth;
class ServiceImageController extends Controller
{
    public function index($id)
    {
        return view('admin.ServiceImage.index',compact('id'));
    }
    public function datatable(Request $request)
    {
        $data = ServiceImage::orderBy('id', 'desc')->where('service_id',$request->service_id);

        return DataTables::of($data)
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })


            ->editColumn('image', function ($row) {
                $data = '<img src="'.$row->image.'" width="100px" height="100px" >';
                return $data;
            })



            ->addColumn('actions', function ($row) {
                $actions = ' <a href="' . url("ServiceImage-edit/" . $row->id) . '" class="btn btn-active-light-info">Edit <i class="bi bi-pencil-fill"></i>  </a>';
                return $actions;

            })
            ->rawColumns(['actions', 'checkbox', 'name', 'is_active','image'])
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
            'is_active' => 'nullable|string',

        ]);

        foreach ($request->image as  $image){

        $user = new ServiceImage;
        $user->service_id=$request->service_id;
        $user->image=$image;
        $user->save();
        }

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
        $employee = ServiceImage::findOrFail($id);
        return view('admin.ServiceImage.edit', compact('employee'));
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
            'image' => 'required|string',
            'en_title' => 'required|string',
            'is_active' => 'nullable|string',

        ]);


        $user = ClientImage::whereId($request->id)->first();
        $user->ar_title=$request->ar_title;
        $user->en_title=$request->en_title;
        $user->user_id=Auth::guard('web')->id();
        $user->is_active=$request->is_active;
        if($request->image){
            $user->image=$request->image;
        }
        $user->save();

        return redirect(url('ClientImage_setting'))->with('message', 'تم التعديل بنجاح ');
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
            ServiceImage::whereIn('id', $request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed']);
        }
        return response()->json(['message' => 'Success']);
    }
}
