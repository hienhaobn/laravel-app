<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {

    }

    // show categories
    public function index(Request $request)
    {

        return view('/clients/categories/list');
    }

    public function getCategory($id)
    {
        return view('/clients/categories/edit');
    }

    // method POST
    public function updateCategory($id)
    {
        return 'submit update category' . $id;
    }

    // show form add category
    public function addCategory()
    {
        return view('/clients/categories/add');
    }

    // method POST
    public function handleAddCategory()
    {
        //  reload page
        return redirect(route('categories.add'));
        // return 'submit add category';
    }

    public function deleteCategory($id)
    {
        return 'submit delete category'. $id;
    }
}
