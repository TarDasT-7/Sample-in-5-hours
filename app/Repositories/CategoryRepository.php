<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Song;

class CategoryRepository
{

    public function findCategory($id)
    {
        return Category::query()->findOrFail($id);
    }

    public function categories()
    {
        return Category::query()->orderBy('created_at', 'desc')->get();
    }

    public function categorySongs($id)
    {
        return Category::query()->findOrFail($id)->songs;
    }
    // --------------------------------------------------
    public function storeCategory($request)
    {
        $result = Category::query()->create([
            'title'=>$request->title
        ]);
        return $result;
    }

    public function updateCategory($request, $id)
    {
        $result = Category::query()->findOrFail($id)->update([
            'title'=>$request->title
        ]);
        return $result;
    }


}
