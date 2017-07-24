node {
	checkout scm

	image = Docker.build('artifactory.autostructure.io:3000/virga:canary', '--pull')

	image.run
}
