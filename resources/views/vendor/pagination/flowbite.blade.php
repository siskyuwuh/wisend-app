<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}"
    class="flex flex-col items-start justify-between space-y-3 px-7 py-5 md:flex-row md:items-center md:space-y-0">

    {{-- Showing Of --}}

    <span class="text-sm font-normal text-gray-500">
        Showing
        @if ($paginator->firstItem())
            <span class="font-semibold text-gray-900">{{ $paginator->firstItem() }}-{{ $paginator->lastItem() }}</span>
        @else
            {{ $paginator->count() }}
        @endif
        {!! __('of') !!}
        <span class="font-semibold text-gray-900">{{ $paginator->total() }}</span>

    </span>
    @if ($paginator->hasPages())
        <ul class="inline-flex items-stretch -space-x-px">

            {{-- Previous Page --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span
                        class="ml-0 flex h-10 w-[55] items-center justify-center rounded-l-lg border border-gray-300 bg-gray-100 px-3 py-1.5 text-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                        class="ml-0 flex h-10 w-[55] items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true">
                        <span
                            class="flex h-[40px] w-[40px] items-center justify-center border border-gray-300 bg-white text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $element }}</span>
                    </li>
                    {{-- <li>
                <a href="#"
                    class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{{ $element }}</a>
            </li> --}}
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- <span aria-current="page">
                        <span
                            class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">{{ $page }}</span>
                    </span> --}}
                            <li>
                                <a href="{{ $url }}" aria-current="page"
                                    class="z-10 flex h-[40px] w-[40px] items-center justify-center border border-red-300 bg-red-50 text-sm leading-tight text-red-600 hover:bg-red-100 hover:text-red-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</a>
                            </li>
                        @else
                            {{-- <a href="{{ $url }}"
                        class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                        {{ $page }}
                    </a> --}}
                            <li>
                                <a href="{{ $url }}"
                                    class="flex h-[40px] w-[40px] items-center justify-center border border-gray-300 bg-white text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page --}}
            <li>
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}"
                        class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @else
                    <span
                        class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-gray-100 px-3 py-1.5 leading-tight text-gray-500">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                @endif
            </li>
        </ul>
    @endif
</nav>
