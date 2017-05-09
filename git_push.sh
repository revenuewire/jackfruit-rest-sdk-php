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
    release_note="Merge pull request #650 in SMP/jackfruit from feature/SMP-8552-dev to development

Squashed commit of the following:

commit 86470407a48e13d21472ca84dd3b147b6826a8f3
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Mon May 8 10:31:05 2017 -0700

    SMP-8552 document lookup API

commit 7cacd725253da42255220bd4d821f093964fc92f
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Thu May 4 14:03:14 2017 -0700

    SMP-8552 clean up

commit b61ad9779f602534a1673015327ed9567dcaeabf
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Thu May 4 14:00:09 2017 -0700

    SMP-8552 adding account phone to users api

commit 850c906e85838a73e79ab67cd775d0cb0a3f539e
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 15:15:04 2017 -0700

    SMP-8552 final date fix

commit 74b9ff55e8990e9178cfbcfa58e9e61f2f0b9f23
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 15:06:39 2017 -0700

    SMP-8552 last date fix

commit 7895f39f93846eda1fc1fa6a31adb31faafb2a97
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:35:18 2017 -0700

    SMP-8552 last bill date

commit 949c9ea6a4427eab94c45cf99e8748f0309bf828
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:19:55 2017 -0700

    SMP-8552 clean up

commit 26974f8f25c9b2b908c8418f463637df47d090fd
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Tue May 2 14:18:09 2017 -0700

    SMP-8552 last billing date

commit 596d8829ea82c34e49482d5682b3f24c8d661ad7
Author: Guy Segal <gsegal@revenuewire.com>
Date:   Fri Apr 28 10:03:24 2017 -0700

    SMP-8552 clean up

commit a5d3dfa5a7d3fff943242d4defe7cc11d0bb76d2
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

