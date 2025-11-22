echo creating images...

docker build -t dio/k8s-dio-backend:latest ./backend
docker build -t dio/k8s-dio-database:latest ./database

echo images created successfully!

docker push dio/k8s-dio-backend:latest
docker push dio/k8s-dio-database:latest

echo creating cluster services...

kubectl apply -f k8s-dio-project1/services.yaml

echo deploying applications...
kubectl apply -f k8s-dio-project1/deployment.yaml