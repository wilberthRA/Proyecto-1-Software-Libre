[< volver](../../README.md)
# 3 Ways to Mitigate Mass Assignment Vulnerabilities.
1. se agrega un nuevo post.
2. se agrega un cuarto post de una manera mas abreviada **Post::create(['title' => 'My Fourth Post', 'excerp' => 'excerpt of post', 'body' => 'lorem'])**.
3. vamos al modelo de post y agregamos ``` protected $fillable = ['title','excerpt','body'];``` y ejecutamos el comando de nuevo
4. ```protected $guarded = ['id'];``` es agregado y para lo que funciona seria lo contrario a "fillable", este lo que hace es impedir 0 ignorar los cambios en esas "columnas"
5. la ultima de las formas en usando ```$post->update(['excerpt' => 'Changed']);```

[< volver](../../README.md)