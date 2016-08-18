#!/bin/bash

DIRPATH=`dirname "$0"`
mysql -u root -p < $DIRPATH/drop-db.sql
