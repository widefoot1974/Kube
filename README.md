# Kube

## git command
+  git clone https://github.com/widefoot1974/Kube.git
+  git config --global user.email "widefoot1974@naver.com"
+  git config --global user.name "widefoot1974"
+  git config --global credential.helper store

## podman command
podman build -t myflask .
podman image list
podman run --name myflask -p 5000:5000 myflask

podman login 10.10.9.11:8080 -u edu -p ********* 

podman tag myflask 10.10.9.11:8080/education/myflask:1.0.0
podman push 10.10.9.11:8080/education/myflask:1.0.0

podman run -p 5000:50000 10.10.9.11:8080/education/myflask:1.0.0

## helm command
### helm
+ helm show chart bitnami/nginx
+ helm inspect values bitnami/nginx

### helm install
+ helm install webserver ./mynginx
+ helm upgrade --set image.repository=httpd --set image.tag=2.2.34-alpine webserver mynginx
+ helm rollback webserver 1

