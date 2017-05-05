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
    release_note="Merge pull request #641 in SMP/jackfruit from feature/SMP-8552-dev to development

Squashed commit of the following:

commit 2454fac35702be399ac796822a910eace5120cef
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 5 11:39:21 2017 -0700

    SMP-8552

commit 184cb2cf5145a080ae4804c6e4fe4dca73f7f704
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 5 11:27:24 2017 -0700

    SMP-8552

commit f2d52e0079096c3b6172a8c571b070c798a9e05b
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri May 5 09:20:11 2017 -0700

    SMP-8552 add account phone on creation

commit ae30b25632e0907d98a20f1b7019107021f1612f
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Thu May 4 14:03:14 2017 -0700

    SMP-8552 clean up

commit 25201c00697ed8cd33e949c51971af1ec84be2e1
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Thu May 4 14:00:09 2017 -0700

    SMP-8552 adding account phone to users api

commit cd440a3c61aa4b79b91e77c8b62e97e9ae7888fe
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 15:15:04 2017 -0700

    SMP-8552 final date fix

commit bbdfd23341d9087867b35a5557446e7c80919808
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 15:06:39 2017 -0700

    SMP-8552 last date fix

commit 843170ca802437367e5d54c15a493c607c49fb7a
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:35:18 2017 -0700

    SMP-8552 last bill date

commit 5d8254c174b69ed09d0c63ced48c834fee14e1d7
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:19:55 2017 -0700

    SMP-8552 clean up

commit 6f48d67959c7ada67d11d38bc9daffc876e355a8
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:18:09 2017 -0700

    SMP-8552 last billing date

commit 628a7413d3e27cfb707668eb1326348f861e08d0
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Apr 28 10:03:24 2017 -0700

    SMP-8552 clean up

commit 37a7db944dea5011beac3dc7a590e39d070d5f87
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Apr 21 16:24:33 2017 -0700

    phones fix"
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

