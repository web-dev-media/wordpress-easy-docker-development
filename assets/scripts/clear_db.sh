#!/bin/bash

mysqlDataPath='./assets/mysql/data'

if [ -d "$mysqlDataPath" ]; then
    rm -rf $mysqlDataPath
fi