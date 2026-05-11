<?php

namespace App\Models;

use App\Mail\OrderDeliveredMail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'customer_email',
        'verification_token',
        'email_verified_at',
        'subtotal',
        'discount_total',
        'total',
        'payment_intent_id',
        'is_paid',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'subtotal'          => 'decimal:2',
            'discount_total'    => 'decimal:2',
            'total'             => 'decimal:2',
            'is_paid'           => 'boolean',
            'email_verified_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::updated(function (Order $order): void {
            // [completed] إرسال الإيميل فقط عند تحول الحالة إلى
            if ($order->wasChanged('status') && $order->status === 'completed') {
                
                // جلب المنتجات المشتراة فوراً لتضمينها في الرسالة
                $order->loadMissing('items.product');

                // إرسال الإيميل النهائي الذي يحتوي على "المنتج الرقمي"
                Mail::to($order->customer_email)->send(new OrderDeliveredMail($order));
            }
        });
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
