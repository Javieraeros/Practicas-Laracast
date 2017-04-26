@foreach($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </h2>
        <p class="blog-post-meta">{{$post->created_at->toDateTimeString()}} by
            <a href="https://www.linkedin.com/in/francisco-javier-ruiz-rodr%C3%ADguez-3965a513a/">Javi</a>
        </p>
        <p>{{$post->body}}</p>
    </div>
@endforeach