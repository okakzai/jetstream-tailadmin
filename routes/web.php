<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->view('tailadmin.page.404', [], 404);
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Route::get('/user/profile', function () {
    //     return view('tailadmin.jetstream.profile'); // Ganti dengan view yang diinginkan
    // })->name('profile.show');
    

    Route::get('/dashboard', function () {
        return view('tailadmin.dashboard');
    })->name('dashboard');

    Route::get('/calendar', function () {
        return view('tailadmin.calendar');
    })->name('calendar');

    Route::get('/profile', function () {
        return view('tailadmin.profile');
    })->name('profile');

    Route::get('/form/element', function () {
        return view('tailadmin.form.element');
    })->name('form.element');

    Route::get('/table/basic', function () {
        return view('tailadmin.table.basic');
    })->name('table.basic');

    Route::get('/page/blank', function () {
        return view('tailadmin.page.blank');
    })->name('page.blank');

    Route::get('/page/404', function () {
        return view('tailadmin.page.404');
    })->name('page.404');

    Route::get('/chart/line', function () {
        return view('tailadmin.chart.line');
    })->name('chart.line');

    Route::get('/chart/bar', function () {
        return view('tailadmin.chart.bar');
    })->name('chart.bar');

    Route::get('/ui/alert', function () {
        return view('tailadmin.ui.alert');
    })->name('ui.alert');

    Route::get('/ui/avatar', function () {
        return view('tailadmin.ui.avatar');
    })->name('ui.avatar');

    Route::get('/ui/badge', function () {
        return view('tailadmin.ui.badge');
    })->name('ui.badge');

    Route::get('/ui/button', function () {
        return view('tailadmin.ui.button');
    })->name('ui.button');

    Route::get('/ui/image', function () {
        return view('tailadmin.ui.image');
    })->name('ui.image');

    Route::get('/ui/video', function () {
        return view('tailadmin.ui.video');
    })->name('ui.video');

    Route::get('/auth/signin', function () {
        return view('tailadmin.auth.signin');
    })->name('auth.signin');

    Route::get('/auth/signup', function () {
        return view('tailadmin.auth.signup');
    })->name('auth.signup');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';