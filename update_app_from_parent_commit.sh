#!/bin/bash


#Exemple invocació: ./upgrade_base.sh
version=15.01.19

git clone https://github.com/projectestac/agora_moodle2.git /tmp/agora_alexandria_base
pushd /tmp/agora_alexandria_base
git submodule update --recursive --init
commit=`git rev-parse HEAD`
echo Commit $commit
find . -name '\.git*' -exec rm -rf {} \;
rm CHANGES.txt
popd

git checkout AGORA_BASE
git pull
rm -rf html/web
cp -rp /tmp/agora_alexandria_base/ html/web
git add -A .
git commit -m 'Import from commit '$commit
git push origin AGORA_BASE

git checkout master
git rebase AGORA_BASE master
