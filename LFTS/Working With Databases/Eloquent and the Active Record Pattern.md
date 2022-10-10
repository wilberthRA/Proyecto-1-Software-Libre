[< volver](../../README.md)
# Eloquent and the Active Record Pattern.
1. vamos a nustra maquina vitual y ejecutamos el comando: ```php artisan tinker``` 
    * $user = new App\Models\User;
    * $user = new User;
    * $user->(columna) = dato;
    * $user->save(); para guardar en la base de datos.
    * User::all().
    * $user->pluck('columna') para mostrar algo en especifico.
    * $users->map(function($user){return $user->name};);
    * $users->first();

[< volver](../../README.md)