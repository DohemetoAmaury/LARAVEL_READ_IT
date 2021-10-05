<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
    {{-- Les categories du post --}}
    @include('categories._index', [
      'categories' => \App\Models\Categorie::orderBy('name', 'ASC')->get()
    ])

    @include('posts._recents', [
    'posts' => \App\Models\Post::orderBy('created_at', 'DESC')
                                 -> take(3)
                                 ->get()
    ])

    @include('tags._cloud', [
    'tags' => \App\Models\Tag::orderBy('name', 'asc')
                               ->get()
    ])
  </div>
</div>
