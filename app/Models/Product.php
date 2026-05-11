<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'sku',
        'price',
        'stock',
        'image',
        'is_featured',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_featured' => 'boolean',
            'stock' => 'integer',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * لجعل روابط المنتجات تظهر بالاسم (slug)
     * مثال: xenonstor.com/product/elden-ring-key
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * التحقق مما إذا كان المنتج متاحاً للشراء
     */
    public function isAvailable(): bool
    {
        return $this->stock > 0;
    }
}
