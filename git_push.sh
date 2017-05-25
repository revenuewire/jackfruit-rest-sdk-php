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
    release_note="Merge pull request #728 in SMP/jackfruit from feature/smp-8602-cpa-credit-limit to development

Squashed commit of the following:

commit b768ac7036515837097ca1781fe39a13c063b9bf
Author: stanley <sli@revenuewire.com>
Date:   Thu May 25 10:53:52 2017 -0700

    SMP-8602 CPA Credit Limit Code Review Fix

commit ba09679fa37d817b93f833a6b6f517ff50a28ca7
Merge: c17d7af 5ab5c58
Author: stanley <sli@revenuewire.com>
Date:   Thu May 25 10:30:54 2017 -0700

    Merge branch 'development' into feature/smp-8602-cpa-credit-limit

commit c17d7af6af5e6970efc507478dd902c1f39792eb
Author: stanley <sli@revenuewire.com>
Date:   Tue May 23 15:15:35 2017 -0700

    SMP-8602 CPA Credit Limit

commit b6e60319d88b85652106cf75dc14bc60b1502d2e
Merge: e06332d d5671ff
Author: stanley <sli@revenuewire.com>
Date:   Tue May 23 15:12:13 2017 -0700

    Merge branch 'development' into feature/smp-8602-cpa-credit-limit

commit e06332d0d4fa556b4d25e30dd4727e469f110b79
Author: stanley <sli@revenuewire.com>
Date:   Tue May 23 15:10:49 2017 -0700

    SMP-8602 CPA Credit Limit

commit 20d5a31b78595006baa1f9c8e0225936d27d8f9d
Author: stanley <sli@revenuewire.com>
Date:   Tue May 23 14:43:42 2017 -0700

    SMP-8602 CPA Credit Limit

commit bd9794d223c8c2d01538242af4190f62763828eb
Author: stanley <sli@revenuewire.com>
Date:   Tue May 23 14:27:43 2017 -0700

    SMP-8602 CPA Credit Limit"
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

