<?php

namespace App\Http\Controllers\V1\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\artist\ArtistRequest;
use App\Http\Requests\artist\UpdateArtistRequest;
use App\Http\Resources\ArtistResource;
use App\Http\Repositories\ArtistRepository;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $repository;

    public function __construct(ArtistRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return ArtistResource::collection($this->repository->artists());   
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        $this->repository->storeArtist($request) ? response()->json('success', 200) : response()->json('err', 500);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ArtistResource($this->repository->artist($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtistRequest $request, $id)
    {
        $this->repository->updateArtist($request,$id) ? response()->json('success', 200) : response()->json('err', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->artist($id)->delete() ? response()->json('success', 200) : response()->json('err', 500);    
    }
}
