<?php

/**
 * Scheduler Home controller
 */
class SchedulerHomeManagerController extends SchedulerManagerController {
    /**
     * The pagetitle to put in the <title> attribute.
     * @return null|string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('scheduler');
    }

    /**
     * Register all the needed javascript files.
     */
    public function loadCustomCssJs() {
        $this->addCss($this->scheduler->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->scheduler->config['jsUrl'].'mgr/widgets/grid.tasks.js');
        $this->addJavascript($this->scheduler->config['jsUrl'].'mgr/widgets/grid.history.js');
        $this->addJavascript($this->scheduler->config['jsUrl'].'mgr/widgets/grid.future.js');

        $this->addLastJavascript($this->scheduler->config['jsUrl'].'mgr/sections/home.js');
    }
}
