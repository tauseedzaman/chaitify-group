<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Stmt\GroupUse;

class Group extends Model
{
    use HasFactory;
    protected $fillable=[
        'logo',
        'name',
        'uuid',
        'thumbnail',
        'description',
        'creator_id',
        'is_public',
    ];

    /**
     * Get all of the users for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groupusers(): HasMany
    {
        return $this->hasMany(GroupUse::class);
    }
}
