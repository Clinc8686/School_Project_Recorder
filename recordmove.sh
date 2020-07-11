
#!/bin/bash

DATE=$(date +"%Y-%m-%d_%H%M")

sudo raspivid -t 450000 -o /var/www/html/Videos/$DATE.h264
sudo MP4Box -add /var/www/html/Videos/$DATE.h264 /var/www/html/Videos/$DATE.mp4
sudo rm /var/www/html/Videos/$DATE.h264
