
# Turbo Boost With Factories.
1. creamos un factory para category y post de la siguente manera:

    ```
    php artisan make:factory (nombre)

2. colocamos el siguente codigo el cual es da las ordenes de como llegarlo: 

    ```
    'name' => $this->faker->work,
            'slug' => $this->facker->slug

3. despues iria mos al seeder de las bases de datos y colocariamos:

    ```
    $user = User::factory()->create([
            'name' => 'Jhon Doe'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);