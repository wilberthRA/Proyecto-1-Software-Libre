[< volver](../../README.md)
# Eager Load Relationships on an Existing Model.
1. lo primero que hacemos es agregar esto a la ruta de categorias y authores, para que no haga tantas consultas:
    ````
    ->load(['category','author'])

2. vamos al modelo de post y agregamos lo siguente para no tener que agregar lo anterior en las rutas:

    ````
    protected $with = ['category','author'];

[< volver](../../README.md)