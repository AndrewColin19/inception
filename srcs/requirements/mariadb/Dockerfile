FROM	alpine:3.14

RUN	apk update
RUN	apk upgrade

#mariadb
RUN	apk add mariadb
RUN	apk add mariadb-common
RUN	apk add mariadb-client
RUN	apk add mariadb-server-utils

#openrc
RUN	apk add openrc

#reset conf
RUN	rm -rf /etc/mysql/my.cnf /etc/my.cnf ~/my.cnf
COPY	conf/default.conf /etc/mysql/my.cnf
COPY	conf/default.conf /etc/my.cnf
COPY	conf/default.conf ~/my.cnf

RUN	mkdir -p /run/mysqld
RUN	mkdir -p /var/lib/mysql
RUN	chown -R mysql /var/lib/mysql
RUN	chmod 777 /var/lib/mysql

#init db
COPY	conf/script.sh script.sh
RUN	chmod +x script.sh
ENTRYPOINT ["./script.sh"]

EXPOSE	3306
