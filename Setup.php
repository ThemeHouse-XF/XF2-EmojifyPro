<?php

namespace ThemeHouse\EmojifyPro;

use XF\AddOn\AbstractSetup;
use XF\AddOn\StepResult;

class Setup extends AbstractSetup
{
    public function install(array $stepParams = [])
    {
        $this->applyGlobalPermission('th_cover', 'view');
    }

    /**
     * @param array $stepParams
     *
     * @return null|StepResult
     */
    public function upgrade(array $stepParams = [])
    {
        $this->applyGlobalPermission('th_cover', 'view');
        return null;
    }

    /**
     * @param array $stepParams
     *
     * @return null|StepResult
     */
    public function uninstall(array $stepParams = [])
    {
        return null;
    }
}