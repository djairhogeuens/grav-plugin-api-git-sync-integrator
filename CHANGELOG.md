# v1.0.0
##  05/20/2020

Initial version of the integrator. Listens to the the `onApiPageCreate`, `onApiPageUpdate` and `onApiPageDelete` events from [Grav Api plugin](https://github.com/Regaez/grav-plugin-api) and triggers the synchronization operation on the [Grav Git Sync plugin](https://github.com/trilbymedia/grav-plugin-git-sync) by firing the `gitsync` event.