# Mise en ligne

## Préparation dossier build

## Le fichier 'storage' n'existera pas en login

- Initialiser le lien symbolique pour ce dossier avec SSH ou SHELL

### SI pas accès à un SHELL dans le serveur

- Faire une route link storage et l'appeler dans l'url

```php
Route::get('linkstorage', function () {
    Artisan::call('storage:link');
})
```

