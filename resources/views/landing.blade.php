@extends('layouts.app')

@section('content')
    {{-- bagian judul --}}
    <div>
        <h1 class="dark:text-white font-bold text-2xl">Selamat Datang di Website Berita</h1>
        <h2 class="dark:text-white text-lg">Artikel Terbaru:</h2>
    </div>
    {{-- slider --}}

    {{-- endslider --}}
    {{-- hero section --}}
    <div class="container ml-8 mr-10">
        <div class="hero bg-blue-400">
            <div class="hero-content flex-col justify-items-center">
                <img src="https://source.unsplash.com/random/800x600/?2" class="max-w-sm rounded-lg shadow-2xl" />
                <div class="align-baseline">
                    @foreach ($articles->take(1) as $article)
                        <h1 class="text-2xl font-bold hover:text-red-500 justify-items-center"><a
                                href="{{ route('articles.show', $article) }}">{{ $article->judulArtikel }}</a></h1>
                        <p class="py-2">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- end hero section --}}
    <div class="flex">
        {{-- isi dari berita utama --}}
        <div class="flex flex-wrap gap-1 bg-green-400 ml-9 my-4 mr-2 w-2/3 items-center justify-center">
            {{-- kolom berita --}}
            @foreach ($articles->take(10) as $article)
                <div class="p-2 my-1  ">
                    <div class="card bg-gray-500 dark:bg-white shadow-xl w-48 items-center">
                        <figure class="">
                            <img src="https://source.unsplash.com/random/800x600/?1" alt="Gambar Berita" class="lazyload" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title dark:text-black text-white hover:text-red-500 text-sm">
                                <a href="{{ route('articles.show', $article) }}">{{ $article->judulArtikel }}</a>
                            </h2>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            @endforeach
        </div>

        {{-- isi dari bagian pengumuman --}}
        <div class="bg-red-500 flex-1 w-1/3 mr-12 my-4 ml-1 p-5 md:w-">
            @foreach ($pengumuman as $pengumumanItem)
                <div>
                    @if ($pengumumanItem->image)
                        <img src="{{ asset('images/' . $pengumumanItem->image) }}" alt="Pengumuman Image"
                            class="w-auto h-96 scale-95">
                    @endif
                    <h2>ini bagian pengumuman</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
