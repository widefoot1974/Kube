#!/bin/bash

# minikube start
minikube start --driver=podman -n 3 --insecure-registry="10.10.9.11:8080"

# master node no schedule
kubectl taint nodes minikube node-role.kubernetes.io/control-plane=:NoSchedule
