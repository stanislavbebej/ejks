### Build

`docker build -t ejks:nginx -f Dockerfile .`

### Run

`docker run    --rm -p 80:8080                      --name ejks-sk ejks:nginx`
`docker run -d --rm -p 80:8080 -v src:/var/www/html --name ejks-sk ejks:nginx`

### Inspect

`docker exec -it ejks-sk /bin/sh`
