# Api Git Sync Integrator Plugin

The **Api Git Sync Integrator** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). An integration plugin to integrate Git Sync with Api

## Installation

Installing the Api Git Sync Integrator plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

> NOTE: This is not supported yet. For now, use the manual installation instead.

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install api-git-sync-integrator

This will install the Api Git Sync Integrator plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/api-git-sync-integrator`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `api-git-sync-integrator`. You can find these files on [GitHub](https://github.com/djairhogeuens/grav-plugin-api-git-sync-integrator) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/api-git-sync-integrator
	
> NOTE: This plugin is a modular component for Grav which requires other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/djairhogeuens/grav-plugin-api-git-sync-integrator/blob/master/blueprints.yaml).

### Admin Plugin

> NOTE: This is not supported yet. For now, use the manual installation instead.

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/api-git-sync-integrator/api-git-sync-integrator.yaml` to `user/config/plugins/api-git-sync-integrator.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named api-git-sync-integrator.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

There are no special usage instructions as this is a simple integrator plugin. Just install the plugin, make sure the dependencies are installed as well and the plugin is enabled and you should be good to go.
