# Kube

## git command
+  git clone https://github.com/widefoot1974/Kube.git
+  git config --global user.email "widefoot1974@naver.com"
+  git config --global user.name "widefoot1974"
+  git config --global credential.helper store

## helm command
### helm
+ helm show chart bitnami/nginx
+ helm inspect values bitnami/nginx

### helm install
+ helm install webserver ./mynginx
+ helm upgrade --set image.repository=httpd --set image.tag=2.2.34-alpine webserver mynginx
+ helm rollback webserver 1
