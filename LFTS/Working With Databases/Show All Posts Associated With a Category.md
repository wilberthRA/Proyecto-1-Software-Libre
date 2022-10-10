[< volver](../../README.md)
# Show All Posts Associated With a Category.
1. comezamos en el modelo de categorias en donde asignamos la relacion con los posts de la sigueinte manera **return $this->hasMany(Post::class);**
2. despues de eso vamos a las rutas donde deberemos de crear un nueva ruta en donde se manejaran las cotegorias.
    
    ````Route::get('categories/{category:slug}', function(Category $category){
        return view('posts' , [
            'posts' => $category->posts
        ]);
    });
3. agregamos a los archivos de **post y posts** el siguiente codigo:
         
            <p>
            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>

[< volver](../../README.md)
