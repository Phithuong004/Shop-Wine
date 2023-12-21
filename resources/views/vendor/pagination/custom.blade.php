@if ($paginator->hasPages())
    <ul class="flex items-center justify-center space-x-4">
        @if ($paginator->onFirstPage())
            <li class="text-gray-500"><span>Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" class="text-blue-500 hover:text-blue-700">Previous</a></li>
        @endif

        @foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="bg-blue-500 text-white px-3 py-1 rounded-full"><span>{{ $page }}</span></li>
            @else
                <li><a href="{{ $url }}" class="text-blue-500 hover:text-blue-700">{{ $page }}</a></li>
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" class="text-blue-500 hover:text-blue-700">Next</a></li>
        @else
            <li class="text-gray-500"><span>Next</span></li>
        @endif
    </ul>
@endif
