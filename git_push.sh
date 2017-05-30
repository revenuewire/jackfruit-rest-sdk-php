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
    release_note="Merge pull request #762 in SMP/jackfruit from feature/pipelinetest to development

Squashed commit of the following:

commit c3c8783e831033fa8f8eb824477c168be9f218b4
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Tue May 30 09:10:19 2017 -0700

    Pipe: improve Jenkins file

commit f04f44aee3d817319aef72cc5ccfc7e8d25a476b
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 16:25:26 2017 -0700

    Pipe: add permission udpate and db migration

commit 93cd7141c11be075a172c0d155789467d127b4b3
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 15:02:44 2017 -0700

    Pipe: again and again

commit 10cbba85447f1e14d40d67e50727c581e87b313d
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 15:01:55 2017 -0700

    Pipe: try again

commit faab24705e0cbba637825f868480aa0f1a99e0a2
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 14:41:26 2017 -0700

    Pipe: add composer to repo

commit 8f40cb8debfcb8b8af064901f42a0347fdb2b4ea
Merge: 4c27478 b813993
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 12:31:23 2017 -0700

    Pipe: fix conflicts

commit 4c274782a51b6c4e2aec66f12c73761b70f439fc
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 12:28:00 2017 -0700

    Pipe: final updates

commit c9605458c158a7a53333d29109830c2033a670c3
Merge: 2b9a07c a475952
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 10:43:33 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/pipelinetest

    * origin/development:
      Merge pull request #754 in SMP/jackfruit from feature/RSPO-34 to development
      Merge pull request #742 in SMP/jackfruit from feature/SMP-8857 to development

commit 2b9a07c5e8e2ffd539092acdd099ac177ebacff6
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Mon May 29 10:43:23 2017 -0700

    Pipe: batch fix

commit 7ab3766e2580a677fdadece7b8cbde6fe61d161f
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Fri May 26 20:01:55 2017 -0700

    pipe: improvement

commit 0a0f45c725e1d06655b8d82cfa2c403ed742833a
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Fri May 26 18:38:55 2017 -0700

    Pipe: fix cache dir

commit bfbdf3cb9f1c4395aff013e39fc58f94868be3df
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Fri May 26 17:11:16 2017 -0700

    Pipe: fix rancher

commit e1e25c9d92b3e8063c600b3427732af341b9f0e3
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 16:04:40 2017 -0700

    Pipe: test deploy

commit f006db817e0df1f73c64b051fd8b37e4f80182d4
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 16:03:59 2017 -0700

    Pipe: test deploy

commit 1529bdb77f8269d20fb7908a81cc7ecb46c3bf19
Merge: e95efac 34d16df
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 16:02:10 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/pipelinetest

    * origin/development:
      Merge pull request #751 in SMP/jackfruit from feature/SMP-8840-fast to release/0-blue
      Merge pull request #744 in SMP/jackfruit from feature/SMP-8828 to development
      Merge pull request #748 in SMP/jackfruit from feature/RSPO-34-offer to development
      Merge pull request #745 in SMP/jackfruit from feature/smp-8513-experiment-custom-url to development
      Merge pull request #746 in SMP/jackfruit from feature/RSPO-34-bill to development
      Merge pull request #728 in SMP/jackfruit from feature/smp-8602-cpa-credit-limit to development
      Merge pull request #743 in SMP/jackfruit from feature/SMP-8112 to development

commit e95efac1c2867f037e595e0ce7d8ddd2ff062a32
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 15:52:07 2017 -0700

    Pipeline: more smaller fixes

commit 57a92c4eca16617dd6989b15c233af398cd67a60
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 15:47:16 2017 -0700

    Pipeline: more smaller fixes

commit 4fd973c27ec5c84a9504e993ad714b37faa5f695
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 15:11:03 2017 -0700

    Pipe: test

commit 42cf095b4e4af40eb84f3aa21448b1829e5b1ff2
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 14:47:38 2017 -0700

    Pipe: fix

commit fe644ed45d8dace76425b3dd408e80f19de730c0
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 14:09:43 2017 -0700

    Pipe: fix

