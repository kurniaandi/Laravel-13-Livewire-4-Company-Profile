<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'badge_text',
    'title_top',
    'title_highlight',
    'title_bottom',
    'title_small',
    'description',
    'cta_primary_text',
    'cta_primary_url',
    'cta_secondary_text',
    'cta_secondary_url',
    'trust_items',
    'speed_score',
    'leads_increase',
    'is_active',
])]

class Hero extends Model
{
    protected function casts(): array
    {
        return [
            'trust_items' => 'array',
            'is_active' => 'boolean',
        ];
    }
}