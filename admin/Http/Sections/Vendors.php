<?php

namespace Admin\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;

use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Contracts\Initializable;


/**
 * Class Posts
 *
 * @property \App\Model\Post $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Vendors extends Section implements Initializable
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
    protected $title = 'Производители';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-wrench');
    }

    /**
     * Переопределение метода для запрета удаления записи
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return bool
     */
    public function isDeletable(\Illuminate\Database\Eloquent\Model $model)
    {
        return true;
    }
    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
            AdminColumn::image('image', 'Лого'),
            AdminColumn::link('title', 'Наименование'),
        ])->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::image('image', 'Логотип')->required(),
            AdminFormElement::text('title', 'Наименование')->required(),
            AdminFormElement::ckeditor('introtext', 'Интро-текст')->required(),
            AdminFormElement::ckeditor('text', 'Текст описания')->required(),

            AdminFormElement::text('metatitle', 'metatitle'),
            AdminFormElement::text('metakeywords', 'metakeywords'),
            AdminFormElement::text('metadescription', 'metadescription'),
            AdminFormElement::text('h1', 'h1'),
            AdminFormElement::text('slug','Slug'),
        ]);
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }
}
