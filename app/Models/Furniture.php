<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

    // تحديد اسم الجدول في قاعدة البيانات إذا لم يكن مطابقًا لاسم الـ Model بصيغة الجمع
    protected $table = 'furniture';

    // تحديد المفتاح الأساسي إذا كان مختلفًا عن `id`
    protected $primaryKey = 'furniture_id';

    // تحديد الحقول القابلة للتعبئة
    protected $fillable = [
        'category',
        'type',
        'description',
        'quantity',
    ];

    // تحديد الحقول التي لا يمكن تعبئتها
    protected $guarded = [];
}
