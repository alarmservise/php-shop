<?php


namespace app\widgets;

use app\models\Categiory;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public $data;

    public function run()
    {
       $this->data = new Categiory();
       $this->data = $this->data->getGategories();
       $this->data = $this->categoryToTemplate($this->data);
       return $this->data;
    }

    public function categoryToTemplate($data) {
        ob_start();
        include __DIR__.'/template/menu.php';
        return ob_get_clean();
    }
}