    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\FeedingController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\MachineListController;
    use App\Http\Controllers\UserController;
   
    


    Route::get('/', function (){
        return view('welcome');
    }) -> name('toLandingPage');

    Route::get('/RegisterPage', [AuthController::class, 'toRegister'])-> name('toRegister');
    Route::get('/LoginPage', [AuthController::class, 'toLogin'])-> name('toLogin');

    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');


    Route::get('/Admin_Dashboard', [AdminController::class, 'toDashboard'])-> name('toDashboard');

    Route::get('/Admin_Manage', [AdminController::class, 'toManage'])-> name('toManage');

    Route::get('/Admin_Profile', [AdminController::class, 'toProfile'])-> name('toProfile');
    
    Route::get('/Admin_Logs', [AdminController::class, 'toLogs'])-> name('toLogs');

    Route::get('/feednow', [FeedingController::class, 'feedNow'])->name('feednow');

    Route::post('/store-machine', [MachineListController::class, 'store'])->name('machines.store');
    Route::post('/edit-machine', [MachineListController::class, 'edit'])->name('machines.edit');
    Route::delete('/delete-machine', [MachineListController::class, 'delete'])->name('machines.delete');
    Route::post('/machines/schedule', [MachineListController::class, 'schedule'])->name('machines.schedule');



    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('user.update');
    Route::delete('/user-delete', [UserController::class, 'deleteProfile'])->name('user.delete');




