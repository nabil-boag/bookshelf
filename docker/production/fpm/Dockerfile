FROM debian:jessie

RUN apt-get update && \
  apt-get install -y php5-fpm php5-mysql php-pear php-apc php5-curl --no-install-recommends && \
  rm -rf /var/lib/apt/lists/*

# Configure and secure PHP
RUN sed -i "s/;date.timezone =.*/date.timezone = UTC/" /etc/php5/fpm/php.ini && \
    sed -i "s/;always_populate_raw_post_data = -1/always_populate_raw_post_data = -1/" /etc/php5/fpm/php.ini && \
    sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php5/fpm/php-fpm.conf && \
    sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php5/fpm/php.ini && \
    sed -i '/^listen = /clisten = 0.0.0.0:9000' /etc/php5/fpm/pool.d/www.conf && \
    sed -i '/^listen.allowed_clients/c;listen.allowed_clients =' /etc/php5/fpm/pool.d/www.conf && \
    sed -i '/^;catch_workers_output/ccatch_workers_output = yes' /etc/php5/fpm/pool.d/www.conf && \
    sed -i "s/php_admin_flag\[log_errors\] = .*/;php_admin_flag[log_errors] =/" /etc/php5/fpm/pool.d/www.conf && \
    sed -i "s/php_admin_value\[error_log\] =.*/;php_admin_value[error_log] =/" /etc/php5/fpm/pool.d/www.conf && \
    sed -i "s/php_admin_value\[error_log\] =.*/;php_admin_value[error_log] =/" /etc/php5/fpm/pool.d/www.conf && \
    sed -i "s/;clear_env = no/clear_env = no/" /etc/php5/fpm/pool.d/www.conf && \
    echo "php_admin_value[display_errors] = 'stderr'" >> /etc/php5/fpm/pool.d/www.conf

CMD ["/usr/sbin/php5-fpm", "-F"]