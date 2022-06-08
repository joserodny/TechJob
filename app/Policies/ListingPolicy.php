<?php

namespace App\Policies;

use App\Domains\Listing\Models\Listing;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListingPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Listing $listing)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Listing $listing)
    {
        //
    }

    public function delete(User $user, Listing $listing)
    {
        //
    }

    public function restore(User $user, Listing $listing)
    {
        //
    }

    public function forceDelete(User $user, Listing $listing)
    {
        //
    }
}
