@if ($posts != null)

    @forelse ($posts as $post)
        <li>
            {{ $post->title }} <br>
            {{ $post->body }}
        </li>
    @empty
        <p>No post yet. Check out latter</p>
    @endforelse

@else
    <p>No post yet. Check out latter</p>
@endif



