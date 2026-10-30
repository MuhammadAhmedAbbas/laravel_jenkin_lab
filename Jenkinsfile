pipeline {
    agent any

    stages {
        stage('GitHub Checkout') {
            steps {
                echo 'Code checked out from GitHub'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh '''
                sudo -u ahmed /bin/bash -lc 'cd /var/lib/jenkins/workspace/Laravel-Kubernetes-CI-CD && minikube image build -t laravel-students:v1 .'
                '''
            }
        }

        stage('Deploy MySQL') {
            steps {
                sh '''
                sudo -u ahmed /bin/bash -lc 'kubectl apply -f /var/lib/jenkins/workspace/Laravel-Kubernetes-CI-CD/k8s/mysql.yaml'
                '''
            }
        }

        stage('Deploy Laravel') {
            steps {
                sh '''
                sudo -u ahmed /bin/bash -lc 'kubectl apply -f /var/lib/jenkins/workspace/Laravel-Kubernetes-CI-CD/k8s/laravel.yaml'
                '''
            }
        }

        stage('Verify Deployment') {
            steps {
                sh '''
                sudo -u ahmed /bin/bash -lc 'kubectl get pods && kubectl get services'
                '''
            }
        }
    }
}
