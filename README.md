# Laravel with Devcontainer

This is how I setup a Laravel project with Visual Studio Code

## VSCode Setup

See: .devcontainer.json

```json
{
    // .vscode/launch.json
    // Use IntelliSense to learn about possible attributes.
    // Hover to view descriptions of existing attributes.
    // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "hostname": "localhost",
            "pathMappings": {
                "/var/www/html/": "${workspaceFolder}"
            },
        },
}
```

## Docker Setup

See: .docker/web/Dockerfile

See: docker-compose.yml
