<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SiteImage extends Model
{
    protected $fillable = [
        'group',
        'title',
        'path',
        'alt_text',
        'sort_order',
        'is_active',
        'counter_enabled',
        'counter_title',
        'counter_goal',
        'counter_completed',
        'counter_unit',
        'counter_button',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
            'counter_enabled' => 'boolean',
            'counter_goal' => 'integer',
            'counter_completed' => 'integer',
        ];
    }

    public function scopeVisible(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order')->orderBy('id');
    }

    /** @return array{title:string,goal:int,completed:int,remaining:int,percentage:float,unit:string,button:string}|null */
    public function counterData(): ?array
    {
        if ($this->group !== 'hero' || ! $this->counter_enabled) {
            return null;
        }

        $goal = max(0, (int) $this->counter_goal);
        $completed = min($goal, max(0, (int) $this->counter_completed));

        return [
            'title' => (string) $this->counter_title,
            'goal' => $goal,
            'completed' => $completed,
            'remaining' => $goal - $completed,
            'percentage' => $goal > 0 ? round(($completed / $goal) * 100, 1) : 0.0,
            'unit' => (string) $this->counter_unit,
            'button' => (string) $this->counter_button,
        ];
    }
}
