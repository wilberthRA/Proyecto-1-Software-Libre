[< volver](../../README.md)
# View All Posts By An Author.
1. vamos a la ruta de "home" y agregamos:

    ```
    'posts' => Post::lastest()->with('category')->get()

2. vamos a **post.blade.php** y **posts.blade.php** y colocamos:

    ````
    <p>
          By <a href="#">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

4. depues vamos a la ruta de "home" y colocamos lo siguente para asi bajar la cantidad de consutas que se hacen:

    ````
    'posts' => Post::latest()->with('category','author')->get()

5. vamos a las rutas y creamos lo siguente: 

    ````
    Route::get('authors/{author}', function(User $author){
    return view('posts' , [
        'posts' => $author->posts
    ]);
});

6. ahora vamos a la migracion de **Users** donde se agregará una nueva columan  con el nombre de **username**.
7. creamos lo mismo en el factory.
8. colocamos el siguente codigo en las view :

    ````
    <p>
          By <a href="/authors/{{ $post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

9. para finalizar se coloca **authors/{author:username}** en la nueva ruta.

[< volver](../../README.md)