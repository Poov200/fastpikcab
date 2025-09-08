Route::get('/tenkasi-to-kochi-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-kochi');
})->name('tenkasi-to-kochi');

Route::get('/tenkasi-to-karaikal-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-karaikal');
})->name('tenkasi-to-karaikal');

Route::get('/tenkasi-to-tirupati-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tirupati');
})->name('tenkasi-to-tirupati');

Route::get('/tenkasi-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tiruvannamalai');
})->name('tenkasi-to-tiruvannamalai');

Route::get('/tenkasi-to-kerala-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-kerala');
})->name('tenkasi-to-kerala');