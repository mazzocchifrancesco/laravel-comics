<footer>
    <div id="bluebar">
        <div class="container d-flex justify-content-between">
            @foreach ($bluebarLinks as $item)
            <div class="d-flex align-items-center linkCard">
                <img class="blueIcon" src='/Assets/images/{{$item['img']}}' alt="">
                <a href=" #" class="text-white fw-semibold text-uppercase ms-3 text-decoration-none">{{ $item['title'] }}</a>
            </div>
            @endforeach
        </div>
    </div>


</footer>