#!/bin/bash

DIRPATH=`dirname "$0"`
./$DIRPATH/teardown-db.sh
./$DIRPATH/build-db.sh
