#!/bin/bash
DIRPATH=`dirname "$0"`
mysql -u root --password=ubuntu < $DIRPATH/create-tables.sql
mysql -u root --password=ubuntu oauth2_db < $DIRPATH/load-data.sql
