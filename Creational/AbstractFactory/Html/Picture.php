<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Picture as BasePicture;

/**
 * Picture类
 *
 * 该类是以 HTML 格式输出的具体图片组件类
 */

class Picture extends BasePicture
{
    /**
     * Html 格式输出
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}