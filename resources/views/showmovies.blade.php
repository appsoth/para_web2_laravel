@extends('layouts.master')


@section('content')


<!-- Show Movies -->
<!-- Loop -->
<div class="movie-contents">
    <h1>List of the Movies</h1>
<div style="clear: both"></div>
    <div class="row-movie"> <!-- ROW -->

@foreach ($v_movies as $movie)

 <!-- COl -->
 <div class="col">
    <div class="movie-item">
        <div class="thumbnail">
            <img src="{{ asset('/assests/')}}/{{ $movie->m_image_path }}" alt="Jailangkun" />

        </div>
        <div class="thumb-info">
            <article>
                <h6>{{$movie->m_title}}</h6>
                <p>
                    <span class="iconify" data-icon="ic:round-date-range"></span>
                    {{$movie->m_date}}
                </p>
                <p>
                    <span class="iconify" data-icon="bxs:time-five"></span>
                    {{$movie->m_time}}
                </p>
                <p>
                    <span class="iconify" data-icon="ci:tag"></span>
                    {{$movie->m_cate_id}}
                </p>
            </article>
            <article>
                <p>
                    <a href="./pages/movie_info.php?movie_id={{$movie->m_id}}" class="booking-btn">
                        More Info
                    </a>
                </p>
                <p>
                    <a href="./pages/movie_info.php?btn=buy&movie_id={{$movie->m_id}}" class="booking-btn">
                        Buy Ticket(s)
                    </a>
                </p>
            </article>
        </div>
    </div>

</div>
<!-- /COl -->

@endforeach

<!-- /Loop -->

</div><!-- /ROW -->
</div>
@stop
