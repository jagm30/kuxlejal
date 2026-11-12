<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'badge_text',
        'badge_color',
        'image_path',
        'cta1_text',
        'cta1_url',
        'cta2_text',
        'cta2_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}
