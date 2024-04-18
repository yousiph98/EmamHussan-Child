<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Block::create([
            'causes' => 'احالة للتقاعد',
            ]);
        Block::create([
            'causes' => 'السن القانوني',
            ]);
        Block::create([
            'causes' => 'الطلاق',
            ]);
        Block::create([
            'causes' => 'استقالة',
            ]);
        Block::create([
            'causes' => 'انهاء خدمات',
            ]);
        Block::create([
            'causes' => 'وفاة',
            ]);
        Block::create([
            'causes' => 'اعتذار عن الاستمرار بالخدمة',
            ]);
        Block::create([
            'causes' => 'النقل الى العتبة العباسية',
            ]);
        Block::create([
            'causes' => 'النقل الى العتبة العلوية',
            ]);
        Block::create([
            'causes' => 'الزواج',
            ]);
        Block::create([
            'causes' => 'تغير نظام العمل',
            ]);
        Block::create([
            'causes' => 'الاب موظف',
            ]);
        Block::create([
            'causes' => 'الام موظفة',
            ]);
        Block::create([
            'causes' => 'حذف حسب كتاب',
            ]);
        Block::create([
            'causes' => 'فك ارتباط',
            ]);
        Block::create([
            'causes' => 'اخلال بالتعهد',
            ]);
        Block::create([
            'causes' => 'اجر يومي',
            ]);
    }
}
