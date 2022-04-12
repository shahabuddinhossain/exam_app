<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product;
    private static $products;
    private static $message;

    /*Properties for getImageUrl*/
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    /*function for getImage url*/
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();

        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        self::$product->image = self::getImageUrl($request);
        self::$product->save();
    }


    public static function updateProductStatus($id)
    {
        self::$product = Product::find($id);
        if(self::$product->status == 0 )
        {
            self::$product->status =1;
            self::$message = 'Product info active Successfully';
        }
        else{
            self::$product->status =0;
            self::$message = 'Product info active Successfully';
        }
        self::$product->save();
        return self::$message;
    }
}
