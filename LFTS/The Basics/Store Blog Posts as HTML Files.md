[< volver](../../README.md)
# Store Blog Posts as HTML Files
1. primero se cambia el contenido de article por ``<?= $post; ?>`` para despues ir a las rutas y poner ``return view('post',[
        'post' => '<h1>hello World</h1>'
    ]);``.
2. en resources se crea la carpeta posts donde se crean tres archivos que van a contener un post.
3. vamos a las rutas y ponemos ``return view('post',[
        'post' => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
    ]);``
4. al final se le coloca una manera de acceder a los diferentes archivos de la carpeta posts, ademas de una validacion para saber si existe.

[< volver](../../README.md)