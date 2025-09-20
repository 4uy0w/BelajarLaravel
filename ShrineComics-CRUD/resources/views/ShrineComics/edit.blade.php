@extends("ShrineComics.layout")

    @section("content")

        <div class="title-area">
            <div class="title-box">
                <h1> Edit Komik </h1>
            </div>
        </div>

        <div class="error-area">
            <div class="error-content">
                @if($errors->all())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <div class="edit-comic-area">
            <div class="edit-comic-form">
                <form method="post" action="{{ route('ShrineComics.update',['ShrineComic' => $ShrineComic]) }}">
                    @csrf
                    @method("PUT")
                    <div class="form-input-area">
                        <p> Title </p>
                        <input type="text" name="comic_title" id="input-field" placeholder="Comic Title" value="{{ $ShrineComic->comic_title }}">
                    </div>
                    <div class="form-input-area">
                        <p> Page </p>
                        <input type="number" name="comic_page" id="input-field" placeholder="Comic page"  value="{{ $ShrineComic->comic_page }}">
                    </div>
                    <div class="form-input-area">
                        <p> Price </p>
                        <input type="number" name="comic_price" id="input-field" placeholder="Comic Price"  value="{{ $ShrineComic->comic_price }}">
                    </div>
                    <div class="form-input-area">
                        <p> Writer </p>
                        <input type="text" name="comic_writer" id="input-field" placeholder="Comic Writer" value="{{ $ShrineComic->comic_writer }}">
                    </div>
                    <div class="form-input-area">
                        <p> Genre </p>
                        <select name="genre" id="input-field" value="{{ $ShrineComic->genre }}">
                            <option value="Romance">Romance</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Comendy">Comedy</option>
                            <option value="History">History</option>
                        </select>
                    </div>
                     <div class="form-input-area">
                        <p> Release Date </p>
                        <input type="date" name="comic_release_date" id="input-field" value="{{ $ShrineComic->comic_release_date }}">
                    </div>
                     <div class="form-input-area">
                        <p> Comment </p>
                        <textarea name="comic_comment" id="input-field" placeholder="Comic Comment">
                            {{ $ShrineComic->comic_comment }}
                        </textarea>
                    </div>
                     <div class="form-submit-area">
                        <button type="submit" name="submit" id="submit">Edit</button>
                    </div>
                </form>
                <a href="{{ route('ShrineComics.index') }}"><button id="discard-button">Discard</button></a>
            </div>
        </div>

    @endsection
