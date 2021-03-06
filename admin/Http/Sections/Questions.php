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
 * @property \App\Model\Question $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Questions extends Section implements Initializable
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
    protected $title = 'Запросы';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-question');
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
            AdminColumn::datetime('created_at', 'Создан'),
            AdminColumn::text('phone', 'Телефон'),
            AdminColumn::text('title', 'Наименование товара'),
            AdminColumn::text('name', 'Имя'),
            AdminColumn::text('company', 'Компания'),
            AdminColumn::text('email', 'E-mail'),
            AdminColumn::text('message', 'Сообщение'),
        ])->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    /*public function onEdit($id)
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::text('title', 'Наименование')->required(),

        ]);
    }

    /**
     * @return FormInterface
     */
    /*public function onCreate()
    {
        return $this->onEdit(null);
    }*/
}
