sudo service nginx stop
sudo systemctl stop nginx
sudo systemctl stop mysql
sudo systemctl stop mysql.service


sudo apt install git-lfs 
git lfs track "ibdata1"  "ib_logfile0"  "ibtmp1" "*.ibd"

sudo fuser -k 3000/tcp
sudo fuser -k 8000/tcp
sudo fuser -k 8080/tcp

sudo docker container stop $( sudo docker ps -aq )
sudo docker container rm $( sudo docker ps -aq )
# sudo docker-compose up -d --build 
sudo docker-compose up -d

# sudo  docker-compose exec -u root app sh 
