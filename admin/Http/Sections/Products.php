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
class Products extends Section implements Initializable
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
    protected $title = 'Товары';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-shopping-cart');
    }


    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->setColumns([
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
        $select = AdminFormElement::select('category_id')->setLabel('Категория')
            ->setModelForOptions(\App\Model\Page::class)
            ->setHtmlAttribute('placeholder', 'Категория')
            ->setDisplay('title');
        $select->setLoadOptionsQueryPreparer(function($select, $query) {
            return $query
                ->where('parent_id', 2);
        });
        return AdminForm::panel()->addBody([
            AdminFormElement::images('images', 'Картинки'),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('article', 'Артикул'),
            AdminFormElement::ckeditor('text', 'Текст описания'),
            $select,
            AdminFormElement::select('vendor_id')->setLabel('Производитель')
                ->setModelForOptions(\App\Model\Vendor::class)
                ->setHtmlAttribute('placeholder', 'Производитель')
                ->setDisplay('title'),
                //->required(),

            AdminFormElement::checkbox('hit', 'Hit'),
            AdminFormElement::checkbox('new', 'New'),
            AdminFormElement::checkbox('discount', 'Скидка'),

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
