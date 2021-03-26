<?php

namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Text类
 *
 * 该类是以 JSON 格式输出的具体文本组件类
 */

class Text extends BaseText
{
    /**
     * JSON 格式输出
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}