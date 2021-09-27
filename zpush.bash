sudo chmod 0777 -R mariadb
echo 'please enter commit msg: '
read msg
git add .
git commit -m "${msg}"
git push