#!/bin/bash

DIRPATH=`dirname "$0"`
mysql -u root --password=ubuntu < $DIRPATH/drop-db.sql
