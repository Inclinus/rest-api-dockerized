FROM mariadb

ENV MYSQL_ROOT_PASSWORD=password
ENV MYSQL_DATABASE=database
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=password

COPY script.sql /docker-entrypoint-initdb.d/script.sql

EXPOSE 3306