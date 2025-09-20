@extends("ShrineComics.layout")

    @section("content")

        <div class="title-area">
            <div class="title-box">
                <h1> Tambah Komik Baru </h1>
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

        <div class="create-new-comic-area">
            <div class="create-new-comic-form">
                <form method="post" action="{{ route('ShrineComics.store') }}" id="create-new-comic">
                    @csrf
                    <div class="form-input-area">
                        <p> Title </p>
                        <input type="text" name="comic_title" id="input-field" placeholder="Comic Title">
                    </div>
                    <div class="form-input-area">
                        <p> Page </p>
                        <input type="number" name="comic_page" id="input-field" placeholder="Comic page">
                    </div>
                    <div class="form-input-area">
                        <p> Price </p>
                        <input type="number" name="comic_price" id="input-field" placeholder="Comic Price">
                    </div>
                    <div class="form-input-area">
                        <p> Writer </p>
                        <input type="text" name="comic_writer" id="input-field" placeholder="Comic Writer">
                    </div>
                    <div class="form-input-area">
                        <p> Genre </p>
                        <select name="genre" id="input-field">
                            <option value="Romance">Romance</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Comendy">Comedy</option>
                            <option value="History">History</option>
                        </select>
                    </div>
                     <div class="form-input-area">
                        <p> Release Date </p>
                        <input type="date" name="comic_release_date" id="input-field">
                    </div>
                     <div class="form-input-area">
                        <p> Comment </p>
                        <textarea name="comic_comment" id="input-field" placeholder="Comic Comment">
                        </textarea>
                    </div>
                     <div class="form-submit-area">
                        <button type="submit" name="submit" id="submit">Tambahkan</button>
                    </div>
                </form>
                <a href="{{ route('ShrineComics.index') }}"><button id="discard-button">Discard</button></a>
            </div>
        </div>

    @endsection
