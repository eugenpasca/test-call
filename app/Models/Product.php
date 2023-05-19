<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use App\Models\GeneratedTraits\ProductTrait;

class Product extends EloquentModel
{
    use ProductTrait;
}
