@extends('layouts.main')

@section('title', 'Hally')

<body>
    @section('content')

    <div class="main">

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="img/disco1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="img/disco2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div>

        @foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->description }}</p>
        @endforeach
    </div>

    @endsection
</body>

</html>