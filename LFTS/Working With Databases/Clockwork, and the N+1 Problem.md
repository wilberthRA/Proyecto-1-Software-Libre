[< volver](../../README.md)
# Clockwork, and the N+1 Problem.
1. buscamos y instalamos Clockwork:

````composer require itsgoingd/clockwork````

2. colocamos esto en la ruta de home:

````'posts' => Post::with('category')->get()````

[< volver](../../README.md)