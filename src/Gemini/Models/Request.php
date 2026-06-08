<?php

namespace VanDmade\Syncra\Gemini\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Request extends Model
{

    use HasFactory;

    protected $table = 'syncra_gemini_requests';

    protected $fillable = [
        'user_id',
        'image_ids',
        'model',
        'prompt',
        'has_image',
        'response_schema',
        'structured',
        'response_data',
        'response_text',
        'finish_reason',
        'prompt_tokens',
        'completion_tokens',
        'total_tokens',
        'duration_ms',
        'status',
        'error',
    ];

    protected $hidden = [
        'user_id',
        'image_ids',
        'response_schema',
        'response_data',
    ];

    protected $casts = [
        'image_ids' => 'array',
        'response_schema' => 'array',
        'response_data' => 'array',
        'has_image' => 'boolean',
        'structured' => 'boolean',
        'prompt_tokens' => 'integer',
        'completion_tokens' => 'integer',
        'total_tokens' => 'integer',
        'duration_ms' => 'integer',
        'archived_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->model = config('syncra.gemini.model');
            $model->status = 'pending';
            $model->user_id = Auth::check() ? Auth::id() : null;
        });
    }

    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'user_id');
    }

    public function images()
    {
        $model = config('syncra.images.model');

        if (! $model || empty($this->image_ids)) {
            return collect();
        }

        return $model::whereIn('id', $this->image_ids)->get();
    }

    public function scopePending($query)
    {
        return $query->where('status', '=', 'pending');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', '=', 'completed');
    }

    public function scopeFailed($query)
    {
        return $query->where('status', '=', 'failed');
    }

}