commit 4f5a6be9f7341a703245ab094dd31c2952b8c413
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 13:48:10 2017 -0700

    Pipe: large batch changes

commit c739c7b63ee2c9c49ef9fc7088ccf42c7746d0c2
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 12:36:54 2017 -0700

    Pipe: some diving in now for the hard part

commit 472ddd5df666041679112db8a895a3bf9079a6c3
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 10:30:26 2017 -0700

    Pipe: swagger generation

commit 460d9c604c7d10ccb154f3d9573edd7042d79414
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 10:27:09 2017 -0700

    Pipe: swagger generation

commit ebec5fb931275e2c89055af6b771b902c7617ad4
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 10:23:48 2017 -0700

    Pipe: add version file

commit 50d7197d36ae3569bac0900e0dc133abb2594b6d
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri May 26 10:08:50 2017 -0700

    Pipeline test

commit 4e8b58efe5d9cd24ea1ef889938b4612384fd5c4
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Thu May 25 17:01:06 2017 -0700

    pipe: another fix

commit 205830ea5ceaf5fa9cf217b14525b5922385595d
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Thu May 25 16:42:15 2017 -0700

    pipe: test docker and upload

commit 4a29c62c22373862a1f5ab3a1ed821fd3b8f9ed3
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Thu May 25 15:46:11 2017 -0700

    pipe: add to S3

commit 3117108c2ae82b172397b753bf7505c74503fd3f
Merge: a75bc21 00a567c
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Thu May 25 15:35:33 2017 -0700

    pipe: merge from development

commit a75bc21a4f950e3a13ad43a283f3522849bf1a42
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:29:47 2017 -0700

    try again

commit 4d6605ef590659dc4352d5fa1d4969f6a11904f7
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:28:43 2017 -0700

    try again

commit 8553cb2e473ec7b711b6ee5539909a5fb0decbfb
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:23:22 2017 -0700

    try again

commit cab6ce352f389d64c3629deb1798fa9aebd6fbb5
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:19:13 2017 -0700

    try again

commit 0be1cfa2092cf0356a44805522558fb1832e8af4
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:17:42 2017 -0700

    try again

commit 7586932313cb80c58e2c94632fbe288818f343f7
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:14:22 2017 -0700

    try again

commit fcbfbd146c348b3cf6295408a92464e28bc78fa4
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 21:14:03 2017 -0700

    try again

commit 434309d59673ecd53328c567d6c9f3e080f24f50
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 20:44:10 2017 -0700

    try again

commit d2ee5d552902026239a56c2c6a40c1d2738909fb
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 20:02:14 2017 -0700

    try again

commit eeb34848054de591829ebb4aa6f7e9d148b5367e
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 19:31:05 2017 -0700

    try again

commit 89534fb4821eee7912dffc4ec932235d07176ab6
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 19:27:20 2017 -0700

    try again

commit 0971fb426de1b63fda900430ec92031de77707a2
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 19:01:07 2017 -0700

    updates

commit 7fd659055560d35a929fb9738f5bb813d43d9fda
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 18:50:21 2017 -0700

    updates

commit 283ce1771ba33db0079e77c6b14fec53fd716bf6
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 18:47:56 2017 -0700

    pipeline: update uglifyjs

commit dcfda70171daf8e015f28a4a98dd49faec409b6c
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 18:34:34 2017 -0700

    Pipetest: again

commit 192ab3d8bdea307ee247c3d3b44252e7fdc815ea
Author: Scott Wang <swang@Scotts-MacBook-Pro-2.local>
Date:   Tue May 23 18:32:29 2017 -0700

    Pipeline: continuing test

commit 440513e20cc225527d22dd4cbb587abec0e7ccb5
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Thu May 18 11:33:05 2017 -0700

    Pipe: just save what I got so far

commit 014b7f051c76b18de54a4a47df1cf885f3c4cc0f
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Wed May 17 16:44:47 2017 -0700

    Pipe: fix something

