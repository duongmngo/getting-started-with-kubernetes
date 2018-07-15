# Kubernetes

## Objectives
- Kubernetes overview
- Ignore unnecessary parts when getting started with Kubernetes
- Demo: scalable WordPress application and auto scaling

## Prior knowledges
- What is container? What is Virtual Machine?
<!--
    - Basically, containers and VM are similar in their goals. They support to isolate an application into a container unit and run it, re-use it everywhere. Container and VM support simulating a computer with installed softwares, applications.
    - The main difference between container and VMs is in their architectural approach.
    - reference: https://medium.freecodecamp.org/a-beginner-friendly-introduction-to-containers-vms-and-docker-79a9e3e119b    
--> 

## Prior knowledges
- What is a orchestration platform? 
    - Orchestrators platform: Kubernetes, Docker Swarm,...

## What is Kubernetes?
- Kubernetes

## Kubernetes cluster
- What is Kubernetes cluster?
- Some kind of Kubernetes Cluster.
    - Google Kubernetes Engine.
    - Minikube (single-node cluster)
- Setup minikube: https://github.com/kubernetes/minikube        
    - Follow this guide to install minikube, it will also install kubectl in your CLI.
    - kubectl support to interact with multiple Kubernetes clusters. We can work with multiple Kubernetes cluster and switch the current context (current kubernetes cluster)
- Kubernetes node architecture
    - Image resource: https://d33wubrfki0l68.cloudfront.net/e298a92e2454520dddefc3b4df28ad68f9b91c6f/70d52/images/docs/pre-ccm-arch.png
    - Master-Node communication    
        - Cluster --> Master
        - Master -> Cluster
            - apiserver -> kubelet
            - apiserver -> nodes, pods, and services
    - Overview how it works from: Kubectl -> API Server --> (Backend process: Ectd + Scheduler + Controller) --> Kubelet
    - What is Kubernetes API Object? What is the format? How Kubectl sends it to API Server?
    - 
## Pods.    
- Pod is the basic buiding block of Kubernetes - The smallest and simplest unit in the kubernetes object.
- Pods are the smallest deployable units of computing that can be created and managed in Kubernetes.
- Pod encapsulates application containers.
- We will rarely create individual pods directly in Kubernetes. Because Pods is ephemeral, so we often use some kind of Pod

## Pod Controllers
- Higher-level abtraction to manage Pods.
- Some kind of Pods Controller: 
    - Deployment
    - Statefulset
    - DaemonSet

## Pod Controller - Deployment
- Reason we need ReplicaSet, Replication Controller, Development.
- Don't need to use ReplicaSet, Replication Controller now. Forget them and go ahead to use Deployment
- Replication Controller --- Next Generation ---> ReplicaSet ---> Development (higher-level concept that manage ReplicaSet)      
- Some special Controllers: 
    - StatefulSets        
        -  If an application doesn’t require any stable identifiers or ordered deployment, deletion, or scaling, you should deploy your application with a controller that provides a set of stateless replicas.
    - DaemonSet
        - Brief when we use it: DaemonSet ensures that all Node run a copy of a Pod.        
##  Service 
-  Introduction
-  Example
-  Demo apply Service API object

## Service Discovery
-   Introduction
-   Demo

##  Storage
- On-disk files in a Container are ephemeral
- When a Container crashes, kubelet will restart it, but the files will be lost
- When running Containers together in a Pod it is often necessary to share files between those Containers
- It will be solved by PersistentVolume, PersistenVolumeClaim
- Kubernetes supports several types of Volumes:
    - awsElasticBlockStore
    - gcePersistentDisk
    - azureDisk      
    - persistentVolumeClaim
    - ...
- PersistentVolume, PersistentVolumeClaim provides an API for users and administrators that abstracts details of how storage is provided from how it is consumed
## Horizontal Pod Autoscaler

## Network
- ClusterIp
- NodePort
- LoadBalancer

