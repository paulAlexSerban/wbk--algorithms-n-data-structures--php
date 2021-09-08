install:
	docker-compose up -d --build

start:
	docker-compose up

down:
	docker-compose down

uninstall:
	docker-compose down -v