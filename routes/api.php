<?php

use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\FreezoneController;
use App\Http\Controllers\Admin\VisaPackageAttributeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\CostCalculatorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthController::class, 'login']);

Route::get('freezone/{uuid}/get-default-attributes/', [FreezoneController::class, 'getDefaultAttributes'])->middleware(['auth:sanctum']);
Route::get('freezone/{uuid}/visa_package/', [VisaPackageAttributeController::class, 'getVisaPackageAttributes'])->middleware(['app.api_token']);
Route::post('package/save-activities/', [ActivityController::class, 'savePackageActivities'])->middleware(['auth:sanctum']);
Route::post('package/load-activities/', [ActivityController::class, 'loadPackageActivities'])->middleware(['auth:sanctum']);
Route::post('package/raise-invoice/', [CostCalculatorController::class, 'raisePackageInvoice'])->middleware(['auth:sanctum']);
Route::get('activity/{activity_group_id}/license', [ActivityController::class, 'getActivityGroupLicenses'])->middleware(['auth:sanctum']);
Route::get('activity-group/freezone/{freezoneId}/license', [ActivityController::class, 'getActivityGroupFreezoneLicenses'])->middleware(['auth:sanctum']);


Route::get('package/get-activities', [ApiController::class, 'getPackageActivities'])->middleware(['app.api_token']);


Route::post('create-customer', [CustomerController::class, 'store'])->middleware(['auth:sanctum', 'role_or_permission:store-customer']);

Route::post('create-lead', [LeadController::class, 'store'])->middleware(['auth:sanctum', 'role_or_permission:store-lead']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use Illuminate\Support\Facades\Storage;

Route::post('upload-file', function (Request $request) {
    $file = $request->file('file');

    if ($file) {
        // $path = $file->store('freezones', 's3');
        $filename = '123/' . time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
        $path = $file->storeAs('testing', $filename, 's3');
        // Storage::disk('s3')->put('testing/' . $filename, file_get_contents($file), 'public');

        return ['url' => Storage::disk('s3')->url($path)];
    } else {
        return response()->json(['error' => 'File not found.'], 404);
    }
});

Route::post('freezone/filter-packages', [ApiController::class, 'filter_freezone_packages'])->middleware(['app.api_token']);
Route::get('{key}/{id}', [ApiController::class, 'getData']);
