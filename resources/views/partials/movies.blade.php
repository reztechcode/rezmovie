@forelse ($movies as $item)
<div class="bg-white shadow-lg rounded-2xl overflow-hidden movie-item">
    <a data-lightbox="post-content" href="{{ asset('storage/' . $item->poster) }}">
        <img src="{{ asset('storage/' . $item->poster) }}" alt="{{ $item->title }}"
            class="w-80 object-cover transition duration-500 ease-in-out hover:scale-90 hover:rounded-lg">
    </a>
    <div class="p-4">
        <a href="{{ url('/detail/'.$item->id) }}" class="block">
            <h2 class="lg:text-xl text-lg font-semibold text-gray-900 hover:text-blue-600 transition duration-200 ease-in-out min-h-14 mb-2">
                {{ $item->title }}
            </h2>
            <p class="text-sm text-gray-500 mt-2">{{ $item->created_at }}</p>
            <div class="flex items-center mt-2 mb-2">
                <span class="text-yellow-400">🗓️</span>
                <span class="ml-1">{{ $item->year }}</span>
            </div>
            <a href="{{ url('/detail/'.$item->id) }}" class="btn btn-primary ml-auto rounded-full btn-sm md:text-md text-xs">Lihat Selengkapnya</a>
        </a>
    </div>
</div>
@empty
    <h3>Maaf Data Tidak Ditemukan</h3>
@endforelse
