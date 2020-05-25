#!/usr/bin/bash

blue='\033[34;1m'
green='\033[32;1m'
purple='\033[35;1m'
cyan='\033[36;1m'
red='\033[31;1m'
white='\033[37;1m'
yellow='\033[33;1m'

echo -e $green "[-----------------]"
echo -e $blue "KnowYourSelf By FajarTheGGman"
echo -e $green "[-----------------]\n"

echo -e $green "[/] Installing Package"
apt-get install nodejs wget unzip tar -y
echo -e $blue "Done !"

echo -e $yellow "[!] Downloading Ngrok"

x=$(dpkg --print-architecture)
if [[ $x == "amd64" ]]; then
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip
unzip ngrok-stable-linux-amd64.zip
fi

if [[ $x == "arm" ]]; then
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip
unzip ngrok-stable-linux-arm.zip
fi

if [[ $x == "aarch64" ]]; then
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip
unzip ngrok-stable-linux-arm.zip
fi

echo -e $green "Done !"

echo "[!] Installing Nodejs Package"
npm install chalk cowsay fs inquirer jsome ora readline begoo request shelljs 


npm start
