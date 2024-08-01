<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_date_ars', function (Blueprint $table) {
            $table->id();
            $table->string('الاسم');
            $table->string('البريد');
            $table->string('الهاتف');
            $table->string('كلمه-المرور');
            $table->string('القسم');
            $table->enum('عمل', array('العيادة','الزيارة-المنزليه.','الاستشارة-اونلاين'))->nullable()->change();
            $table->string('الموقع');
            $table->string('المدينة');
            $table->string('الشهادة-العلمية');
            $table->string('كارنيه-النقابة');
            $table->string('صوره-العياده');
            $table->string('الشعار');
            $table->string('صوره-الطبيب');
            $table->string('الرخصه-المهنيه');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_date_ars');
    }
};
