<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * HtmlFactory类
 *
 * HtmlFactory 是用于创建 HTML 组件的工厂
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * 创建文本组件
     * @param $content
     * @return Html\Text
     */
    public function createText($content)
    {
        return new Html\Text($content);
    }


    /**
     * 创建图片组件
     * @param string $path
     * @param string $name
     * @return Html\Picture
     */
    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }
}