commit 644ce8706c65b700fc9ef0f063bfe12096a76ef8
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Wed May 17 16:25:38 2017 -0700

    Pipe: test

commit ca30843d6bf558863f12b0875ce894191cd42933
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Wed May 17 16:24:20 2017 -0700

    Pipe: test

commit 0b580869160785a6c31973cbd9b856cbdc5e0df9
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Wed May 17 15:56:03 2017 -0700

    Pipe:  remove node_modules and composer

commit 05f5101659de9221942c9cae58252b30b3d2aaba
Merge: 87744a4 532044b
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Wed May 17 15:07:22 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/pipelinetest

    * origin/development:
      SMP-8557: fix prefight

commit 87744a4bdda2a8e25b78db2ef079427b9a8063c7
Merge: 62c2d4f 629a220
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Wed May 17 14:40:13 2017 -0700

    Pipe: merge from development

commit 62c2d4f8789a0b745e2d1ea8520690fe4c7a9811
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 14:58:24 2017 -0700

    pipe: test again with states

commit 6bd60f05fe3788fbb3ffe484902aed259c419b54
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 14:36:16 2017 -0700

    pipe: give a try with very generic response

commit 41d113cdf93d41af2a52ed10b84f0d589d305560
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 14:25:33 2017 -0700

    pipe: try again

commit 01579b8c42c53ee9258c04a46e0863a0e742f6bd
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 14:18:55 2017 -0700

    pipe: fix the states

commit e2b44247bd2193c5b0205f48d34a4499afee2f24
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 14:04:53 2017 -0700

    pipe: update states api

commit 6372de649773ee617a1f55a056cf07d52540ec89
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 12:36:29 2017 -0700

    pipe: clean up the geo stuff

commit b6756cfb408725762c39c456b9734c7de2075fd8
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 11:25:22 2017 -0700

    pipe: sdk

commit 2b7d23caa0540f481bc7e29f9c5b5f5d9e1b3ba0
Merge: 68cc560 4735b31
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 11:17:58 2017 -0700

    Merge remote-tracking branch 'origin/development' into feature/pipelinetest

    * origin/development:
      Merge pull request #610 in SMP/jackfruit from feature/SMP-8356-gst-cherry-pick to release/1-staging
      Merge pull request #609 in SMP/jackfruit from feature/SMP-8735-q4 to release/1-staging
      Merge pull request #603 in SMP/jackfruit from feature/SMP-8715 to development

commit 68cc5607051517ed1b608192bbf7ac0e6a368a37
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 10:09:20 2017 -0700

    test again

commit 11b24b30ab269c91bdd11e53f6f7099dd298d238
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 09:50:56 2017 -0700

    pipe: add a bit debug info

commit 9d2ceca647c40cb1e00f1b4b5428738a2a68c855
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 09:48:34 2017 -0700

    pipe: workspace

commit 5f8903f192172c93543b6883500f7aa43d6a68ab
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 09:45:29 2017 -0700

    try webpack

commit 299b57366b072bd728a0ee69ac62150ed4e891b9
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 09:08:53 2017 -0700

    pipe: test propel and skd generation

commit 11f36e3a87ca4bfba317b7a6d525774875b3d3d8
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 08:55:27 2017 -0700

    pipe: fix repo

commit 2dfa831cd45fc7ba4ce986f371dfbef97a6da8df
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 08:54:25 2017 -0700

    Pipe: test

commit f52d4cdf111de3adf411c76fc68a1bdb4b6d1963
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 08:49:36 2017 -0700

    SMP-8771: sdk

commit ee9bf3cc4041903ffcc988070c541f1717f377d5
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 08:27:09 2017 -0700

    try again

commit 8f5986ec2db375a91555ce8f4641deed0b23bf76
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 08:15:43 2017 -0700

    SMP-8771: update sdk path

commit a93d7477417b2eb13760783e126207f5bb62a0fd
Author: Scott Wang <swang@ceastgaard.revenuewire.com>
Date:   Fri Apr 28 08:10:57 2017 -0700

    SMP-8771: test out sdk generation"
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

