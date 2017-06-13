#!/bin/sh
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/sh ./git_push.sh wing328 swagger-petstore-perl "minor update"

git_user_id=$1
git_repo_id=$2
release_note=$3

if [ "$git_user_id" = "" ]; then
    git_user_id="revenuewire"
    echo "[INFO] No command line input provided. Set \$git_user_id to $git_user_id"
fi

if [ "$git_repo_id" = "" ]; then
    git_repo_id="jackfruit-rest-sdk-php"
    echo "[INFO] No command line input provided. Set \$git_repo_id to $git_repo_id"
fi

if [ "$release_note" = "" ]; then
    release_note="Merge pull request #805 in SMP/jackfruit from feature/SMP-8867 to development

Squashed commit of the following:

commit 17978d7c50181c92bfc6cbff56fd97b45d98279d
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Mon Jun 12 11:05:59 2017 -0700

    SMP-8867 SPO Paypal payment update. Update according to code review.

commit 0d5f93c81870b33a9429cff4cc030e71034e41a9
Merge: 935342e aa358b7
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Mon Jun 12 09:42:57 2017 -0700

    Merge branch 'development' into feature/SMP-8867

commit 935342ec153f24c40c060e182a8834f40e2ccdb3
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 16:00:23 2017 -0700

    SMP-8867 SPO Paypal payment update API

commit 04aa0b522db9b44c7a702ac70b65ec1bdc6cce57
Merge: 3dcbe52 f1e07ca
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 15:43:31 2017 -0700

    Merge branch 'development' into feature/SMP-8867

commit 3dcbe52118f4cad3b7c98a0f74c70d0d09e8dfd6
Merge: 1a73dec 92d2c77
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 12:17:25 2017 -0700

    Merge branch 'development' into feature/SMP-8867

commit 1a73decbabad56a4e77e4a6c50214a7a7767a1df
Merge: f6fdb0b d9a913f
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 09:13:54 2017 -0700

    Merge branch 'development' into feature/SMP-8867

commit f6fdb0b5eee69de3e896e3f452d09d0b66bb2cbc
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri Jun 9 09:13:11 2017 -0700

    SMP-8867 SPO Paypal payment update API. Update according to code review.

commit 37345f5e1fe090912feeef165c6556b9bbe1e6e1
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 8 16:17:56 2017 -0700

    SMP-8867 Paypal Update payment API. update according to code review.

commit 30a82115d7dd44c541160ab4c83d55f089aaf43e
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 8 12:23:54 2017 -0700

    SMP-8867 SPO Paypal payment update API. update according to code reveiw

commit eb4025e94122d4e7a1554f0b5c5575fdc6f6a52c
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu Jun 1 16:12:18 2017 -0700

    SMP-8867 SPO Paypal payment update API"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$release_note"

# Sets the new remote
git_remote=`git remote`
if [ "$git_remote" = "" ]; then # git remote not defined

    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git crediential in your environment."
        git remote add origin https://github.com/${git_user_id}/${git_repo_id}.git
    else
        git remote add origin https://${git_user_id}:${GIT_TOKEN}@github.com/${git_user_id}/${git_repo_id}.git
    fi

fi

git pull origin master

# Pushes (Forces) the changes in the local repository up to the remote repository
echo "Git pushing to https://github.com/${git_user_id}/${git_repo_id}.git"
git push origin master 2>&1 | grep -v 'To https'

