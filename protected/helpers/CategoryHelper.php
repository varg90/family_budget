<?php

class CategoryHelper {

    public static function categoriesArray() {
        $categories = Category::model()->findAll();
        $categoriesArray = [];
        foreach ($categories as $category) {
            $categoriesArray[] = $category->name;
        }
        return $categoriesArray;
    }

}
