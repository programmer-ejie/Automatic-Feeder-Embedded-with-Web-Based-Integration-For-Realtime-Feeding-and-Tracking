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
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('profile_path')->nullable();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('phone_number')->nullable();
                $table->string('address')->nullable();
                $table->string('gmail')->unique();
                $table->string('password');
                $table->timestamps();
                $table->rememberToken();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('users');
        }
    };
