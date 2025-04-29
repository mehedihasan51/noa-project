<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\ChatController;
use App\Http\Controllers\Web\Backend\PageController;
use App\Http\Controllers\Web\Backend\PostController;
use App\Http\Controllers\Web\Backend\ContactController;
use App\Http\Controllers\Web\Backend\CategoryController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\SocialLinkController;
use App\Http\Controllers\Web\Backend\SubscriberController;
use App\Http\Controllers\Web\Backend\Access\RoleController;
use App\Http\Controllers\Web\Backend\Access\UserController;
use App\Http\Controllers\Web\Backend\SubcategoryController;
use App\Http\Controllers\Web\Backend\Settings\OtherController;
use App\Http\Controllers\Web\Backend\Settings\SocialController;
use App\Http\Controllers\Web\Backend\Settings\StripeController;
use App\Http\Controllers\Web\Backend\Settings\CaptchaController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\Settings\SettingController;
use App\Http\Controllers\Web\Backend\Access\PermissionController;
use App\Http\Controllers\Web\Backend\Settings\FirebaseController;
use App\Http\Controllers\Web\Backend\Settings\GoogleMapController;
use App\Http\Controllers\Web\Backend\Settings\MailSettingController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutWeController;
use App\Http\Controllers\Web\Backend\CMS\Web\Blog\BlogBannerController;
use App\Http\Controllers\Web\Backend\CMS\Web\Hire\HireBannerController;
use App\Http\Controllers\Web\Backend\CMS\Web\Home\HomeBannerController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutBannerController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutOfficeController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutCompanyController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutMissionController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutServiceController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutCleaningController;
use App\Http\Controllers\Web\Backend\CMS\Web\About\AboutInteriorController;
use App\Http\Controllers\Web\Backend\CMS\Web\Contact\ContactBannerController;
use App\Http\Controllers\Web\Backend\CMS\Web\Hire\CommittedController;

Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');


/*
* CRUD
*/

Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/status/{id}', 'status')->name('status');
});

Route::controller(SubcategoryController::class)->prefix('subcategory')->name('subcategory.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/status/{id}', 'status')->name('status');
});

Route::controller(PostController::class)->prefix('post')->name('post.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/status/{id}', 'status')->name('status');
});

Route::controller(PageController::class)->prefix('page')->name('page.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/status/{id}', 'status')->name('status');
});

Route::controller(SocialLinkController::class)->prefix('social')->name('social.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');
    Route::get('/status/{id}', 'status')->name('status');
});

Route::get('subscriber', [SubscriberController::class, 'index'])->name('subscriber.index');

Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/status/{id}', 'status')->name('status');
});


/*
* CMS
*/

Route::prefix('cms')->name('cms.')->group(function () {

    Route::prefix('home/banner')->name('home.banner.')->controller(HomeBannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });

    Route::prefix('about/banner')->name('about.banner.')->controller(AboutBannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');
        
        Route::put('/content', 'content')->name('content');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}', 'update')->name('update');
    });


    Route::prefix('about/service')->name('about.service.')->controller(AboutServiceController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });


    Route::prefix('about/company')->name('about.company.')->controller(AboutCompanyController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });

    Route::prefix('about/mission')->name('about.mission.')->controller(AboutMissionController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });


    Route::prefix('about/we')->name('about.we.')->controller(AboutWeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });
    
    
    Route::prefix('about/cleaning')->name('about.cleaning.')->controller(AboutCleaningController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');
    
        Route::put('/content', 'content')->name('content');
    });

    Route::prefix('about/office')->name('about.office.')->controller(AboutOfficeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });


    Route::prefix('about/interior')->name('about.interior.')->controller(AboutInteriorController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });


    Route::prefix('contact/banner')->name('contact.banner.')->controller(ContactBannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });


    Route::prefix('blog/banner')->name('blog.banner.')->controller(BlogBannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });


    Route::prefix('hire/banner')->name('hire.banner.')->controller(HireBannerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });

    Route::prefix('hire/committed')->name('hire.committed.')->controller(CommittedController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::patch('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/{id}/status', 'status')->name('status');

        Route::put('/content', 'content')->name('content');
    });
    
    
});




/*
* Chating Route
*/

Route::controller(ChatController::class)->prefix('chat')->name('chat.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/list', 'list')->name('list');
    Route::post('/send/{receiver_id}', 'send')->name('send');
    Route::get('/conversation/{receiver_id}', 'conversation')->name('conversation');
    Route::get('/room/{receiver_id}', 'room');
    Route::get('/search', 'search')->name('search');
    Route::get('/seen/all/{receiver_id}', 'seenAll');
    Route::get('/seen/single/{chat_id}', 'seenSingle');
});


/*
* Users Access Route
*/

Route::resource('users', UserController::class);
Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
    Route::get('/new', 'new')->name('new.index');
    Route::get('/ajax/new/count', 'newCount')->name('ajax.new.count');
});
Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);

/*
*settings
*/

//! Route for Profile Settings
Route::controller(ProfileController::class)->group(function () {
    Route::get('setting/profile', 'index')->name('setting.profile.index');
    Route::put('setting/profile/update', 'UpdateProfile')->name('setting.profile.update');
    Route::put('setting/profile/update/Password', 'UpdatePassword')->name('setting.profile.update.Password');
    Route::post('setting/profile/update/Picture', 'UpdateProfilePicture')->name('update.profile.picture');
});

//! Route for Mail Settings
Route::controller(MailSettingController::class)->group(function () {
    Route::get('setting/mail', 'index')->name('setting.mail.index');
    Route::patch('setting/mail', 'update')->name('setting.mail.update');
});

//! Route for Stripe Settings
Route::controller(StripeController::class)->prefix('setting/stripe')->name('setting.stripe.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::patch('/update', 'update')->name('update');
});

//! Route for Firebase Settings
Route::controller(FirebaseController::class)->prefix('setting/firebase')->name('setting.firebase.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::patch('/update', 'update')->name('update');
});

//! Route for Firebase Settings
Route::controller(SocialController::class)->prefix('setting/social')->name('setting.social.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::patch('/update', 'update')->name('update');
});

//! Route for Stripe Settings
Route::controller(SettingController::class)->group(function () {
    Route::get('setting/general', 'index')->name('setting.general.index');
    Route::patch('setting/general', 'update')->name('setting.general.update');
});

//! Route for Google Map Settings
Route::controller(GoogleMapController::class)->group(function () {
    Route::get('setting/google/map', 'index')->name('setting.google.map.index');
    Route::patch('setting/google/map', 'update')->name('setting.google.map.update');
});

//! Route for Google Map Settings
Route::controller(CaptchaController::class)->group(function () {
    Route::get('setting/captcha', 'index')->name('setting.captcha.index');
    Route::patch('setting/captcha', 'update')->name('setting.captcha.update');
});

//Ajax settings
Route::prefix('setting/other')->name('setting.other')->group(function () {
    Route::get('/', [OtherController::class, 'index'])->name('.index');
    Route::get('/mail', [OtherController::class, 'mail'])->name('.mail');
    Route::get('/sms', [OtherController::class, 'sms'])->name('.sms');
    Route::get('/recaptcha', [OtherController::class, 'recaptcha'])->name('.recaptcha');
    Route::get('/pagination', [OtherController::class, 'pagination'])->name('.pagination');
    Route::get('/reverb', [OtherController::class, 'reverb'])->name('.reverb');
});