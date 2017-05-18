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
    release_note="Merge pull request #649 in SMP/jackfruit from feature/SMP-8794 to development

Squashed commit of the following:

commit 39a901d9859a9e3fc56e38e3ec1bbf06af8e85af
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu May 18 13:27:01 2017 -0700

    SMP-8794 update user emaill and pdate according to code reveiw.

commit d0babcf35e63a61180b72000754cc4cf60143b1b
Merge: 318e8b9 cfbc65e
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Thu May 18 13:12:11 2017 -0700

    Merge branch 'development' into feature/SMP-8794

commit 318e8b931c379294f93c6da7cb08f04736394ce7
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Mon May 8 16:28:01 2017 -0700

    SMP-8794 Update customer email api, and update according to code review.

commit 743f169b58fbdbbeaf6d2724889c056d0385a319
Merge: f9d9208 fcbab88
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Mon May 8 16:21:52 2017 -0700

    Merge branch 'development' into feature/SMP-8794

commit f9d92083ad56b9530055bad0588fbcd2ec34218f
Author: Leo Shen <lshen@lshen2.revenuewire.com>
Date:   Fri May 5 11:17:17 2017 -0700

    SMP-8794 Add the ability to edit user email in the users API"
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

