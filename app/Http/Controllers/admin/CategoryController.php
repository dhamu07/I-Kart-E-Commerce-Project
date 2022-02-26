<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::with('child')->whereNull('parent_id')->get();
            return DataTables::of($data)
                             ->addIndexColumn()
                             ->addColumn('action', function ($row) {
                                 $tree = route('category.tree',['id'=>$row->id]);
                                 return "<a href='javascript:;' data-id='{$row->id}' class='category_button category btn btn-info btn-sm mr-md-1'><i class='fas fa-plus'></i></a>
                    <a href='{$tree}' class='btn btn-success btn-sm mr-md-1'><i class='fas fa-tree'></i></a>";
                             })
                             ->rawColumns(['action'])
                             ->make(true);
        }
        return view('admin.category.category');
    }

    // public function subcategory(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Category::with('child')->find($request->id)->child;
    //         return DataTables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function ($row) {
    //                 $tree = route('category.tree',['id'=>$row->id]);
    //                 return "<a href='javascript:;' data-id='{$row->id}'  class='category_button subCategory btn btn-info btn-sm mr-md-1'><i class='fas fa-plus'></i></a>
    //                 <a href='{$tree}' class='btn btn-success btn-sm mr-md-1'><i class='fas fa-tree'></i></a>";
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    //     return view('admin.category.category');
    // }

    public function subcategory(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::with('child')->find($request->id)->child;
            return DataTables::of($data)
                             ->addIndexColumn()
                             ->addColumn('action', function ($row) {

                                 $tree = route('category.tree',['id'=>$row->id]);
                                 $data = ($row->HSN_code)?'':"<a href='javascript:;' data-id='{$row->id}' class='category_button category_{$row->parent_id} btn btn-info btn-sm mr-md-1'><i class='fas fa-plus'></i></a>";
                                 $data .="";
                                 $data.="<a href='{$tree}' class='btn btn-success btn-sm mr-md-1'><i class='fas fa-tree'></i></a>";
                                 return $data;
                             })
                             ->rawColumns(['action'])
                             ->make(true);
        }
        return view('admin.category.category');
    }

    public function categoryMainCreate(Request $request)
    {
        $category = Category::insert(['name' => $request->name, 'slug' => Str::slug($request->name)]);
        return $category;
    }

    public function categorySubCreate(Request $request)
    {
        $category = Category::insert(['name' => $request->name, 'slug' => Str::slug($request->name),'parent_id' => $request->parent_id]);
        // $category = Category::;
        return $category;
    }

    public function categorySub1Create(Request $request)
    {
        $category = Category::insert(['name' => $request->name, 'slug' => Str::slug($request->name),'parent_id' => $request->parent_id,'HSN_code'=>$request->HSN_code]);
        // $category = Category::;
        return $category;
    }

    public function tree($id)
    {
        $tree = Category::with('child')->find($id);
        $treesecond = ($tree->child)?"<li> {$tree->name}<ul>{$this->data($tree->child)}</ul></li>":"<li>{$tree->name}<ul></ul></li>";

        return view('admin.category.tree',compact('tree','treesecond'));
    }


    public function data($tree)
    {
        $data = '';
        foreach ($tree as $category) {
            $data .= ($category->child)?"<li> {$category->name}<ul>{$this->data($category->child)}</ul></li>":"<li>{$category->name}<ul></ul></li>";
        }
        return $data;
    }
}
