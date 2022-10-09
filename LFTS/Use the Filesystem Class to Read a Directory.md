[volver](../README.md)
# Use the Filesystem Class to Read a Directory.
1. lo primero que hacemos es borrar la referencia en nuestros posts.
2. despues de eso vamos a las rutas y comentamos todo y se le colocan estos cambios ```$post = Post::find($slug);
    
    return view('post', [
        'post' => $post
    ]);```
3. Despues de eso se crea la clase **Post.php** en la carpeta **App>Models**.
4. se crea la funcion **Find** en donde pegamos lo que comentamos en la ruta.
5. vamos a pa vista de Posts donde borramos y solo dejamos un article.
6. lo colocamos dentro de un foreach.
7. vamos a nuestras rutas y a la de "home" le colocamos ```return view('posts' , [
        'posts' => Post::all()
    ]);```.
8. hasta este punto nos daria un error ya que tenemos que ir a el modelo de Post y crear la funcion **all()**.
9. en la funcion **all()** agregamos ```$files = File::files(resource_path("posts/"));
        return array_map(fn ($files) => $files->getContents(), $files);```
10. se agrega otro post para comprobar que funciona.
11. al final se agrega ````---
title: My Fourth Post
excerpt: Lorem ipsum dolor sit amet consectetur, adipisicing elit.
date: 2021-05-21
---```` al comienso del codigo(aun sin mucha explicacion).
