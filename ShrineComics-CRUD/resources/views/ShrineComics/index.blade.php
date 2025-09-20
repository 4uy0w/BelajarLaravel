@extends("ShrineComics.layout")

    @section("content")

        <div class="title-area">
            <div class="title-box">
                <h1> ShrineComics Page </h1>
            </div>
        </div>

        <div class="add-button-box">
                <a href="{{ route('ShrineComics.create') }}"><button id="add-comic-btn"><b id="plus-icon">+</b> Tambah Komik</button></a>
        </div>

        <div class="notification-area">
            @if($message = Session::get("success"))
                <div class="alert-success">
                    <script> window.alert("{{ $message }}"); </script>
                </div>
            @endif
            @if($message = Session::get("error"))
                <div class="alert-error">
                    <p> {{ $message }} </p>
                </div>
            @endif
        </div>

        <div class="comic-list">
            <div class="comic-list-box">
                @foreach($comic as $Comic)
                    <div class="comic-row-box">
                        <div class="image-dec"></div>
                        <h3 id="comic-title"> {{ $Comic->comic_title }} </h3>
                        <p id="comic-comment"> {{ $Comic->comic_comment }} </p>

                        <a href="{{ route('ShrineComics.show',['ShrineComic' => $Comic]) }}"><button id="show-comic-detail">Detail</button></a>
                    </div>
                @endforeach
            </div>
        </div>

    @endsection
