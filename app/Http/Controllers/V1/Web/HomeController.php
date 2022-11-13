<?php

namespace App\Http\Controllers\V1\Web;

use App\Http\Controllers\Controller;
use App\Http\Repositories\HomeRepository;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $localPath = "web.pages.index.";
    protected $repository;

    public function __construct(HomeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $topSongs = $this->repository->topSongs();
        $topCategories = $this->repository->topCategories();
        $topArtists = $this->repository->topArtists();
        return view($this->localPath . 'index', compact('topSongs', 'topCategories', 'topArtists'));
    }
}
