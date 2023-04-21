<?php
/**
* Trait CarTrait
*
* Generated by LaraGen, Do not modify it manually.
*/

namespace App\Models\GeneratedTraits;

trait CarTrait
{
    
    public function getCasts()
    {
        $casts = parent::getCasts();
                                                        $casts['created_at'] = 'datetime';
                                                $casts['updated_at'] = 'datetime';
                                        
        return $casts;
    }

    public function getTable()
    {
        return $this->table ?? 'cars';
    }

    public function getFillable()
    {
        if (!empty($this->fillable)) {
            return $this->fillable;
        }

        return [
                            'id',
                            'created_at',
                            'updated_at',
                            'name',
                    ];
    }

    }
