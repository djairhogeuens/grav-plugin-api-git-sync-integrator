<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class ApiGitSyncIntegratorPlugin
 * @package Grav\Plugin
 */
class ApiGitSyncIntegratorPlugin extends Plugin
{
    
    // Api events
    const EVENT_ON_API_PAGE_CREATE = 'onApiPageCreate';
    const EVENT_ON_API_PAGE_UPDATE = 'onApiPageUpdate';
    const EVENT_ON_API_PAGE_DELETE = 'onApiPageDelete';
    const EVENT_ON_API_USER_CREATE = 'onApiUserCreate';
    const EVENT_ON_API_USER_UPDATE = 'onApiUserUpdate';
    const EVENT_ON_API_USER_DELETE = 'onApiUserDelete';

    // Git Sync events
    const EVENT_GIT_SYNC = 'gitsync';

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => [
                ['autoload', 100000], // TODO: Remove when plugin requires Grav >=1.7
                ['onPluginsInitialized', 0]
            ]
        ];
    }

    /**
    * Composer autoload.
    *is
    * @return ClassLoader
    */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main events we are interested in
        $this->enable([
            self::EVENT_ON_API_PAGE_CREATE => ['onApiPageCreate', 0],
            self::EVENT_ON_API_PAGE_UPDATE => ['onApiPageUpdate', 0],
            self::EVENT_ON_API_PAGE_DELETE => ['onApiPageDelete', 0],
            self::EVENT_ON_API_USER_CREATE => ['onApiUserCreate', 0],
            self::EVENT_ON_API_USER_UPDATE => ['onApiUserUpdate', 0],
            self::EVENT_ON_API_USER_DELETE => ['onApiUserDelete', 0]
        ]);
    }

    /**
     * @param Event $e
     */
    public function onApiPageCreate(Event $e)
    {
        $this->fireGitSyncEvent();
    }

    /**
     * @param Event $e
     */
    public function onApiPageUpdate(Event $e)
    {
        $this->fireGitSyncEvent();
    }

    /**
     * @param Event $e
     */
    public function onApiPageDelete(Event $e)
    {
        $this->fireGitSyncEvent();
    }

    /**
     * @param Event $e
     */
    public function onApiUserCreate(Event $e)
    {
        $this->fireGitSyncEvent();
    }

    /**
     * @param Event $e
     */
    public function onApiUserUpdate(Event $e)
    {
        $this->fireGitSyncEvent();
    }

    /**
     * @param Event $e
     */
    public function onApiUserDelete(Event $e)
    {
        $this->fireGitSyncEvent();
    }

    private function fireGitSyncEvent()
    {
        $this->grav->fireEvent(self::EVENT_GIT_SYNC);
        echo "Git Sync triggered";
        exit();
    }
}
