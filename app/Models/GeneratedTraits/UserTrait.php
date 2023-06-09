<?php
/**
* Trait UserTrait
*
* Generated by LaraGen, Do not modify it manually.
*/

namespace App\Models\GeneratedTraits;

trait UserTrait
{
            use \Illuminate\Database\Eloquent\SoftDeletes;
    
    public function getCasts()
    {
        $casts = parent::getCasts();
                                                                                                $casts['email_verified_at'] = 'datetime';
                                                                    $casts['created_at'] = 'datetime';
                                                $casts['updated_at'] = 'datetime';
                                                $casts['deleted_at'] = 'datetime';
                    
        return $casts;
    }

    public function getTable()
    {
        return $this->table ?? 'users';
    }

    public function getFillable()
    {
        if (!empty($this->fillable)) {
            return $this->fillable;
        }

        return [
                            'id',
                            'name',
                            'email',
                            'email_verified_at',
                            'password',
                            'created_at',
                            'updated_at',
                            'deleted_at',
                    ];
    }

    }
