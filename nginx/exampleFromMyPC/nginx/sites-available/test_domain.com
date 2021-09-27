server    {
listen 80;
 
root /var/www/test_domain.com/html;
index index.html index.htm index.nginx.debian.html;
 
server_name test_domain.com www.test_domain.com;
location /          {
try_files $uri $uri/ =404;
      }
}
