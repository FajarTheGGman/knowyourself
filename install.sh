#!/bin/bash

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
cek=$(dpkg --print-architecture)

if [[ $cek == "amd64" ]]; then
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip
unzip ngrok-stable-linux-amd64.zip
fi

if [[ $cek == 'arm64' ]] then
wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm64.tgz
tar -xzvf ngrok-stable-linux-arm64.tgz
fi

echo -e $green "Done !"


echo "[!] Installing Nodejs Package"
npm install
npm start