<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Contracts\Initializable;


/**
 * Class News
 *
 * @property \App\Model\News $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class News extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Новости';

    /**
     * @var string
     */
    protected $alias;


    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-newspaper-o');
    }

    /**
     * @return DisplayInterface
     */

    public function onDisplay()
    {
        return AdminDisplay::table()->setApply(function($query) {
                $query->orderBy('created_at', 'desc');
            })->setColumns([
                AdminColumn::link('title', 'Заголовок'),
                AdminColumn::datetime('created_at', 'Дата публикации')->setFormat('d.m.Y')->setWidth('150px'),
                //AdminColumnEditable::checkbox('published', 'Published'),
            ])->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $form = AdminForm::form()->setElements([
            AdminFormElement::image('image', 'Картинка')->required(),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::wysiwyg('text', 'Текст новости'),

            AdminFormElement::text('metatitle', 'metatitle'),
            AdminFormElement::text('metakeywords', 'metakeywords'),
            AdminFormElement::text('metadescription', 'metadescription'),
            AdminFormElement::text('h1', 'h1'),
            AdminFormElement::hidden('slug'),
        ]);
        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }
}
