<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoriesController extends Controller
{
    public function index()
    {
        // return LaravelLocalization::getCurrentLocale();

        $category = Category::all();
        return view('admin.pages.category.index',compact('category'));
    }

    public function store(Request $request)
    {
        try
        {
                $create = Category::create(
                    [
                        'name'  => ["en" => $request->name_en, "ar"  => $request->name_ar],
                    ]);

                return redirect()->route('category.index')->with(['success' => 'تم الاضافة بنجاح']);
        } catch (\Throwable $th)
        {
            DB::rollback();
            return $th;
            return redirect()->route('category.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function update(Request $request,$id)
    {
        $data = Category::find($id);

        try
        {
            if (!$data)
            {
                return redirect()->route('category.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {

                    $update = $data->update(
                        [
                            'name'  => ["en" => $request->name_en, "ar"  => $request->name_ar],
                        ]);


                return redirect()->route('category.index')->with(['success' => 'تم التعديل بنجاح']);
            }

        } catch (\Throwable $th)
        {

            return redirect()->route('category.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('category.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                $data->delete();
                return redirect()->route('category.index')->with(['success' => 'تم مسح البيانات بنجاح']);
            }

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('category.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function softDelete()
    {
        $category = Category::onlyTrashed()->get();
        return view('admin.pages.category.softDelete',compact('category'));
    }

    public function restore($id)
    {
        $data = Category::withTrashed()->find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('category.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {
                $data->restore();
                return redirect()->route('category.index')->with(['success' => 'تم استرجاع بنجاح']);
            }

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('category.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

    public function forceDelete($id)
    {
        $data = Category::withTrashed()->find($id);
        // return $data;
        try
        {
            if (!$data)
            {
                return redirect()->route('category.index')->with(['error' => 'هذا العنصر غير موجود']);

            }else
            {

                $data->forceDelete();
                return redirect()->route('category.index')->with(['success' => 'تم استرجاع بنجاح']);
            }

        } catch (\Throwable $th)
        {
            return $th;
            return redirect()->route('category.index')->with(['error' => 'هناك خطاء ما برجاء المحاولة فيما بعد']);
        }
    }

}
