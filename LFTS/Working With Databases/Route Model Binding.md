[< volver](../../README.md)
# Route Model Binding.
1. colocamos eso en la parte de las rutas.
    ```
    Route::get('posts/{post}', function (Post $post){
        return view('post', [
            'post' => $post
        ]);
    
2. agregamos la columna "slug" en la migracion de los post.

[< volver](../../README.md)