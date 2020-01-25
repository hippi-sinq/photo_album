<?php


namespace App\Repositories;


use App\Category;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepositoryInterface
{
public function getUserCategories(User $user): ?Collection;

public function getCategoryById($id): ?Category{

}
}
