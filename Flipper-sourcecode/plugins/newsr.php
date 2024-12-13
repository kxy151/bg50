<?php
App::uses('Plugin', 'Core');

/**
 * 新闻插件主文件
 * 处理新闻相关功能
 */
class NewsrPlugin extends Plugin {
    /**
     * 插件初始化
     * @return void
     */
    public function initialize() {
        // 加载必要的组件
        $this->loadComponents();
    }

    /**
     * 加载插件组件
     * @return void
     */
    private function loadComponents() {
        // 加载新闻处理组件
        App::uses('NewsComponent', 'News.Component');
    }
}
