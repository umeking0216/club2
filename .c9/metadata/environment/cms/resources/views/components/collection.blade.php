{"filter":false,"title":"collection.blade.php","tooltip":"/cms/resources/views/components/collection.blade.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":3,"column":6},"action":"insert","lines":["<div class=\"flex justify-between p-4 items-center bg-blue-500 text-white rounded-lg border-2 border-white\">","  <div>{{ $slot }}</div>","  <button>×</button>","</div>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":3,"column":6},"action":"remove","lines":["<div class=\"flex justify-between p-4 items-center bg-blue-500 text-white rounded-lg border-2 border-white\">","  <div>{{ $slot }}</div>","  <button>×</button>","</div>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":27,"column":6},"action":"insert","lines":["<!-- 本: 削除ボタン -->","<div class=\"flex justify-between p-4 items-center bg-blue-500 text-white rounded-lg border-2 border-white\">","  <div>{{ $slot }}</div>","  ","    <div>","    <form action=\"{{ url('booksedit/'.$id) }}\" method=\"POST\">","         @csrf","         ","        <button type=\"submit\"  class=\"btn bg-blue-500 rounded-lg\">","            更新","        </button>","        ","     </form>","  </div>","  ","  <div>","    <form action=\"{{ url('book/'.$id) }}\" method=\"POST\">","         @csrf","         @method('DELETE')","        ","        <button type=\"submit\"  class=\"btn bg-blue-500 rounded-lg\">","            削除","        </button>","        ","     </form>","  </div>","","</div>"]}],[{"start":{"row":5,"column":29},"end":{"row":5,"column":30},"action":"remove","lines":["k"],"id":3},{"start":{"row":5,"column":28},"end":{"row":5,"column":29},"action":"remove","lines":["o"]},{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"remove","lines":["o"]},{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"remove","lines":["b"]}],[{"start":{"row":5,"column":26},"end":{"row":5,"column":27},"action":"insert","lines":["p"],"id":4},{"start":{"row":5,"column":27},"end":{"row":5,"column":28},"action":"insert","lines":["o"]},{"start":{"row":5,"column":28},"end":{"row":5,"column":29},"action":"insert","lines":["s"]},{"start":{"row":5,"column":29},"end":{"row":5,"column":30},"action":"insert","lines":["t"]}],[{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"remove","lines":["k"],"id":5},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"remove","lines":["o"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"remove","lines":["o"]},{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"remove","lines":["b"]}],[{"start":{"row":16,"column":26},"end":{"row":16,"column":27},"action":"insert","lines":["p"],"id":6},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["o"]},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["s"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":8},"end":{"row":25,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1677819770537,"hash":"33a120b7ffaac74785298c2768c99594fb7f49e0"}