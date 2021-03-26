<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Text类
 *
 * 该类是以 HTML 格式输出的具体图片组件类
 */

class Text extends BaseText
{
    /**
     * Html 格式输出
     *
     * @return string
     */
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}