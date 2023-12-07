
<article>

    <h2> {{$post->title}}</h2>

    <p style="color:grey ">{{$post->created_at->diffForHumans()}} <a href="#">{{$post->author->name}} </a> </p>

    <p style="color:grey "> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}} </a></p>

   <!-- <p> <a href="/"></a> Spať na hlavnú stránku</p> -->

    <p><strong>
            {{$post->excerpt}}
        </strong></p>

    <hr>

    <p>
        {{$post->body}}
    </p>

    <section class="col-md-8 offset-md-2 mt-4 mb-4">
        <form method="POST" action="/posts/{{ $post->slug}}/comments" class="bg-light border rounded p-4">


        <!--<form method="POST" action="#" > -->
            <header class="d-flex align-items-center">
                @guest
                    <img  src="https://i.pravatar.cc/60" alt="" width="40" height="40" class="rounded-circle mr-2">
                @else
                    <img src="https://i.pravatar.cc/60?u={{ auth()->user()->id }}" alt="" width="40" height="40" class="rounded-circle mr-2">
                @endguest
                <h2 class="ml-2">Chceš zanechať komentár?</h2>
            </header>

            <div class="mt-3">
                <textarea name="body" class="form-control" placeholder="Napíš nám svoj názor"></textarea>
            </div>

            <div class="justify-end mt-3 border-t ">
                @csrf
                <button type="submit" class="btn btn-primary">ZDIEĽAJ</button>
            </div>
        </form>

        @foreach ($post->comments as $comment)
            <div class="card mt-3">
                <div class="card-body">
                    <x-post-comment :comment="$comment"/>
                </div>
            </div>
        @endforeach
    </section>


</article>


