#!/bin/bash
docker run --rm -it -v "$(pwd):$(pwd)" -w "$(pwd)" -u "$(id -u)" --network="container:php" "darsyn/php:3.3.15" $@
