<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    protected static $js = [
        '//cdn.ckeditor.com/4.21.0/full/ckeditor.js',

        '/js/ckeditor.config.js'
    ];

    protected $view = 'admin::form.ckeditor';

    public function render()
    {
         // I do this on document ready because of laravel-admin weird render/loading issue
        $this->script = "$(function () { CKEDITOR.replace('{$this->column}'); });";
        return parent::render();
    }
}
