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
                sudo -u ahmed env WORKSPACE="$WORKSPACE" /bin/bash -c '
                cd "$WORKSPACE"
                minikube image build -t laravel-students:v1 .
                '
                '''
            }
        }

        stage('Deploy MySQL') {
            steps {
                sh '''
                sudo -u ahmed kubectl apply -f "$WORKSPACE/k8s/mysql.yaml"
                '''
            }
        }

        stage('Deploy Laravel') {
            steps {
                sh '''
                sudo -u ahmed kubectl apply -f "$WORKSPACE/k8s/laravel.yaml"
                '''
            }
        }

        stage('Verify Deployment') {
            steps {
                sh '''
                sudo -u ahmed kubectl get pods
                sudo -u ahmed kubectl get services
                '''
            }
        }
    }
}
