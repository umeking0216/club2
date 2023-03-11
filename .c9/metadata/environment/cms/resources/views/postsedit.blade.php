{"filter":false,"title":"postsedit.blade.php","tooltip":"/cms/resources/views/postsedit.blade.php","undoManager":{"mark":49,"position":49,"stack":[[{"start":{"row":0,"column":0},"end":{"row":87,"column":15},"action":"insert","lines":["<!-- resources/views/booksedit.blade.php -->","<x-app-layout>","","    <!--ヘッダー[START]-->","    <x-slot name=\"header\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            <form action=\"{{ route('book_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">","                <x-button class=\"bg-gray-100 text-gray-900\">{{ __('Dashboard') }}：更新画面</x-button>","            </form>","        </h2>","    </x-slot>","    <!--ヘッダー[END]-->","            ","        <!-- バリデーションエラーの表示に使用-->","        <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>","        <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <div class=\"flex bg-gray-100\">","","        <!--左エリア[START]--> ","        <div class=\"text-gray-700 text-left px-4 py-4 m-2\">","            ","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-500 font-bold\">","                    本を管理する","                </div>","            </div>","","","            <!-- 本のタイトル -->","            <form action=\"{{ url('books/update') }}\" method=\"POST\" class=\"w-full max-w-lg\">","                @csrf","                ","                  <div class=\"flex flex-col px-2 py-2\">","                   <!-- カラム１ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                       Book Name","                      </label>","                      <input name=\"item_name\" value=\"{{$book->item_name}}\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム２ -->","                    <div class=\"w-full md:w-1/1 px-3\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        金額","                      </label>","                      <input name=\"item_amount\" value=\"{{$book->item_amount}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム３ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        数","                      </label>","                      <input name=\"item_number\" value=\"{{$book->item_number}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム４ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-6 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        発売日","                      </label>","                      <input name=\"published\" type=\"datetime-local\" value=\"{{$book->published}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\"  placeholder=\"\">","                    </div>","                  </div>","                  <!-- カラム５ -->","                  <div class=\"flex flex-col\">","                      <div class=\"text-gray-700 text-center px-4 py-2 m-2\">","                             <x-button class=\"bg-blue-500 rounded-lg\">更新</x-button>","                      </div>","                   </div>","                <!-- id値を送信 -->","                <input type=\"hidden\" name=\"id\" value=\"{{$book->id}}\">","                <!--/ id値を送信 -->","            </form>","        </div>","        <!--左エリア[END]--> ","    ","    ","    <!--右側エリア[START]-->","    <div class=\"flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2\">","      ","    </div>","    <!--右側エリア[[END]-->       ","","</div>"," <!--全エリア[END]-->","","</x-app-layout>"],"id":1}],[{"start":{"row":6,"column":39},"end":{"row":6,"column":40},"action":"remove","lines":["k"],"id":2},{"start":{"row":6,"column":38},"end":{"row":6,"column":39},"action":"remove","lines":["o"]},{"start":{"row":6,"column":37},"end":{"row":6,"column":38},"action":"remove","lines":["o"]},{"start":{"row":6,"column":36},"end":{"row":6,"column":37},"action":"remove","lines":["b"]}],[{"start":{"row":6,"column":36},"end":{"row":6,"column":37},"action":"insert","lines":["p"],"id":3},{"start":{"row":6,"column":37},"end":{"row":6,"column":38},"action":"insert","lines":["o"]},{"start":{"row":6,"column":38},"end":{"row":6,"column":39},"action":"insert","lines":["s"]},{"start":{"row":6,"column":39},"end":{"row":6,"column":40},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"remove","lines":["k"],"id":4},{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"remove","lines":["o"]},{"start":{"row":31,"column":35},"end":{"row":31,"column":36},"action":"remove","lines":["o"]},{"start":{"row":31,"column":34},"end":{"row":31,"column":35},"action":"remove","lines":["b"]}],[{"start":{"row":31,"column":34},"end":{"row":31,"column":35},"action":"insert","lines":["p"],"id":5},{"start":{"row":31,"column":35},"end":{"row":31,"column":36},"action":"insert","lines":["o"]},{"start":{"row":31,"column":36},"end":{"row":31,"column":37},"action":"insert","lines":["s"]},{"start":{"row":31,"column":37},"end":{"row":31,"column":38},"action":"insert","lines":["t"]}],[{"start":{"row":40,"column":59},"end":{"row":40,"column":60},"action":"remove","lines":["k"],"id":6},{"start":{"row":40,"column":58},"end":{"row":40,"column":59},"action":"remove","lines":["o"]},{"start":{"row":40,"column":57},"end":{"row":40,"column":58},"action":"remove","lines":["o"]},{"start":{"row":40,"column":56},"end":{"row":40,"column":57},"action":"remove","lines":["b"]}],[{"start":{"row":40,"column":56},"end":{"row":40,"column":57},"action":"insert","lines":["p"],"id":7},{"start":{"row":40,"column":57},"end":{"row":40,"column":58},"action":"insert","lines":["o"]},{"start":{"row":40,"column":58},"end":{"row":40,"column":59},"action":"insert","lines":["t"]}],[{"start":{"row":40,"column":58},"end":{"row":40,"column":59},"action":"remove","lines":["t"],"id":8}],[{"start":{"row":40,"column":58},"end":{"row":40,"column":59},"action":"insert","lines":["s"],"id":9},{"start":{"row":40,"column":59},"end":{"row":40,"column":60},"action":"insert","lines":["t"]}],[{"start":{"row":47,"column":61},"end":{"row":47,"column":62},"action":"remove","lines":["k"],"id":10},{"start":{"row":47,"column":60},"end":{"row":47,"column":61},"action":"remove","lines":["o"]},{"start":{"row":47,"column":59},"end":{"row":47,"column":60},"action":"remove","lines":["o"]},{"start":{"row":47,"column":58},"end":{"row":47,"column":59},"action":"remove","lines":["b"]}],[{"start":{"row":47,"column":58},"end":{"row":47,"column":59},"action":"insert","lines":["p"],"id":11},{"start":{"row":47,"column":59},"end":{"row":47,"column":60},"action":"insert","lines":["o"]},{"start":{"row":47,"column":60},"end":{"row":47,"column":61},"action":"insert","lines":["s"]},{"start":{"row":47,"column":61},"end":{"row":47,"column":62},"action":"insert","lines":["t"]}],[{"start":{"row":54,"column":61},"end":{"row":54,"column":62},"action":"remove","lines":["k"],"id":12},{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"remove","lines":["o"]},{"start":{"row":54,"column":59},"end":{"row":54,"column":60},"action":"remove","lines":["o"]},{"start":{"row":54,"column":58},"end":{"row":54,"column":59},"action":"remove","lines":["b"]}],[{"start":{"row":54,"column":58},"end":{"row":54,"column":59},"action":"insert","lines":["p"],"id":13},{"start":{"row":54,"column":59},"end":{"row":54,"column":60},"action":"insert","lines":["o"]},{"start":{"row":54,"column":60},"end":{"row":54,"column":61},"action":"insert","lines":["s"]},{"start":{"row":54,"column":61},"end":{"row":54,"column":62},"action":"insert","lines":["t"]}],[{"start":{"row":61,"column":81},"end":{"row":61,"column":82},"action":"remove","lines":["k"],"id":14},{"start":{"row":61,"column":80},"end":{"row":61,"column":81},"action":"remove","lines":["o"]},{"start":{"row":61,"column":79},"end":{"row":61,"column":80},"action":"remove","lines":["o"]},{"start":{"row":61,"column":78},"end":{"row":61,"column":79},"action":"remove","lines":["b"]}],[{"start":{"row":61,"column":78},"end":{"row":61,"column":79},"action":"insert","lines":["p"],"id":15},{"start":{"row":61,"column":79},"end":{"row":61,"column":80},"action":"insert","lines":["o"]},{"start":{"row":61,"column":80},"end":{"row":61,"column":81},"action":"insert","lines":["s"]},{"start":{"row":61,"column":81},"end":{"row":61,"column":82},"action":"insert","lines":["t"]}],[{"start":{"row":71,"column":60},"end":{"row":71,"column":61},"action":"remove","lines":["k"],"id":16},{"start":{"row":71,"column":59},"end":{"row":71,"column":60},"action":"remove","lines":["o"]},{"start":{"row":71,"column":58},"end":{"row":71,"column":59},"action":"remove","lines":["o"]},{"start":{"row":71,"column":57},"end":{"row":71,"column":58},"action":"remove","lines":["b"]}],[{"start":{"row":71,"column":57},"end":{"row":71,"column":58},"action":"insert","lines":["p"],"id":17},{"start":{"row":71,"column":58},"end":{"row":71,"column":59},"action":"insert","lines":["o"]},{"start":{"row":71,"column":59},"end":{"row":71,"column":60},"action":"insert","lines":["s"]},{"start":{"row":71,"column":60},"end":{"row":71,"column":61},"action":"insert","lines":["t"]}],[{"start":{"row":11,"column":20},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":46,"column":6},"action":"insert","lines":["<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"uploadModalLabel\" aria-hidden=\"true\">","  <form action=\"{{ url('posts') }}\" method=\"POST\" class=\"w-full max-w-lg\" enctype=\"multipart/form-data\">","                @csrf","                  <div class=\"flex flex-col px-2 py-2\">","                   <!-- カラム１ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                       タイトル","                      </label>","                      <input name=\"title\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム２ -->","                    <div class=\"w-full md:w-1/1 px-3\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        本文","                      </label>","                      <input name=\"body\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム３ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        写真","                      </label>","                      <input name=\"images\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"file\" placeholder=\"\">","                    </div>","                    ","                  <!-- カラム５ -->","                  <div class=\"flex flex-col\">","                      <div class=\"text-gray-700 text-center px-4 py-2 m-2\">","                             <x-button class=\"bg-blue-500 rounded-lg\">送信</x-button>","                      </div>","                   </div>","            </form>","</div>"],"id":19}],[{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "],"id":20}],[{"start":{"row":46,"column":4},"end":{"row":46,"column":8},"action":"insert","lines":["    "],"id":21}],[{"start":{"row":14,"column":2},"end":{"row":14,"column":4},"action":"insert","lines":["  "],"id":22}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"insert","lines":["    "],"id":23}],[{"start":{"row":44,"column":18},"end":{"row":44,"column":19},"action":"remove","lines":[" "],"id":24}],[{"start":{"row":14,"column":21},"end":{"row":14,"column":79},"action":"remove","lines":["\"{{ url('posts') }}\" method=\"POST\" class=\"w-full max-w-lg\""],"id":25},{"start":{"row":14,"column":21},"end":{"row":14,"column":86},"action":"insert","lines":["\"{{ url('posts/update') }}\" method=\"POST\" class=\"w-full max-w-lg\""]}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":70},"action":"insert","lines":["value=\"{{$post->item_name}}\""],"id":26}],[{"start":{"row":22,"column":66},"end":{"row":22,"column":67},"action":"remove","lines":["e"],"id":27},{"start":{"row":22,"column":65},"end":{"row":22,"column":66},"action":"remove","lines":["m"]},{"start":{"row":22,"column":64},"end":{"row":22,"column":65},"action":"remove","lines":["a"]},{"start":{"row":22,"column":63},"end":{"row":22,"column":64},"action":"remove","lines":["n"]},{"start":{"row":22,"column":62},"end":{"row":22,"column":63},"action":"remove","lines":["_"]},{"start":{"row":22,"column":61},"end":{"row":22,"column":62},"action":"remove","lines":["m"]},{"start":{"row":22,"column":60},"end":{"row":22,"column":61},"action":"remove","lines":["e"]},{"start":{"row":22,"column":59},"end":{"row":22,"column":60},"action":"remove","lines":["t"]},{"start":{"row":22,"column":58},"end":{"row":22,"column":59},"action":"remove","lines":["i"]}],[{"start":{"row":22,"column":58},"end":{"row":22,"column":59},"action":"insert","lines":["t"],"id":28},{"start":{"row":22,"column":59},"end":{"row":22,"column":60},"action":"insert","lines":["i"]},{"start":{"row":22,"column":60},"end":{"row":22,"column":61},"action":"insert","lines":["t"]},{"start":{"row":22,"column":61},"end":{"row":22,"column":62},"action":"insert","lines":["e"]}],[{"start":{"row":22,"column":61},"end":{"row":22,"column":62},"action":"remove","lines":["e"],"id":29}],[{"start":{"row":22,"column":61},"end":{"row":22,"column":62},"action":"insert","lines":["l"],"id":30},{"start":{"row":22,"column":62},"end":{"row":22,"column":63},"action":"insert","lines":["e"]}],[{"start":{"row":29,"column":41},"end":{"row":29,"column":69},"action":"insert","lines":["value=\"{{$post->item_name}}\""],"id":31}],[{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"remove","lines":["e"],"id":32},{"start":{"row":29,"column":64},"end":{"row":29,"column":65},"action":"remove","lines":["m"]},{"start":{"row":29,"column":63},"end":{"row":29,"column":64},"action":"remove","lines":["a"]},{"start":{"row":29,"column":62},"end":{"row":29,"column":63},"action":"remove","lines":["n"]},{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"remove","lines":["_"]},{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"remove","lines":["m"]},{"start":{"row":29,"column":59},"end":{"row":29,"column":60},"action":"remove","lines":["e"]},{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"remove","lines":["t"]},{"start":{"row":29,"column":57},"end":{"row":29,"column":58},"action":"remove","lines":["i"]}],[{"start":{"row":29,"column":57},"end":{"row":29,"column":58},"action":"insert","lines":["v"],"id":33},{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"insert","lines":["o"]}],[{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"remove","lines":["o"],"id":34}],[{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"insert","lines":["a"],"id":35},{"start":{"row":29,"column":59},"end":{"row":29,"column":60},"action":"insert","lines":["l"]},{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"insert","lines":["u"]},{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":43},"end":{"row":36,"column":71},"action":"insert","lines":["value=\"{{$post->item_name}}\""],"id":36}],[{"start":{"row":36,"column":67},"end":{"row":36,"column":68},"action":"remove","lines":["e"],"id":37},{"start":{"row":36,"column":66},"end":{"row":36,"column":67},"action":"remove","lines":["m"]},{"start":{"row":36,"column":65},"end":{"row":36,"column":66},"action":"remove","lines":["a"]},{"start":{"row":36,"column":64},"end":{"row":36,"column":65},"action":"remove","lines":["n"]},{"start":{"row":36,"column":63},"end":{"row":36,"column":64},"action":"remove","lines":["_"]},{"start":{"row":36,"column":62},"end":{"row":36,"column":63},"action":"remove","lines":["m"]},{"start":{"row":36,"column":61},"end":{"row":36,"column":62},"action":"remove","lines":["e"]},{"start":{"row":36,"column":60},"end":{"row":36,"column":61},"action":"remove","lines":["t"]},{"start":{"row":36,"column":59},"end":{"row":36,"column":60},"action":"remove","lines":["i"]}],[{"start":{"row":36,"column":59},"end":{"row":36,"column":60},"action":"insert","lines":["i"],"id":38},{"start":{"row":36,"column":60},"end":{"row":36,"column":61},"action":"insert","lines":["m"]},{"start":{"row":36,"column":61},"end":{"row":36,"column":62},"action":"insert","lines":["a"]},{"start":{"row":36,"column":62},"end":{"row":36,"column":63},"action":"insert","lines":["g"]},{"start":{"row":36,"column":63},"end":{"row":36,"column":64},"action":"insert","lines":["e"]},{"start":{"row":36,"column":64},"end":{"row":36,"column":65},"action":"insert","lines":["s"]}],[{"start":{"row":36,"column":65},"end":{"row":36,"column":66},"action":"insert","lines":["s"],"id":39}],[{"start":{"row":36,"column":65},"end":{"row":36,"column":66},"action":"remove","lines":["s"],"id":40}],[{"start":{"row":50,"column":0},"end":{"row":112,"column":25},"action":"remove","lines":["        <!-- バリデーションエラーの表示に使用-->","        <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>","        <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <div class=\"flex bg-gray-100\">","","        <!--左エリア[START]--> ","        <div class=\"text-gray-700 text-left px-4 py-4 m-2\">","            ","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-500 font-bold\">","                    本を管理する","                </div>","            </div>","","","            <!-- 本のタイトル -->","            <form action=\"{{ url('posts/update') }}\" method=\"POST\" class=\"w-full max-w-lg\">","                @csrf","                ","                  <div class=\"flex flex-col px-2 py-2\">","                   <!-- カラム１ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                       Book Name","                      </label>","                      <input name=\"item_name\" value=\"{{$post->item_name}}\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム２ -->","                    <div class=\"w-full md:w-1/1 px-3\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        金額","                      </label>","                      <input name=\"item_amount\" value=\"{{$post->item_amount}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム３ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        数","                      </label>","                      <input name=\"item_number\" value=\"{{$post->item_number}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム４ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-6 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        発売日","                      </label>","                      <input name=\"published\" type=\"datetime-local\" value=\"{{$post->published}}\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\"  placeholder=\"\">","                    </div>","                  </div>","                  <!-- カラム５ -->","                  <div class=\"flex flex-col\">","                      <div class=\"text-gray-700 text-center px-4 py-2 m-2\">","                             <x-button class=\"bg-blue-500 rounded-lg\">更新</x-button>","                      </div>","                   </div>","                <!-- id値を送信 -->","                <input type=\"hidden\" name=\"id\" value=\"{{$post->id}}\">","                <!--/ id値を送信 -->","            </form>","        </div>","        <!--左エリア[END]--> "],"id":41},{"start":{"row":49,"column":12},"end":{"row":50,"column":0},"action":"remove","lines":["",""]},{"start":{"row":49,"column":8},"end":{"row":49,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":8},"action":"remove","lines":["    "],"id":42},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "]},{"start":{"row":48,"column":4},"end":{"row":49,"column":0},"action":"remove","lines":["",""]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"remove","lines":["    "]},{"start":{"row":47,"column":4},"end":{"row":48,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"remove","lines":["    "],"id":43},{"start":{"row":46,"column":14},"end":{"row":47,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":29,"column":61},"end":{"row":29,"column":62},"action":"remove","lines":["e"],"id":44},{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"remove","lines":["u"]},{"start":{"row":29,"column":59},"end":{"row":29,"column":60},"action":"remove","lines":["l"]},{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"remove","lines":["a"]},{"start":{"row":29,"column":57},"end":{"row":29,"column":58},"action":"remove","lines":["v"]}],[{"start":{"row":29,"column":57},"end":{"row":29,"column":58},"action":"insert","lines":["b"],"id":45},{"start":{"row":29,"column":58},"end":{"row":29,"column":59},"action":"insert","lines":["o"]},{"start":{"row":29,"column":59},"end":{"row":29,"column":60},"action":"insert","lines":["d"]},{"start":{"row":29,"column":60},"end":{"row":29,"column":61},"action":"insert","lines":["y"]}],[{"start":{"row":16,"column":55},"end":{"row":17,"column":22},"action":"insert","lines":["","                      "],"id":46}],[{"start":{"row":17,"column":22},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":47},{"start":{"row":18,"column":0},"end":{"row":18,"column":22},"action":"insert","lines":["                      "]}],[{"start":{"row":18,"column":22},"end":{"row":19,"column":55},"action":"insert","lines":["  <!-- hiddenタグでidを送信 -->","  <input type=\"hidden\" name=\"id\" value=\"{{$post->id}}\">"],"id":48}],[{"start":{"row":19,"column":2},"end":{"row":19,"column":3},"action":"insert","lines":["　"],"id":49},{"start":{"row":19,"column":3},"end":{"row":19,"column":4},"action":"insert","lines":["　"]},{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":["　"]},{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"insert","lines":["　"]},{"start":{"row":19,"column":6},"end":{"row":19,"column":7},"action":"insert","lines":["　"]},{"start":{"row":19,"column":7},"end":{"row":19,"column":8},"action":"insert","lines":["　"]},{"start":{"row":19,"column":8},"end":{"row":19,"column":9},"action":"insert","lines":["　"]},{"start":{"row":19,"column":9},"end":{"row":19,"column":10},"action":"insert","lines":["　"]},{"start":{"row":19,"column":10},"end":{"row":19,"column":11},"action":"insert","lines":["　"]},{"start":{"row":19,"column":11},"end":{"row":19,"column":12},"action":"insert","lines":["　"]},{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":["　"]}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["　"],"id":50},{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"insert","lines":["　"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":20},"end":{"row":11,"column":20},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1678155144858,"hash":"1cba739f7d53a84c77b4872d345282299c75b3b8"}