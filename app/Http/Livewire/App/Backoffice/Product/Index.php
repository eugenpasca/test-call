<?php
namespace App\Http\Livewire\App\Backoffice\Product;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Generated\Backoffice\Product\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
