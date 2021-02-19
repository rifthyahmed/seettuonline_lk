<?php

namespace App\Http\Controllers\Hype;

use Illuminate\Http\Request;
use URL;
use DB;
use Artisan;
use Schema;
use App\BusinessSetting;
use App\Language;
use App\Category;
use App\Brand;
use App\SubCategory;
use App\SubSubCategory;
use App\Attribute;
use App\ProductStock;
use App\Upload;
use App\Banner;
use App\User;
use App\CustomerPackage;
use App\CustomerProduct;
use App\FlashDeal;
use App\Product;
use App\Shop;
use App\Slider;
use App\HomeCategory;

class UpdateController extends Controller
{
    public function step0() {
        return view('update.step0');
    }

    public function step1() {
        if(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '3.5'){
            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '3.4'){
            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '3.3'){
            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '3.2'){
            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '3.1'){
            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '3.0'){
            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.9'){
            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.8'){
            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.7'){
            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.6'){
            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.5'){
            $sql_path = base_path('sqlupdates/v26.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.4'){
            $sql_path = base_path('sqlupdates/v25.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v26.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.3'){
            $sql_path = base_path('sqlupdates/v24.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v25.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v26.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.2'){
            $sql_path = base_path('sqlupdates/v23.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v24.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v25.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v26.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.1'){
            $sql_path = base_path('sqlupdates/v22.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v23.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v24.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v25.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v26.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        elseif(BusinessSetting::where('type', 'current_version')->first() != null && BusinessSetting::where('type', 'current_version')->first()->value == '2.0'){
            $sql_path = base_path('sqlupdates/v21.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v22.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v23.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v24.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v25.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v26.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v27.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v28.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v29.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v30.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v31.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v32.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v33.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v34.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v35.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v36.sql');
            DB::unprepared(file_get_contents($sql_path));

            return redirect()->route('step2');
        }
        else {
            Artisan::call('view:clear');
            Artisan::call('cache:clear');
            $previousRouteServiceProvier = base_path('app/Providers/RouteServiceProvider.php');
            $newRouteServiceProvier      = base_path('app/Providers/RouteServiceProvider.txt');
            copy($newRouteServiceProvier, $previousRouteServiceProvier);

            return view('update.done');
        }
    }

    public function step2() {
        $this->convertAssetsToUploader();

        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        $previousRouteServiceProvier = base_path('app/Providers/RouteServiceProvider.php');
        $newRouteServiceProvier      = base_path('app/Providers/RouteServiceProvider.txt');
        copy($newRouteServiceProvier, $previousRouteServiceProvier);

        return view('update.done');
    }

    public function convertAssetsToUploader(){
        $type = array(
            "jpg"=>"image",
            "jpeg"=>"image",
            "png"=>"image",
            "svg"=>"image",
            "webp"=>"image",
            "gif"=>"image",
            "mp4"=>"video",
            "mpg"=>"video",
            "mpeg"=>"video",
            "webm"=>"video",
            "ogg"=>"video",
            "avi"=>"video",
            "mov"=>"video",
            "flv"=>"video",
            "swf"=>"video",
            "mkv"=>"video",
            "wmv"=>"video",
            "wma"=>"audio",
            "aac"=>"audio",
            "wav"=>"audio",
            "mp3"=>"audio",
            "zip"=>"archive",
            "rar"=>"archive",
            "7z"=>"archive",
            "doc"=>"document",
            "txt"=>"document",
            "docx"=>"document",
            "pdf"=>"document",
            "csv"=>"document",
            "xml"=>"document",
            "ods"=>"document",
            "xlr"=>"document",
            "xls"=>"document",
            "xlsx"=>"document"
        );

        foreach (Banner::all() as $key => $banner) {
            if ($banner->photo != null) {
                $arr = explode('.', $banner->photo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $banner->photo, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $banner->photo = $upload->id;
                $banner->save();
            }
        }

        foreach (Brand::all() as $key => $brand) {
            if ($brand->logo != null) {
                $arr = explode('.', $brand->logo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $brand->logo, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $brand->logo = $upload->id;
                $brand->save();
            }
        }

        foreach (Category::all() as $key => $category) {
            if ($category->banner != null) {
                $arr = explode('.', $category->banner);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $category->banner, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $category->banner = $upload->id;
                $category->save();
            }
            if ($category->icon != null) {
                $arr = explode('.', $category->icon);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $category->icon, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $category->icon = $upload->id;
                $category->save();
            }
        }

        foreach (CustomerPackage::all() as $key => $package) {
            if ($package->logo != null) {
                $arr = explode('.', $package->logo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $package->logo, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $package->logo = $upload->id;
                $package->save();
            }
        }

        foreach (CustomerProduct::all() as $key => $product) {
            if ($product->photos != null) {
                $files = array();
                foreach (json_decode($product->photos) as $key => $photo) {
                    $arr = explode('.', $photo);
                    $upload = Upload::create([
                        'file_original_name' => null, 'file_name' => $photo, 'user_id' => $product->user_id, 'extension' => $arr[1],
                        'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                    ]);
                    array_push($files, $upload->id);
                }

                $product->photos = implode(',', $files);
                $product->save();
            }
            if ($product->thumbnail_img != null) {
                $arr = explode('.', $product->thumbnail_img);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $product->thumbnail_img, 'user_id' => $product->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $product->thumbnail_img = $upload->id;
                $product->save();
            }
            if ($product->meta_img != null) {
                $arr = explode('.', $product->meta_img);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $product->meta_img, 'user_id' => $product->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $product->meta_img = $upload->id;
                $product->save();
            }
        }

        foreach (FlashDeal::all() as $key => $flash_deal) {
            if ($flash_deal->banner != null) {
                $arr = explode('.', $flash_deal->banner);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $flash_deal->banner, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $flash_deal->banner = $upload->id;
                $flash_deal->save();
            }
        }

        foreach (Product::all() as $key => $product) {
            if ($product->photos != null) {
                $files = array();
                foreach (json_decode($product->photos) as $key => $photo) {
                    $arr = explode('.', $photo);
                    $upload = Upload::create([
                        'file_original_name' => null, 'file_name' => $photo, 'user_id' => $product->user_id, 'extension' => $arr[1],
                        'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                    ]);
                    array_push($files, $upload->id);
                }

                $product->photos = implode(',', $files);
                $product->save();
            }
            if ($product->thumbnail_img != null) {
                $arr = explode('.', $product->thumbnail_img);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $product->thumbnail_img, 'user_id' => $product->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $product->thumbnail_img = $upload->id;
                $product->save();
            }
            if ($product->featured_img != null) {
                $arr = explode('.', $product->featured_img);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $product->featured_img, 'user_id' => $product->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $product->featured_img = $upload->id;
                $product->save();
            }
            if ($product->flash_deal_img != null) {
                $arr = explode('.', $product->flash_deal_img);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $product->flash_deal_img, 'user_id' => $product->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $product->flash_deal_img = $upload->id;
                $product->save();
            }
            if ($product->meta_img != null) {
                $arr = explode('.', $product->meta_img);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $product->meta_img, 'user_id' => $product->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $product->meta_img = $upload->id;
                $product->save();
            }
        }

        foreach (Shop::all() as $key => $shop) {
            if ($shop->sliders != null) {
                $files = array();
                foreach (json_decode($shop->sliders) as $key => $photo) {
                    $arr = explode('.', $photo);
                    $upload = Upload::create([
                        'file_original_name' => null, 'file_name' => $photo, 'user_id' => $shop->user_id, 'extension' => $arr[1],
                        'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                    ]);
                    array_push($files, $upload->id);
                }

                $shop->sliders = implode(',', $files);
                $shop->save();
            }
            if ($shop->logo != null) {
                $arr = explode('.', $shop->logo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $shop->logo, 'user_id' => $shop->user_id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $shop->logo = $upload->id;
                $shop->save();
            }
        }

        foreach (Slider::all() as $key => $slider) {
            if ($slider->photo != null) {
                $arr = explode('.', $slider->photo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $slider->photo, 'user_id' => User::where('user_type', 'admin')->first()->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $slider->photo = $upload->id;
                $slider->save();
            }
        }

        foreach (User::all() as $key => $user) {
            if ($user->avatar_original != null) {
                $arr = explode('.', $user->avatar_original);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $user->avatar_original, 'user_id' => $user->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);

                $user->avatar_original = $upload->id;
                $user->save();
            }
        }

        $business_setting = BusinessSetting::where('type', 'home_slider_images')->first();
        $business_setting->value = json_encode(Slider::pluck('photo')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'home_slider_links')->first();
        $business_setting->value = json_encode(Slider::pluck('link')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'home_banner1_images')->first();
        $business_setting->value = json_encode(Banner::where('position', 1)->pluck('photo')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'home_banner1_links')->first();
        $business_setting->value = json_encode(Banner::where('position', 1)->pluck('url')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'home_banner2_images')->first();
        $business_setting->value = json_encode(Banner::where('position', 2)->pluck('photo')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'home_banner2_links')->first();
        $business_setting->value = json_encode(Banner::where('position', 2)->pluck('url')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'home_categories')->first();
        $business_setting->value = json_encode(HomeCategory::pluck('category_id')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'top10_categories')->first();
        $business_setting->value = json_encode(Category::where('top', 1)->pluck('id')->toArray());
        $business_setting->save();

        $business_setting = BusinessSetting::where('type', 'top10_brands')->first();
        $business_setting->value = json_encode(Brand::where('top', 1)->pluck('id')->toArray());
        $business_setting->save();
    }
}
