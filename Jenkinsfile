node {
	checkout scm

    stage('build') {
	      image = docker.build('artifactory.autostructure.io:3000/virga:canary', '--pull .')
    }

    stage('deply') {
	      sh 'docker rm -f virga'

        image.run('-p 9001:80 --name virga')
	  }
}
