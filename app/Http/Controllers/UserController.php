<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\PaginateTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserController extends Controller
{
    use PaginateTrait;

    public function index(): AnonymousResourceCollection
    {
        $user = User::query();

        return UserResource::collection($this->paginateOrGet($user));
    }

    public function store(Request $request)
    {
        
    }

    public function show(User $user)
    {
        
    }

    public function update(Request $request, User $user)
    {
        
    }

    public function destroy(User $user)
    {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    }
}
