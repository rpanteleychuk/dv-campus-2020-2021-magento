# Deploying changes to the server #

Deployment is automated to decrease the possible downtime. Files to run:
- `deploy-theme-only.sh` - deploy changes to templates, layouts, CSS, DI etc., without installing new modules, upgrading them or changing modules sequence.
- `deploy-full.sh` - deploy changes that include installing new modules, or data/schema upgrades.
  ​

To use this scripts the following environment variables must be set:
- `BUILD_SYSTEM_PATH` - path to the build system without `/` at the end (not visible from the web);
- `LIVE_SYSTEM_PATH` - path to the live system `/` at the end (development, staging, production etc.);
- `GIT_BRANCH` - branch to checkout and deploy.
  ​

To add these variables to the environment, run the following commands and restart the terminal session. Ensure that
`.bash_aliases` is available in your OS (debian-based mostly), use `~/.bash_profile` or other respective file otherwise:
​
```bash
export BUILD_SYSTEM_PATH="/path/to/the/build/system/" >> ~/.bash_aliases
export PRODUCTION_SYSTEM_PATH="/path/to/the/production/system/" >> ~/.bash_aliases
export GIT_BRANCH="name-of-you-branch" >> ~/.bash_aliases
```

Deployment process flow implemented in the above files:

1) go to the build system located in `/path/to/the/build/system/`;
2) pull changes, install modules, compile code and assets;
3) go to the live system in `/path/to/the/production/system/`;
4) enter maintenance mode (only for `deploy-full.sh`);
5) pull changes, run `composer install` (only for `deploy-full.sh`) and `setup:upgrade`;
6) copy generated files from the build system;
7) switch to the production mode;
8) turn off maintenance (only for `deploy-full.sh`).
