
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\DepartmantController;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\UserController;





Route::middleware(['auth', 'role'])->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');
    Route::get('/panel', [PanelController::class, 'index'])->name('panel');

    //Projeler
    Route::get('/Panel/Projeler', [ProjeController::class, 'index'])->name('panel-projects');
    Route::get('/Panel/Proje-Duzenle/{id}', [ProjeController::class, 'edit'])->name('panel-project-edit');
    Route::get('/Panel/Proje-Incele/{id}', [ProjeController::class, 'details'])->name('panel-project-details');
    Route::post('/Panel/Proje-Duzenle',[ProjeController::class, 'update'])->name('panel-project-update');
    Route::get('/Panel/Proje/Proje-Ekle', [ProjeController::class, 'add'])->name('panel-project-add');
    Route::post('/Panel/Proje-Ekle',[ProjeController::class, 'store'])->name('projects.store');

    //İşler
    Route::get('/Panel/Isler', [WorkController::class, 'index'])->name('panel-isler');
    Route::get('/Panel/Isler-Duzenle/{id}', [WorkController::class, 'edit'])->name('panel-work-edit');
    Route::get('/Panel/Isler-Incele/{id}', [WorkController::class, 'details'])->name('panel-work-details');
    Route::post('/Panel/Isler-Duzenle',[WorkController::class, 'update'])->name('panel-work-update');
    Route::get('/Panel/Isler-Ekle', [WorkController::class, 'add'])->name('work.add');
    Route::post('/Panel/Isler-Ekle',[WorkController::class, 'store'])->name('work.store');
    //Departmanlar

    Route::get('/Panel/Departmanlar', [DepartmantController::class, 'index'])->name('panel-departmanlar');
    Route::get('/Panel/Departman-Duzenle/{id}', [DepartmantController::class, 'edit'])->name('panel-departmant-edit');
    Route::get('/Panel/Departman-Incele/{id}', [DepartmantController::class, 'details'])->name('panel-departmant-details');
    Route::post('/Panel/Departman-Duzenle',[DepartmantController::class, 'editProjectPost'])->name('panel-departmant-update');
    Route::post('/Panel/Departman-Ekle',[DepartmantController::class, 'store'])->name('panel-departmant-store');
    Route::get('/Panel/Departman-Ekle',[DepartmantController::class, 'add'])->name('panel-departmant-add');

    //Ekipler
    Route::get('/Panel/Ekipler', [SquadController::class, 'index'])->name('panel-ekipler');
    Route::get('/Panel/Ekip-Duzenle/{id}', [SquadController::class, 'edit'])->name('panel-squad-edit');
    Route::get('/Panel/Ekip-Incele/{id}', [SquadController::class, 'details'])->name('panel-squad-details');
    Route::post('/Panel/Ekip-Duzenle',[SquadController::class, 'update'])->name('panel-squad-update');
    Route::post('/Panel/Ekip-Ekle',[SquadController::class, 'store'])->name('panel-squad-store');
    Route::get('/Panel/Ekip-Ekle',[SquadController::class, 'add'])->name('panel-squad-add');

    //Kullanicilar
    Route::get('/Panel/Kullanicilar', [UserController::class, 'index'])->name('panel-kullanicilar');
    Route::get('/Panel/Kullanici-Duzenle/{id}', [UserController::class, 'edit'])->name('panel-user-edit');
    Route::get('/Panel/Kullanici-Incele/{id}', [UserController::class, 'details'])->name('panel-user-details');
    Route::post('/Panel/Kullanici-Duzenle',[UserController::class, 'update'])->name('panel-user-update');
    Route::post('/Panel/Kullanici-Ekle',[UserController::class, 'store'])->name('panel-user-store');
    Route::get('/Panel/Kullanici-Ekle',[UserController::class, 'add'])->name('panel-user-add');

});








Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
