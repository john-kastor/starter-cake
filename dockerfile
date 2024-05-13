FROM amazonlinux:2

RUN yum update -y && yum install -y \
    sudo \
    vim \
    tar \
    wget \
    curl \
    php \
    php-mbstring \
    php-xml \
    php-json \
    php-mysqlnd \
    php-pdo \
    php-pear \
    php-devel \
    php-memcache \
    httpd \
    git \
    gcc \
    make \
    unzip \
    zip

RUN mkdir -p /var/log/httpd && chmod -R 755 /var/log/httpd

ADD . /var/www/html

ADD ./_docker_config/apache-config.conf /etc/httpd/conf.d/000-default.conf

RUN echo "ServerName localhost" >> /etc/httpd/conf/httpd.conf

WORKDIR /var/www/html

EXPOSE 80

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
