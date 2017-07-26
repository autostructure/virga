node {
	checkout scm
  stages {
    stage('build') {
			steps {
	      image = docker.build('artifactory.autostructure.io:3000/virga:canary', '--pull .')
			}
    }

    stage('deply') {
			steps {
	      sh 'docker rm -f virga'

        image.run('-p 9001:80 --name virga')
			}
	  }
  }
}
