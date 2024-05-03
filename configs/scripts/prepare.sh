docker-compose up -d
sudo usermod -a -G www-data $USER
sudo chown -R $USER:www-data ./wp-dev
cd ./configs/theme/directto && npm install