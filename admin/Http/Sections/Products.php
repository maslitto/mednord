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
use Request;

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
    	$leaves = \App\Model\Page::where('parent_id', 2)->first()->getLeaves();
    	foreach($leaves as $leaf){
    		$options[$leaf->id] = $leaf->title;
    	}
        $select = AdminFormElement::select('category_id')->setLabel('Категория')
            //->setModelForOptions(\App\Model\Page::class)
        	->setOptions($options)
            ->setHtmlAttribute('placeholder', 'Категория')
            ->setDisplay('title');
        $param = AdminFormElement::custom(function ($model) {
            //$model->title = 'params';
        })->setDisplay(function ($model) {
            return view('includes.param', [
                'model' => $model
            ]);
        });
        $param->setCallback(function($model){
            $model->params = Request::post('params');
            //$model->params = $model->params;
        });
        return AdminForm::panel()->addBody([
            AdminFormElement::images('images', 'Картинки'),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('article', 'Артикул'),
            //AdminFormElement::text('params', 'params'),
            $param,
            AdminFormElement::ckeditor('text', 'Текст описания'),
            $select,
            AdminFormElement::select('vendor_id')->setLabel('Производитель')
                ->setModelForOptions(\App\Model\Vendor::class)
                ->setHtmlAttribute('placeholder', 'Производитель')
                ->nullable()
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
