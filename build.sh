#!/usr/bin/env bash

gulp clean
gulp --production
zip -r wp-bagadbrieg.zip ./* -x "./assets*" "./node_modules*" "./bower_components*" "./.git*" "./.idea*" "./*.iml" "./*.md" "./bower.json" "./*.sh"
gulp clean