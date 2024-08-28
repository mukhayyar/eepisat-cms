<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Test
Route::get('/test', function () {
    return view('frontend.test');
});

Route::get('/registration', function () {
    $registrationTestOpen = Carbon::create(2024, 8, 18, 0, 0, 'Asia/Jakarta'); // UTC+7
    $registrationTestClose = Carbon::create(2024, 8, 19, 7, 0, 0, 'Asia/Jakarta'); // UTC+7
    $registrationOpen = Carbon::create(2024, 8, 19, 18, 0, 0, 'Asia/Jakarta'); // UTC+7
    $registrationDeadline = Carbon::create(2024, 9, 1, 22, 0, 0, 'Asia/Jakarta'); // UTC+7
    $currentTime = Carbon::now('Asia/Jakarta');
    // Check if the current time is within the test period or the actual registration period
    $registrationOpen = ($currentTime->between($registrationTestOpen, $registrationTestClose) ||
                         $currentTime->between($registrationOpen, $registrationDeadline));
    
    return view('frontend.recruitment.form', compact('registrationOpen'));
})->name('registration');

Route::post('/registration', [RegistrationController::class,'store']);

Route::get('/registration/list', [RegistrationController::class, 'list'])->name('registration.list')->middleware('auth.basic');


Route::get('/recruitment/announcement', function () {
    return view('frontend.recruitment.announcement');
});

Route::get('/test/teams', function () {
    return view('tests.teams');
});
Route::get('/test/achievement', function () {
    return view('tests.achievement-slider');
});
Route::get('/test/cansat-project', function () {
    return view('tests.cansat-showcase');
});


Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');
Route::get('/water-rocket-competition', function () {
    return view('frontend.water_rocket_competition.index');
});
Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');
Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('frontend.gallery');
Route::get('/teams', function () {
    return view('frontend.teams');
})->name('frontend.teams');
Route::get('/news', function () {
    return view('frontend.news');
})->name('frontend.news');
Route::get('/sponsorship', function () {
    return view('frontend.sponsorship');
})->name('frontend.sponsorship');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');
Route::get('/news/{slug}', function () {
    return view('frontend.detail_news');
})->name('frontend.detail_news');

Route::get('/tambahkolom/catatan', function () {
    $update = DB::statement("ALTER TABLE table_name MODIFY COLUMN status ENUM('Draft','Proposed','Approved','Published','Must Be Revised') NOT NULL DEFAULT 'Draft'");
    dd($update);
});

// Route::get('/testmail', function() {
//     $recipientEmail = 'm3g3nz2@gmail.com';

//     // Send the email
//     // $result = Mail::to($recipientEmail)->send(new SampleEmail());

//     return $result.'Email sent successfully!';
// });

// Route::get('/koneksi-test', function () {
//     DB::table('users')
//         ->whereIn('id', [5, 6])
//         ->update(['password' => bcrypt('Aerospace@dvisor123')]);
//     DB::table('users')
//         ->whereIn('id', [7, 8])
//         ->update(['password' => bcrypt('AerospaceM3mber123')]);
//     dd(User::all());
// });
// Route::get('/recruitment/form', function () {
//     return view('frontend.recruitment.form');
// });
// Route::get('/recruitment/announcement', function () {
//     return view('frontend.recruitment.announcement');
// });
Route::prefix('backoffice')->group(function () {
    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);
    Route::post('/logout', function() {
        Auth::logout();
        return redirect('/backoffice/login');
    })->name('logout');
});
Route::prefix('backoffice')->middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', function () {
        return view('backoffice.dashboard.index');
    });
    Route::prefix('projects')->controller(BlogController::class)->group(function () {
        Route::get('/article', 'index')->name('article.index');
        Route::get('/article/create', 'create')->name('article.create');
        Route::post('/article/create', 'store');
        Route::get('/article/{id}', 'show')->name('article.show');
        Route::get('/article/edit/{id}', 'edit')->name('article.edit');
        Route::put('/article/edit/{id}', 'update');
        Route::put('/article/{id}/reject', 'reject')->name('article.reject');
        Route::put('/article/{id}/approve', 'approve')->name('article.approve');
        Route::put('/article/{id}/propose', 'propose')->name('article.propose');
        Route::put('/article/{id}/publish', 'publish')->name('article.publish');
        Route::put('/article/{id}/unpublish', 'unPublish')->name('article.unpublish');
        Route::delete('/article/{id}/delete', 'destroy')->name('article.delete');
    });
    Route::prefix('users')->controller(UserController::class)->group(function () {
        Route::get('/superadmin','index');
        Route::get('/admin','index');
    });
    Route::prefix('projects')->group(function () {
        Route::get('/competitions', function () {
            return view('backoffice.layout.home.index');
        })->name('competitions.index');
        Route::get('/awarding', function () {
            return view('backoffice.layout.about_us.index');
        })->name('awarding.index');
        Route::get('/gallery', function () {
            return view('backoffice.layout.gallery.index');
        })->name('gallery.index');
        Route::get('/teams', function () {
            return view('backoffice.layout.teams.index');
        })->name('teams.index');
        Route::get('/sponsorship', function () {
            return view('backoffice.layout.sponsorship.index');
        })->name('sponsor.index');
        Route::get('/cansat-timeline', function () {
            return view('backoffice.layout.sponsorship.index');
        })->name('cansat_timeline.index');
    });
    Route::prefix('form')->group(function () {
        Route::get('/registration', function () {
            return view('backoffice.dashboard.index');
        });
        Route::get('/contact', function () {
            return view('backoffice.dashboard.index');
        });
    });
});
