Docker Build the image and set the tag of the image by below command

`docker build -t groae_dev .`

Docker run the container on the desired port and set the container name by below comamnd

`docker run -d -p 8000:8000 --name groae_dev groae_dev`

Docker stop the running container when you want to update the code of the container by below command

`docker stop groae_dev`

To clean up and recreate the docker container, remove the existing image by below command 

`docker rm groae_dev`
