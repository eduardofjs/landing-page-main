#!/bin/sh
docker-compose down -v --remove-orphans
if [ -d "wp" ]; then
  sudo rm -rf wp-dev
fi
