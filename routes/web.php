<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin'],function (){
    Route::get('/',[AdminController::class,'index']);
    Route::get('/products',function (){
          return view('admin.products');
    });

    Route::get('/newprodinsert',function (){
        return view('admin.newproinsert');
    });


    Route::get('/categorylist',function (){
        return view('admin.categorylist');
    });

    Route::get('/newcatinsert',function (){
        return view('admin.newcatinsert');
    });

    Route::get('/attribute',function (){
        return view('admin.attribute');
    });

    Route::get('/addattribute',function (){
        return view('admin.addattribute');
    });

    Route::get('/allusers',function (){
        return view('admin.allusers');
    });
    Route::get('/addnewuser',function (){
        return view('admin.addnewuser');
    });

    Route::get('/allrol',function (){
        return view('admin.allrol');
    });
    Route::get('/addrol',function (){
        return view('admin.addrol');
    });

    Route::get('/media',function (){
        return view('admin.media');
    });

    Route::get('/orderlist',function (){
        return view('admin.orderlist');
    });

    Route::get('/orderdetail',function (){
        return view('admin.orderdetail');
    });
    Route::get('/orderfollow',function (){
        return view('admin.orderfollow');
    });


    Route::get('/translation',function (){
        return view('admin.translation');
    });
    Route::get('/currencyrate',function (){
        return view('admin.currencyrate');
    });

    Route::get('/couponlist',function (){
        return view('admin.couponlist');
    });
    Route::get('/addcoupon',function (){
        return view('admin.addcoupon');
    });

    Route::get('/tax',function (){
        return view('admin.tax');
    });

    Route::get('/productreview',function (){
        return view('admin.productreview');
    });

    Route::get('/suportticket',function (){
        return view('admin.suportticket');
    });

    Route::get('/profilesetting',function (){
        return view('admin.profilesetting');
    });

    Route::get('/raports',function (){
        return view('admin.raports');
    });

    Route::get('/addnewproduct',function (){
        return view('admin.addnewproduct');
    });

});


Route::get('/m',function (){
    return view('mastershopleft');
});
Route::get('/shopleft',function (){
    return view('shopleftslider');
});

Route::get('/shopcategory',function (){
    return view('shopcategory');
});

Route::get('/shopbanner',function (){
    return view('shopbanner');
});
Route::get('/shoplist',function (){
    return view('shoplist');
});
Route::get('/shopright',function (){
    return view('shopright');
});
Route::get('/shoptop',function (){
    return view('shoptop');
});
Route::get('/product',function (){
    return view('product');
});
Route::get('/leftthum',function (){
    return view('leftthumnail');
});

Route::get('/rightthum',function (){
    return view('rightthumblenail');
});


Route::get('/bottomtthum',function (){
    return view('buttomthumblenail');
});


Route::get('/productbundle',function (){
    return view('productbundle');
});


Route::get('/productslider',function (){
    return view('productslider');
});


Route::get('/productsticky',function (){
    return view('productsticky');
});

Route::get('/blogdetail',function (){
    return view('blogdetail');
});

Route::get('/bloggrid',function (){
    return view('bloggrid');
});

Route::get('/bloglist',function (){
    return view('bloglist');
});

Route::get('/selbecome',function (){
    return view('become');
});

Route::get('/seldetail',function (){
    return view('seldetail');
});


Route::get('/seldash',function (){
    return view('seldash');
});


Route::get('/selgrid',function (){
    return view('selgrid');
});
