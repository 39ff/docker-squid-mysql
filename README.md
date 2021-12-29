# docker-squid-mysql example
```
docker-compose build
docker-compose up -d

docker exec -i mydb_1 mysql -u root -psquid < init.sql
docker run --rm -it -v "$(pwd):/app/" squidphp:latest php /app/user_create.php

curl https://httpbin.org/ip --proxy http://127.0.0.1:13128

Test from other Linux networks
curl https://httpbin.org/ip --proxy http://USERNAME:PASS@YOUR_PUBLIC_IP:13128


docker container exec -it mysquid_1 sh
/usr/lib/squid/basic_db_auth --dsn "DBI:mysql:host=172.17.0.1;port=13306;database=squid" --user squid --password squid --plaintext --persist
--> Enter Credentials
USERNAME PASS
--> If successful, OK will be returned.
```
