FROM mysql:latest
ADD ./scripts/start_script.sql /docker-entrypoint-initdb.d/