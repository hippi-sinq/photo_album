<?php


namespace App\Repositories;

use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositiryInterface
{
    public function getUserCategories(User $user): Collection{
        return $user->categories()->get();
    }
    public function getCategoryById($id): ?Category{

    }
}
