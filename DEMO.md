## Prerequisites
- Setup minikube
- Clone source code
## Step 01: Setup MySql using manifest/mysql
- kubectl apply -f manifest/mysql/persistent-volume.yaml
- kubectl apply -f manifest/mysql/persistent-volume-claim.yaml
- kubectl apply -f manifest/mysql/deployment.yaml
- kubectl apply -f manifest/mysql/service.yaml
- Use MySQL Workbench to connect to mysql through services: 
    - 192.168.99.100:32001
    - username: root
    - password: root
- Import Data from script './configuration_mysql/database.sql'    
## Step 02: Setup wordpress using manifest/wordpress
- kubectl apply -f manifest/wordpress/deployment.yaml
- kubectl apply -f manifest/wordpress/service.yaml

## Step 03: Demo ingress
- Edit /etc/hosts, point demo.com to 192.168.99.100
- Update database, change 'wp_options > siteurl | home' to demo.com
- kubectl apply -f manifest/wordpress/ingress.yaml

## Troubleshooting
- Redirect issue
    - Check this table in database and update to URL you want: wp_options > siteurl | home