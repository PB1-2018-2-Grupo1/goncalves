#!/bin/bash
set -e

psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB" <<-EOSQL
	CREATE USER lucas;
	CREATE DATABASE db_goncalves;
	GRANT ALL PRIVILEGES ON DATABASE db_goncalves TO lucas;
EOSQL
