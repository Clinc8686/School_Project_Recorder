#!/bin/bash

Zeit=`cat Zeit.txt`

DATE=$(date +"%Y-%m-%d_%H%M")

sudo raspivid -t $Zeit -o /var/www/html/Videos/$DATE.h264
sudo MP4Box -add /var/www/html/Videos/$DATE.h264 /var/www/html/Videos/$DATE.mp4
sudo rm /var/www/html/Videos/$DATE.h264


