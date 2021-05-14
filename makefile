
web:
	docker exec app bash -c 'curl -s "http://localhost?number=10"'

cli:
	docker exec app bash -c 'export PHP_IDE_CONFIG="serverName=_" && php console.php --number=10'
