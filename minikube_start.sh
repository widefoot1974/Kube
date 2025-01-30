#!/bin/bash

# minikube start
minikube start --driver=podman -n 3 --insecure-registry="10.10.9.11:8080"
