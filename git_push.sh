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
    release_note="Merge pull request #815 in SMP/jackfruit from feature/SMP-8912 to development

Squashed commit of the following:

commit 0fc4f229189715d47066599c1ebae5e30c4db0f7
Merge: 7009310 4066603
Author: Scott Wang <swang@revenuewire.com>
Date:   Tue Jun 13 07:56:27 2017 -0700

    SMP-8912: fix conflicts

commit 7009310b86c815ef0d633edc3597241c4f8b44ca
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 12 08:06:15 2017 -0700

    SMP-8912: update mac user

commit 329ca50758a58c02f03ae0808a750a5088c8d588
Merge: cd13869 f1e07ca
Author: Scott Wang <swang@revenuewire.com>
Date:   Mon Jun 12 08:01:27 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/SMP-8912

    * origin/development:
      Merge pull request #814 in SMP/jackfruit from feature/SMP-8913 to development
      Merge pull request #810 in SMP/jackfruit from feature/SMP-8897 to development

commit cd13869ed25562c68df7568aa12217f483008637
Author: Scott Wang <swang@revenuewire.com>
Date:   Fri Jun 9 16:15:55 2017 -0700

    SMP-8912: add parallel testings

commit 17b8a4dc4cdb2f070a1d6b7a42ddc20a967dfd31
Author: Scott Wang <swang@revenuewire.com>
Date:   Fri Jun 9 14:53:19 2017 -0700

    SMP-8912: add parallel testings

commit 95fca5b59b9cb35780672c21617602f8c41cc8b9
Author: Scott Wang <swang@revenuewire.com>
Date:   Fri Jun 9 14:15:20 2017 -0700

    SMP-8912: fix

commit fdf813736fc864ed7ac046b9be8550e715fc5cee
Author: Scott Wang <swang@revenuewire.com>
Date:   Fri Jun 9 12:22:01 2017 -0700

    SMP-8912: update docker"
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

