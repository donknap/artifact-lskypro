FROM alpine:latest

# 1. 安装 php，php-fpm，nginx, git, 系统运行的一些依赖
# 2. 写入一个 nginx 的 vhost 配置
# 3. 稍微修改一下php-fpm的配置文件
# 4. 写一个启动脚本，当容器运行的时候执行
# 5. 下载php程序，放到相应的目录中，这个目录要和 vhost.conf 的目录匹配

RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.tuna.tsinghua.edu.cn/g' /etc/apk/repositories
RUN apk add --no-cache --update nginx git php81 php81-fpm php81-pdo php81-pdo_mysql \
  php81-pdo_sqlite php81-bcmath php81-ctype php81-dom php81-fileinfo php81-json \
  php81-mbstring php81-openssl php81-tokenizer php81-xml php81-pecl-imagick \
  composer php81-simplexml php81-session php81-ftp php81-xmlreader \ 
  php81-xmlwriter php81-simplexml 

ADD ./nginx/vhost.conf /etc/nginx/http.d/
ADD ./nginx/php-fpm.conf /etc/php81/php-fpm.d/www.conf.99.conf
ADD ./entrypoint.sh /docker/entrypoint.sh

WORKDIR /home/site
# 这里也可以直接 ADD 文件进去
RUN git clone https://github.com/lsky-org/lsky-pro.git /home/site

RUN composer install -vvv
RUN chown -R nginx:nginx /home/site && chmod -R 755 /home/site/storage

ENTRYPOINT [ "sh", "/docker/entrypoint.sh" ]