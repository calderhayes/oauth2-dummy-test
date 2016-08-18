#!/bin/bash
DIRPATH=`dirname "$0"`
mysql -u root -p < $DIRPATH/create-tables.sql
mysql -u root -p oauth2_db < $DIRPATH/load-data.sql
