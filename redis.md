# Notes sur l'utilisation de Redis

```php
/**
 * you may call any of Redis' commands on the Redis facade
 * Laravel uses magic methods to pass the commands to the Redis server
 * If a Redis command expects arguments, you should pass those to the facade's corresponding method:
 * 
*/

use Illuminate\Support\Facades\Redis;
 
Redis::set('name', 'Taylor');
 
$values = Redis::lrange('names', 5, 10);
/** Alternatively, you may pass commands to the server using the Redis facade's command method, 
 * which accepts the name of the command as its first argument and an array of values 
 * as its second argument:
 * 
*/

$values = Redis::command('lrange', ['name', 5, 10]);
```

##NOTE - [Multiple connexion](https://laravel.com/docs/10.x/redis#using-multiple-redis-connections)


## Transactions
```php
/** 
 * The Redis facade's transaction method provides a convenient wrapper around Redis' native MULTI and EXEC commands. The transaction method accepts a closure as its only argument. This closure will receive a Redis connection instance and may issue any commands it would like to this instance. All of the Redis commands issued within the closure will be executed in a single, atomic transaction:
 * 
*/

use Redis;
use Illuminate\Support\Facades;
 
Facades\Redis::transaction(function (Redis $redis) {
    $redis->incr('user_visits', 1);
    $redis->incr('total_visits', 1);
});

// STUB - ATTENTION
/** 
 * When defining a Redis transaction, you may not retrieve any values from the Redis connection. Remember, your transaction is executed as a single, atomic operation and that operation is not executed until your entire closure has finished executing its commands.
*/

//NOTE - Pipeline commands
/** 
 * Sometimes you may need to execute dozens of Redis commands. Instead of making a network trip to your Redis server for each command, you may use the pipeline method. The pipeline method accepts one argument: a closure that receives a Redis instance. You may issue all of your commands to this Redis instance and they will all be sent to the Redis server at the same time to reduce network trips to the server. The commands will still be executed in the order they were issued:
*/

use Redis;
use Illuminate\Support\Facades;
 
Facades\Redis::pipeline(function (Redis $pipe) {
    for ($i = 0; $i < 1000; $i++) {
        $pipe->set("key:$i", $i);
    }
});



// Inscription à tous les message

Redis::psubscribe(['*'], function (string $message, string $channel) {
    echo $message;
});
 
Redis::psubscribe(['users.*'], function (string $message, string $channel) {
    echo $message;
});
```