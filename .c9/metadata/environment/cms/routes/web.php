{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":46,"position":46,"stack":[[{"start":{"row":4,"column":0},"end":{"row":5,"column":25},"action":"insert","lines":["use App\\Http\\Controllers\\BookController; //追加","use App\\Models\\Book; //追加"],"id":2}],[{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["k"],"id":9},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["o"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["o"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["B"]}],[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["P"],"id":10},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["o"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["s"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["t"]}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["k"],"id":11},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["o"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["o"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["B"]}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["P"],"id":12},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["o"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["s"]},{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":0},"end":{"row":23,"column":56},"action":"remove","lines":["","Route::get('/', function () {","    return view('welcome');","});","","Route::get('/dashboard', function () {","    return view('dashboard');","})->middleware(['auth', 'verified'])->name('dashboard');"],"id":13}],[{"start":{"row":16,"column":0},"end":{"row":31,"column":83},"action":"insert","lines":["//本：ダッシュボード表示(books.blade.php)","Route::get('/', [BookController::class,'index'])->middleware(['auth'])->name('book_index');","Route::get('/dashboard', [BookController::class,'index'])->middleware(['auth'])->name('dashboard');","","//本：追加 ","Route::post('/books',[BookController::class,\"store\"])->name('book_store');","","//本：削除 ","Route::delete('/book/{book}', [BookController::class,\"destroy\"])->name('book_destroy');","","//本：更新画面","Route::post('/booksedit/{book}',[BookController::class,\"edit\"])->name('book_edit'); //通常","Route::get('/booksedit/{book}', [BookController::class,\"edit\"])->name('edit');      //Validationエラーありの場合","","//本：更新画面","Route::post('/books/update',[BookController::class,\"update\"])->name('book_update');"],"id":14}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["k"],"id":15},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["o"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["o"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["B"]}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["π"],"id":16},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["o"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["s"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["t"],"id":17},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["s"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["o"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["π"]}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["P"],"id":18},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["o"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["s"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"remove","lines":["k"],"id":19},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"remove","lines":["o"]},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"remove","lines":["o"]},{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"remove","lines":["b"]}],[{"start":{"row":17,"column":78},"end":{"row":17,"column":79},"action":"insert","lines":["p"],"id":20},{"start":{"row":17,"column":79},"end":{"row":17,"column":80},"action":"insert","lines":["o"]},{"start":{"row":17,"column":80},"end":{"row":17,"column":81},"action":"insert","lines":["s"]},{"start":{"row":17,"column":81},"end":{"row":17,"column":82},"action":"insert","lines":["t"]}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"remove","lines":["k"],"id":21},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"remove","lines":["o"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"remove","lines":["o"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["B"]}],[{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["P"],"id":22},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["o"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["s"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"remove","lines":["s"],"id":23},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["k"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"remove","lines":["o"]},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"remove","lines":["o"]},{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"remove","lines":["b"]}],[{"start":{"row":21,"column":14},"end":{"row":21,"column":15},"action":"insert","lines":["p"],"id":24},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["o"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["s"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["t"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["s"]}],[{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"remove","lines":["k"],"id":25},{"start":{"row":21,"column":24},"end":{"row":21,"column":25},"action":"remove","lines":["o"]},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"remove","lines":["o"]},{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"remove","lines":["B"]}],[{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":["P"],"id":26},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":["o"]},{"start":{"row":21,"column":24},"end":{"row":21,"column":25},"action":"insert","lines":["s"]},{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":64},"end":{"row":21,"column":65},"action":"remove","lines":["k"],"id":27},{"start":{"row":21,"column":63},"end":{"row":21,"column":64},"action":"remove","lines":["o"]},{"start":{"row":21,"column":62},"end":{"row":21,"column":63},"action":"remove","lines":["o"]},{"start":{"row":21,"column":61},"end":{"row":21,"column":62},"action":"remove","lines":["b"]}],[{"start":{"row":21,"column":61},"end":{"row":21,"column":62},"action":"insert","lines":["p"],"id":28},{"start":{"row":21,"column":62},"end":{"row":21,"column":63},"action":"insert","lines":["o"]},{"start":{"row":21,"column":63},"end":{"row":21,"column":64},"action":"insert","lines":["s"]},{"start":{"row":21,"column":64},"end":{"row":21,"column":65},"action":"insert","lines":["t"]}],[{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"remove","lines":["k"],"id":29},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"remove","lines":["o"]},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"remove","lines":["o"]},{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"remove","lines":["b"]}],[{"start":{"row":24,"column":16},"end":{"row":24,"column":17},"action":"insert","lines":["p"],"id":30},{"start":{"row":24,"column":17},"end":{"row":24,"column":18},"action":"insert","lines":["o"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":19},"action":"insert","lines":["s"]},{"start":{"row":24,"column":19},"end":{"row":24,"column":20},"action":"insert","lines":["t"]}],[{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"remove","lines":["k"],"id":31},{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"remove","lines":["o"]},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"remove","lines":["o"]},{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"remove","lines":["b"]}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":["p"],"id":32},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["o"]},{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["s"]},{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["t"]}],[{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"remove","lines":["k"],"id":33},{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":["o"]},{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"remove","lines":["o"]},{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"remove","lines":["B"]}],[{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"insert","lines":["P"],"id":34},{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["o"]},{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":["s"]},{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"insert","lines":["t"]}],[{"start":{"row":24,"column":75},"end":{"row":24,"column":76},"action":"remove","lines":["k"],"id":35},{"start":{"row":24,"column":74},"end":{"row":24,"column":75},"action":"remove","lines":["o"]},{"start":{"row":24,"column":73},"end":{"row":24,"column":74},"action":"remove","lines":["o"]},{"start":{"row":24,"column":72},"end":{"row":24,"column":73},"action":"remove","lines":["b"]}],[{"start":{"row":24,"column":72},"end":{"row":24,"column":73},"action":"insert","lines":["p"],"id":36},{"start":{"row":24,"column":73},"end":{"row":24,"column":74},"action":"insert","lines":["o"]},{"start":{"row":24,"column":74},"end":{"row":24,"column":75},"action":"insert","lines":["s"]},{"start":{"row":24,"column":75},"end":{"row":24,"column":76},"action":"insert","lines":["t"]}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"remove","lines":["k"],"id":37},{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"remove","lines":["o"]},{"start":{"row":27,"column":15},"end":{"row":27,"column":16},"action":"remove","lines":["o"]},{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"remove","lines":["b"]}],[{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":["p"],"id":38},{"start":{"row":27,"column":15},"end":{"row":27,"column":16},"action":"insert","lines":["o"]},{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"insert","lines":["s"]},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["t"]}],[{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"remove","lines":["k"],"id":39},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"remove","lines":["o"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"remove","lines":["o"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"remove","lines":["b"]}],[{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["p"],"id":40},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["o"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["s"]},{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["t"]}],[{"start":{"row":27,"column":36},"end":{"row":27,"column":37},"action":"remove","lines":["k"],"id":41},{"start":{"row":27,"column":35},"end":{"row":27,"column":36},"action":"remove","lines":["o"]},{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"remove","lines":["o"]},{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"remove","lines":["B"]}],[{"start":{"row":27,"column":33},"end":{"row":27,"column":34},"action":"insert","lines":["P"],"id":42},{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"insert","lines":["o"]},{"start":{"row":27,"column":35},"end":{"row":27,"column":36},"action":"insert","lines":["s"]},{"start":{"row":27,"column":36},"end":{"row":27,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":27,"column":74},"end":{"row":27,"column":75},"action":"remove","lines":["k"],"id":43},{"start":{"row":27,"column":73},"end":{"row":27,"column":74},"action":"remove","lines":["o"]},{"start":{"row":27,"column":72},"end":{"row":27,"column":73},"action":"remove","lines":["o"]},{"start":{"row":27,"column":71},"end":{"row":27,"column":72},"action":"remove","lines":["b"]}],[{"start":{"row":27,"column":71},"end":{"row":27,"column":72},"action":"insert","lines":["p"],"id":44},{"start":{"row":27,"column":72},"end":{"row":27,"column":73},"action":"insert","lines":["o"]},{"start":{"row":27,"column":73},"end":{"row":27,"column":74},"action":"insert","lines":["s"]},{"start":{"row":27,"column":74},"end":{"row":27,"column":75},"action":"insert","lines":["t"]}],[{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"remove","lines":["k"],"id":47},{"start":{"row":28,"column":15},"end":{"row":28,"column":16},"action":"remove","lines":["o"]},{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"remove","lines":["o"]},{"start":{"row":28,"column":13},"end":{"row":28,"column":14},"action":"remove","lines":["b"]}],[{"start":{"row":28,"column":13},"end":{"row":28,"column":14},"action":"insert","lines":["p"],"id":48},{"start":{"row":28,"column":14},"end":{"row":28,"column":15},"action":"insert","lines":["o"]},{"start":{"row":28,"column":15},"end":{"row":28,"column":16},"action":"insert","lines":["s"]},{"start":{"row":28,"column":16},"end":{"row":28,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"remove","lines":["k"],"id":49},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"remove","lines":["o"]},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"remove","lines":["o"]},{"start":{"row":28,"column":33},"end":{"row":28,"column":34},"action":"remove","lines":["B"]}],[{"start":{"row":28,"column":33},"end":{"row":28,"column":34},"action":"insert","lines":["P"],"id":50},{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"insert","lines":["o"]},{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"insert","lines":["s"]},{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["k"],"id":51},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"remove","lines":["o"]},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"remove","lines":["o"]},{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"remove","lines":["b"]}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":["p"],"id":52},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["o"]},{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":["s"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"remove","lines":["k"],"id":53},{"start":{"row":31,"column":31},"end":{"row":31,"column":32},"action":"remove","lines":["o"]},{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"remove","lines":["o"]},{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"remove","lines":["B"]}],[{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"insert","lines":["P"],"id":54},{"start":{"row":31,"column":30},"end":{"row":31,"column":31},"action":"insert","lines":["o"]},{"start":{"row":31,"column":31},"end":{"row":31,"column":32},"action":"insert","lines":["s"]},{"start":{"row":31,"column":32},"end":{"row":31,"column":33},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":72},"end":{"row":31,"column":73},"action":"remove","lines":["k"],"id":55},{"start":{"row":31,"column":71},"end":{"row":31,"column":72},"action":"remove","lines":["o"]},{"start":{"row":31,"column":70},"end":{"row":31,"column":71},"action":"remove","lines":["o"]},{"start":{"row":31,"column":69},"end":{"row":31,"column":70},"action":"remove","lines":["b"]}],[{"start":{"row":31,"column":69},"end":{"row":31,"column":70},"action":"insert","lines":["p"],"id":56},{"start":{"row":31,"column":70},"end":{"row":31,"column":71},"action":"insert","lines":["o"]},{"start":{"row":31,"column":71},"end":{"row":31,"column":72},"action":"insert","lines":["s"]},{"start":{"row":31,"column":72},"end":{"row":31,"column":73},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":38,"column":0},"end":{"row":38,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1677818788515,"hash":"063f910e1fa11a227a28ae9426f16147f71d3f27"}