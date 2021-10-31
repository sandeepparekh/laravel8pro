<div>
    <h1>This is Header Componnet</h1>
    <h3>USer name : {{$name}}</h3>
    <h3>
        Fruits are
    </h3>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</div>