FROM	alpine:3.14

RUN		apk update
RUN		apk upgrade
RUN		apk add nginx
RUN		mkdir -p /var/www/html/

COPY	conf/default.conf /etc/nginx/http.d/default.conf

RUN		apk add openssl
RUN		mkdir -p /etc/nginx/ssl
RUN		openssl req -x509 -nodes -days 365\
		-newkey rsa:4096 -keyout /etc/nginx/ssl/self.key \ 
		-out /etc/nginx/ssl/self.crt \
		-subj "/C=FR/ST=PACA/L=Nice/O=42/OU=acolin/CN=localhost"
RUN		apk add openrc
RUN		rc-update add nginx default

EXPOSE	443
CMD		["nginx", "-g", "daemon off;"]
