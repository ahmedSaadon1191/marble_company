<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutUsHomeController extends Controller
{
    public function index()
    {
        // return LaravelLocalization::getCurrentLocale();
        $aboutUs = AboutHome::all();
        return view('admin.pages.aboutUsHome.index',compact('aboutUs'));
    }

    public function store(Request $request)
    {

        try
        {
            $data = AboutHome::all()->count();
            // return $data;
            if ($data < 2)
            {
                DB::beginTransaction();

                    $create = AboutHome::create(
                        [
                            'title'           => ["en" => $request->title_en, "ar"  => $request->title_ar],
                            'descreption'     => ["en" => $request->descreption_en, "ar"  => $request->descreption_ar],
                        ]);

                    // CHECK LOGO
                    if ($request->hasFile('logo'))
                    {
                        $photo =  $request->logo->store('aboutUsHome','public');
                        $create->logo = $photo;
                        $create->save();
                    }
                DB::commit();

                return redirect()->route('aboutUsHome.index')->with(['success' => 'تم الاضافة بنجاح']);
            }else
            {
                return redirect()->route('aboutUsHome.index')->with(['success' => 'لا يمكن اضافة اكثر من 2 تفاصيل']);
            }

        } catch (\Throwable $th)
        {
            DB::rollback();
            return $th;
            return redirect()->route('aboutUsHome.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function update(Request $request,$id)
    {
        $data = AboutHome::find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('aboutUs.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                DB::beginTransaction();
                    $update = $data->update(
                        [
                            'title'           => ["en" => $request->title_en, "ar"  => $request->title_ar],
                            'descreption'           => ["en" => $request->descreption_en, "ar"  => $request->descreption_ar],
                        ]);

                    // CHECK LOGO
                    if ($request->hasFile('logo'))
                    {
                        Storage::disk('public')->delete('/assets/images/',$data->logo);
                        $photo =  $request->logo->store('aboutUsHome','public');
                        $data->update(['logo' => $photo]);
                    }
                DB::commit();
                return redirect()->route('aboutUsHome.index')->with(['success' => 'تم التعديل بنجاح']);
            }

        } catch (\Throwable $th)
        {
            DB::rollback();
            return $th;
            return redirect()->route('aboutUsHome.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function destroy($id)
    {
        $data = AboutHome::find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('aboutUsHome.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                $data->delete();
                return redirect()->route('aboutUsHome.index')->with(['success' => 'تم مسح البيانات بنجاح']);
            }

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('aboutUsHome.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function softDelete()
    {
        $aboutUs = AboutHome::onlyTrashed()->get();
        return view('admin.pages.aboutUsHome.softDelete',compact('aboutUs'));
    }

    public function restore($id)
    {
        $data = AboutHome::withTrashed()->find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('aboutUsHome.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                $data->restore();
                return redirect()->route('aboutUsHome.index')->with(['success' => 'تم استرجاع بنجاح']);
            }

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('aboutUsHome.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function forceDelete($id)
    {
        $data = AboutHome::withTrashed()->find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('aboutUsHome.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                Storage::disk('public')->delete('/assets/images/',$data->logo);
                $data->forceDelete();
                return redirect()->route('aboutUsHome.index')->with(['success' => 'تم استرجاع بنجاح']);
            }

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('aboutUsHome.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }
}
