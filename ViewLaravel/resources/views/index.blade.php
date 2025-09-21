@extends('layouts.master')

@section('content')
    @include('partials.slider')
    @include('partials.bestdishes')
    @include('partials.bookonline')
    @include('partials.map')
    @include('partials.contact')
@endsection

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    @if(isset($scrollTo) && $scrollTo)
        let id = "{{ strtolower($scrollTo) }}";
        let el = document.getElementById(id);
        if(el){
            el.scrollIntoView({ behavior: "smooth" });
            history.replaceState(null, null, "/KOP/{{ $scrollTo }}");
        }
    @endif
});
</script>
@endsection
