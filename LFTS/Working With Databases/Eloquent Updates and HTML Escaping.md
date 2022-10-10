[< volver](../../README.md)
# Eloquent Updates and HTML Escaping.
1. vamos a tinker y buscamos los posts que creamos para colocar el texto plano que le agregamos para ponerlo en un "p" de la siguente manera **$post->body = '<p>'. $post->body .'</p>';**
2. se queria poner una parte del titulo en negrita ```$post->title = 'My <strong>First</strong> Post';``` hay que ir a el archivo de post y cambias las "{{}}" por "{!! !!}" para que funcione.

[< volver](../../README.md)