#! /bin/bash
sudo apt-get update && 
      sudo apt-get upgrade -y &&
      sudo apt-get install php php-devel
curl -LO https://deployer.org/deployer.phar
sudo mv deployer.phar /usr/local/bin/dep
sudo chmod +x /usr/local/bin/dep
