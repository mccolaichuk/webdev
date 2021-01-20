###Composer
docker run -u 1000:1000 --rm --interactive --tty --volume ${PWD}:/app composer install --ignore-platform-reqs --no-scripts

###Run locally
DOCKER_USER=$(id -u):$(id -g) docker-compose -f "./docker/docker-compose.yml" up -d --build
DOCKER_USER=$(id -u):$(id -g) docker-compose -f "./docker/docker-compose.yml" down