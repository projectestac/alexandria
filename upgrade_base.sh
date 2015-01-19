#!/bin/bash


#Exemple invocació: ./upgrade_base.sh
version=15.01.19

git clone https://github.com/projectestac/agora_moodle2.git ../agora_alexandria_base
pushd ../agora_alexandria_base
git submodule update --recursive --init
commit=`git rev-parse HEAD`
echo Commit $commit
find . -name '\.git*' -exec rm -rf {} \;
popd

git checkout AGORA_BASE
rm -rf html/web
cp -rp ../agora_alexandria_base html/web
git add -A .
git commit -m 'Import from commit $commit'
git push origin AGORA_BASE


git checkout master
git rebase AGORA_BASE master