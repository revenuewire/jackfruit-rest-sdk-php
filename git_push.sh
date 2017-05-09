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
    release_note="Merge pull request #581 in SMP/jackfruit from feature/smp-8677-click-id-fix to development

Squashed commit of the following:

commit 86e53fd205aba0b157bd132cbac4bbac228aaa88
Author: stanley <sli@revenuewire.com>
Date:   Tue May 2 15:04:25 2017 -0700

    SMP-8677 Click ID Fix

commit ac9d82c8cc32e1d6d3fee2e0aab02ce80529c037
Merge: c778e57 9f9a8a0
Author: stanley <sli@revenuewire.com>
Date:   Tue May 2 13:24:35 2017 -0700

    Merge branch 'development' into feature/smp-8677-click-id-fix

commit c778e577984cba4f8a9f1c57c68cc9d53c894742
Author: stanley <sli@revenuewire.com>
Date:   Thu Apr 27 16:04:08 2017 -0700

    SMP-8677 Click Id Fix

commit 83b8801768b5f8815fae73be4221a58481d9fe4a
Merge: 4232ae3 644b027
Author: stanley <sli@revenuewire.com>
Date:   Thu Apr 27 15:28:10 2017 -0700

    Merge branch 'development' into feature/smp-8677-click-id-fix

commit 4232ae322ccc7e8b0bca05b83d80fbdea9c42730
Author: stanley <sli@revenuewire.com>
Date:   Wed Apr 26 15:58:36 2017 -0700

    SMP-8677 Click Id Fix

commit 6d18b181c68f7d8cfb619f61560be4e92df78d5d
Merge: 40beb45 f837821
Author: stanley <sli@revenuewire.com>
Date:   Wed Apr 26 13:27:10 2017 -0700

    Merge branch 'development' into feature/smp-8677-click-id-fix

commit 40beb452729556f3d561b4944236292f54384da1
Author: stanley <sli@revenuewire.com>
Date:   Mon Apr 24 13:25:09 2017 -0700

    SMP-8677 Click Id

commit cc5014a98d983efac9789d2b569f1e4c8904ec0f
Merge: dd968c7 3629824
Author: stanley <sli@revenuewire.com>
Date:   Mon Apr 24 13:24:47 2017 -0700

    Merge branch 'development' into feature/smp-8677-click-id-fix

commit dd968c7b7232681c358c7546baf88522376ed831
Merge: e79af50 3fb3290
Author: stanley <sli@revenuewire.com>
Date:   Sun Apr 23 11:04:07 2017 -0700

    Merge branch 'development' into feature/smp-8677-click-id-fix

commit e79af505e50ba96735cfebc1694aa10ac12b2d9d
Author: stanley <sli@revenuewire.com>
Date:   Thu Apr 13 15:27:59 2017 -0700

    SMP-8677 event notification added

commit 7a127f3421dfc78ee31262877f076e8ac29b84a2
Author: stanley <sli@revenuewire.com>
Date:   Thu Apr 13 11:04:20 2017 -0700

    SMP-8677 Click Id Fix"
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

