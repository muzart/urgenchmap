<?php
/**
 * Created by PhpStorm.
 * User: Муза
 * Date: 23.05.15
 * Time: 17:07
 */

class MapController extends Controller{

    public $layout = '//layouts/column1';

    public function actionIndex(){
        $this->render('index');
    }

    public function actionCats(){
        $categories = Category::model()->findAll();
        $cats = [];
        foreach($categories as $cat){
            $cats[] = [
                'id'=>$cat->id,
                'name'=>$cat->name,
            ];
        }
        echo CJSON::encode($cats);
    }

    public function actionAllPlaces(){
        $places = Place::model()->with('category')->findAll();
        $result = [];
        foreach($places as $place){
            $result[] = [
                'name'=>$place->name,
                'longitude'=>$place->longitude,
                'latitude'=>$place->latitude,
                'description'=>$place->description,
                'category_id'=>$place->category_id,
                'category'=>$place->category->name,
                'icon'=>$place->category->icon,
            ];
        }
//        var_dump($result);
        echo CJSON::encode($result);
    }

    public function actionByCategory($id){
        $category = Category::model()->findByPk($id);
        $places = $category->places;
        $result = [];
        foreach($places as $place){
            $result[] = [
                'name'=>$place->name,
                'longitude'=>$place->longitude,
                'latitude'=>$place->latitude,
                'description'=>$place->description,
                'category_id'=>$category->id,
                'category'=>$category->name,
                'icon'=>$category->icon,
            ];
        }
        echo CJSON::encode($result);
    }

    public function actionByName($name){
        $places = Place::model()->with('category')->findAll("t.name LIKE '%$name%'");
        $result = [];
        foreach($places as $place){
            $result[] = [
                'name'=>$place->name,
                'longitude'=>$place->longitude,
                'latitude'=>$place->latitude,
                'description'=>$place->description,
                'category_id'=>$place->category_id,
                'category'=>$place->category->name,
                'icon'=>$place->category->icon,
            ];
        }
        echo CJSON::encode($result);
    }
} 