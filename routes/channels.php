<?php

use App\Models\Recette;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

/**!SECTION
 * Vérifier si la recette a bel et bien été créée par cette utilisateur
 */
Broadcast::channel('recettes.{recetteId}', function (User $user, int $recetteId) {
    // return (int) $user->id === Recette::findOrNew($recetteId)->user_id;
    return true;
});
