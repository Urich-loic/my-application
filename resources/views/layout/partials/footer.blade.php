 <footer class="text-gray-400">&copy; Copyright {{date('Y')}}  &middot;
        @if(!Route::is('about'))
        <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About</a>
        @endif
        @if(!Route::is('help'))
        <a href="{{route('help')}}" class="text-indigo-500 hover:text-indigo-600 underline">Help</a>
        @endif
    </footer>
