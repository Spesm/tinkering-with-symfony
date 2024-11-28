# Tinkering with Symfony

I have started this Symfony 7.1 project for two reasons: On the one hand I want to learn what's new in Symfony, discover the possibilities and experiment with PHP code in a project that I control myself, so that I can't break anything that someone else is overly attached to. On the other hand I'm hoping it will be useful to showcase some skills and have meaningful discussions about technologies, design patterns and best practices with other developers and coding enthusiasts.

I set up this project with the Symfony Docker environment found here: https://github.com/dunglas/symfony-docker. This is a [Docker](https://www.docker.com/)-based installer and runtime for the [Symfony](https://symfony.com) web framework, with [FrankenPHP](https://frankenphp.dev) and [Caddy](https://caddyserver.com/) inside.

The required files are all included in this project, so you can clone the project to your own machine, make sure Docker is installed and run as follows:

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --no-cache` to build fresh images
3. Run `docker compose up --pull always -d --wait` to set up and start a fresh Symfony project
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.
