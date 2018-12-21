
#! /bin/bash

while getopts "p:" opt; do
	case ${opt} in
		p )
			PROJECT_DIR=${OPTARG}
			;;
	esac
done

# Establish symbolic links to the `media`, `download` and `favicon` directories
rm media
ln -s ../media/${PROJECT_DIR} media
rm favicon
ln -s ../media/${PROJECT_DIR}/favicon favicon
rm download
ln -s ../media/${PROJECT_DIR}/download download
