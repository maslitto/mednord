<?php
/**
 * Created by PhpStorm.
 * User: veteran
 * Date: 06.05.18
 * Time: 17:33
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Method to upload and save images
     * @param Request $request
     * @return string
     */
    public function storeAdmin(Request $request)
    {
        //Your upload logic
        $photoName = uniqid().'.'.$request->upload->getClientOriginalExtension();


        $request->upload->move(public_path('images/uploads_admin'), $photoName);
        $result = ['url' => '/images/uploads_admin/'.$photoName, 'value' => public_path('images/uploads_admin/'). $photoName];

        if ($request->CKEditorFuncNum && $request->CKEditor && $request->langCode) {
            //that handler to upload image CKEditor from Dialog
            $funcNum = $request->CKEditorFuncNum;
            $CKEditor = $request->CKEditor;
            $langCode = $request->langCode;
            $token = $request->ckCsrfToken;
            return view('helper.ckeditor.upload_file', compact('result', 'funcNum', 'CKEditor', 'langCode', 'token'));
        }

        return response()->json($result);
    }
}