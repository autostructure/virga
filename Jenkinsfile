node {
	checkout scm

	image = docker.build('artifactory.autostructure.io:3000/virga:canary', '--pull .')

	image.run
}
