wall DeployMonkey running STP Style Guide Deploy;

git pull --no-edit origin master;

# Get new tags from remote
git fetch --tags;

# Get latest tag name
latestTag=$(git describe --tags `git rev-list --tags --max-count=1`);

# Checkout latest tag
git checkout $latestTag;

wall DeployMonkey successfully deployed STP Style Guide $latestTag;