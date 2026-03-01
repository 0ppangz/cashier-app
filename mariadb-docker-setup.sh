#/usr/bin/env bash

sudo docker pull mariadb:11

sudo docker run --detach --name cashier-db \
  -p 3306:3306 \
  --env MARIADB_ALLOW_EMPTY_ROOT_PASSWORD=1 \
  mariadb:11

echo -ne "\nWaiting for mariadb container."
until sudo docker exec cashier-db mariadb-admin ping -h localhost --silent; do
  echo -n "."
  sleep 1
done

sudo docker exec -i cashier-db mariadb -u root -e \
  "CREATE DATABASE IF NOT EXISTS cashApp"

sudo docker exec -i cashier-db mariadb -u root cashApp <./cashApp.sql
