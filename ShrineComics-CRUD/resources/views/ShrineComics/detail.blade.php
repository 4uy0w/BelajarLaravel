@extends("ShrineComics.layout")

    @section("content")

        <div class="title-area">
            <div class="title-box">
                <h1> Detail Komik </h1>
            </div>
        </div>

        <div class="detail-comic-area">
            <div class="detail-comic-card">
                <h4> Nama: {{ $ShrineComic->comic_title }} </h4>
                <h4> Halaman: {{ $ShrineComic->comic_page }} </h4>
                <h4> Harga: {{ $ShrineComic->comic_price }} </h4>
                <h4> Nomor Penulis: {{ $ShrineComic->comic_writer }} </h4>
                <h4> Genre: {{ $ShrineComic->genre }} </h4>
                <h4> Tanggal Rilis: {{ $ShrineComic->comic_release_date }} </h4>
                <h4> Komentar Penulis:</h4>
                <div class="comment-area">
                    <p id="comment-text"> {{ $ShrineComic->comic_comment }} </p>
                </div>
            </div>

            <div class="action-area">
                <a href="{{ route('ShrineComics.edit',['ShrineComic' => $ShrineComic]) }}"><button id="edit-comic"><b>Edit Komik</b></button></a>
                <form method="POST" action="{{ route('ShrineComics.destroy',['ShrineComic' => $ShrineComic]) }}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" id="delete-comic"><b>Hapus Komik</b></button>
                </form>
                <a href="{{ route('ShrineComics.index') }}"><button id="back-btn"><b>Kembali</b></button></a>
            </div>
        </div>

    @endsection

