{"filter":false,"title":"register.blade.php","tooltip":"/cms/resources/views/auth/register.blade.php","ace":{"folds":[],"scrolltop":619.4000000000001,"scrollleft":0,"selection":{"start":{"row":49,"column":14},"end":{"row":49,"column":14},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"daa75159f680894d39e568bb0b730370a432bfc2","mime":"application/octet-stream","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":53,"column":0},"end":{"row":54,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":53,"column":0},"end":{"row":65,"column":6},"action":"insert","lines":["@if (Route::has('login'))","    <div class=\"hidden fixed top-0 right-0 px-6 py-4 sm:block\">","        @auth","            <a href=\"{{ url('/dashboard') }}\" class=\"text-sm text-gray-700 dark:text-gray-500 underline\">Dashboard</a>","        @else","            <a href=\"{{ route('login') }}\" class=\"text-sm text-gray-700 dark:text-gray-500 underline\">Log in</a>","","            @if (Route::has('register'))","                <a href=\"{{ route('register') }}\" class=\"ml-4 text-sm text-gray-700 dark:text-gray-500 underline\">Register</a>","            @endif","        @endauth","    </div>","@endif"],"id":3}]]},"timestamp":1677818232897}