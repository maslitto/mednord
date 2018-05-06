<?php
namespace Admin\Http\Sections;
use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Navigation\Badge;
use SleepingOwl\Admin\Section;
/**
 * Class Pages
 *
 * @property \App\Model\Page $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Pages extends Section implements Initializable
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
    protected $title = 'Структура сайта';
    /**
     * @var string
     */
    protected $alias;
    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setIcon('fa fa-sitemap');
    }
    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::tree()->setOrderField('title')->setValue('title');
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
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return AdminForm::form()->setElements([
            AdminFormElement::image('image','Картинка'),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('metatitle', 'metatitle'),
            AdminFormElement::text('metakeywords', 'metakeywords'),
            AdminFormElement::text('metadescription', 'metadescription'),
            AdminFormElement::text('h1', 'h1'),
            AdminFormElement::text('slug','Slug'),
            AdminFormElement::wysiwyg('seotext','Seo текст'),
            // AdminFormElement::ckeditor('text', 'Text'),
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