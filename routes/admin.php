<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\Management\MemberController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FunctionalityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CustomAuth\AdminAuthController;

# Admin
Route::get('login', [AdminAuthController::class, 'index']);

Route::post('/login-process', [AdminAuthController::class, 'login_process']);
# End Admin

Route::group(['as' => 'admin::', 'middleware' => 'auth:admin'], function(){
	Route::get("/",[AdminController::class,'index']);
  
	# Resources
	Route::resources([
			'roles' 					=>  RoleController::class,
			'modules' 					=>  ModuleController::class,
			'members' 					=>  MemberController::class,
			'categories' 				=>  CategoryController::class,
			'sitesettings' 				=>  SiteSettingController::class,
			'sliders' 					=>  SliderController::class,
			'users' 					=>  UserController::class,			
			'functionality' 			=>  FunctionalityController::class,
		]);
		# End Resources
		
		Route::get("role-permission/{id}",[RoleController::class,'role_permission'])->name('role_permission');
		
		Route::get("sliders/{id}/slides",[SliderController::class,'slides'])->name('slides');
		Route::get("sliders/{id}/add_slide",[SliderController::class,'add_slide'])->name('add_slide');
		Route::get("sliders/{id}/edit-slide/{slide_id}",[SliderController::class,'edit_slide'])->name('edit_slide');
		Route::post("sliders/add_slide_process",[SliderController::class,'add_slide_process'])->name('add_slide_process');
		Route::post("sliders/edit_slide_process",[SliderController::class,'edit_slide_process'])->name('edit_slide_process');
		Route::delete("sliders/{id}/deleteSlide",[SliderController::class,'deleteSlide'])->name('sliders.deleteSlide');

		Route::post("role-permission-update",[RoleController::class,'role_permission_update'])->name('role_permission_update');
		

		Route::post("logout", [AdminAuthController::class,'logout'])->name('logout');

		Route::get("sliders/{id}/slides",[SliderController::class,'slides'])->name('slides');
		Route::get("sliders/{id}/add_slide",[SliderController::class,'add_slide'])->name('add_slide');
		Route::post("sliders/add_slide_process",[SliderController::class,'add_slide_process'])->name('add_slide_process');
		Route::get("sliders/{id}/edit-slide/{id2}",[SliderController::class,'edit_slide'])->name('edit_slide');
		Route::post("sliders/edit_slide_process",[SliderController::class,'edit_slide_process'])->name('edit_slide_process');
		Route::delete("sliders/deleteSlide/{id}",[SliderController::class,'deleteSlide'])->name('sliders.deleteSlide');
		Route::post("slides/updateSortOrder",[SliderController::class,'updateSortOrder']);

		Route::post("remove-gallery-image",[AdminController::class,'remove_gallery_image']);
		
		
	});

