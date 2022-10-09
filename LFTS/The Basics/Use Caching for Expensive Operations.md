[< volver](../../README.md)
# Use Caching for Expensive Operations.
1. nos vamos al archivo de rutas.
2. nos dirigimo a la ruta que modificamos en el anterior modulo y agregamos ```$post = cache()->remember("posts.{$slug}",1200,fn() => file_get_contents($path));``` lo que hace es agregar al cache la ruta que usamos a la hora de cambiar de post, agregando un duracion y el contenido que queremos gurdar y con la funcion devolver el contenido.

[< volver](../../README.md)